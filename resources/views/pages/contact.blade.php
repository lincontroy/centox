@extends('layouts.app')

@section('title', 'Contact Us - CENTOX')

@section('content')

<!-- Page Header -->
<section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://placehold.co/1920x400/529c9b/ffffff?text=CONTACT+CENTOX'); background-size: cover; background-position: center; padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center text-white">
                <h1 class="display-4">Contact CENTOX</h1>
                <p class="lead">Reach out to Kenya's leading toxicology research and safety experts</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="contact-info-card p-4 h-100" style="background: #f8f9fa; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <h3 class="mb-4" style="color: #529c9b;">Contact Information</h3>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: #529c9b;"></i>
                        </div>
                        <h5 style="color: #417d7c;">Address</h5>
                        <p class="mb-0" style="color: #555;">
                            P.O. Box 105356-00101<br>
                            Nairobi, Kenya<br>
                            <small><em>Physical location available upon appointment</em></small>
                        </p>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fas fa-phone-alt" style="font-size: 1.5rem; color: #529c9b;"></i>
                        </div>
                        <h5 style="color: #417d7c;">Phone Numbers</h5>
                        <p class="mb-0" style="color: #555;">
                            <strong>General & Emergency (24/7):</strong><br>
                            <a href="tel:+254728534454" style="color: #529c9b; font-weight: 600;">
                                +254 728 534454
                            </a>
                        </p>
                        <p class="mb-0 mt-2" style="color: #555;">
                            <strong>Business Hours Support:</strong><br>
                            <a href="tel:+254728534454" style="color: #529c9b; font-weight: 600;">
                                +254 728 534454
                            </a>
                        </p>
                    </div>
                    
                    <div class="contact-item mb-4">
                        <div class="contact-icon mb-2">
                            <i class="fas fa-envelope" style="font-size: 1.5rem; color: #529c9b;"></i>
                        </div>
                        <h5 style="color: #417d7c;">Email Addresses</h5>
                        <p class="mb-0" style="color: #555;">
                            <strong>General Inquiries:</strong><br>
                            <a href="mailto:info@centox.co.ke" style="color: #529c9b; font-weight: 600;">
                                info@centox.co.ke
                            </a>
                        </p>
                        <p class="mb-0 mt-2" style="color: #555;">
                            <strong>Website:</strong><br>
                            <a href="https://www.centox.co.ke" target="_blank" style="color: #529c9b; font-weight: 600;">
                                www.centox.co.ke
                            </a>
                        </p>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon mb-2">
                            <i class="fas fa-clock" style="font-size: 1.5rem; color: #529c9b;"></i>
                        </div>
                        <h5 style="color: #417d7c;">Business Hours</h5>
                        <p class="mb-0" style="color: #555;">
                            <strong>Monday - Friday:</strong> 8:00 AM - 6:00 PM<br>
                            <strong>Saturday:</strong> 9:00 AM - 1:00 PM<br>
                            <strong>Sunday:</strong> Emergency Hotline Only
                        </p>
                    </div>
                    
                    <div class="contact-item mt-4 pt-4 border-top">
                        <h5 style="color: #417d7c;">Social Media</h5>
                        <div class="social-links mt-2">
                            <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary me-2">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-secondary">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-8">
                <div class="contact-form-card p-5 h-100" style="background: white; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.1);">
                    <h3 class="mb-4" style="color: #529c9b;">Send Us a Message</h3>
                    <p class="mb-4" style="color: #666;">Fill out the form below and our team of toxicology experts will get back to you within 24 hours.</p>
                    
                    <form id="contactForm" method="POST" action="#">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="name" style="color: #417d7c; font-weight: 500;">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required 
                                           style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="email" style="color: #417d7c; font-weight: 500;">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required 
                                           style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="phone" style="color: #417d7c; font-weight: 500;">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" 
                                           placeholder="e.g., +254 XXX XXX XXX"
                                           style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="subject" style="color: #417d7c; font-weight: 500;">Subject *</label>
                                    <select class="form-control" id="subject" name="subject" required 
                                            style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;">
                                        <option value="">Select a subject</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Toxicology Analysis">Toxicology Analysis Request</option>
                                        <option value="Environmental Assessment">Environmental Assessment</option>
                                        <option value="Training Programs">Training Programs Information</option>
                                        <option value="Product Inquiry">Safety Products Inquiry</option>
                                        <option value="Waste Management">Toxic Waste Management</option>
                                        <option value="Emergency Response">Emergency Response Consultation</option>
                                        <option value="Partnership">Partnership Opportunity</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <label for="message" style="color: #417d7c; font-weight: 500;">Your Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required 
                                      placeholder="Please provide details about your inquiry or request..."
                                      style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="organization" style="color: #417d7c; font-weight: 500;">Organization/Company</label>
                                    <input type="text" class="form-control" id="organization" name="organization" 
                                           style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="service_urgency" style="color: #417d7c; font-weight: 500;">Service Urgency</label>
                                    <select class="form-control" id="service_urgency" name="service_urgency" 
                                            style="border-radius: 8px; border: 1px solid #ddd; padding: 12px 15px;">
                                        <option value="">Select urgency level</option>
                                        <option value="Emergency">Emergency (24/7 Response)</option>
                                        <option value="Urgent">Urgent (Within 48 hours)</option>
                                        <option value="Standard">Standard (Within 1 week)</option>
                                        <option value="Planning">Planning/Consultation</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                                <label class="form-check-label" for="newsletter" style="color: #666;">
                                    Subscribe to our newsletter for toxicology research updates and safety alerts
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg px-5 py-3" 
                                    style="background: linear-gradient(135deg, #529c9b 0%, #417d7c 100%); border: none; border-radius: 30px; font-weight: 600;">
                                <i class="fas fa-paper-plane mr-2"></i> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact Banner -->
