@extends('layouts.app')

@section('title', 'Home - Center of Toxicology and Applied Research')

@section('content')

<!-- Modern Hero Section with Enhanced Slider -->

	<!--section slider-->
	<div class="section mt-0">
		
		<div id="mainSliderWrapper">
			<div class="loading-content">
				<div class="loader-dna">
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
					<column>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
						<dash></dash>
					</column>
					<column>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
						<dot></dot>
					</column>
				</div>
			</div>
            <div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider" data-slick='{"arrows": false, "dots": true}'>
                <div class="slide">
                    <div class="img--holder" data-bg="h9.png" style="background-position: center top;"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">Leading the Way<br>
                                        <b>in Laboratory Research</b></div>
                                    <div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Advanced medicine. Compassionate care</div>
                                    <div class="slide-btn"><a href="/services" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Explore our services</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-bg="h10.png" style="background-position: center top;"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">We Provide
                                        <br><b>Consultancy Services!</b></div>
                                    <div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Expert guidance for regulatory compliance and safety optimization</div>
                                    <div class="slide-btn"><a href="/services" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-bg="h11.png" style="background-position: center top;"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">We Provide
                                        <br><b>Analytical Services!</b></div>
                                    <div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">State-of-the-art toxicological analysis and testing</div>
                                    <div class="slide-btn"><a href="/services#analysis" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-bg="h12.png" style="background-position: center top;"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">We Provide
                                        <br><b>Education & Training</b></div>
                                    <div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Building capacity through specialized toxicology training</div>
                                    <div class="slide-btn"><a href="/services#analysis" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="img--holder" data-bg="h13.png" style="background-position: center top;"></div>
                    <div class="slide-content center">
                        <div class="vert-wrap container">
                            <div class="vert">
                                <div class="container">
                                    <div class="slide-txt1 text-no-uppercase" data-animation="fadeInDown" data-animation-delay="1s">We Provide
                                        <br><b>Quality Products</b></div>
                                    <div class="slide-txt2 text-no-uppercase" data-animation="fadeInUp" data-animation-delay="1.5s">Premium quality toxicology products for safety, testing, and protection</div>
                                    <div class="slide-btn"><a href="/services#analysis" class="btn link-inside" data-animation="fadeInUp" data-animation-delay="2s"><i class="icon-right-arrow"></i><span>Know more</span><i class="icon-right-arrow"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .slide-content {
    position: relative;
}

/* Gradient overlay on background */
.slide-content::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, 
        rgba(0, 0, 0, 0.7) 0%, 
        rgba(0, 0, 0, 0.3) 50%, 
        rgba(0, 0, 0, 0.7) 100%);
    z-index: 1;
}

.slide-content > * {
    position: relative;
    z-index: 2;
}

/* Modern text styling */
.slide-txt1 {
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5),
                 0 0 30px rgba(0, 0, 0, 0.3);
    color: white;
    font-weight: 300;
}

