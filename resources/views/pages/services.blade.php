@extends('layouts.app')

@section('title', 'Our Services - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1920x400/00695C/FFFFFF?text=OUR+SERVICES'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h1 class="display-4">Our Services</h1>
                <p class="lead">Comprehensive toxicology solutions for safety and compliance</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Navigation -->
<section class="section pt-0">
    <div class="container">
        <div class="services-nav">
            <ul class="nav nav-pills nav-pills--noborder justify-content-center" id="servicesTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="consultancy-tab" data-toggle="pill" href="#consultancy" role="tab">
                        <i class="icon icon-consulting mr-2"></i>Consultancy
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="analysis-tab" data-toggle="pill" href="#analysis" role="tab">
                        <i class="icon icon-microscope mr-2"></i>Analysis
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="education-tab" data-toggle="pill" href="#education" role="tab">
                        <i class="icon icon-book mr-2"></i>Education & Training
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="media-tab" data-toggle="pill" href="#media" role="tab">
                        <i class="icon icon-media mr-2"></i>Media & Advocacy
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="waste-tab" data-toggle="pill" href="#waste" role="tab">
                        <i class="icon icon-waste mr-2"></i>Waste Management
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Services Content -->
<section class="section">
    <div class="container">
        <div class="tab-content" id="servicesTabContent">
            
            <!-- Consultancy Tab -->
            <div class="tab-pane fade show active" id="consultancy" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Consultancy Services</h2>
                        <p class="lead">Expert guidance for regulatory compliance and safety optimization</p>
                        <p>Our consultancy services provide comprehensive support for industries dealing with chemicals and hazardous materials, ensuring compliance with national and international regulations.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://via.placeholder.com/600x400/00695C/FFFFFF?text=CONSULTANCY" alt="Consultancy Services" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="service-detail-card p-4 h-100">
                            <h4 class="mb-3"><i class="icon icon-pharma mr-2"></i> Pharmaceutical Drug Registration</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="icon-right-arrow mr-2"></i>Application for  Regulatory Approvals</li>
                                <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Drugs Toxicity studies</li>
                                <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Risk assessment</li>
                               
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="service-detail-card p-4 h-100">
                            <h4 class="mb-3"><i class="icon icon-environment mr-2"></i> Environmental Impact Assessment</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Comprehensive environmental screening</li>
                                <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Chemical fate and transport modeling</li>
                                <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Ecological risk assessment</li>
                                <li><i class="icon-right-arrow mr-2"></i> Mitigation strategy development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Analysis Tab -->
            <div class="tab-pane fade" id="analysis" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Analytical Services</h2>
                        <p class="lead">State-of-the-art toxicological analysis and testing</p>
                        <p>Our accredited laboratory provides comprehensive analytical services using advanced instrumentation and validated methods for accurate and reliable results.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://via.placeholder.com/600x400/004D40/FFFFFF?text=ANALYTICAL+LAB" alt="Analytical Services" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="service-detail-card p-4 h-100 text-center">
                            <div class="service-icon-lg mb-3">
                                <i class="icon icon-medical" style="font-size: 2.5rem; color: #00695C;"></i>
                            </div>
                            <h4>Clinical Toxicology</h4>
                            <p>Drug testing, poison screening, therapeutic drug monitoring,Sport testing and biomarker analysis for healthcare applications.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="service-detail-card p-4 h-100 text-center">
                            <div class="service-icon-lg mb-3">
                                <i class="icon icon-forensic" style="font-size: 2.5rem; color: #00695C;"></i>
                            </div>
                            <h4>Forensic Toxicology</h4>
                            <p>Analysis for legal purposes including workplace testing, post-mortem investigations, and substance abuse cases.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="service-detail-card p-4 h-100 text-center">
                            <div class="service-icon-lg mb-3">
                                <i class="icon icon-water" style="font-size: 2.5rem; color: #00695C;"></i>
                            </div>
                            <h4>Environmental Analysis</h4>
                            <p>Water, soil, and air quality testing for industrial contaminants, pesticides, and hazardous chemicals.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Education & Training Tab -->
            <div class="tab-pane fade" id="education" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Education & Training</h2>
                        <p class="lead">Building capacity through specialized toxicology training</p>
                        <p>We offer comprehensive training programs designed to enhance chemical safety awareness and build technical capacity across various sectors.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://via.placeholder.com/600x400/00796B/FFFFFF?text=TRAINING" alt="Training Programs" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="training-program p-4 h-100">
                            <h4 class="mb-3">Public Health Education</h4>
                            <ul>
                                <li>Chemical safety awareness programs</li>
                                <li>Poison prevention workshops</li>
                                <li>Community health initiatives</li>
                                <li>School-based safety education</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="training-program p-4 h-100">
                            <h4 class="mb-3">Farmer Training Programs</h4>
                            <ul>
                                <li>Safe pesticide handling and storage</li>
                                <li>Personal protective equipment use</li>
                                <li>First aid for chemical exposure</li>
                                <li>Integrated pest management</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="training-program p-4 h-100">
                            <h4 class="mb-3"> Professional Certification</h4>
                            <ul>
                                <li>Industrial hygiene certification</li>
                                <li>Hazardous materials management</li>
                                <li>Chemical safety officer training</li>
                                <li>Environmental compliance courses</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="training-program p-4 h-100">
                            <h4 class="mb-3">Institutional Training</h4>
                            <ul>
                                <li>Laboratory safety protocols</li>
                                <li>Chemical waste management</li>
                                <li>Emergency response planning</li>
                                <li>Regulatory compliance workshops</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Media & Advocacy Tab -->
            <div class="tab-pane fade" id="media" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Media & Advocacy</h2>
                        <p class="lead">Raising awareness through strategic communication</p>
                        <p>We leverage media platforms and advocacy campaigns to promote chemical safety awareness and influence policy development.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://via.placeholder.com/600x400/00695C/FFFFFF?text=MEDIA+ADVOCACY" alt="Media Advocacy" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="media-card p-4 h-100">
                            <h4 class="mb-3">Social Media Campaigns</h4>
                            <p>Engaging digital content to reach diverse audiences with safety messages:</p>
                            <ul>
                                <li>Weekly safety tips</li>
                                <li>Infographics on chemical hazards</li>
                                <li>Live Q&A sessions with experts</li>
                                <li>Success stories and case studies</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="media-card p-4 h-100">
                            <h4 class="mb-3">Public Awareness Programs</h4>
                            <p>Comprehensive outreach initiatives:</p>
                            <ul>
                                <li>National chemical safety week</li>
                                <li>Community workshops and seminars</li>
                                <li>School outreach programs</li>
                                <li>Industry roundtable discussions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Waste Management Tab -->
            <div class="tab-pane fade" id="waste" role="tabpanel">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="h1 mb-4">Toxic Waste Management</h2>
                        <p class="lead">Safe and compliant waste handling solutions</p>
                        <p>Comprehensive toxic waste management services ensuring environmental protection and regulatory compliance.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://via.placeholder.com/600x400/004D40/FFFFFF?text=WASTE+MANAGEMENT" alt="Waste Management" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="waste-card p-4 h-100">
                            <h4 class="mb-3"><i class="icon icon-safety-gloves mr-2"></i> Safe Handling</h4>
                            <ul>
                                <li>Waste characterization and classification</li>
                                <li>Proper storage and labeling protocols</li>
                                <li>Spill prevention and control</li>
                                <li>Employee training and certification</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="waste-card p-4 h-100">
                            <h4 class="mb-3"><i class="icon icon-recycle mr-2"></i> Disposal & Compliance</h4>
                            <ul>
                                <li>Environmentally sound disposal methods</li>
                                <li>Transportation and manifest systems</li>
                                <li>Regulatory documentation and reporting</li>
                                <li>Audit preparation and support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="text-center mt-5 pt-5">
            <h3 class="h2 mb-4">Need Our Services?</h3>
            <p class="lead mb-4">Contact us for a consultation or request a quote</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg mr-3">Contact Us</a>
            <button class="btn btn-outline-primary btn-lg" data-toggle="modal" data-target="#modalContactForm">Request Quote</button>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .services-nav .nav-link {
        padding: 15px 25px;
        margin: 0 5px;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .services-nav .nav-link.active {
        background: linear-gradient(135deg, #00695C 0%, #004D40 100%);
        color: white;
    }
    
    .service-detail-card, .training-program, .media-card, .waste-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-top: 4px solid #00695C;
    }
    
    .service-icon-lg {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 70px;
        background: rgba(0,105,92,0.1);
        border-radius: 50%;
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
    });
</script>
@endpush