<section class="section py-5" style="background: linear-gradient(135deg, #ff6b6b 0%, #c44569 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-white">
                <h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle mr-3"></i> 24/7 Emergency Toxicology Response</h3>
                <p class="mb-0" style="opacity: 0.9;">Immediate assistance for chemical exposure incidents, spills, toxic emergencies, and hazardous material incidents.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="tel:+254728534454" class="btn btn-light btn-lg px-4 py-3" 
                   style="border-radius: 30px; font-weight: 600; color: #ff6b6b;">
                    <i class="fas fa-phone-alt mr-2"></i> +254 728 534454
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Departments & Divisions -->
<section class="section py-6" style="background: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="h1 mb-3" style="color: #417d7c;">Our Departments & Services</h2>
            <p class="lead" style="color: #666;">Contact specific departments for specialized inquiries</p>
            <div class="section-divider-center" style="width: 80px; height: 4px; background: #529c9b; margin: 20px auto;"></div>
        </div>
        
        <div class="row g-4">
            @php
                $departments = [
                    [
                        'name' => 'Analytical Services',
                        'email' => 'info@centox.co.ke',
                        'phone' => '+254 728 534454',
                        'desc' => 'Toxicological testing and laboratory analysis',
                        'icon' => 'fas fa-vial',
                        'color' => '#529c9b'
                    ],
                    [
                        'name' => 'Training Division',
                        'email' => 'info@centox.co.ke',
                        'phone' => '+254 728 534454',
                        'desc' => 'Chemical safety training & certification programs',
                        'icon' => 'fas fa-graduation-cap',
                        'color' => '#417d7c'
                    ],
                    [
                        'name' => 'Environmental Services',
                        'email' => 'info@centox.co.ke',
                        'phone' => '+254 728 534454',
                        'desc' => 'Environmental impact assessment & monitoring',
                        'icon' => 'fas fa-leaf',
                        'color' => '#529c9b'
                    ],
                    [
                        'name' => 'Safety Products',
                        'email' => 'info@centox.co.ke',
                        'phone' => '+254 728 534454',
                        'desc' => 'PPE, testing kits & safety equipment',
                        'icon' => 'fas fa-box',
                        'color' => '#417d7c'
                    ],
                    [
                        'name' => 'Consultancy Services',
                        'email' => 'info@centox.co.ke',
                        'phone' => '+254 728 534454',
                        'desc' => 'Regulatory compliance & expert guidance',
                        'icon' => 'fas fa-comments',
                        'color' => '#529c9b'
                    ],
                    [
                        'name' => 'Waste Management',
                        'email' => 'info@centox.co.ke',
                        'phone' => '+254 728 534454',
                        'desc' => 'Toxic & hazardous waste disposal',
                        'icon' => 'fas fa-trash-alt',
                        'color' => '#417d7c'
                    ],
                ];
            @endphp
            
            @foreach($departments as $dept)
            <div class="col-md-6 col-lg-4">
                <div class="department-card p-4 h-100 text-center" 
                     style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease; border-top: 4px solid {{ $dept['color'] }};">
                    <div class="department-icon mb-3">
                        <i class="{{ $dept['icon'] }}" style="font-size: 2.5rem; color: {{ $dept['color'] }};"></i>
                    </div>
                    <h4 class="department-name mb-3" style="color: {{ $dept['color'] }};">{{ $dept['name'] }}</h4>
                    <p class="department-desc mb-4" style="color: #666;">{{ $dept['desc'] }}</p>
                    <div class="department-contact" style="background: #f8f9fa; padding: 15px; border-radius: 10px;">
                        <p class="mb-2" style="color: #555;">
                            <i class="fas fa-phone-alt mr-2" style="color: #529c9b;"></i> 
                            <strong>{{ $dept['phone'] }}</strong>
                        </p>
                        <p class="mb-0" style="color: #555;">
                            <i class="fas fa-envelope mr-2" style="color: #529c9b;"></i> 
                            <strong>{{ $dept['email'] }}</strong>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Map & Location -->