.slide-txt1 b {
    font-weight: 700;
    background: linear-gradient(90deg, #fff, #e6f7ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.slide-txt2 {
    color: rgba(255, 255, 255, 0.9);
    font-weight: 300;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
}
            </style>
		</div>
	</div>
	<!--//section slider-->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Slider functionality
        const slides = document.querySelectorAll('.hero-slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');
        let currentSlide = 0;
        let slideInterval;
        
        // Initialize slider
        function initSlider() {
            slides[0].classList.add('active');
            indicators[0].classList.add('active');
            
            // Start auto slide
            slideInterval = setInterval(nextSlide, 6000);
            
            // Add event listeners
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
            
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => goToSlide(index));
            });
            
            // Pause on hover
            const slider = document.querySelector('.hero-slider-container');
            slider.addEventListener('mouseenter', pauseSlider);
            slider.addEventListener('mouseleave', resumeSlider);
            
            // Add scroll functionality
            const scrollIndicator = document.querySelector('.scroll-indicator');
            scrollIndicator.addEventListener('click', scrollToContent);
        }
        
        function nextSlide() {
            goToSlide((currentSlide + 1) % slides.length);
        }
        
        function prevSlide() {
            goToSlide((currentSlide - 1 + slides.length) % slides.length);
        }
        
        function goToSlide(index) {
            // Remove active class from current slide
            slides[currentSlide].classList.remove('active');
            indicators[currentSlide].classList.remove('active');
            
            // Add active class to new slide
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
            
            // Reset animation for hero content
            const heroContent = slides[currentSlide].querySelector('.hero-content');
            heroContent.style.opacity = '0';
            heroContent.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                heroContent.style.opacity = '1';
                heroContent.style.transform = 'translateY(0)';
            }, 50);
            
            // Reset auto slide interval
            resetInterval();
        }
        
        function pauseSlider() {
            clearInterval(slideInterval);
        }
        
        function resumeSlider() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 6000);
        }
        
        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 6000);
        }
        
        function scrollToContent() {
            const statsSection = document.querySelector('.stats-section');
            if (statsSection) {
                window.scrollTo({
                    top: statsSection.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        }
        
        // Initialize on load
        initSlider();
        
        // Add parallax effect on scroll
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const background = document.querySelector('.background-image');
            if (background) {
                background.style.transform = `scale(${1 + scrolled * 0.0005})`;
            }
        });
        
        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>

<style>
    /* Stats Section Styles */
    .stats-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        position: relative;
        z-index: 2;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .stat-card {
        background: white;
        padding: 40px 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid rgba(82, 156, 155, 0.1);
    }
    
    .stat-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(82, 156, 155, 0.1);
    }
    
    .stat-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, rgba(82, 156, 155, 0.1) 0%, rgba(82, 156, 155, 0.2) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    
    .stat-icon i {
        font-size: 2.5rem;
        color: #529c9b;
    }
    
    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: #2c3e50;
        margin-bottom: 10px;
        line-height: 1;
    }
    
    .stat-label {
        color: #6c757d;
        font-size: 1.1rem;
        font-weight: 500;
    }
    
    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .stat-card {
            padding: 30px 20px;
        }
        
        .stat-number {
            font-size: 2.5rem;
        }
    }
    
    @media (max-width: 480px) {
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    // Counter animation for stats
    document.addEventListener('DOMContentLoaded', function() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 20);
        }
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-count'));
                    animateCounter(entry.target, target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        statNumbers.forEach(stat => {
            observer.observe(stat);
        });
    });
</script>


<!-- About Preview Section -->
<section class="about-preview-section py-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="about-preview-image">
                    <img src="h1.webp" alt="CENTOX Laboratory" class="img-fluid rounded shadow-lg">
                    <div class="experience-badge">
                        <span>15+ Years</span>
                        <small>of Excellence</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-header mb-4">
                    <h6 class="section-subtitle">About CENTOX</h6>
                    <h2 class="section-title">Leading Toxicology Research Center in Kenya</h2>
                    <div class="section-divider"></div>
                </div>
                <p class="lead">Center of Toxicology and Applied Research (CENTOX) is a premier institution dedicated to advancing human and environmental safety through cutting-edge toxicology research and applied solutions.</p>
                
                <div class="features-grid mt-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-flask text-purple-500 text-xl"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Advanced Research</h5>
                            <p>State-of-the-art laboratories and research facilities</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt text-blue-500 text-xl"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Safety Compliance</h5>
                            <p>Ensuring regulatory compliance and best practices</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-graduation-cap text-green-500 text-xl"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Expert Training</h5>
                            <p>Certified programs for professionals and industries</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-lightbulb text-yellow-500 text-xl"></i>
                        </div>
                        <div class="feature-content">
                            <h5>Innovative Solutions</h5>
                            <p>Customized solutions for diverse toxicology challenges</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('about') }}" class="btn btn-primary">Learn More About Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Showcase Section -->
