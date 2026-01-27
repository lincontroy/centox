@extends('layouts.app')

@section('title', 'Our Products - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('h13.png'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h1 class="display-4">Our Products</h1>
                <p class="lead">Premium quality toxicology products for safety, testing, and protection</p>
            </div>
        </div>
    </div>
</section>

<!-- Products Navigation -->
<section class="section pt-0">
    <div class="container">
        <div class="products-nav">
            <ul class="nav nav-pills nav-pills--noborder justify-content-center" id="productsTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="medical-tab" data-toggle="pill" href="#medical" role="tab">
                        <i class="icon icon-medical-kit mr-2"></i>Medical Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chemicals-tab" data-toggle="pill" href="#chemicals" role="tab">
                        <i class="icon icon-chemistry mr-2"></i>Chemicals
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="antidotes-tab" data-toggle="pill" href="#antidotes" role="tab">
                        <i class="icon icon-first-aid mr-2"></i>Antidotes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ppe-tab" data-toggle="pill" href="#ppe" role="tab">
                        <i class="icon icon-safety-glasses mr-2"></i>PPE Equipment
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Products Content -->
<section class="section">
    <div class="container">
        <div class="tab-content" id="productsTabContent">
            
            <!-- Medical Products Tab -->
            <div class="tab-pane fade show active" id="medical" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Medical Products & Gadgets</h2>
                        <p class="lead">Advanced diagnostic and testing solutions for healthcare and safety</p>
                        <p>We provide a comprehensive range of non-pharmaceutical medical products, diagnostic kits, and testing equipment designed for accuracy, reliability, and ease of use.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="h13.png" alt="Medical Products" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary">Drug Testing Kits</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Rapid Drug Screening Kits</h6>
                                    <p class="mb-1">Multi-panel drug tests for urine, saliva, and blood samples</p>
                                    <small class="text-muted">Detects: Opioids, Cocaine, Cannabis, Amphetamines, Benzodiazepines</small>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Workplace Drug Testing Kits</h6>
                                    <p class="mb-1">DOT-compliant testing solutions for employee screening</p>
                                    <small class="text-muted">Includes collection cups, adulteration tests, temperature strips</small>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Home Drug Test Kits</h6>
                                    <p class="mb-1">Easy-to-use kits for personal monitoring and family safety</p>
                                    <small class="text-muted">Clear instructions, quick results, privacy assured</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary">Toxin Detection Kits</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Aflatoxin Detection Kits</h6>
                                    <p class="mb-1">ELISA-based kits for food and feed testing</p>
                                    <small class="text-muted">Detects B1, B2, G1, G2 aflatoxins in grains, nuts, spices</small>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Mycotoxin Test Kits</h6>
                                    <p class="mb-1">Comprehensive kits for various mycotoxin detection</p>
                                    <small class="text-muted">Ochratoxin, Fumonisin, Zearalenone, DON detection</small>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Heavy Metal Test Kits</h6>
                                    <p class="mb-1">Rapid detection for lead, mercury, arsenic, cadmium</p>
                                    <small class="text-muted">Water, soil, food sample testing capabilities</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary">Diagnostic Equipment</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Portable Analyzers</h6>
                                    <p>Handheld devices for field analysis and point-of-care testing</p>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Spectrophotometers</h6>
                                    <p>UV-Vis spectrophotometers for laboratory analysis</p>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Chromatography Systems</h6>
                                    <p>HPLC and GC systems for advanced toxin analysis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary">Medical Gadgets</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Digital Monitoring Devices</h6>
                                    <p>Blood pressure monitors, glucometers, pulse oximeters</p>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Emergency Response Kits</h6>
                                    <p>Poison control kits, chemical exposure first aid kits</p>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Lab Safety Equipment</h6>
                                    <p>Biological safety cabinets, fume hoods, autoclaves</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Chemicals Tab -->
            <div class="tab-pane fade" id="chemicals" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Chemicals & Reagents</h2>
                        <p class="lead">High-purity chemicals for industrial, educational, and household applications</p>
                        <p>We supply a wide range of laboratory chemicals, industrial solvents, and specialized reagents with guaranteed purity and quality assurance.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="h16.png" alt="Chemicals" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary"><i class="icon icon-industry mr-2"></i> Industrial Chemicals</h4>
                            <div class="product-list">
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Solvents & Cleaners</h6>
                                    <p>Acetone, Ethanol, Methanol, Isopropyl alcohol, Industrial cleaners</p>
                                </div>
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Acids & Bases</h6>
                                    <p>Sulfuric acid, Hydrochloric acid, Nitric acid, Sodium hydroxide, Ammonia</p>
                                </div>
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Industrial Catalysts</h6>
                                    <p>Metal catalysts, Enzyme catalysts, Polymerization catalysts</p>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Process Chemicals</h6>
                                    <p>Water treatment chemicals, Textile chemicals, Paint & coating chemicals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary"><i class="icon icon-school mr-2"></i> School & Laboratory Chemicals</h4>
                            <div class="product-list">
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Educational Chemistry Sets</h6>
                                    <p>Complete lab kits for schools, colleges, and training institutions</p>
                                </div>
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Analytical Grade Reagents</h6>
                                    <p>ACS grade, HPLC grade, Spectroscopic grade chemicals</p>
                                </div>
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Buffer Solutions</h6>
                                    <p>pH buffers, Standard solutions, Calibration standards</p>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Microbiology Media</h6>
                                    <p>Agar plates, Culture media, Selective media, Enrichment broths</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary"><i class="icon icon-home mr-2"></i> Household Chemicals</h4>
                            <div class="product-list">
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Cleaning & Sanitization</h6>
                                    <p>Disinfectants, Bleaches, Detergents, All-purpose cleaners</p>
                                </div>
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Pest Control Products</h6>
                                    <p>Insecticides, Rodenticides, Fungicides, Herbicides (safe household grades)</p>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Maintenance Chemicals</h6>
                                    <p>Drain cleaners, Rust removers, Water softeners, Pool chemicals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-primary"><i class="icon icon-lab mr-2"></i> Laboratory Reagents</h4>
                            <div class="product-list">
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Clinical Chemistry Reagents</h6>
                                    <p>Enzyme reagents, Substrates, Co-factors, Diagnostic reagents</p>
                                </div>
                                <div class="product-item mb-2">
                                    <h6 class="font-weight-bold">Molecular Biology Reagents</h6>
                                    <p>PCR reagents, Restriction enzymes, DNA/RNA extraction kits</p>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Toxicology Testing Reagents</h6>
                                    <p>ELISA reagents, Chromatography standards, Quality controls</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Antidotes Tab -->
            <div class="tab-pane fade" id="antidotes" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Antidotes & Emergency Treatments</h2>
                        <p class="lead">Life-saving antidotes for poisoning emergencies and toxic exposures</p>
                        <p>We supply essential antidotes and emergency treatments for hospitals, clinics, poison control centers, and industrial facilities.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="h17.png" alt="Antidotes" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-danger"><i class="icon icon-pills mr-2"></i> Pharmaceutical Antidotes</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Naloxone HCl</h6>
                                    <p class="mb-1">Opioid overdose reversal agent</p>
                                    <small class="text-muted">Available in injectable and nasal spray formulations</small>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Atropine Sulfate</h6>
                                    <p class="mb-1">Organophosphate and carbamate poisoning</p>
                                    <small class="text-muted">Auto-injectors and ampoules available</small>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Flumazenil</h6>
                                    <p class="mb-1">Benzodiazepine overdose reversal</p>
                                    <small class="text-muted">Injectable formulation for emergency use</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-danger"><i class="icon icon-chemical-burn mr-2"></i> Chemical Exposure Antidotes</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Dimercaprol (BAL)</h6>
                                    <p class="mb-1">Heavy metal poisoning (arsenic, mercury, lead)</p>
                                    <small class="text-muted">Oil-based injectable preparation</small>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Sodium Thiosulfate</h6>
                                    <p class="mb-1">Cyanide and cisplatin poisoning</p>
                                    <small class="text-muted">IV infusion and topical formulations</small>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Methylene Blue</h6>
                                    <p class="mb-1">Methemoglobinemia treatment</p>
                                    <small class="text-muted">For drug-induced and chemical-induced conditions</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-danger"><i class="icon icon-snake mr-2"></i> Biological Toxin Antidotes</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Snake Antivenom</h6>
                                    <p class="mb-1">Polyvalent antivenom for multiple snake species</p>
                                    <small class="text-muted">Region-specific formulations available</small>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Scorpion Antivenom</h6>
                                    <p class="mb-1">For dangerous scorpion species</p>
                                    <small class="text-muted">Liquid and lyophilized formulations</small>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Spider Antivenom</h6>
                                    <p class="mb-1">For widow and recluse spider bites</p>
                                    <small class="text-muted">Available in emergency treatment kits</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="product-category-card p-4 h-100">
                            <h4 class="mb-3 text-danger"><i class="icon icon-emergency-kit mr-2"></i> Emergency Treatment Kits</h4>
                            <div class="product-list">
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Poison Treatment Kits</h6>
                                    <p class="mb-1">Comprehensive kits for common poisonings</p>
                                    <small class="text-muted">Includes antidotes, syringes, and administration guides</small>
                                </div>
                                <div class="product-item mb-3">
                                    <h6 class="font-weight-bold">Industrial First Response Kits</h6>
                                    <p class="mb-1">For chemical plant and laboratory emergencies</p>
                                    <small class="text-muted">Specific to common industrial toxins</small>
                                </div>
                                <div class="product-item">
                                    <h6 class="font-weight-bold">Field Emergency Kits</h6>
                                    <p class="mb-1">Portable kits for agricultural and remote settings</p>
                                    <small class="text-muted">Thermostable formulations for tropical conditions</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- PPE Equipment Tab -->
            <div class="tab-pane fade" id="ppe" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Personal Protective Equipment</h2>
                        <p class="lead">Complete protection solutions for workplace safety and hazard management</p>
                        <p>We offer a comprehensive range of PPE designed to protect against chemical, biological, physical, and environmental hazards.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="h18.png" alt="PPE Equipment" class="img-fluid rounded">
                    </div>
                </div>
                <div class="row">
                    <!-- Head Protection -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-hard-hat text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Head Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Safety Helmets
                                    </h6>
                                    <small class="text-muted">Industrial hard hats with chin straps</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Bump Caps
                                    </h6>
                                    <small class="text-muted">Lightweight head protection for low-risk areas</small>
                                </div>
                                <div class="ppe-item">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Hair Nets & Caps
                                    </h6>
                                    <small class="text-muted">Disposable caps for cleanroom environments</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Eye & Face Protection -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-eye text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Eye & Face Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Safety Glasses
                                    </h6>
                                    <small class="text-muted">Anti-fog, UV protection, side shields</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Chemical Goggles
                                    </h6>
                                    <small class="text-muted">Splash-proof, indirect vented</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Face Shields
                                    </h6>
                                    <small class="text-muted">Full-face protection for welding, chemicals</small>
                                </div>
                                <div class="ppe-item">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Welding Masks
                                    </h6>
                                    <small class="text-muted">Auto-darkening, fixed shade</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hearing Protection -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-assistive-listening-systems text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Hearing Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Disposable Earplugs
                                    </h6>
                                    <small class="text-muted">Foam, silicone, corded options</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Reusable Earplugs
                                    </h6>
                                    <small class="text-muted">Flanged, custom-molded</small>
                                </div>
                                <div class="ppe-item">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Earmuffs
                                    </h6>
                                    <small class="text-muted">Electronic, communication-enabled</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Respiratory Protection -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-lungs text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Respiratory Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Disposable Masks
                                    </h6>
                                    <small class="text-muted">N95, N99, N100 respirators</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Half/Full Face Respirators
                                    </h6>
                                    <small class="text-muted">With cartridges for specific hazards</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> SCBA Systems
                                    </h6>
                                    <small class="text-muted">Self-contained breathing apparatus</small>
                                </div>
                                <div class="ppe-item">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Gas Masks
                                    </h6>
                                    <small class="text-muted">Military grade, industrial grade</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Hand Protection -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-hand-sparkles text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Hand Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Chemical Resistant Gloves
                                    </h6>
                                    <small class="text-muted">Nitrile, latex, neoprene, butyl rubber</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Cut Resistant Gloves
                                    </h6>
                                    <small class="text-muted">Kevlar, stainless steel mesh</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Heat Resistant Gloves
                                    </h6>
                                    <small class="text-muted">Welding gloves, oven mitts</small>
                                </div>
                                <div class="ppe-item">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Disposable Gloves
                                    </h6>
                                    <small class="text-muted">Powder-free, sterile, non-sterile</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Body Protection -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-tshirt text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Body Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Chemical Suits
                                    </h6>
                                    <small class="text-muted">Level A, B, C protection</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Flame Resistant Clothing
                                    </h6>
                                    <small class="text-muted">Coveralls, jackets, pants</small>
                                </div>
                                <div class="ppe-item mb-2">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> High-Visibility Vests
                                    </h6>
                                    <small class="text-muted">Class 2, Class 3 reflective vests</small>
                                </div>
                                <div class="ppe-item">
                                    <h6 class="fw-bold d-flex align-items-center">
                                        <i class="fas fa-check-circle text-success me-2 fs-6"></i> Lab Coats & Aprons
                                    </h6>
                                    <small class="text-muted">Flame-resistant, chemical-resistant</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Foot Protection -->
                    <div class="col-md-6 col-lg-6 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-hiking text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Foot Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ppe-item mb-2">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Steel Toe Boots
                                            </h6>
                                            <small class="text-muted">Waterproof, electrical hazard rated</small>
                                        </div>
                                        <div class="ppe-item">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Chemical Resistant Boots
                                            </h6>
                                            <small class="text-muted">Neoprene, PVC, rubber boots</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ppe-item mb-2">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Anti-static Shoes
                                            </h6>
                                            <small class="text-muted">For electronics and cleanrooms</small>
                                        </div>
                                        <div class="ppe-item">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Disposable Shoe Covers
                                            </h6>
                                            <small class="text-muted">For cleanroom and sterile areas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Fall Protection -->
                    <div class="col-md-6 col-lg-6 mb-4">
                        <div class="ppe-category-card p-4 h-100 text-center border rounded-3 shadow-sm hover-shadow">
                            <div class="ppe-icon mb-3">
                                <div class="icon-wrapper bg-teal bg-opacity-10 rounded-circle p-3 d-inline-block">
                                    <i class="fas fa-safety-belt text-teal fs-2"></i>
                                </div>
                            </div>
                            <h4 class="mb-3 fw-bold">Fall Protection</h4>
                            <div class="ppe-list text-start">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ppe-item mb-2">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Safety Harnesses
                                            </h6>
                                            <small class="text-muted">Full body, chest harnesses</small>
                                        </div>
                                        <div class="ppe-item">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Lanyards
                                            </h6>
                                            <small class="text-muted">Shock-absorbing, retractable</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ppe-item mb-2">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Anchor Points
                                            </h6>
                                            <small class="text-muted">Portable, permanent anchors</small>
                                        </div>
                                        <div class="ppe-item">
                                            <h6 class="fw-bold d-flex align-items-center">
                                                <i class="fas fa-check-circle text-success me-2 fs-6"></i> Rescue Equipment
                                            </h6>
                                            <small class="text-muted">Tripods, winches, descent devices</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <style>
                .hover-shadow {
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                
                .hover-shadow:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 30px rgba(0, 105, 92, 0.15) !important;
                }
                
                .icon-wrapper {
                    transition: transform 0.3s ease;
                }
                
                .hover-shadow:hover .icon-wrapper {
                    transform: scale(1.1) rotate(5deg);
                }
                </style>
                <!-- PPE Selection Guide -->
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="ppe-guide-card p-4">
                            <h4 class="mb-4 text-center">PPE Selection Guide</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Hazard Type</th>
                                            <th>Recommended PPE</th>
                                            <th>Standards Compliance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Chemical Splash</td>
                                            <td>Chemical goggles, face shield, chemical suit, gloves</td>
                                            <td>ANSI Z87.1, EN 166</td>
                                        </tr>
                                        <tr>
                                            <td>Particulate Matter</td>
                                            <td>N95/N99 respirator, safety glasses, coveralls</td>
                                            <td>NIOSH 42 CFR 84</td>
                                        </tr>
                                        <tr>
                                            <td>High Temperature</td>
                                            <td>Heat resistant gloves, face shield, aluminized clothing</td>
                                            <td>EN 407, EN 12477</td>
                                        </tr>
                                        <tr>
                                            <td>Electrical Hazards</td>
                                            <td>Electrical hazard boots, insulated gloves, face shield</td>
                                            <td>ASTM F2413, EN 50365</td>
                                        </tr>
                                        <tr>
                                            <td>Biological Agents</td>
                                            <td>Full face respirator, disposable coveralls, shoe covers</td>
                                            <td>EN 14126, ISO 16604</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</section>

<!-- Modal for Product Catalog -->
<div class="modal fade" id="productCatalogModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download Product Catalog</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Please provide your details to download our complete product catalog:</p>
                <form id="catalogForm">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Company/Organization">
                    </div>
                    <div class="form-group">
                        <select class="form-control" required>
                            <option value="">Interested In</option>
                            <option>Medical Products</option>
                            <option>Chemicals</option>
                            <option>Antidotes</option>
                            <option>PPE Equipment</option>
                            <option>All Products</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Download Catalog</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    .products-nav .nav-link {
        padding: 15px 25px;
        margin: 0 5px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .products-nav .nav-link.active {
        background: linear-gradient(135deg, #00695C 0%, #004D40 100%);
        color: white;
    }
    
    .product-category-card, .ppe-category-card, .ppe-guide-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-top: 4px solid #00695C;
        transition: transform 0.3s ease;
    }
    
    .product-category-card:hover, .ppe-category-card:hover {
        transform: translateY(-5px);
    }
    
    .ppe-category-card {
        height: 100%;
    }
    
    .ppe-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        background: rgba(0,105,92,0.1);
        border-radius: 50%;
        margin: 0 auto;
    }
    
    .product-item, .ppe-item {
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
        margin-bottom: 10px;
    }
    
    .product-item:last-child, .ppe-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    
    .ppe-guide-card {
        background: #f8f9fa;
        border-left: 5px solid #00695C;
    }
    
    .table th {
        background-color: #00695C;
        color: white;
        border-color: #004D40;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Smooth scroll to tabs from URL hash
        if(window.location.hash) {
            $('a[href="' + window.location.hash + '"]').tab('show');
        }
        
        // Update URL hash when tab changes
        $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
            window.location.hash = e.target.hash;
        });
        
        // Handle catalog form submission
        $('#catalogForm').on('submit', function(e) {
            e.preventDefault();
            // Here you would typically send the data to your server
            alert('Thank you! The catalog download link has been sent to your email.');
            $('#productCatalogModal').modal('hide');
            $(this).trigger('reset');
        });
        
        // Show more PPE items on click (optional enhancement)
        $('.show-more-ppe').on('click', function() {
            $(this).closest('.ppe-list').find('.additional-item').toggleClass('d-none');
            $(this).text(function(i, text) {
                return text === 'Show More' ? 'Show Less' : 'Show More';
            });
        });
    });
</script>
@endpush