<section class="section py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <h2 class="h1 mb-3" style="color: #417d7c;">Our Location in Nairobi</h2>
                    <p class="lead" style="color: #666; max-width: 700px; margin: 0 auto;">
                        Based in Nairobi, Kenya, we serve clients across East Africa and beyond with comprehensive toxicology services.
                    </p>
                    <div class="section-divider-center" style="width: 80px; height: 4px; background: #529c9b; margin: 20px auto;"></div>
                </div>
                
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="location-info p-4" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%;">
                            <h4 style="color: #417d7c;" class="mb-4">Nairobi Office Details</h4>
                            
                            <div class="location-item mb-3">
                                <h5 style="color: #529c9b;">Postal Address</h5>
                                <p class="mb-0" style="color: #555;">
                                    P.O. Box 105356-00101<br>
                                    Nairobi, Kenya
                                </p>
                            </div>
                            
                            <div class="location-item mb-3">
                                <h5 style="color: #529c9b;">Contact Information</h5>
                                <p class="mb-0" style="color: #555;">
                                    <strong>Phone:</strong> +254 728 534454<br>
                                    <strong>Email:</strong> info@centox.co.ke<br>
                                    <strong>Website:</strong> www.centox.co.ke
                                </p>
                            </div>
                            
                            <div class="location-item mb-3">
                                <h5 style="color: #529c9b;">Service Area</h5>
                                <p class="mb-0" style="color: #555;">
                                    We provide services across Kenya and the wider East African region, including:
                                </p>
                                <ul class="mt-2" style="color: #555;">
                                    <li>Nairobi & surrounding counties</li>
                                    <li>Mombasa & Coastal region</li>
                                    <li>Kisumu & Western Kenya</li>
                                    <li>Entire East African Community</li>
                                </ul>
                            </div>
                            
                            <div class="location-item">
                                <h5 style="color: #529c9b;">Transportation & Access</h5>
                                <p class="mb-0" style="color: #555;">
                                    For physical consultations, please contact us to schedule an appointment and receive detailed directions.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="map-container rounded" style="height: 500px; overflow: hidden; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                            <!-- Nairobi Google Maps Embed -->
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.808902306918!2d36.821159414753916!3d-1.2922598359808566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d74f8e731f%3A0x4e37741f7f2b7a4d!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1641234567890!5m2!1sen!2sus" 
                                width="100%" 
                                height="500" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Quick Links -->
<section class="section py-6" style="background: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="faq-quicklinks p-5 text-center" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                    <h3 class="mb-4" style="color: #417d7c;">Quick Answers & Resources</h3>
                    <p class="mb-4" style="color: #666;">Find quick answers to common questions about our services and operations.</p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ route('services') }}" class="btn btn-outline-primary btn-block py-3" 
                               style="border-color: #529c9b; color: #529c9b; border-radius: 10px;">
                                <i class="fas fa-flask mr-2"></i> Service Pricing
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('training') }}" class="btn btn-outline-primary btn-block py-3" 
                               style="border-color: #529c9b; color: #529c9b; border-radius: 10px;">
                                <i class="fas fa-calendar-alt mr-2"></i> Training Schedule
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('products') }}" class="btn btn-outline-primary btn-block py-3" 
                               style="border-color: #529c9b; color: #529c9b; border-radius: 10px;">
                                <i class="fas fa-box-open mr-2"></i> Product Catalog
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-outline-primary btn-block py-3" 
                               style="border-color: #529c9b; color: #529c9b; border-radius: 10px;">
                                <i class="fas fa-file-alt mr-2"></i> Emergency Procedures
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-top">
                        <p class="mb-2" style="color: #666;">
                            <i class="fas fa-question-circle mr-2" style="color: #529c9b;"></i>
                            Still have questions?
                        </p>
                        <p class="mb-0" style="color: #555;">
                            Call us directly at <strong>+254 728 534454</strong> or email <strong>info@centox.co.ke</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Contact CTA -->
