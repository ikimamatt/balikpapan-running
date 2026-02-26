<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adelux</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="web icon" href="{{ asset('assets/images/favicon.ico') }}">
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="navbar-container">
            <div class="hero-container">
                <nav class="navbar navbar-expand-xl">
                    <div class="navbar-nav-container">
                
                    <!-- Logo Container -->
                    <div class="logo-container">
                        <a class="navbar-brand fw-bold" href="#">
                            <img src="{{ asset('assets/images/running/BCR Logo-01.png') }}" alt="Logo" class="img-fluid" style="height: 50px;">
                        </a>
                    </div>
                
                    <!-- Nav Link Container -->
                    <div class="nav-link-container">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="./index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Event</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Categories <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">5K Fun Run</a></li>
                                        <li><a class="dropdown-item" href="#">10K Challenge</a></li>
                                        <li><a class="dropdown-item" href="#">21K Half Marathon</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Race Info <i class="fa-solid fa-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Route Map</a></li>
                                        <li><a class="dropdown-item" href="#">Rules & Regulations</a></li>
                                        <li><a class="dropdown-item" href="#">Race Pack Collection</a></li>
                                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            
                    <button class="nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                
                    <!-- Navbar Social Container -->
                    <div class="navbar-cta-container">
                        <div>
                            <a href="#" class="btn btn-accent">
                                <span class="btn-title">Register Now</span>
                                <span class="icon-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Sidebar Section -->
    <aside>
        <div>
            <div class="sidebar-overlay"></div>
            <div class="sidebar">
                <div class="sidebar-header">
                    <div class="logo">
                        <img src="{{ asset('assets/images/running/BCR Logo-01.png') }}" class="logo" alt="Logo" style="height: 40px; width: auto;">
                    </div>
                    <button class="close-btn"><span>X</span></button>
                </div>
                <ul class="menu">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="#about">About Event</a></li>
                    <li class="sidebar-dropdown">
                        <div class="dropdown-header">
                            <a href="#">Categories</a>
                            <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <ul class="sidebar-dropdown-menu">
                            <li><a href="#">5K Fun Run</a></li>
                            <li><a href="#">10K Challenge</a></li>
                            <li><a href="#">21K Half Marathon</a></li>
                        </ul>
                    </li>         
                    <li class="sidebar-dropdown">
                        <div class="dropdown-header">
                            <a href="#">Race Info</a>
                            <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button>
                        </div>
                        <ul class="sidebar-dropdown-menu">
                            <li><a href="#">Route Map</a></li>
                            <li><a href="#">Rules & Regulations</a></li>
                            <li><a href="#">Race Pack Collection</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>   
                    <li class="below-dropdown"><a href="./contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </aside>

    <!-- Main Section -->
    <main>
        <!-- Banner Home Section -->
        <div class="pb-0" style="padding-top: 0;">
            <div class="banner-home-container" style="border-radius: 0; background-image: url('{{ asset('assets/images/running/jumbotron.jpg') }}'); background-size: cover; background-position: center 40%; position: relative; z-index: 1;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(1,14,30,0.72); z-index: -1;"></div>
                <div class="hero-container">
                    <div class="bcr-hero-wrapper">
                        <div class="bcr-hero-left animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                            <!-- <div class="bcr-badge">
                                <i class="fa-solid fa-flag-checkered"></i>
                                <span>East Kalimantan's Biggest Run</span>
                            </div> -->
                            <h1 class="secondary-accent bcr-hero-title">Balikpapan<br>Coastal Running<br><span class="bcr-year">2026</span></h1>

                            <!-- Countdown Timer -->
                            <div class="bcr-countdown-wrapper">
                                <div class="bcr-countdown-label">Race Day Countdown</div>
                                <div class="bcr-countdown" id="bcr-countdown">
                                    <div class="bcr-countdown-block">
                                        <span class="bcr-countdown-num" id="cd-days">00</span>
                                        <span class="bcr-countdown-unit">Days</span>
                                    </div>
                                    <span class="bcr-countdown-sep">:</span>
                                    <div class="bcr-countdown-block">
                                        <span class="bcr-countdown-num" id="cd-hours">00</span>
                                        <span class="bcr-countdown-unit">Hours</span>
                                    </div>
                                    <span class="bcr-countdown-sep">:</span>
                                    <div class="bcr-countdown-block">
                                        <span class="bcr-countdown-num" id="cd-mins">00</span>
                                        <span class="bcr-countdown-unit">Mins</span>
                                    </div>
                                    <span class="bcr-countdown-sep">:</span>
                                    <div class="bcr-countdown-block">
                                        <span class="bcr-countdown-num" id="cd-secs">00</span>
                                        <span class="bcr-countdown-unit">Secs</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bcr-stats-row">
                                <div class="bcr-stat">
                                    <span class="bcr-stat-num">5,000+</span>
                                    <span class="bcr-stat-label">Runners</span>
                                </div>
                                <div class="bcr-stat-divider"></div>
                                <div class="bcr-stat">
                                    <span class="bcr-stat-num">4</span>
                                    <span class="bcr-stat-label">Categories</span>
                                </div>
                                <div class="bcr-stat-divider"></div>
                                <div class="bcr-stat">
                                    <span class="bcr-stat-num">21K</span>
                                    <span class="bcr-stat-label">Longest Route</span>
                                </div>
                            </div>
                        </div>
                        <div class="bcr-hero-right animate-box animate__animated animated-delay-slow" data-animate="animate__fadeInRight">
                            <div class="bcr-event-card">
                                <div class="bcr-event-card-header">
                                    <span class="bcr-event-tag">Open Registration</span>
                                </div>
                                <h3 class="bcr-event-card-title">Secure Your Spot Early &amp; Get Exclusive Perks</h3>
                                <p class="bcr-event-card-desc">Register now to get your exclusive race pack including running tee, finisher medal, and access to the post-run festival!</p>
                                <div class="bcr-event-meta">
                                    <div class="bcr-meta-item">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span>15 March 2026</span>
                                    </div>
                                    <div class="bcr-meta-item">
                                        <i class="fa-solid fa-map-pin"></i>
                                        <span>Pantai Balikpapan, Kalimantan Timur</span>
                                    </div>
                                    <div class="bcr-meta-item">
                                        <i class="fa-solid fa-person-running"></i>
                                        <span>5K &bull; 10K &bull; 21K &bull; Kids 1K</span>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-accent bcr-register-btn">
                                    <span class="btn-title">Register Now</span>
                                    <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Modal Video -->
        <div class="section p-0">
            <div id="modal-overlay" class="modal-overlay">
                <span class="my-close"><i class="fa-solid fa-xmark"></i></span>
                <div class="my-modal">
                <iframe id="my-video-frame" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        
        <!-- About Section -->
        <div class="section">
            <div class="hero-container">
                <div class="about-wrapper">
                    <div class="about-image-container">
                            <div class="image-container about-img animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                            <img src="{{ asset('assets/images/dummy-img-600x800.jpg') }}" alt="About Us Img">
                            <div class="card card-about-detail animate-box animate__animated animated-delay-slow" data-animate="animate__fadeInUp">
                                <h4>Balikpapan Coastal Run is a premier running destination where passion, performance, and people come together.</h4>
                                <a href="#about" class="link-wrapper">
                                    <span>Learn More</span>
                                    <i class="fa-solid fa-chevron-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="about-content-description">
                        <div class="d-flex flex-column gspace-2 animate-box animate__animated animated" data-animate="animate__fadeInRight">
                            <div>
                                <div class="sub-heading">
                                    <i class="fa-solid fa-circle accent-color-2"></i>
                                    <span class="sub-heading-title">About Us</span>
                                </div>
                            </div>
                            <h2>More Than Just a Race, It's an Experience.</h2>
                        </div>
                        <div class="d-flex flex-column gspace-2">
                            <div class="about-description-container">
                                <div class="animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                                    <p>At Balikpapan Coastal Running, we go beyond the finish line. Established with a vision to celebrate health and community, we offer a breathtaking coastal route, certified pacers, and a welcoming environment that supports every runner's journey.</p>
                                    <p>From fun runners to competitive marathoners, BCR is built for those who want to push their limits, stay active, and be part of something bigger. Whether you're running for fun, fitness, or professional growth — BCR has a distance for everyone.</p>
                                </div>

                                <div class="d-flex flex-column justify-content-center animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                                    <div class="row row-cols-md-3 row-cols-1 grid-spacer-4">
                                        <div class="col">
                                            <div class="about-highlight-box">
                                                <span class="counter counter-year about-highlight-text" data-target="2026"></span>
                                                <h5>Established</h5>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="about-highlight-box">
                                                <span class="counter about-highlight-text" data-target="5000"></span>
                                                <h5>Runners</h5>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="about-highlight-box">
                                                <span class="counter about-highlight-text" data-target="3"></span>
                                                <h5>Categories</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="section-wrapper py-0">
            <div class="section section-chooseus">
                <div class="hero-container">
                    <div class="d-flex flex-column flex-xl-row align-items-center gspace-100">
                        
                        <div class="chooseus-title-container">
                            <div class="d-flex flex-column gspace-2 animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                                <div>
                                    <div class="sub-heading">
                                        <i class="fa-solid fa-circle accent-color-2"></i>
                                        <span class="sub-heading-title">Race Highlights</span>
                                    </div>
                                </div>
                                <h2>Why Runners Choose BCR.</h2>
                                <p class="mb-0">Discover what makes Balikpapan Coastal Running the top destination for runners of all levels.</p>
                            </div>
                            <div class="image-container whychoose-img animate-box animate__animated animated-delay-slow" data-animate="animate__fadeInLeft">
                                <img src="{{ asset('assets/images/dummy-img-600x400.jpg') }}" alt="Why Choose Us Image" class="chooseus-img">
                                <div class="whychooseus-avatar-container">
                                        <div class="d-flex flex-row align-items-center">
                                        <img src="{{ asset('assets/images/dummy-img-400x400.jpg') }}" alt="Reviewer" class="banner-avatar">
                                        <img src="{{ asset('assets/images/dummy-img-400x400.jpg') }}" alt="Reviewer" class="banner-avatar">
                                        <img src="{{ asset('assets/images/dummy-img-400x400.jpg') }}" alt="Reviewer" class="banner-avatar">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row align-items-center gspace-1">
                                            <h5 class="accent-color-2">25+</h5>
                                            <h6 class="secondary-accent">Membership</h6>
                                        </div>
                                        <span class="chooseus-img-description">Enjoy our Facility</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chooseus-card-container">
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                <div class="col">
                                    <div class="card card-chooseus animate-box animate__animated animated" data-animate="animate__fadeInRight">
                                        <div class="chooseus-icon">
                                            <img src="{{ asset('assets/images/Icon-1.png') }}" alt="Scenic Coastal Route" class="img-fluid">
                                        </div>
                                        <h4>Scenic Coastal Route</h4>
                                        <a href="#" class="chooseus-btn">
                                            <span class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-chooseus bg-accent-color animate-box animate__animated animated-delay-slow" data-animate="animate__fadeInRight">
                                        <div class="chooseus-icon">
                                            <img src="{{ asset('assets/images/Icon-2.png') }}" alt="Exclusive Medals" class="img-fluid">
                                        </div>
                                        <h4 class="secondary-accent">Exclusive Finisher Medals</h4>
                                        <a href="#" class="chooseus-btn">
                                            <span class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-chooseus animate-box animate__animated animated" data-animate="animate__fadeInRight">
                                        <div class="chooseus-icon">
                                            <img src="{{ asset('assets/images/Icon-3.png') }}" alt="Hydration Points" class="img-fluid">
                                        </div>
                                        <h4>Well-Placed Hydration Stations</h4>
                                        <a href="#" class="chooseus-btn">
                                            <span class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card card-chooseus animate-box animate__animated animated-delay-slow" data-animate="animate__fadeInRight">
                                        <div class="chooseus-icon">
                                            <img src="{{ asset('assets/images/Icon-4.png') }}" alt="Race Village" class="img-fluid">
                                        </div>
                                        <h4>Festival & Race Village</h4>
                                        <a href="#" class="chooseus-btn">
                                            <span class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Service Section -->
        <div class="section">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-5">
                    <div class="service-title-container">
                        <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                            <div class="col">
                                <div class="d-flex flex-column gspace-2 justify-content-center justify-content-md- text-md-start text-center animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                                    <div>
                                        <div class="sub-heading">
                                            <i class="fa-solid fa-circle accent-color-2"></i>
                                            <span class="sub-heading-title">Race Categories</span>
                                        </div>
                                    </div>
                                    <h2>Pick Your Distance</h2>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column h-100 align-items-center align-items-md-end justify-content-center justify-content-md-end animate-box animate__animated animated" data-animate="animate__fadeInRight">
                                    <a href="#" class="btn btn-accent">
                                        <span class="btn-title">
                                            View Details
                                        </span>
                                        <span class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 grid-spacer-2 w-100">
                        <div class="col">
                            <div class="card card-service animate-box animate__animated animated-delay-fast" data-animate="animate__fadeInRight">
                                <div class="image-container">
                                    <div class="service-icon-container">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/images/Icon-5.png') }}" alt="Service Image" class="img-fluid">
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/images/dummy-img-600x800.jpg') }}" alt="Service Image" class="service-img">
                                    <div class="service-detail-container">
                                        <div class="service-detail">
                                            <h4 class="secondary-accent">5K Fun Run</h4>
                                            <div>
                                                <a href="#" class="service-btn">
                                                    <span class="icon-circle">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animate__animated animated" data-animate="animate__fadeInRight">
                                <div class="image-container">
                                    <div class="service-icon-container">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/images/Icon-6.png') }}" alt="10K Challenge" class="img-fluid">
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/images/dummy-img-600x800.jpg') }}" alt="10K Challenge" class="service-img">
                                    <div class="service-detail-container">
                                        <div class="service-detail">
                                            <h4 class="secondary-accent">10K Challenge</h4>
                                            <div>
                                                <a href="#" class="service-btn">
                                                    <span class="icon-circle">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animate__animated animated" data-animate="animate__fadeInRight">
                                <div class="image-container">
                                    <div class="service-icon-container">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/images/Icon-7.png') }}" alt="21K Half Marathon" class="img-fluid">
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/images/dummy-img-600x800.jpg') }}" alt="21K Half Marathon" class="service-img">
                                    <div class="service-detail-container">
                                        <div class="service-detail">
                                            <h4 class="secondary-accent">21K Half Marathon</h4>
                                            <div>
                                                <a href="#" class="service-btn">
                                                    <span class="icon-circle">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-service animate-box animate__animated animated-delay-slow" data-animate="animate__fadeInRight">
                                <div class="image-container">
                                    <div class="service-icon-container">
                                        <div class="service-icon">
                                            <img src="{{ asset('assets/images/Icon-8.png') }}" alt="Kids Dash" class="img-fluid">
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/images/dummy-img-600x800.jpg') }}" alt="Kids Dash" class="service-img">
                                    <div class="service-detail-container">
                                        <div class="service-detail">
                                            <h4 class="secondary-accent">Kids Dash 1K</h4>
                                            <div>
                                                <a href="#" class="service-btn">
                                                    <span class="icon-circle">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Pricing Section -->
        <div class="section" id="info">
            <div class="hero-container">
                <div class="d-flex flex-column gspace-5">
                    <div class="text-center animate-box animate__animated animated" data-animate="animate__fadeInUp">
                        <div class="sub-heading justify-content-center">
                            <i class="fa-solid fa-circle accent-color-2"></i>
                            <span class="sub-heading-title">Registration</span>
                        </div>
                        <h2>Choose Your Race Package</h2>
                        <p style="max-width:560px; margin:0 auto;">Early bird slots are limited. Register now and save on your entry fee plus get exclusive race perks!</p>
                    </div>
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 grid-spacer-2">
                        <!-- 5K -->
                        <div class="col">
                            <div class="bcr-price-card animate-box animate__animated animated" data-animate="animate__fadeInUp">
                                <div class="bcr-price-badge" style="background:var(--accent-color-9);">Fun Run</div>
                                <div class="bcr-price-distance">5K</div>
                                <div class="bcr-price-amount">Rp 150<span class="bcr-price-unit">K</span></div>
                                <div class="bcr-price-phase">Early Bird</div>
                                <ul class="bcr-price-features">
                                    <li><i class="fa-solid fa-check"></i> Race Bib &amp; Chip Timing</li>
                                    <li><i class="fa-solid fa-check"></i> Running Tee</li>
                                    <li><i class="fa-solid fa-check"></i> Finisher Medal</li>
                                    <li><i class="fa-solid fa-check"></i> Water &amp; Isotonic Station</li>
                                    <li><i class="fa-solid fa-check"></i> Post-Race Festival Access</li>
                                </ul>
                                <a href="#" class="btn btn-accent" style="width:100%;justify-content:space-between;">
                                    <span class="btn-title">Daftar Sekarang</span>
                                    <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- 10K -->
                        <div class="col">
                            <div class="bcr-price-card animate-box animate__animated animated" data-animate="animate__fadeInUp">
                                <div class="bcr-price-badge" style="background:var(--accent-color-6);">Challenge</div>
                                <div class="bcr-price-distance">10K</div>
                                <div class="bcr-price-amount">Rp 200<span class="bcr-price-unit">K</span></div>
                                <div class="bcr-price-phase">Early Bird</div>
                                <ul class="bcr-price-features">
                                    <li><i class="fa-solid fa-check"></i> Race Bib &amp; Chip Timing</li>
                                    <li><i class="fa-solid fa-check"></i> Running Tee</li>
                                    <li><i class="fa-solid fa-check"></i> Finisher Medal</li>
                                    <li><i class="fa-solid fa-check"></i> Water &amp; Isotonic Station</li>
                                    <li><i class="fa-solid fa-check"></i> Post-Race Festival Access</li>
                                </ul>
                                <a href="#" class="btn btn-accent" style="width:100%;justify-content:space-between;">
                                    <span class="btn-title">Daftar Sekarang</span>
                                    <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- 21K -->
                        <div class="col">
                            <div class="bcr-price-card bcr-price-card--featured animate-box animate__animated animated" data-animate="animate__fadeInUp">
                                <div class="bcr-price-featured-label">Most Popular</div>
                                <div class="bcr-price-badge" style="background:var(--accent-color-2);">Half Marathon</div>
                                <div class="bcr-price-distance">21K</div>
                                <div class="bcr-price-amount">Rp 350<span class="bcr-price-unit">K</span></div>
                                <div class="bcr-price-phase">Early Bird</div>
                                <ul class="bcr-price-features">
                                    <li><i class="fa-solid fa-check"></i> Race Bib &amp; Chip Timing</li>
                                    <li><i class="fa-solid fa-check"></i> Premium Running Tee</li>
                                    <li><i class="fa-solid fa-check"></i> Exclusive Finisher Medal</li>
                                    <li><i class="fa-solid fa-check"></i> Water, Isotonic &amp; Gel Station</li>
                                    <li><i class="fa-solid fa-check"></i> VIP Race Village Access</li>
                                    <li><i class="fa-solid fa-check"></i> Official Certificate</li>
                                </ul>
                                <a href="#" class="btn btn-accent" style="width:100%;justify-content:space-between;">
                                    <span class="btn-title">Daftar Sekarang</span>
                                    <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <!-- Kids -->
                        <div class="col">
                            <div class="bcr-price-card animate-box animate__animated animated" data-animate="animate__fadeInUp">
                                <div class="bcr-price-badge" style="background:var(--accent-color-7);color:var(--primary);">Kids Dash</div>
                                <div class="bcr-price-distance">1K</div>
                                <div class="bcr-price-amount">Rp 75<span class="bcr-price-unit">K</span></div>
                                <div class="bcr-price-phase">Ages 5–12</div>
                                <ul class="bcr-price-features">
                                    <li><i class="fa-solid fa-check"></i> Race Bib</li>
                                    <li><i class="fa-solid fa-check"></i> Kids Running Tee</li>
                                    <li><i class="fa-solid fa-check"></i> Finisher Medal</li>
                                    <li><i class="fa-solid fa-check"></i> Refreshments</li>
                                    <li><i class="fa-solid fa-check"></i> Post-Race Festival Access</li>
                                </ul>
                                <a href="#" class="btn btn-accent" style="width:100%;justify-content:space-between;">
                                    <span class="btn-title">Daftar Sekarang</span>
                                    <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="section-wrapper py-0" id="faq">
            <div class="section section-academy">
                <div class="hero-container">
                    <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5 align-items-start">
                        <div class="col animate-box animate__animated animated" data-animate="animate__fadeInLeft">
                            <div class="sub-heading">
                                <i class="fa-solid fa-circle" style="color:var(--accent-color-7);"></i>
                                <span class="sub-heading-title secondary-accent">FAQ</span>
                            </div>
                            <h2 class="secondary-accent">Frequently Asked Questions</h2>
                            <p class="secondary-accent" style="opacity:0.8;">Have questions? We've got answers. If you don't find what you need, reach out to us directly.</p>
                            <a href="#contact" class="btn btn-accent" style="width:fit-content;">
                                <span class="btn-title">Contact Us</span>
                                <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                        <div class="col animate-box animate__animated animated" data-animate="animate__fadeInRight">
                            <div class="bcr-faq-list">
                                <div class="bcr-faq-item">
                                    <button class="bcr-faq-question" onclick="this.parentElement.classList.toggle('open')">
                                        <span>Kapan pendaftaran ditutup?</span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <div class="bcr-faq-answer">Pendaftaran Early Bird dibuka hingga 31 Januari 2026. Pendaftaran reguler akan ditutup pada 28 Februari 2026 atau saat kuota penuh.</div>
                                </div>
                                <div class="bcr-faq-item">
                                    <button class="bcr-faq-question" onclick="this.parentElement.classList.toggle('open')">
                                        <span>Apakah ada batas usia minimum?</span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <div class="bcr-faq-answer">Kategori 5K &amp; 10K terbuka untuk usia 15 tahun ke atas. Kategori 21K untuk usia 18 tahun ke atas. Kids Dash 1K untuk usia 5–12 tahun.</div>
                                </div>
                                <div class="bcr-faq-item">
                                    <button class="bcr-faq-question" onclick="this.parentElement.classList.toggle('open')">
                                        <span>Di mana lokasi race pack pengambilan?</span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <div class="bcr-faq-answer">Race pack dapat diambil di lokasi yang akan diumumkan H-2 sebelum hari perlombaan. Peserta wajib membawa bukti registrasi dan KTP.</div>
                                </div>
                                <div class="bcr-faq-item">
                                    <button class="bcr-faq-question" onclick="this.parentElement.classList.toggle('open')">
                                        <span>Apakah pembayaran bisa melalui transfer bank?</span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <div class="bcr-faq-answer">Ya, kami menerima berbagai metode pembayaran termasuk transfer bank, dompet digital (GoPay, OVO, Dana), dan kartu kredit/debit.</div>
                                </div>
                                <div class="bcr-faq-item">
                                    <button class="bcr-faq-question" onclick="this.parentElement.classList.toggle('open')">
                                        <span>Bagaimana jika saya tidak bisa hadir setelah mendaftar?</span>
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </button>
                                    <div class="bcr-faq-answer">Biaya pendaftaran tidak dapat dikembalikan. Namun, Anda dapat melakukan transfer bib kepada peserta lain dengan menghubungi panitia minimal 7 hari sebelum acara.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer Section -->
    <footer>
        <div class="section pb-0 bg-accent-color">
            <div class="hero-container">
                <div class="footer-content-container">
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 grid-spacer-2">
                        <div class="col">
                            <div class="d-flex flex-column gspace-2">
                                <div class="footer-logo-container">
                                    <img src="{{ asset('assets/images/running/BCR Logo-01.png') }}" alt="Logo" class="img-fluid" style="height: 60px;">
                                </div>
                                <h4 class="secondary-accent">Balikpapan Coastal Running</h4>
                                <p class="secondary-accent">Experience the biggest coastal running event in East Kalimantan. Join thousands of runners and conquer the coastal track.</p>
                                <div class="footer-social-icon">
                                    <a href="#" class="social-icon">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2">
                                <h4 class="secondary-accent">Quick Links</h4>
                                <div class="underline-primary-accent"></div>
                                <ul class="chevron-list">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About Event</a></li>
                                    <li><a href="#categories">Categories</a></li>
                                    <li><a href="#info">Race Info</a></li>
                                    <li><a href="#rules">Race Rules</a></li>
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2">
                                <h4 class="secondary-accent">Contact Info</h4>
                                <div class="underline-primary-accent"></div>
                                <div class="d-flex flex-column gspace-2">
                                    <div class="d-flex flex-row gspace-2 align-items-start">
                                        <div>
                                            <div class="contact-icon footer-icon">
                                                <i class="fa-solid fa-phone-volume"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="contact-info-heading">Phone Number</h6>
                                            <h5 class="secondary-accent">+1 (800) 123-4567</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row gspace-1 align-items-start">
                                        <div>
                                            <div class="contact-icon footer-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="contact-info-heading">Email Address</h6>
                                            <h5 class="secondary-accent">hello@balikpapanrunning.com</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row gspace-1 align-items-start">
                                        <div>
                                            <div class="contact-icon footer-icon">
                                                <i class="fa-solid fa-map-location-dot"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="contact-info-heading">Location</h6>
                                            <h5 class="secondary-accent">Balikpapan, East Kalimantan, Indonesia</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gspace-2">
                                <h4 class="secondary-accent">Subscribe Newsletter</h4>
                                <div class="underline-primary-accent"></div>
                                <p class="secondary-accent">Get the latest updates on race info, promotions & running tips.</p>
                                <div id="newsletter-success" class="alert success hidden">
                                    <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                                    <p class="text-center">Thank you! Form submitted successfully.</p>
                                </div>
                            
                                <div id="newsletter-error" class="alert error hidden">
                                    <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                                    <p class="text-center">Oops! Form submission failed. Please try again.</p>
                                </div>
                                <form id="newsletter-form" action="{{ asset('assets/php/form-newsletter.php') }}" class="form" method="post">
                                    <input type="email" id="newsletter" name="newsletter" placeholder="Subscribe to Our Newsletter">
                                    <button type="submit" class="btn btn-accent">
                                        <span class="btn-title">Subscribe Now</span>
                                        <span class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright-container">
                        <div class="footer-legalink-container">
                            <a href="#" class="legalink">Privacy Policy</a>
                            <div class="divider"></div>
                            <a href="#" class="legalink">Terms & Conditions</a>
                        </div>

                        <h6 class="secondary-accent mb-0">© 2026 Balikpapan Coastal Running. All rights reserved.</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/banner.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/submit-form.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-script.js') }}"></script>
    <script src="{{ asset('assets/js/video_embedded.js') }}"></script>
    <script>
        // BCR Countdown Timer — Race Day: 15 March 2026
        (function(){
            var target = new Date('2026-03-15T06:00:00+08:00').getTime();
            function pad(n){ return String(n).padStart(2,'0'); }
            function tick(){
                var now = Date.now();
                var diff = target - now;
                if(diff < 0){ diff = 0; }
                var d = Math.floor(diff / 86400000);
                var h = Math.floor((diff % 86400000) / 3600000);
                var m = Math.floor((diff % 3600000) / 60000);
                var s = Math.floor((diff % 60000) / 1000);
                document.getElementById('cd-days').textContent  = pad(d);
                document.getElementById('cd-hours').textContent = pad(h);
                document.getElementById('cd-mins').textContent  = pad(m);
                document.getElementById('cd-secs').textContent  = pad(s);
            }
            tick();
            setInterval(tick, 1000);
        })();
    </script>
</body>
</html>