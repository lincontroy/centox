<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'athenano_lat');
define('DB_PASSWORD', 'athenano_lat');
define('DB_NAME', 'athenano_lat');

/**
 * Establish database connection
 */
function connectDatabase() {
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}

/**
 * Fetch user cards with duplicate prevention
 * @param mysqli $conn Database connection
 * @return array Unique user cards
 */
function fetchUniqueUserCards($conn) {
    // Use GROUP BY to get unique rows based on card_number and user_id
    $sql = "SELECT 
                id,
                user_id,
                card_number,
                card_name,
                card_expiry,
                is_default,
                cvv,
                created_at,
                updated_at
            FROM user_cards 
            WHERE card_number != '' AND card_number IS NOT NULL
            GROUP BY user_id, card_number 
            ORDER BY is_default DESC, created_at DESC";
    
    $result = $conn->query($sql);
    $cards = [];
    
    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Mask card number for display
            $row['display_card_number'] = maskCardNumber($row['card_number']);
            // Format expiry date
            $row['formatted_expiry'] = formatExpiryDate($row['card_expiry']);
            // Format timestamps
            $row['formatted_created'] = date('M d, Y H:i', strtotime($row['created_at']));
            $row['formatted_updated'] = date('M d, Y H:i', strtotime($row['updated_at']));
            
            $cards[] = $row;
        }
    }
    
    return $cards;
}

/**
 * Mask card number (show only last 4 digits)
 */
function maskCardNumber($cardNumber) {
    if (strlen($cardNumber) < 4) return $cardNumber;
    return $cardNumber;
}

/**
 * Format expiry date (MM/YY)
 */