<section class="section py-6" style="background: linear-gradient(135deg, #529c9b 0%, #417d7c 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-white">
                <h2 class="h1 mb-3">Need Immediate Assistance?</h2>
                <p class="lead mb-0" style="opacity: 0.9;">Our team of toxicology experts is ready to help you with any safety concerns or inquiries.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <div class="d-flex flex-column flex-lg-row gap-3">
                    <a href="tel:+254728534454" class="btn btn-light btn-lg px-4 py-3" 
                       style="border-radius: 30px; font-weight: 600; color: #529c9b;">
                        <i class="fas fa-phone-alt mr-2"></i> Call Now
                    </a>
                    <a href="mailto:info@centox.co.ke" class="btn btn-outline-light btn-lg px-4 py-3" 
                       style="border-radius: 30px; font-weight: 600;">
                        <i class="fas fa-envelope mr-2"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .contact-info-card, .contact-form-card, .department-card, .location-info, .faq-quicklinks {
        transition: all 0.3s ease;
    }
    
    .department-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .contact-item {
        border-bottom: 1px solid rgba(82, 156, 155, 0.1);
        padding-bottom: 20px;
    }
    
    .contact-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .form-control:focus {
        border-color: #529c9b;
        box-shadow: 0 0 0 0.2rem rgba(82, 156, 155, 0.25);
    }
    
    .btn-outline-primary:hover {
        background: #529c9b;
        color: white;
        border-color: #529c9b;
    }
    
    .social-links .btn-outline-secondary:hover {
        background: #529c9b;
        border-color: #529c9b;
        color: white;
    }
    
    .map-container {
        border: 2px solid #e9ecef;
    }
    
    .location-item {
        margin-bottom: 25px;
    }
    
    .location-item:last-child {
        margin-bottom: 0;
    }
    
    .location-item ul {
        padding-left: 20px;
        margin-bottom: 0;
    }
    
    .location-item li {
        margin-bottom: 5px;
    }
    
    @media (max-width: 768px) {
        .page-header {
            padding: 80px 0;
        }
        
        .contact-form-card {
            padding: 30px !important;
        }
        
        .faq-quicklinks {
            padding: 30px !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Form submission handling
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            let isValid = true;
            $(this).find('[required]').each(function() {
                if ($(this).val() === '') {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
            
            if (isValid) {
                // Show loading state
                const submitBtn = $(this).find('button[type="submit"]');
                const originalText = submitBtn.html();
                submitBtn.html('<i class="fas fa-spinner fa-spin mr-2"></i> Sending...');
                submitBtn.prop('disabled', true);
                
                // Simulate API call (replace with actual AJAX call)
                setTimeout(() => {
                    // Success message
                    alert('Thank you for contacting CENTOX! We have received your message and will get back to you within 24 hours.');
                    
                    // Reset form
                    $('#contactForm')[0].reset();
                    
                    // Restore button
                    submitBtn.html(originalText);
                    submitBtn.prop('disabled', false);
                }, 1500);
            }
        });
        
        // Real-time validation
        $('#contactForm input, #contactForm select, #contactForm textarea').on('blur', function() {
            if ($(this).attr('required') && $(this).val() === '') {
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        
        // Email validation
        $('#email').on('blur', function() {
            const email = $(this).val();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (email && !emailRegex.test(email)) {
                $(this).addClass('is-invalid');
                $(this).after('<div class="invalid-feedback">Please enter a valid email address</div>');
            } else {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
        
        // Phone number formatting (optional)
        $('#phone').on('input', function() {
            let value = $(this).val().replace(/\D/g, '');
            if (value.length > 0) {
                value = '+254 ' + value.substring(0, 9).replace(/(\d{3})(?=\d)/g, "$1 ");
            }
            $(this).val(value);
        });
        
        // Department card click to email
        $('.department-contact p:last-child').on('click', function() {
            const email = $(this).text().split(': ')[1];
            window.location.href = 'mailto:' + email;
        });
    });
</script>
@endpush