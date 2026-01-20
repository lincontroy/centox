@extends('layouts.app')

@section('title', 'Training & Advocacy - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1920x400/00695C/FFFFFF?text=TRAINING+PROGRAMS'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h1 class="display-4">Training & Advocacy</h1>
                <p class="lead">Building capacity for chemical safety and environmental protection</p>
            </div>
        </div>
    </div>
</section>

<!-- Training Programs Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="h1 mb-4">Comprehensive Training Solutions</h2>
                <p class="lead">Specialized programs designed to enhance chemical safety knowledge and skills</p>
                <p>Our training programs are developed by experienced toxicologists and safety experts, combining theoretical knowledge with practical applications. We offer customized training solutions for various sectors and skill levels.</p>
                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Enroll Now</a>
                    <a href="#" class="btn btn-outline-primary ml-3">Download Brochure</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/600x400/00796B/FFFFFF?text=TRAINING+SESSION" alt="Training Session" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Program Categories -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Program Categories</h2>
            <p class="lead">Targeted training for specific needs and sectors</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-category-card text-center p-4 h-100">
                    <div class="category-icon mb-3">
                        <i class="icon icon-public" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Public Health Education</h4>
                    <p>Community-based programs for chemical safety awareness and prevention</p>
                    <a href="#" class="btn btn-link">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-category-card text-center p-4 h-100">
                    <div class="category-icon mb-3">
                        <i class="icon icon-farmer" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Farmer Training</h4>
                    <p>Safe pesticide handling, storage, and integrated pest management</p>
                    <a href="#" class="btn btn-link">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-category-card text-center p-4 h-100">
                    <div class="category-icon mb-3">
                        <i class="icon icon-industry" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Industrial Safety</h4>
                    <p>Workplace chemical safety, hazard communication, and emergency response</p>
                    <a href="#" class="btn btn-link">Learn More</a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-category-card text-center p-4 h-100">
                    <div class="category-icon mb-3">
                        <i class="icon icon-institution" style="font-size: 3rem; color: #00695C;"></i>
                    </div>
                    <h4>Institutional Programs</h4>
                    <p>Customized training for schools, hospitals, and government agencies</p>
                    <a href="#" class="btn btn-link">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Programs -->
<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Featured Training Programs</h2>
            <p class="lead">Our most popular certification courses</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="row">
            @php
                $featuredPrograms = [
                    [
                        'title' => 'Chemical Safety Officer Certification',
                        'duration' => '5 Days',
                        'level' => 'Intermediate',
                        'certification' => 'CSO Certificate',
                        'highlights' => ['Risk assessment', 'Regulatory compliance', 'Emergency planning']
                    ],
                    [
                        'title' => 'Hazardous Materials Management',
                        'duration' => '3 Days',
                        'level' => 'Advanced',
                        'certification' => 'HAZMAT Certification',
                        'highlights' => ['Waste classification', 'Transport regulations', 'Disposal methods']
                    ],
                    [
                        'title' => 'Pesticide Applicator Training',
                        'duration' => '2 Days',
                        'level' => 'Basic',
                        'certification' => 'PAT Certificate',
                        'highlights' => ['Safe application', 'Equipment handling', 'First aid response']
                    ],
                    [
                        'title' => 'Environmental Compliance Workshop',
                        'duration' => '4 Days',
                        'level' => 'Intermediate',
                        'certification' => 'ECP Certificate',
                        'highlights' => ['Regulatory updates', 'Documentation', 'Audit preparation']
                    ],
                ];
            @endphp
            
            @foreach($featuredPrograms as $program)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-card p-4 h-100">
                    <div class="program-header mb-3">
                        <h4 class="program-title">{{ $program['title'] }}</h4>
                        <div class="program-meta">
                            <span class="badge badge-primary">{{ $program['duration'] }}</span>
                            <span class="badge badge-secondary ml-1">{{ $program['level'] }}</span>
                        </div>
                    </div>
                    
                    <div class="program-highlights mb-3">
                        <h6 class="text-muted">Key Topics:</h6>
                        <ul class="list-unstyled">
                            @foreach($program['highlights'] as $highlight)
                            <li class="mb-1"><i class="icon-right-arrow mr-2"></i>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="program-footer">
                        <p class="mb-2"><strong>Certification:</strong> {{ $program['certification'] }}</p>
                        <button class="btn btn-primary btn-sm btn-block">Register Now</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Training Timeline -->
<section class="section bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3">Training Process</h2>
            <p class="lead">Step-by-step approach to effective learning</p>
            <div class="h-decor"></div>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="icon icon-assessment"></i>
                </div>
                <div class="timeline-content">
                    <h4>Needs Assessment</h4>
                    <p>We evaluate your specific requirements and customize the training program accordingly.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="icon icon-curriculum"></i>
                </div>
                <div class="timeline-content">
                    <h4>Curriculum Development</h4>
                    <p>Development of comprehensive training materials tailored to your industry and skill level.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="icon icon-training"></i>
                </div>
                <div class="timeline-content">
                    <h4>Interactive Training</h4>
                    <p>Engaging sessions combining theory, case studies, and hands-on practical exercises.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="icon icon-evaluation"></i>
                </div>
                <div class="timeline-content">
                    <h4>Evaluation & Certification</h4>
                    <p>Assessment of learning outcomes and issuance of certificates upon successful completion.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="icon icon-followup"></i>
                </div>
                <div class="timeline-content">
                    <h4>Follow-up Support</h4>
                    <p>Post-training support, refresher courses, and ongoing consultation as needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advocacy Section -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="h1 mb-4">Advocacy Initiatives</h2>
                <p class="lead">Promoting chemical safety awareness through community engagement</p>
                <p>Our advocacy programs aim to raise public awareness about chemical safety and promote best practices in toxicology management. We collaborate with various stakeholders to influence policy and create safer environments.</p>
                
                <div class="advocacy-highlights mt-4">
                    <div class="media mb-3">
                        <i class="icon icon-community mr-3" style="font-size: 2rem; color: #00695C;"></i>
                        <div class="media-body">
                            <h5>Community Outreach</h5>
                            <p class="mb-0">Regular workshops and seminars in local communities</p>
                        </div>
                    </div>
                    
                    <div class="media mb-3">
                        <i class="icon icon-policy mr-3" style="font-size: 2rem; color: #00695C;"></i>
                        <div class="media-body">
                            <h5>Policy Engagement</h5>
                            <p class="mb-0">Participation in policy development and regulatory review</p>
                        </div>
                    </div>
                    
                    <div class="media">
                        <i class="icon icon-research mr-3" style="font-size: 2rem; color: #00695C;"></i>
                        <div class="media-body">
                            <h5>Research Collaboration</h5>
                            <p class="mb-0">Partnerships with academic and research institutions</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="advocacy-calendar p-4" style="background: #f8f9fa; border-radius: 10px;">
                    <h4 class="mb-4">Upcoming Events</h4>
                    
                    <div class="event-list">
                        <div class="event-item mb-3 pb-3 border-bottom">
                            <div class="event-date text-primary">
                                <strong>15</strong> Nov
                            </div>
                            <div class="event-details">
                                <h6>Chemical Safety Week Launch</h6>
                                <p class="small text-muted mb-0">National campaign for chemical safety awareness</p>
                            </div>
                        </div>
                        
                        <div class="event-item mb-3 pb-3 border-bottom">
                            <div class="event-date text-primary">
                                <strong>22</strong> Nov
                            </div>
                            <div class="event-details">
                                <h6>Farmers Safety Workshop</h6>
                                <p class="small text-muted mb-0">Training on safe pesticide handling for farmers</p>
                            </div>
                        </div>
                        
                        <div class="event-item">
                            <div class="event-date text-primary">
                                <strong>05</strong> Dec
                            </div>
                            <div class="event-details">
                                <h6>Industrial Hygiene Conference</h6>
                                <p class="small text-muted mb-0">Annual conference for industry professionals</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-outline-primary">View Full Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-gradient text-white" style="background: linear-gradient(135deg, #00695C 0%, #004D40 100%);">
    <div class="container text-center">
        <h2 class="h1 mb-4">Ready to Enhance Your Safety Skills?</h2>
        <p class="lead mb-4">Contact us for customized training solutions for your organization</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg mr-3">Request Training Proposal</a>
        <a href="tel:+1-800-TOX-HELP" class="btn btn-outline-light btn-lg">Call for Information</a>
    </div>
</section>

@endsection

@push('styles')
<style>
    .program-category-card, .program-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .program-category-card:hover, .program-card:hover {
        transform: translateY(-5px);
    }
    
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #00695C;
        transform: translateX(-50%);
    }
    
    .timeline-item {
        display: flex;
        margin-bottom: 30px;
        position: relative;
    }
    
    .timeline-item:nth-child(odd) {
        flex-direction: row;
    }
    
    .timeline-item:nth-child(even) {
        flex-direction: row-reverse;
    }
    
    .timeline-icon {
        width: 60px;
        height: 60px;
        background: white;
        border: 2px solid #00695C;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #00695C;
        z-index: 1;
    }
    
    .timeline-content {
        flex: 1;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin: 0 20px;
    }
    
    .advocacy-calendar .event-item {
        display: flex;
        align-items: flex-start;
    }
    
    .event-date {
        width: 60px;
        text-align: center;
        font-size: 1.2rem;
        margin-right: 15px;
    }
    
    .event-date strong {
        display: block;
        font-size: 1.5rem;
    }
</style>
@endpush