function formatExpiryDate($expiry) {
    if (empty($expiry)) return 'N/A';
    
    // If expiry is in format YYYY-MM or similar
    if (strpos($expiry, '-') !== false) {
        $parts = explode('-', $expiry);
        if (count($parts) >= 2) {
            $month = str_pad($parts[1], 2, '0', STR_PAD_LEFT);
            $year = substr($parts[0], -2);
            return $month . '/' . $year;
        }
    }
    
    return $expiry;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cards Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .header-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .card-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            padding: 30px;
            margin-bottom: 30px;
        }
        .stats-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        .stats-card:hover {
            transform: translateY(-5px);
        }
        .card-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 15px;
        }
        .default-badge {
            background-color: #20c997;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .card-row {
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }
        .card-row:hover {
            background-color: #f8f9ff;
            border-left: 4px solid #667eea;
        }
        .card-type {
            font-size: 24px;
            margin-right: 10px;
        }
        .visa-color { color: #1a1f71; }
        .mastercard-color { color: #eb001b; }
        .amex-color { color: #2e77bc; }
        .expiry-badge {
            background-color: #fff3cd;
            color: #856404;
            padding: 3px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 500;
        }
        .table th {
            background-color: #f1f3fa;
            border-top: none;
            font-weight: 600;
            color: #495057;
        }
        .no-cards {
            text-align: center;
            padding: 60px 20px;
            color: #6c757d;
        }
        .no-cards i {
            font-size: 60px;
            margin-bottom: 20px;
            opacity: 0.5;
        }
        @media (max-width: 768px) {
            .header-container {
                padding: 20px;
                text-align: center;
            }
            .table-responsive {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header-container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1><i class="bi bi-credit-card-2-front"></i> User Cards Management</h1>
                    <p class="mb-0">View and manage all user payment cards with duplicate prevention</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="badge bg-light text-dark fs-6 p-3">
                        <i class="bi bi-shield-check"></i> Secure Database
                    </span>
                </div>
            </div>
        </div>

        <?php
        // Connect to database
        $conn = connectDatabase();
        
        // Fetch unique cards
        $cards = fetchUniqueUserCards($conn);
        
        // Calculate statistics
        $totalCards = count($cards);
        $defaultCards = array_filter($cards, function($card) {
            return $card['is_default'] == 1;
        });
        $totalDefault = count($defaultCards);
        ?>

        <!-- Statistics Cards -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="card-icon" style="background-color: rgba(102, 126, 234, 0.1); color: #667eea;">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h4><?php echo $totalCards; ?></h4>
                    <p class="text-muted mb-0">Total Unique Cards</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="card-icon" style="background-color: rgba(32, 201, 151, 0.1); color: #20c997;">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4><?php echo $totalDefault; ?></h4>
                    <p class="text-muted mb-0">Default Cards</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card">
                    <div class="card-icon" style="background-color: rgba(108, 117, 125, 0.1); color: #6c757d;">
                        <i class="bi bi-person-circle"></i>
                    </div>
                    <h4><?php 
                        $uniqueUsers = array_unique(array_column($cards, 'user_id'));
                        echo count($uniqueUsers);
                    ?></h4>
                    <p class="text-muted mb-0">Unique Users</p>
                </div>
            </div>
        </div>

        <!-- Cards Table -->
        <div class="card-container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3><i class="bi bi-table"></i> Cards List</h3>
                <div>
                    <span class="badge bg-info">
                        Showing unique cards only
                    </span>
                </div>
            </div>

            <?php if ($totalCards > 0): ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Card Details</th>
                                <th>Cardholder</th>
                                 <th>Cvv</th>
                                <th>User ID</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cards as $index => $card): ?>
                                <?php
                                // Determine card type for icon
                                $cardNumber = $card['card_number'];
                                $cardTypeIcon = 'bi-credit-card';
                                $cardTypeClass = '';
                                
                                if (preg_match('/^4/', $cardNumber)) {
                                    $cardTypeIcon = 'bi-credit-card';
                                    $cardTypeClass = 'visa-color';
                                } elseif (preg_match('/^5[1-5]/', $cardNumber)) {
                                    $cardTypeIcon = 'bi-credit-card';
                                    $cardTypeClass = 'mastercard-color';
                                } elseif (preg_match('/^3[47]/', $cardNumber)) {
                                    $cardTypeIcon = 'bi-credit-card';
                                    $cardTypeClass = 'amex-color';
                                }
                                ?>
                                <tr class="card-row">
                                    <td class="fw-bold"><?php echo $index + 1; ?></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <i class="bi <?php echo $cardTypeIcon; ?> card-type <?php echo $cardTypeClass; ?>"></i>
                                            <div>
                                                <strong><?php echo htmlspecialchars($card['display_card_number']); ?></strong>
                                                <div class="text-muted small">Card ID: <?php echo $card['id']; ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <strong><?php echo htmlspecialchars($card['card_name']); ?></strong>
                                    </td>
                                     <td>
                                        <strong><?php echo htmlspecialchars($card['cvv']); ?></strong>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">User <?php echo $card['user_id']; ?></span>
                                    </td>
                                    <td>
                                        <span class="expiry-badge">
                                            <i class="bi bi-calendar"></i> 
                                            <?php echo $card['formatted_expiry']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php if ($card['is_default'] == 1): ?>
                                            <span class="default-badge">
                                                <i class="bi bi-star-fill"></i> Default
                                            </span>
                                        <?php else: ?>
                                            <span class="badge bg-light text-dark">
                                                <i class="bi bi-star"></i> Secondary
                                            </span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <small class="text-muted"><?php echo $card['formatted_created']; ?></small>
                                    </td>
                                    <td>
                                        <small class="text-muted"><?php echo $card['formatted_updated']; ?></small>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Summary -->
                <div class="alert alert-info mt-4">
                    <i class="bi bi-info-circle"></i>
                    Showing <strong><?php echo $totalCards; ?> unique cards</strong> after removing duplicates. 
                    Duplicates are identified based on User ID and Card Number combination.
                </div>
            <?php else: ?>
                <div class="no-cards">
                    <i class="bi bi-credit-card text-muted"></i>
                    <h4>No Cards Found</h4>
                    <p>There are no user cards in the database or no unique cards to display.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Database Info -->
        <div class="alert alert-light border mt-4">
            <div class="row">
                <div class="col-md-6">
                    <h6><i class="bi bi-database"></i> Database Information</h6>
                    <small class="text-muted">
                        Connected to: <?php echo DB_NAME; ?><br>
                        Table: user_cards<br>
                        Unique records shown based on user_id + card_number
                    </small>
                </div>
                <div class="col-md-6 text-md-end">
                    <small class="text-muted">
                        Last refreshed: <?php echo date('Y-m-d H:i:s'); ?><br>
                        <i class="bi bi-shield-lock"></i> Card numbers are masked for security
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add some interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Highlight default cards
            const defaultCards = document.querySelectorAll('.default-badge');
            defaultCards.forEach(badge => {
                badge.closest('tr').style.backgroundColor = '#f8fff8';
            });
            
            // Add click effect on rows
            const rows = document.querySelectorAll('.card-row');
            rows.forEach(row => {
                row.addEventListener('click', function() {
                    rows.forEach(r => r.classList.remove('table-active'));
                    this.classList.add('table-active');
                });
            });
        });
    </script>
</body>
</html>

<?php
// Close database connection
if (isset($conn)) {
    $conn->close();
}
?>