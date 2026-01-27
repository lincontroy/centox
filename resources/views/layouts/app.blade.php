<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Center of Toxicology and Applied Research - Human and Environmental Safety">
    <meta name="author" content="CENTOX">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title', 'CENTOX - Center of Toxicology and Applied Research')</title>
    
    <!-- Stylesheets -->
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @stack('styles')
    <style>
         /* Color Variables */
    :root {
        --primary-color: #228B22;
        --primary-dark: #228B22;
        --primary-light: #228B22;
        --primary-bg: rgba(82, 156, 155, 0.1);
    }
    
    </style>
</head>

<body class="shop-page layout-medlab">

<!-- Header -->
<header class="header">
    <div class="header-quickLinks js-header-quickLinks d-lg-none">
        <div class="quickLinks-top js-quickLinks-top"></div>
        <div class="js-quickLinks-wrap-m"></div>
    </div>
    
    <div class="header-topline d-none d-lg-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto d-flex align-items-center">
                    <div class="header-info"><i class="icon-placeholder2"></i>P.O. Box 105356-00101, Nairobi, Kenya</div>
                    <div class="header-phone"><i class="icon-telephone"></i><a href="tel:+254728534454">+254734000500</a></div>
                    <div class="header-info"><i class="icon-black-envelope"></i><a href="mailto:info@centox.co.ke">info@centox.co.ke</a></div>
                </div>
                <div class="col-auto ml-auto d-flex align-items-center">
                    <span class="header-social">
                        <a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
                        <a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
                        <a href="#" class="hovicon"><i class="icon-linkedin-logo-circle"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-content">
        <div class="container">
            <div class="row align-items-lg-center">
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                    <span class="icon-menu"></span>
                </button>
                
                <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                    <a href="{{ route('home') }}" class="header-logo">
                        <img src="{{ asset('logo.png') }}" alt="CENTOX Logo" class="img-fluid">
                    </a>
                </div>
                
                <div class="col-lg ml-auto header-nav-wrap">
                    <div class="header-nav js-header-nav">
                        <nav class="navbar navbar-expand-lg btco-hover-menu">
                            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item dropdown {{ request()->routeIs('services') ? 'active' : '' }}">
                                        <a href="{{ route('services') }}" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('services') }}#consultancy">Consultancy</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services') }}#analysis">Analysis</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services') }}#education">Education & Training</a></li>
                                            <li><a class="dropdown-item" href="{{ route('services') }}#waste">Toxic Waste Management</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('products') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('products') }}">Products</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('training') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('training') }}">Training & Advocacy</a>
                                    </li>
                                   
                                    <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    
                    <div class="header-search">
                        <form action="#" class="form-inline">
                            <i class="icon-search"></i>
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--//header-->

<!-- Main Content -->
<div class="page-content">
    @yield('content')
</div>