<section class="services-showcase-section py-6 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h6 class="section-subtitle">Our Services</h6>
            <h2 class="section-title">Comprehensive Toxicology Solutions</h2>
            <p class="section-description">We offer end-to-end services for safety, compliance, and environmental protection</p>
            <div class="section-divider-center"></div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-showcase-card">
                    <div class="service-icon">
                        <i class="icon-consultation"></i>
                    </div>
                    <h4 class="service-title">Consultancy Services</h4>
                    <p class="service-description">Expert guidance for pharmaceutical registration, environmental impact assessment, and regulatory compliance.</p>
                    <ul class="service-features">
                        <li><i class="icon-check"></i> Drug Registration Support</li>
                        <li><i class="icon-check"></i> Environmental Assessment</li>
                        <li><i class="icon-check"></i> Regulatory Compliance</li>
                    </ul>
                    <a href="{{ route('services') }}#consultancy" class="service-link">Explore Details <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-showcase-card">
                    <div class="service-icon">
                        <i class="icon-analysis"></i>
                    </div>
                    <h4 class="service-title">Analytical Services</h4>
                    <p class="service-description">Advanced toxicological analysis including clinical, forensic, and environmental testing with accurate results.</p>
                    <ul class="service-features">
                        <li><i class="icon-check"></i> Clinical Toxicology</li>
                        <li><i class="icon-check"></i> Forensic Analysis</li>
                        <li><i class="icon-check"></i> Environmental Testing</li>
                    </ul>
                    <a href="{{ route('services') }}#analysis" class="service-link">Explore Details <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-showcase-card">
                    <div class="service-icon">
                        <i class="icon-training"></i>
                    </div>
                    <h4 class="service-title">Training Programs</h4>
                    <p class="service-description">Professional certification and training in chemical safety, emergency response, and environmental protection.</p>
                    <ul class="service-features">
                        <li><i class="icon-check"></i> Chemical Safety Officer</li>
                        <li><i class="icon-check"></i> HAZMAT Certification</li>
                        <li><i class="icon-check"></i> Emergency Response</li>
                    </ul>
                    <a href="{{ route('training') }}" class="service-link">Explore Details <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-showcase-card">
                    <div class="service-icon">
                        <i class="icon-products"></i>
                    </div>
                    <h4 class="service-title">Safety Products</h4>
                    <p class="service-description">Comprehensive range of PPE, testing kits, chemicals, and safety equipment for various industries.</p>
                    <ul class="service-features">
                        <li><i class="icon-check"></i> Personal Protective Equipment</li>
                        <li><i class="icon-check"></i> Testing Kits</li>
                        <li><i class="icon-check"></i> Laboratory Chemicals</li>
                    </ul>
                    <a href="{{ route('products') }}" class="service-link">Explore Details <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-showcase-card">
                    <div class="service-icon">
                        <i class="icon-waste-management"></i>
                    </div>
                    <h4 class="service-title">Waste Management</h4>
                    <p class="service-description">Safe handling, transportation, and disposal of toxic and hazardous waste materials.</p>
                    <ul class="service-features">
                        <li><i class="icon-check"></i> Hazardous Waste Disposal</li>
                        <li><i class="icon-check"></i> Environmental Compliance</li>
                        <li><i class="icon-check"></i> Spill Management</li>
                    </ul>
                    <a href="{{ route('services') }}#waste" class="service-link">Explore Details <i class="icon-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="service-showcase-card">
                    <div class="service-icon">
                        <i class="icon-advocacy"></i>
                    </div>
                    <h4 class="service-title">Advocacy & Media</h4>
                    <p class="service-description">Public awareness campaigns, community outreach, and policy advocacy for chemical safety.</p>
                    <ul class="service-features">
                        <li><i class="icon-check"></i> Community Awareness</li>
                        <li><i class="icon-check"></i> Policy Development</li>
                        <li><i class="icon-check"></i> Media Campaigns</li>
                    </ul>
                    <a href="{{ route('media') }}" class="service-link">Explore Details <i class="icon-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('services') }}" class="btn btn-primary btn-lg">View All Services</a>
        </div>
    </div>
</section>

