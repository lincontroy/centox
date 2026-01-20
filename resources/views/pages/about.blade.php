@extends('layouts.app')

@section('title', 'About Us - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1920x400/00695C/FFFFFF?text=ABOUT+CENTOX'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h1 class="display-4">About CENTOX</h1>
                <p class="lead">Leading the way in toxicology research and environmental safety</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-box p-4 h-100" style="background: #f8f9fa; border-radius: 10px;">
                    <div class="about-icon mb-3">
                        <i class="icon icon-target" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h3 class="mb-3">Our Mission</h3>
                    <p>To advance human and environmental safety through cutting-edge toxicology research, comprehensive analysis services, and evidence-based safety solutions.</p>
                    <p>We are committed to protecting public health by identifying, assessing, and mitigating chemical risks through scientific excellence and innovation.</p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="about-box p-4 h-100" style="background: #f8f9fa; border-radius: 10px;">
                    <div class="about-icon mb-3">
                        <i class="icon icon-eye" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h3 class="mb-3">Our Vision</h3>
                    <p>To be the leading center of excellence in toxicology and applied research, recognized globally for our contributions to environmental protection and public health safety.</p>
                    <p>We envision a world where chemical risks are effectively managed through scientific understanding and proactive safety measures.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Focus Areas -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Our Core Focus Areas</h2>
            <p class="lead">Dedicated to comprehensive toxicology solutions</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="focus-card text-center p-4 h-100">
                    <div class="focus-icon mb-3">
                        <i class="icon icon-heart" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Public Health</h4>
                    <p>Protecting communities from chemical exposure and promoting health through toxicology awareness and prevention programs.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="focus-card text-center p-4 h-100">
                    <div class="focus-icon mb-3">
                        <i class="icon icon-chemical" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Chemical Safety</h4>
                    <p>Comprehensive assessment and management of chemical risks in industrial, agricultural, and household settings.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="focus-card text-center p-4 h-100">
                    <div class="focus-icon mb-3">
                        <i class="icon icon-leaf" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Environmental Protection</h4>
                    <p>Safeguarding ecosystems through environmental toxicology, waste management, and sustainable practices.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Target Groups -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Who We Serve</h2>
            <p class="lead">Serving diverse sectors with specialized toxicology solutions</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="target-card p-4 text-center h-100" style="border-left: 5px solid #00695C;">
                    <h4 class="mb-3">General Public</h4>
                    <ul class="list-unstyled text-left">
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Health education programs</li>
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Chemical safety awareness</li>
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Exposure risk assessment</li>
                        <li><i class="icon-right-arrow mr-2"></i> Emergency response information</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="target-card p-4 text-center h-100" style="border-left: 5px solid #00695C;">
                    <h4 class="mb-3">Agricultural Sector</h4>
                    <ul class="list-unstyled text-left">
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Pesticide safety training</li>
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Soil and water testing</li>
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Safe chemical handling</li>
                        <li><i class="icon-right-arrow mr-2"></i> Aflatoxin testing services</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="target-card p-4 text-center h-100" style="border-left: 5px solid #00695C;">
                    <h4 class="mb-3">Institutions & Industry</h4>
                    <ul class="list-unstyled text-left">
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Regulatory compliance</li>
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Environmental impact assessment</li>
                        <li class="mb-2"><i class="icon-right-arrow mr-2"></i> Industrial hygiene monitoring</li>
                        <li><i class="icon-right-arrow mr-2"></i> Waste management solutions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Our Leadership</h2>
            <p class="lead">Experienced professionals in toxicology and environmental science</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <img src="https://via.placeholder.com/300x300/00695C/FFFFFF?text=DR.+JANE+SMITH" alt="Dr. Jane Smith" class="img-fluid rounded-circle mb-3">
                    <h4>Dr. Jane Smith</h4>
                    <p class="text-muted">Director of Toxicology Research</p>
                    <p>PhD in Environmental Toxicology with 20+ years of experience in chemical risk assessment.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <img src="https://via.placeholder.com/300x300/004D40/FFFFFF?text=DR.+JOHN+DOE" alt="Dr. John Doe" class="img-fluid rounded-circle mb-3">
                    <h4>Dr. John Doe</h4>
                    <p class="text-muted">Head of Analytical Services</p>
                    <p>Expert in forensic toxicology and analytical method development for chemical detection.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="team-card text-center">
                    <img src="https://via.placeholder.com/300x300/00796B/FFFFFF?text=DR.+SARAH+WONG" alt="Dr. Sarah Wong" class="img-fluid rounded-circle mb-3">
                    <h4>Dr. Sarah Wong</h4>
                    <p class="text-muted">Environmental Safety Director</p>
                    <p>Specialist in environmental impact assessment and sustainable waste management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-gradient text-white" style="background: linear-gradient(135deg, #00695C 0%, #004D40 100%);">
    <div class="container text-center">
        <h2 class="h1 mb-4">Partner With Us for Safety</h2>
        <p class="lead mb-4">Join us in creating safer environments through scientific excellence and collaboration</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg mr-3">Contact Us</a>
        <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">Our Services</a>
    </div>
</section>

@endsection

@push('styles')
<style>
    .page-header {
        padding: 100px 0;
    }
    
    .about-box {
        height: 100%;
    }
    
    .focus-card, .target-card, .team-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .focus-card:hover, .target-card:hover, .team-card:hover {
        transform: translateY(-5px);
    }
    
    .team-card img {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }
</style>
@endpush