<!-- Footer -->
<div class="footer mt-0">
    <div class="container">
        <div class="row py-1 py-md-2 px-lg-0">
            <div class="col-lg-4 footer-col1 pt-lg-3">
                <div class="row flex-column flex-md-row flex-lg-column">
                    <div class="col-md col-lg-auto">
                        <div class="footer-logo">
                            <img src="{{ asset('logo.png') }}" alt="CENTOX" class="img-fluid" style="filter: brightness(0) invert(1);">
                        </div>
                        <div class="mt-2 mt-lg-0"></div>
                        <div class="footer-social d-none d-md-block d-lg-none">
                            <a href="#" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="#" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                            <a href="#" target="blank" class="hovicon"><i class="icon-linkedin-logo"></i></a>
                            <a href="#" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-text mt-1 mt-lg-1">
                            <p>Subscribe to our toxicology research updates</p>
                            <form action="#" class="footer-subscribe">
                                <div class="input-group">
                                    <input name="subscribe_mail" type="text" class="form-control" placeholder="Your Email">
                                    <span><i class="icon-black-envelope"></i></span>
                                </div>
                            </form>
                        </div>
                        <div class="footer-social d-md-none d-lg-block">
                            <a href="#" target="blank" class="hovicon"><i class="icon-facebook-logo"></i></a>
                            <a href="#" target="blank" class="hovicon"><i class="icon-twitter-logo"></i></a>
                            <a href="#" target="blank" class="hovicon"><i class="icon-linkedin-logo"></i></a>
                            <a href="#" target="blank" class="hovicon"><i class="icon-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-lg-4">
                <h3>Quick Links</h3>
                <div class="h-decor"></div>
                <ul class="icn-list">
                    <li><a href="{{ route('services') }}"><i class="icon-right-arrow"></i> Our Services</a></li>
                    <li><a href="{{ route('products') }}"><i class="icon-right-arrow"></i> Products Catalog</a></li>
                    <li><a href="{{ route('training') }}"><i class="icon-right-arrow"></i> Training Programs</a></li>
                    <li><a href="{{ route('media') }}"><i class="icon-right-arrow"></i> Media Resources</a></li>
                    <li><a href="{{ route('contact') }}"><i class="icon-right-arrow"></i> Contact Us</a></li>
                </ul>
            </div>
            
            <div class="col-sm-6 col-lg-4">
                <h3>Contact Information</h3>
                <div class="h-decor"></div>
                <ul class="icn-list">
                    <li><i class="icon-placeholder2"></i>P.O. Box 105356-00101<br>Nairobi, Kenya
                        <br>
                        <a href="{{ route('contact') }}" class="btn btn-xs btn-gradient"><i class="icon-placeholder2"></i><span>Get Directions</span><i class="icon-right-arrow"></i></a>
                    </li>
                    <li><i class="icon-telephone"></i><b><span class="phone"><span class="text-nowrap">+254734000500</span></span></b>
                        <br>(Emergency & General Inquiries)
                    </li>
                    <li><i class="icon-black-envelope"></i><a href="mailto:info@centox.co.ke">info@centox.co.ke</a></li>
                    <li><i class="icon-world"></i><a href="https://www.centox.co.ke" target="_blank">www.centox.co.ke</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-sm">Copyright © {{ date('Y') }} <a href="{{ route('home') }}">Center of Toxicology and Applied Research</a><span>   |   </span>
                    <a href="#">Privacy Policy</a></div>
                <div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">Emergency Hotline   </span><i class="icon-telephone"></i>  <b>+254734000500</b></div>
            </div>
        </div>
    </div>
</div>
<!--//footer-->

<!-- Back to Top -->
<div class="backToTop js-backToTop">
    <i class="icon icon-up-arrow"></i>
</div>

<!-- Contact Modal -->
<div class="modal modal-form fade" id="modalContactForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label="Close" class="close" data-dismiss="modal">
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <h3>Contact CENTOX</h3>
                    <form class="mt-15" id="contactModalForm" method="post" novalidate="">
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="input-group">
                            <span><i class="icon-user"></i></span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*">
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span><i class="icon-email2"></i></span>
                                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1 mt-sm-0">
                                <div class="input-group">
                                    <span><i class="icon-smartphone"></i></span>
                                    <input type="text" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone">
                                </div>
                            </div>
                        </div>
                        <div class="selectWrapper input-group mt-1">
                            <span><i class="icon-micro"></i></span>
                            <select name="service" class="form-control">
                                <option selected="selected" disabled="disabled">Select Service</option>
                                <option value="Consultancy">Consultancy</option>
                                <option value="Analysis">Toxicological Analysis</option>
                                <option value="Training">Training Programs</option>
                                <option value="Products">Product Inquiry</option>
                                <option value="Emergency">Emergency Response</option>
                            </select>
                        </div>
                        <textarea name="message" class="form-control" placeholder="Your Message*"></textarea>
                        <div class="text-right mt-2">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vendors -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/sticky.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.scroll-with-ease.min.js') }}"></script>
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

<!-- Custom Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/color.js') }}"></script>
<script src="{{ asset('js/app-shop.js') }}"></script>
<script src="{{ asset('js/forms.js') }}"></script>

@stack('scripts')

</body>
</html>