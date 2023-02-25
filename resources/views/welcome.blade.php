<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Thinking Scrap! Visualize your brand identity.">
    <meta name="author" content="Thinking Scrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Thinking Scrap</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + LeadMark main styles -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/leadmark.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <div id="loaderArea" id="loaderArea">
        <span class="loader"></span>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="ti-arrow-up"></i></button>
    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo2.png" alt="logo" style="width: 100%; max-width: 250px; min-width: 160px;">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Our Wings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">Our Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">Our Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="components.html" class="ml-4 nav-link btn btn-primary btn-sm rounded">Components</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header" id="header">
        <div class="overlay" style="text-transform: uppercase; text-align: center;">
            <div id="title" style="display: flex; flex-direction: row; justify-content: space-around; transform: translateY(30px); opacity: 0; padding-left: 30px; padding-right: 30px; margin-left: auto; margin-right: auto;">
                <i class="ti-quote-left" aria-hidden="true"></i>
                <h1 class="title">
                    An idea is formed by little scraps
                </h1>
                <i class="ti-quote-right" aria-hidden="true"></i>
            </div>

            {{-- <h1 class="title" style="transform: translateY(30px); opacity: 0;">says Thinking Scrap</h1> --}}
            <h1 class="subtitle" style="transform: scale(.5); opacity: 0;">- says Thinking Scrap</h1>
        </div>
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path
                    d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z" />
            </svg>
        </div>
        <div class="mouse-icon">
            <div class="wheel"></div>
        </div>
    </header>
    <!-- End Of Page Header -->

    <!-- About Section -->
    <section class="section" id="about" style="font-weight: bold; background-color: rgb(254, 207, 127);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    {{-- <h6 class="section-title mb-0">About Us</h6> --}}
                    <h6 class="section-subtitle mb-4" style="font-size: 25px;">WHO WE ARE</h6>
                    <label>The Digital world comes with many challenges and obstacles that are not easily
                        tackled by just any mainstream organization, it takes innovative pioneers who
                        combine creativity and professionalism with a hint of perseverance to come up
                        with the most convenient Digital solutions. This is exactly what we “Thinking
                        Scrap” provide to seekers of top-notch quality services and individuals or
                        businesses who are eager for super convenient and efficient solutions. We
                        analyze what a brand actually needs to stand out from the crowd. In a
                        marketplace too noisy, brands need to be honest first than being loud.</label>
                    <img src="{{ asset('assets/imgs/about_us_1.jpg') }}" alt="about_us" class="w-100 mt-3 shadow-sm">
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/imgs/about_us_2.jpg') }}" alt="about_us" class="w-100 shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/imgs/about_us_3.jpg') }}" alt="about_us" class="w-100 shadow-sm">
                        </div>
                        <div class="col-12 mt-4">
                            <h6 class="section-subtitle mb-4" style="font-size: 25px;">WHAT WE DO</h6>
                            <label>We as a team provide our 360-degree complete Digital solutions universally,
                                we hope to reach out to many corners on the globe and create firm bonds
                                with our customers in order to continue providing our outstanding services.
                                We provide creative, strategic, and technical development of marketing
                                products and services. We work together with our clients to build a better
                                Brand with exciting marketing contents and value to their target customers.
                                Our understanding of marketing products empowers us to bring a level of
                                expertise to your company like no one else. We know how to build a Brand
                                that can scale to your business needs on point.</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Opportunity Section -->
    <section id="opportunity" class="section pt-0" style="background-color: rgb(254, 207, 127);">
        <br>
        <br>
        <br>
        <div class="container">
            <h6 class="section-title text-center" style="color: rgb(152, 17, 10);">Window Of Opportunity</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3"></h6>

            <div class="chart">
                <h2 class="bar-title">More Shares Than
                    Image and Text
                    Content Combined</h2>
                <div class="bar">
                    <div class="bar-inner bar-share" data-percentage="1200% Shares"></div>
                </div>
                <h2 class="bar-title">More Engagement than Other
                    Types of Content</h2>
                <div class="bar">
                    <div class="bar-inner bar-engagement" data-percentage="59% Engagement"></div>
                </div>
                <h2 class="bar-title">Majority of the People Want
                    Marketers to Produce More
                    Video Content</h2>
                <div class="bar">
                    <div class="bar-inner bar-people" data-percentage="54% People"></div>
                </div>
                <h2 class="bar-title">Video Ad Campaigns Drive
                    More brand Awareness
                    Compared to Other Ads</h2>
                <div class="bar">
                    <div class="bar-inner bar-brandLift" data-percentage="27% Lift"></div>
                </div>
                <h2 class="bar-title">On Average A Person
                    Uses Facebook</h2>
                <div class="bar">
                    <div class="bar-inner bar-min" data-percentage="54 Min"></div>
                </div>
                <h2 class="bar-title">Daily Facebook
                    Views</h2>
                <div class="bar">
                    <div class="bar-inner bar-billion" data-percentage="8 Billion"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF Opportunity Section -->

    <!-- Service Section -->
    <section id="service" class="section pt-0" style="font-weight: bold; background-color: rgb(254, 207, 127);">
        <br>
        <br>
        <br>
        <div class="container">
            <h6 class="section-title text-center">Our Wings</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Services We Provide.</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> Digital Marketing <h5>
                                    <p class="mb-0">Digital marketing is any form of marketing that involves electronic
                                        devices. It can be done online
                                        and offline, and in fact, both kinds are important for a well-rounded Digital
                                        Marketing Strategy.
                                        We provide 360° Digital Marketing support with proper research, to ensure higher
                                        ROI and
                                        Conversion Rate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Media Buying<h5>
                                    <p class="mb-0">Professional media buyers of our team ensure creative and accurately
                                        targeted
                                        brand ads, to secure maximum visibility of brands over different media
                                        platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Digital Conent Development<h5>
                                    <p class="mb-0">Content Development makes brands more visible to potential consumers
                                        who search for
                                        relevant products online. Our content developers know exact Keywords and SEO
                                        methods
                                        needed for a brand.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">04</small>
                            <h5 class="card-title mt-3"> Video Commercial <h5>
                                    <p class="mb-0">Experienced in-house production team to showcase your brand
                                        creatively, to increase
                                        Sales Conversion and Lead Generation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">05</small>
                            <h5 class="card-title mt-3">SEO<h5>
                                    <p class="mb-0">Search engine optimization (SEO) is the process of improving the
                                        quality and
                                        quantity of website traffic to a website or a web page from search engines. SEO
                                        targets unpaid rather than direct traffic or paid traffic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">06</small>
                            <h5 class="card-title mt-3">Product Photography<h5>
                                    <p class="mb-0">Our Professional photography service enhances brand personality,
                                        trust and perceived value.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">07</small>
                            <h5 class="card-title mt-3"> Event Managment <h5>
                                    <p class="mb-0">With efficient use of budget with creative decoration, our
                                        professional event
                                        planner team makes personal or corporate events a success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">08</small>
                            <h5 class="card-title mt-3">Web Solution<h5>
                                    <p class="mb-0">We provide Web Solution through our expert developer team to provide
                                        more
                                        Lead, Credibility and better customer service to the brands.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0 wings-box">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">09</small>
                            <h5 class="card-title mt-3">PR Solution<h5>
                                    <p class="mb-0">Accurate PR activities increase brand’s publicity and credibility.
                                        We provide well crafted
                                        PR solutions to support brands with maximum exposure across different media.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->



    <!-- Works Section -->
    {{-- <section id="works" class="section portfolio-section" style="background-color: rgb(254, 207, 127);">
        <div class="container">
            <h6 class="section-title text-center">Our Works</h6>
            <h6 class="section-subtitle mb-5 text-center">New stunning projects for our amazing clients</h6>
            <div class="filters">
                <a href="#" data-filter=".new" class="active" onclick="client1()">
                    Bosphorus
                </a>
                <a href="#" data-filter=".advertising" onclick="client2()">
                    Black Forest Resort
                </a>
                <a href="#" data-filter=".branding" onclick="client3()">
                    BRAC - Shomotontro
                </a>
                <a href="#" data-filter=".web" onclick="client4()">
                    Bkash
                </a>
                <a href="#" data-filter=".advertising" onclick="client5()">
                    International Bilingual Learning Center
                </a>
                <a href="#" data-filter=".web" onclick="client6()">
                    Amira
                </a>
                <a href="#" data-filter=".advertising" onclick="client7()">
                    BGCCI
                </a>
                <a href="#" data-filter=".web" onclick="client8()">
                    UNDP
                </a>
                <a href="#" data-filter=".advertising" onclick="client9()">
                    Bashundhara Group
                </a>
                <a href="#" data-filter=".web" onclick="client10()">
                    The Forrest Lounge
                </a>
            </div>
            <div class="summary-container">
                <span id="client-summary">This is BRAC project Summary</span>
            </div>
            <div class="portfolio-container">
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-1.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-2.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-2.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-4.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 advertising">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-1.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 web new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/web-3.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/web-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-3.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 advertising new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/advertising-4.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/advertising-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-1.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-1.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-2.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-2.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding new">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-3.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-3.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-4.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-4.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 branding">
                    <div class="portfolio-item">
                        <img src="assets/imgs/branding-5.jpg" class="img-fluid"
                            alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                        <div class="content-holder">
                            <a class="img-popup" href="assets/imgs/branding-5.jpg"></a>
                            <div class="text-holder">
                                <h6 class="title">Title</h6>
                                <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="section" id="works" style="background-color: rgb(254, 207, 127);">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Our Works</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Bosphorus.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">Black Forest Resort</h6>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Brac.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">BRAC - Shomotontro</h6>
                            <p>We, as Event partner, collaborated with Gender, Justice and Diversity Programme of Brac, to create awareness amongst mass people through Dhaka List Fest 2023 and BRAC Hope Festival 2023, regarding the equality and equity of gender discrimination we face in our day-to-day life in our society.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Bkash.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">Bkash</h6>
                            <p>Brand promotion through 'Quiz Master', an online quiz campaign in Bkash app.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Bosphorus.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">International Bilingual Learning Center</h6>
                            <p>Caving pathway through Logo branding and engaging educators through brand promotion.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Amira.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">Amira</h6>
                            <p>Brand promotion through digital content, campaign,production and social media engagement.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/BGCCI.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">BGCCI</h6>
                            <p>Promoted the brand through publications. And production of AV to celebrate 50 Years of Bangladesh-Germany Bilateral Relations.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/UNDP.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">UNDP</h6>
                            <p>Participated in the Youth Against Corruption campaign as an event partner with UNDP to sensitize young people regarding corruption and promote anti-corruption awareness and advocacy.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Basundhara.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">Bashundhara Group</h6>
                            <p>Promoted the brand by providing creative suppport on digital contents, souvenir design, press ads. In addition, printing of press ad, and souvenirs assured the partnership we have with the brand.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4" style="border-radius: 10px; height: 425px;">
                        <img src="{{ asset('assets/clients/Forest-lounge.png') }}" alt="image" style="width: 250px; margin: 15px auto;">
                        <div class="card-body">                         
                            <h6 class="card-title">The Forrest Lounge</h6>
                            <p>Promoted the brand through product photography, production of creative designs and digital contents for social media platforms.</p>
                            <a href="javascript:void(0)" class="small text-muted" style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of works section -->

    <!-- Team Section -->
    <section id="team" class="section pt-0" style="background-color: rgb(254, 207, 127);">
        <br>
        <br>
        <br>
        <div class="container">
            <h6 class="section-title text-center" style="color: rgb(152, 17, 10);">The Team</h6>
            <h6 class="text-center mb-5 pb-3">Our dedicated team where we can't think a second and work without them!
            </h6>
            <div class="row">
                <div class="col-md-4 mt-4 team-main">
                    <div class="mb-4 mb-md-0">
                        <div class="team-outer-rectangle">
                            <div class="team-inner-rectangle">
                                <div class="team-inner-div">
                                    <img src="assets/imgs/avatar-1.jpg" alt="emp1" class="team-employee">
                                </div>
                            </div>
                        </div>
                        <div class="team-rectangle">
                            <label style="margin-top: 5px; text-transform: uppercase;">omuk chowdhury</label>
                            <label style="text-transform: capitalize;">Lead Designer</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 team-main">
                    <div class="mb-4 mb-md-0">
                        <div class="team-outer-rectangle">
                            <div class="team-inner-rectangle">
                                <div class="team-inner-div">
                                    <img src="assets/imgs/avatar-1.jpg" alt="emp1" class="team-employee">
                                </div>
                            </div>
                        </div>
                        <div class="team-rectangle">
                            <label style="margin-top: 5px; text-transform: uppercase;">shamsher singh</label>
                            <label style="text-transform: capitalize;">Balle Paaji</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4 team-main">
                    <div class="mb-4 mb-md-0">
                        <div class="team-outer-rectangle">
                            <div class="team-inner-rectangle">
                                <div class="team-inner-div">
                                    <img src="assets/imgs/avatar-1.jpg" alt="emp1" class="team-employee">
                                </div>
                            </div>
                        </div>
                        <div class="team-rectangle">
                            <label style="margin-top: 5px; text-transform: uppercase;">ACP Pradyuman</label>
                            <label style="text-transform: capitalize;">Knocking door is for poor people</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF Team Section -->

    <!-- Blog Section -->
    <!-- <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Latest Articles</h6>
            <h6 class="section-subtitle mb-5 text-center">Architecto provident deserunt eveniet libero</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Pariatur Omnis Harum quae sint.</h6>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title"> Harum Quae Porro</h5>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">                         
                            <h6 class="card-title">Qui optio neque alias</h6>
                            <p>Fuga quae ratione inventore Perferendis porro.</p>
                            <a href="javascript:void(0)" class="small text-muted">Go To The Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End of Blog Section -->

    <!-- Testmonial Section -->
    {{-- <section class="section" id="quotes">
        <div class="container">
            <h6 class="section-title text-center mb-0">Quotes</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
                                    <small class="text-muted mb-0">Business Analyst</small>
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim
                                modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                    <small class="text-muted mb-0">Insurance Agent</small>
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim
                                modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mason Miller</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim
                                modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End of Testmonial Section -->

    <!-- Clients Section -->
    <section class="section" id="clients" style="background-color: rgb(254, 207, 127);">
        <div class="container">
            <h6 class="section-title text-center mb-0">Our Clients</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>
            <div class="relative" style="position: relative;">
                <div class="owl-carousel client-carousel">
                    <div class="item">
                        <img class="client-image" src="assets/clients/Abrar.png" alt="abrar" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Amira.png" alt="amira" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Basundhara.png" alt="Basundhara" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/BGCCI.png" alt="BGCCI" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Bkash.png" alt="Bkash" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Bosphorus.png" alt="Bosphorus" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Brac.png" alt="Brac" width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/C_zar.png" alt="C_zar" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Carbrorellaor.png" alt="Carbrorellaor" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/CM.png" alt="CM" width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Dark-Burg.png" alt="Dark-Burg" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Doict.png" alt="Doict" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Dreamweave.png" alt="Dreamweave" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/easytrax.png" alt="easytrax" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Fantasy-island.png" alt="Fantasy-island"
                            width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Food-and-flavours.png" alt="Food-and-flavours"
                            width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Forest-lounge.png" alt="Forest-lounge" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Humba-hat.png" alt="Humba-hat" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Medimete.png" alt="Medimete" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Nairobi.png" alt="Nairobi" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Omera.png" alt="Omera" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Phr.png" alt="Phr" width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/RR.png" alt="RR" width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Save-the-children.png" alt="Save-the-children"
                            width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Tapout.png" alt="Tapout" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Thai.png" alt="Thai" width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Tracker.png" alt="Tracker" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Undp.png" alt="Undp" width="210" height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Winger.png" alt="Winger" width="210"
                            height="auto" />
                    </div>
                    <div class="item">
                        <img class="client-image" src="assets/clients/Wood-peacker.png" alt="Wood-peacker" width="210"
                            height="auto" />
                    </div>
                </div>
                <div class="my-owl-nav">
                    <span class="my-owl-button my-prev-button">
                        <i class="ti-arrow-left" aria-hidden="true"></i>
                    </span>
                    <span class="my-owl-button my-next-button">
                        <i class="ti-arrow-right" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container" style="text-align: center;">
            <h3>Where Are We Located?</h3>
            <div id="map" style="overflow: hidden;"><img id="office-map" src="{{ asset('assets/imgs/Location.jpg') }}" alt="office-map">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">+880-1767696244</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">8/15 Block #A, Lalmatia, Dhaka - 1205</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">info@thinkingscrap.com</p>
                    <p></p>
                </div>
                <div class="col-md-7">
                    <form id="contactForm" method="POST" enctype="multipart/form-data">
                        <h4 class="mb-4">Drop Us A Line</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="name"
                                    placeholder="Name" id="name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="email" class="form-control text-white rounded-0 bg-transparent"
                                    name="Email" placeholder="Email" id="email">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent"
                                    name="subject" placeholder="Subject" id="subject">
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="4"
                                    class="form-control text-white rounded-0 bg-transparent"
                                    placeholder="Message"></textarea>

                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary" style="text-align: center;">
                <p class="mb-0 small">&copy; <script>
                        document.write(new Date().getFullYear())

                    </script>, Developed By THINKING SCRAP. All rights reserved </p>
            </footer>
            <!-- End of Page Footer -->
        </div>
    </section>

    <!-- core  -->
    <script src="{{ URL::asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ URL::asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Isotope -->
    <script src="{{ URL::asset('assets/vendors/isotope/isotope.pkgd.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"
        integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- LeadMark js -->
    <script src="{{ URL::asset('assets/js/leadmark.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"
        integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/CSSRulePlugin.min.js"
        integrity="sha512-TJiE9joKYXjdf5nd0Kkzqt9QOYfp5Hk5W/PaeRmpOd7HYBVdSqpTxJezbfLzJnPrS7HGnalR54WO/hbppgDgkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(window).scroll(function () {
            var top_of_element = $("#opportunity").offset().top;
            var bottom_of_element = $("#opportunity").offset().top + $("#opportunity").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();

            if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
                // the element is visible, do something
                var tl2 = gsap.timeline();
                var barTexts = CSSRulePlugin.getRule(".bar-inner:after");
                tl2
                    .add('f1', '+=0.75')
                    .to('.bar-share', {
                        duration: 2,
                        width: '80%',
                        ease: 'power2.out'
                    }, 'f1')
                    .to('.bar-engagement', {
                        duration: 2,
                        width: '49%',
                        ease: 'power2.out'
                    }, 'f1')
                    .to('.bar-people', {
                        duration: 2,
                        width: '46%',
                        ease: 'power2.out'
                    }, 'f1')
                    .to('.bar-brandLift', {
                        duration: 2,
                        width: '20%',
                        ease: 'power2.out'
                    }, 'f1')
                    .to('.bar-min', {
                        duration: 2,
                        width: '50%',
                        ease: 'power2.out'
                    }, 'f1')
                    .to('.bar-billion', {
                        duration: 2,
                        width: '99%',
                        ease: 'power2.out'
                    }, 'f1')
                    .to(barTexts, {
                        duration: 0.5,
                        opacity: 1,
                        ease: 'power2.out'
                    }, 'f1+=1.15')
            } else {
                // the element is not visible, do something else
                // alert('no');
            }
        });

        $(function () {
            $('.client-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                autoplay: true,
                autoPlaySpeed: 1000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });

            var selector = $('.client-carousel');

            $('.my-next-button').click(function () {
                selector.trigger('next.owl.carousel');
            });

            $('.my-prev-button').click(function () {
                selector.trigger('prev.owl.carousel');
            });
        });

        let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction();
        };
        window.onload = function () {
            const tl = gsap.timeline();

            tl
            .add('f1')
            .to('#title', {
                duration: 1,
                y: 0,
                opacity: 1,
                ease: 'power2.out',
                stagger: 0.5
            }, 'f1')
            .to('.subtitle', {
                duration: 0.75,
                scale: 1,
                opacity: 1,
                ease: 'power2.out'
            }, 'f1+=0.5')

            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        var client1Summary = "This is BRAC project summary.";
        var client2Summary = "We are promoting this exotic resort which is slowly making its way forward to be one of the best eco-tourism resort in Bangladesh, through digital content, digital enagagement, and brand promotion.";
        var client3Summary = "We, as Event partner, collaborated with Gender, Justice and Diversity Programme of Brac, to create awareness amongst mass people through Dhaka List Fest 2023 and BRAC Hope Festival 2023, regarding the equality and equity of gender discrimination we face in our day-to-day life in our society.";
        var client4Summary =
            "Brand promotion through 'Quiz Master', an online quiz campaign in Bkash app.";
        var client5Summary = "Caving pathway through Logo branding and engaging educators through brand promotion.";
        var client6Summary = "Brand promotion through digital content, campaign,production and social media engagement";
        var client7Summary = "Promoted the brand through publications. And production of AV to celebrate 50 Years of Bangladesh-Germany Bilateral Relations";
        var client8Summary = "Participated in the Youth Against Corruption campaign as an event partner with UNDP to sensitize young people regarding corruption and promote anti-corruption awareness and advocacy.";
        var client9Summary = "Promoted the brand by providing creative suppport on digital contents, souvenir design, press ads. In addition, printing of press ad, and souvenirs assured the partnership we have with the brand.";
        var client10Summary = "Promoted the brand through product photography, production of creative designs and digital contents for social media platforms.";


        function client1() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client1Summary;
        }

        function client2() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client2Summary;
        }

        function client3() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client3Summary;
        }

        function client4() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client4Summary;
        }

        function client5() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client5Summary;
        }

        function client6() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client5Summary;
        }

        function client7() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client5Summary;
        }

        function client8() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client5Summary;
        }

        function client9() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client5Summary;
        }

        function client10() {
            var clientSummary = document.getElementById('client-summary');
            clientSummary.innerHTML = client5Summary;
        }

        $(document).ready(function () {
            $("#contactForm").submit(function (e) {
                e.preventDefault();
                document.getElementById('loaderArea').style.display = "inline-block";
                axios.post("/contactStore", {
                        name: document.getElementById("name").value,
                        email: document.getElementById("email").value,
                        subject: document.getElementById("subject").value,
                        message: document.getElementById("message").value
                    }, {
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        }
                    })
                    .then(response => {
                        let timerInterval
                        Swal.fire({
                            title: 'Thanks for contacting us!',
                            html: 'We will get to you as soon we can!',
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                // console.log('I was closed by the timer')
                            }
                        })
                    })
                    .catch(function (error) {
                        document.getElementById("name").value = '';
                        document.getElementById("email").value = '';
                        document.getElementById("subject").value = '';
                        document.getElementById("message").value = '';

                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong! We are really sorry for your inconvenience.',
                        })
                    })
                    .then(function () {
                        document.getElementById("name").value = '';
                        document.getElementById("email").value = '';
                        document.getElementById("subject").value = '';
                        document.getElementById("message").value = '';
                        document.getElementById('loaderArea').style.display = "none";
                    });
            });
        });

    </script>

</body>

</html>
