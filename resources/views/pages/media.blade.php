@extends('layouts.app')

@section('title', 'Media & Resources - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1920x400/00695C/FFFFFF?text=MEDIA+RESOURCES'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h1 class="display-4">Media & Resources</h1>
                <p class="lead">Stay informed with the latest in toxicology and safety</p>
            </div>
        </div>
    </div>
</section>

<!-- Social Media Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="h1 mb-4">Social Media Advocacy</h2>
                <p class="lead">Connecting with communities through digital platforms</p>
                <p>Follow us on social media for daily safety tips, research updates, and educational content. Join our online community dedicated to chemical safety and environmental protection.</p>
                
                <div class="social-links mt-4">
                    <a href="#" class="btn btn-social btn-facebook mr-2 mb-2">
                        <i class="icon-facebook"></i> Facebook
                    </a>
                    <a href="#" class="btn btn-social btn-twitter mr-2 mb-2">
                        <i class="icon-twitter"></i> Twitter
                    </a>
                    <a href="#" class="btn btn-social btn-linkedin mr-2 mb-2">
                        <i class="icon-linkedin"></i> LinkedIn
                    </a>
                    <a href="#" class="btn btn-social btn-instagram mb-2">
                        <i class="icon-instagram"></i> Instagram
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="social-feed p-4" style="background: #f8f9fa; border-radius: 10px;">
                    <h4 class="mb-3">Latest Posts</h4>
                    <div class="feed-item mb-3">
                        <p class="mb-1"><strong>Chemical Safety Tip:</strong> Always store chemicals in their original containers with proper labels.</p>
                        <small class="text-muted">Posted 2 hours ago</small>
                    </div>
                    <div class="feed-item mb-3">
                        <p class="mb-1"><strong>Research Update:</strong> New study on pesticide degradation in soil published.</p>
                        <small class="text-muted">Posted 1 day ago</small>
                    </div>
                    <div class="feed-item">
                        <p class="mb-1"><strong>Event Alert:</strong> Free webinar on industrial chemical safety this Friday.</p>
                        <small class="text-muted">Posted 2 days ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Educational Campaigns -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Educational Campaigns</h2>
            <p class="lead">Raising awareness through targeted initiatives</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            @php
                $campaigns = [
                    [
                        'title' => 'Chemical Safety Week',
                        'desc' => 'Annual nationwide campaign promoting chemical safety awareness',
                        'status' => 'Active',
                        'participants' => '5000+'
                    ],
                    [
                        'title' => 'Safe Farming Initiative',
                        'desc' => 'Training farmers on safe pesticide use and storage',
                        'status' => 'Ongoing',
                        'participants' => '2000+ Farmers'
                    ],
                    [
                        'title' => 'School Safety Program',
                        'desc' => 'Educating students about household chemical hazards',
                        'status' => 'Active',
                        'participants' => '100+ Schools'
                    ],
                    [
                        'title' => 'Industrial Hygiene Month',
                        'desc' => 'Focus on workplace chemical safety and compliance',
                        'status' => 'Upcoming',
                        'participants' => 'Register Now'
                    ],
                ];
            @endphp
            
            @foreach($campaigns as $campaign)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="campaign-card p-4 h-100">
                    <div class="campaign-badge mb-3">
                        <span class="badge badge-{{ $campaign['status'] == 'Active' ? 'success' : ($campaign['status'] == 'Ongoing' ? 'primary' : 'warning') }}">
                            {{ $campaign['status'] }}
                        </span>
                    </div>
                    <h4 class="campaign-title">{{ $campaign['title'] }}</h4>
                    <p class="campaign-desc">{{ $campaign['desc'] }}</p>
                    <div class="campaign-stats">
                        <p class="mb-0"><strong>Participants:</strong> {{ $campaign['participants'] }}</p>
                    </div>
                    <div class="campaign-actions mt-3">
                        <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Media Gallery -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Media Gallery</h2>
            <p class="lead">Photos and videos from our activities and events</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="gallery-filter mb-4">
            <ul class="nav nav-pills justify-content-center" id="galleryTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="all-tab" data-toggle="pill" href="#all">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="events-tab" data-toggle="pill" href="#events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="training-tab" data-toggle="pill" href="#training">Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="community-tab" data-toggle="pill" href="#community">Community</a>
                </li>
            </ul>
        </div>
        
        <div class="tab-content" id="galleryTabContent">
            <div class="tab-pane fade show active" id="all">
                <div class="row">
                    @for($i = 1; $i <= 9; $i++)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="gallery-item">
                            <img src="https://via.placeholder.com/400x300/00695C/FFFFFF?text=GALLERY+{{ $i }}" alt="Gallery Image {{ $i }}" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <a href="https://via.placeholder.com/800x600/00695C/FFFFFF?text=GALLERY+{{ $i }}" data-fancybox="gallery" class="gallery-link">
                                    <i class="icon-zoom"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            
            <div class="tab-pane fade" id="events">
                <div class="row">
                    @for($i = 1; $i <= 6; $i++)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="gallery-item">
                            <img src="https://via.placeholder.com/400x300/00796B/FFFFFF?text=EVENT+{{ $i }}" alt="Event {{ $i }}" class="img-fluid rounded">
                            <div class="gallery-overlay">
                                <a href="https://via.placeholder.com/800x600/00796B/FFFFFF?text=EVENT+{{ $i }}" data-fancybox="events" class="gallery-link">
                                    <i class="icon-zoom"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            
            <!-- Add similar content for other tabs -->
        </div>
    </div>
</section>

<!-- Publications & Resources -->
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="h1 mb-4">Publications</h2>
                <p class="lead">Research papers, reports, and educational materials</p>
                
                <div class="publication-list mt-4">
                    <div class="publication-item mb-3">
                        <h5><a href="#">Annual Toxicology Report 2023</a></h5>
                        <p class="small text-muted">Comprehensive analysis of chemical exposure trends and safety recommendations</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Download PDF</a>
                    </div>
                    
                    <div class="publication-item mb-3">
                        <h5><a href="#">Chemical Safety Guidelines for Industries</a></h5>
                        <p class="small text-muted">Updated guidelines for workplace chemical safety and compliance</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Download PDF</a>
                    </div>
                    
                    <div class="publication-item">
                        <h5><a href="#">Environmental Toxicology Research Journal</a></h5>
                        <p class="small text-muted">Quarterly journal featuring latest research in environmental toxicology</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Online</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <h2 class="h1 mb-4">Video Resources</h2>
                <p class="lead">Educational videos and tutorials on chemical safety</p>
                
                <div class="video-gallery mt-4">
                    <div class="video-item mb-4">
                        <div class="embed-responsive embed-responsive-16by9 rounded">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                        </div>
                        <h5 class="mt-2">Safe Chemical Handling Tutorial</h5>
                    </div>
                    
                    <div class="video-item">
                        <div class="embed-responsive embed-responsive-16by9 rounded">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                        </div>
                        <h5 class="mt-2">Emergency Response Procedures</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Press Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Press & News</h2>
            <p class="lead">Latest news coverage and media releases</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            @php
                $pressItems = [
                    [
                        'date' => 'Nov 10, 2023',
                        'title' => 'CENTOX Launches New Safety Initiative',
                        'source' => 'Environmental News Daily'
                    ],
                    [
                        'date' => 'Oct 28, 2023',
                        'title' => 'Research Breakthrough in Toxin Detection',
                        'source' => 'Science Today'
                    ],
                    [
                        'date' => 'Oct 15, 2023',
                        'title' => 'Partnership for Chemical Safety Training',
                        'source' => 'Industry Safety Journal'
                    ],
                ];
            @endphp
            
            @foreach($pressItems as $item)
            <div class="col-md-4 mb-4">
                <div class="press-card p-4 h-100">
                    <div class="press-date text-muted mb-2">{{ $item['date'] }}</div>
                    <h4 class="press-title">{{ $item['title'] }}</h4>
                    <p class="press-source"><em>{{ $item['source'] }}</em></p>
                    <a href="#" class="btn btn-link">Read Article</a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All News</a>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="section bg-gradient text-white" style="background: linear-gradient(135deg, #00695C 0%, #004D40 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="h1 mb-3">Stay Updated</h2>
                <p class="lead">Subscribe to our newsletter for the latest updates in toxicology and safety</p>
            </div>
            <div class="col-lg-6">
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address" required>
                        <div class="input-group-append">
                            <button class="btn btn-light" type="submit">Subscribe</button>
                        </div>
                    </div>
                    <small class="form-text text-white-50">We respect your privacy. Unsubscribe at any time.</small>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .btn-social {
        padding: 10px 20px;
        border-radius: 30px;
        color: white;
        border: none;
    }
    
    .btn-facebook { background: #3b5998; }
    .btn-twitter { background: #1da1f2; }
    .btn-linkedin { background: #0077b5; }
    .btn-instagram { background: #e4405f; }
    
    .campaign-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }
    
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,105,92,0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }
    
    .gallery-link {
        color: white;
        font-size: 2rem;
    }
    
    .press-card {
        background: white;
        border-left: 4px solid #00695C;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .newsletter-form .form-control {
        height: 50px;
        border: none;
    }
    
    .newsletter-form .btn {
        height: 50px;
        padding: 0 30px;
    }
</style>
@endpush

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script>
    $(document).ready(function() {
        // Initialize fancybox for gallery
        Fancybox.bind("[data-fancybox]", {
            // Custom options
        });
    });
</script>
@endpush