<!-- Industries We Serve -->
<section class="industries-section py-6">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h6 class="section-subtitle">Our Reach</h6>
            <h2 class="section-title">Industries We Serve</h2>
            <p class="section-description">Providing toxicology solutions across multiple sectors</p>
            <div class="section-divider-center"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4 col-lg-2 mb-4">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="icon-healthcare"></i>
                    </div>
                    <h6>Healthcare</h6>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 mb-4">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="icon-agriculture"></i>
                    </div>
                    <h6>Agriculture</h6>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 mb-4">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="icon-manufacturing"></i>
                    </div>
                    <h6>Manufacturing</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="icon-pharmaceutical"></i>
                    </div>
                    <h6>Pharmaceutical</h6>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 mb-4">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="icon-education"></i>
                    </div>
                    <h6>Education</h6>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 mb-4">
                <div class="industry-card text-center">
                    <div class="industry-icon">
                        <i class="icon-government"></i>
                    </div>
                    <h6>Government</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="why-choose-section py-6 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="section-header mb-4">
                    <h6 class="section-subtitle">Why CENTOX</h6>
                    <h2 class="section-title">Why Choose Our Services</h2>
                    <div class="section-divider"></div>
                </div>
                
                <div class="accordion" id="whyChooseAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <i class="icon-expertise"></i> Expert Team
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#whyChooseAccordion">
                            <div class="accordion-body">
                                Our team comprises certified toxicologists, environmental scientists, and safety professionals with extensive industry experience.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                <i class="icon-technology"></i> Advanced Technology
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#whyChooseAccordion">
                            <div class="accordion-body">
                                State-of-the-art laboratories equipped with modern analytical instruments for accurate and reliable results.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                <i class="icon-certification"></i> Quality Assurance
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#whyChooseAccordion">
                            <div class="accordion-body">
                                Strict quality control protocols and adherence to international standards ensure consistent service excellence.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                <i class="icon-support"></i> Client Support
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#whyChooseAccordion">
                            <div class="accordion-body">
                                24/7 emergency support and dedicated account managers for personalized service delivery.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="why-choose-image">
                    <img src="h7.jpg" alt="Laboratory Technology" class="img-fluid rounded shadow-lg">
                    <div class="certification-badge">
                        <i class="icon-certified"></i>
                        <span>ISO Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-6">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h6 class="section-subtitle">Client Feedback</h6>
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-description">Trusted by leading organizations across East Africa</p>
            <div class="section-divider-center"></div>
        </div>
        
        <div class="testimonial-slider">
            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                    </div>
                    <p class="testimonial-text">"CENTOX provided exceptional environmental assessment services for our manufacturing plant. Their expertise in toxicology helped us achieve full regulatory compliance."</p>
                    <div class="testimonial-author">
                        {{-- <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Client" class="author-image"> --}}
                        <div class="author-info">
                            <h6>Dr. James Kariuki</h6>
                            <p>Environmental Manager, Manufacturing Co.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star"></i>
                    </div>
                    <p class="testimonial-text">"The chemical safety training program transformed our workplace safety culture. Our team is now better equipped to handle hazardous materials safely."</p>
                    <div class="testimonial-author">
                        {{-- <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Client" class="author-image"> --}}
                        <div class="author-info">
                            <h6>Sarah Mwangi</h6>
                            <p>Safety Officer, Agricultural Company</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-slide">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                    </div>
                    <p class="testimonial-text">"Their prompt emergency response during a chemical spill incident was impressive. Professional, efficient, and highly knowledgeable team."</p>
                    <div class="testimonial-author">
                        {{-- <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Client" class="author-image"> --}}
                        <div class="author-info">
                            <h6>Peter Otieno</h6>
                            <p>Operations Manager, Industrial Plant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News & Updates -->
<section class="news-section py-6 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h6 class="section-subtitle">Latest Updates</h6>
            <h2 class="section-title">News & Publications</h2>
            <p class="section-description">Stay informed with the latest in toxicology and safety</p>
            <div class="section-divider-center"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="News" class="img-fluid">
                        <div class="news-date">
                            <span>15</span>
                            <small>NOV</small>
                        </div>
                    </div>
                    <div class="news-content">
                        <span class="news-category">Research</span>
                        <h5 class="news-title">New Methods in Pesticide Detection</h5>
                        <p class="news-excerpt">Our latest research on advanced pesticide detection methods in agricultural products.</p>
                        <a href="#" class="news-link">Read More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="News" class="img-fluid">
                        <div class="news-date">
                            <span>28</span>
                            <small>OCT</small>
                        </div>
                    </div>
                    <div class="news-content">
                        <span class="news-category">Training</span>
                        <h5 class="news-title">Chemical Safety Week 2023</h5>
                        <p class="news-excerpt">Join our annual chemical safety awareness week with free workshops and training sessions.</p>
                        <a href="#" class="news-link">Read More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="News" class="img-fluid">
                        <div class="news-date">
                            <span>10</span>
                            <small>OCT</small>
                        </div>
                    </div>
                    <div class="news-content">
                        <span class="news-category">Partnership</span>
                        <h5 class="news-title">New Industry Collaboration</h5>
                        <p class="news-excerpt">CENTOX partners with leading pharmaceutical companies for research initiatives.</p>
                        <a href="#" class="news-link">Read More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="{{ route('media') }}" class="btn btn-outline-primary">View All News</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="h1 mb-3">Ready to Enhance Your Safety Standards?</h2>
                <p class="lead mb-0">Contact us today for a consultation or request a quote for our services.</p>
            </div>
            <div class="col-lg-4 text-lg-right">
     
                <a href="tel:+254728534454" class="btn btn-outline-primary btn-lg">Call Now</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
   
    /* Hero Section */
    .hero-section {
        position: relative;
        overflow: hidden;
    }
    
    .hero-slider {
        position: relative;
    }
    
    .hero-slide {
        padding: 100px 0;
        background-size: cover !important;
        background-position: center !important;
        min-height: 85vh;
        display: flex;
        align-items: center;
    }
    
    .hero-content {
        color: white;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
        font-weight: 600;
        letter-spacing: 2px;
        margin-bottom: 15px;
        color: rgba(255,255,255,0.9);
    }
    
    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 20px;
    }
    
    .hero-text {
        font-size: 1.2rem;
        margin-bottom: 30px;
        opacity: 0.9;
        max-width: 600px;
    }
    
    .slider-controls {
        position: absolute;
        bottom: 40px;
        right: 40px;
        z-index: 10;
    }
    
    .slider-controls button {
        background: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-left: 10px;
        transition: all 0.3s ease;
    }
    
    .slider-controls button:hover {
        background: var(--primary-color);
        color: white;
    }
    
    /* Stats Section */
    .stats-section {
        background: #f8f9fa;
    }
    
    .stat-card {
        padding: 30px 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .stat-card:hover {
        transform: translateY(-5px);
    }
    
    .stat-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
    }
    
    .stat-label {
        color: #666;
        font-weight: 500;
    }
    
    /* About Preview */
    .about-preview-section {
        background: white;
    }
    
    .section-header {
        position: relative;
    }
    
    .section-subtitle {
        color: var(--primary-color);
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .section-divider {
        width: 80px;
        height: 4px;
        background: var(--primary-color);
        margin: 20px 0;
    }
    
    .section-divider-center {
        width: 80px;
        height: 4px;
        background: var(--primary-color);
        margin: 20px auto;
    }
    
    .section-description {
        color: #666;
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto 30px;
    }
    
    .about-preview-image {
        position: relative;
    }
    
    .experience-badge {
        position: absolute;
        bottom: -20px;
        right: -20px;
        background: var(--primary-color);
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(82, 156, 155, 0.3);
    }
    
    .experience-badge span {
        display: block;
        font-size: 1.8rem;
        font-weight: 700;
    }
    
    .features-grid {
        display: grid;
        gap: 20px;
    }
    
    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }
    
    .feature-icon {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        background: var(--primary-bg);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--primary-color);
    }
    
    .feature-content h5 {
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    /* Services Showcase */
    .service-showcase-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #f0f0f0;
    }
    
    .service-showcase-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(82, 156, 155, 0.1);
        border-color: var(--primary-color);
    }
    
    .service-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }
    
    .service-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .service-description {
        color: #666;
        margin-bottom: 20px;
    }
    
    .service-features {
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }
    
    .service-features li {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .service-features .icon-check {
        color: var(--primary-color);
    }
    
    .service-link {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    
    /* Industries */
    .industries-section {
        background: white;
    }
    
    .industry-card {
        padding: 30px 20px;
        border: 2px solid #f0f0f0;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .industry-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
    }
    
    .industry-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 15px;
    }
    
    .industry-card h6 {
        font-weight: 600;
        margin: 0;
    }
    
    /* Why Choose */
    .why-choose-section {
        background: white;
    }
    
    .accordion-item {
        border: none;
        margin-bottom: 15px;
        background: #f8f9fa;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .accordion-button {
        background: #f8f9fa;
        border: none;
        font-weight: 600;
        padding: 20px;
        font-size: 1.1rem;
    }
    
    .accordion-button:not(.collapsed) {
        background: var(--primary-color);
        color: white;
    }
    
    .accordion-button i {
        margin-right: 10px;
    }
    
    .accordion-body {
        padding: 20px;
        background: white;
    }
    
    .why-choose-image {
        position: relative;
    }
    
    .certification-badge {
        position: absolute;
        top: -20px;
        right: -20px;
        background: white;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
    }
    
    .certification-badge i {
        color: var(--primary-color);
        font-size: 1.5rem;
    }
    
    /* Testimonials */
    .testimonials-section {
        background: #f8f9fa;
    }
    
    .testimonial-slider {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .testimonial-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        text-align: center;
    }
    
    .testimonial-rating {
        color: #FFC107;
        margin-bottom: 20px;
        font-size: 1.2rem;
    }
    
    .testimonial-text {
        font-size: 1.1rem;
        font-style: italic;
        color: #555;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .testimonial-author {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    
    .author-image {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }
    
    .author-info h6 {
        margin: 0;
        font-weight: 600;
    }
    
    .author-info p {
        color: #777;
        margin: 5px 0 0;
        font-size: 0.9rem;
    }
    
    /* News Section */
    .news-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }
    
    .news-card:hover {
        transform: translateY(-5px);
    }
    
    .news-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }
    
    .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .news-card:hover .news-image img {
        transform: scale(1.05);
    }
    
    .news-date {
        position: absolute;
        top: 20px;
        left: 20px;
        background: var(--primary-color);
        color: white;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        min-width: 60px;
    }
    
    .news-date span {
        display: block;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
    }
    
    .news-date small {
        font-size: 0.8rem;
        opacity: 0.9;
    }
    
    .news-content {
        padding: 25px;
    }
    
    .news-category {
        display: inline-block;
        background: var(--primary-bg);
        color: var(--primary-color);
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 15px;
    }
    
    .news-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.4;
    }
    
    .news-excerpt {
        color: #666;
        margin-bottom: 15px;
        line-height: 1.6;
    }
    
    .news-link {
        color: var(--primary-color);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    
    /* Emergency Banner */
    .emergency-banner {
        color: white;
    }
    
    .emergency-banner .btn-light {
        background: white;
        color: var(--primary-color);
        font-weight: 600;
        padding: 15px 30px;
        border-radius: 30px;
    }
    
    /* CTA Section */
    .cta-section {
        background: white;
        border-top: 1px solid #f0f0f0;
    }
    
    /* Buttons */
    .btn-primary {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-primary:hover {
        background: var(--primary-dark);
        border-color: var(--primary-dark);
    }
    
    .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }
        
        .hero-slide {
            padding: 60px 0;
            min-height: auto;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .slider-controls {
            bottom: 20px;
            right: 20px;
        }
        
        .experience-badge {
            position: relative;
            bottom: 0;
            right: 0;
            margin-top: 20px;
        }
        
        .certification-badge {
            position: relative;
            top: 0;
            right: 0;
            margin-top: 20px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize hero slider
        $('.hero-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            pauseOnHover: false
        });
        
        // Custom slider controls
        $('.slider-prev').click(function() {
            $('.hero-slider').slick('slickPrev');
        });
        
        $('.slider-next').click(function() {
            $('.hero-slider').slick('slickNext');
        });
        
        // Initialize testimonial slider
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false
        });
        
        // Counter animation for stats
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.attr('data-count');
            
            $({ countNum: 0 }).animate({
                countNum: countTo
            }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
        
        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 100
                }, 800);
            }
        });
        
        // Accordion functionality
        $('.accordion-button').click(function() {
            $(this).toggleClass('collapsed');
            $(this).find('i').toggleClass('icon-arrow-down icon-arrow-up');
        });
    });
</script>
@endpush