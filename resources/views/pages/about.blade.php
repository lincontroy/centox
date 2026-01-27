@extends('layouts.app')

@section('title', 'About Us - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('h12.png'); background-size: cover; background-position: center; padding: 100px 0;">
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