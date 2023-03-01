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

    <style>
        .mpopup {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            position: relative;
            background-color: transparent;
            margin: auto;
            padding: 0;
            width: 600px;
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s;
            border-radius: 0.3rem;
            border: none!important;
        }

        .modal-header {
            padding: 2px 12px;
            background-color: transparent;
            /* color: #333; */
            /* border-bottom: 1px solid #e9ecef; */
            border-top-left-radius: 0.3rem;
            border-top-right-radius: 0.3rem;
            border-bottom: none!important;
        }

        .modal-header h2 {
            font-size: 1.25rem;
            margin-top: 14px;
            margin-bottom: 14px;
        }

        .modal-body {
            padding: 2px 12px;
        }

        .modal-footer {
            padding: 1rem;
            background-color: transparent;
            /* color: #333; */
            /* border-top: 1px solid #e9ecef; */
            border-bottom-left-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
            text-align: right;
        }

        .close {
            color: red;
            float: right;
            font-size: 40px;
            font-weight: bold;
        }

        .portfolio-item img {
            padding-bottom: 10px;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* add animation effects */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @media only screen and (max-width: 600px) {
            .modal-content {
                width: 80%;
                margin: 15px auto;
                padding: 20px;

            }
        }

        @media only screen and (min-width: 600px) {
            .modal-content {
                width: 80%;
                margin: 15px auto;
                padding: 20px;

            }
        }

        @media only screen and (min-width: 768px) {
            .modal-content {
                width: 80%;
                margin: 15px auto;
                padding: 20px;

            }
        }

        @media only screen and (min-width: 992px) {
            .modal-content {
                width: 40%;
                margin: 15px auto;
                padding: 20px;

            }
        }

        @media only screen and (min-width: 1200px) {
            .modal-content {
                width: 40%;
                margin: 15px auto;
                padding: 20px;

            }
        }

        #bracmore, 
        #bfrmore,
        #bosphorusmore,
        #amiramore,
        #bgccimore,
        #undpmore,
        #bashundharagroupmore,
        #forestloungemore {
            display: none;
        }

        .owl-item{
            display: flex;
            align-items: center!important;
            justify-content: center!important;
        }

    </style>
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
                <img src="{{ asset('assets/imgs/logo2.png') }}" alt="logo" style="width: 100%; max-width: 250px; min-width: 160px;">
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
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li> --}}
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
            <div id="title"
                style="display: flex; flex-direction: row; justify-content: space-around; transform: translateY(30px); opacity: 0; padding-left: 30px; padding-right: 30px; margin-left: auto; margin-right: auto;">
                <i class="ti-quote-left" aria-hidden="true"></i>
                <h1 class="title" style="text-shadow: 0 0 10px #555;">
                    An idea is formed by little scraps
                </h1>
                <i class="ti-quote-right" aria-hidden="true"></i>
            </div>

            {{-- <h1 class="title" style="transform: translateY(30px); opacity: 0;">says Thinking Scrap</h1> --}}
            <h1 class="subtitle" style="transform: scale(.5); opacity: 0; text-shadow: 0 0 10px #555;">- says
                Thinking Scrap</h1>
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
    <section class="section" id="about" style="font-weight: bold; background-color: rgb(255, 241, 215);">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                    {{-- <h6 class="section-title mb-0">About Us</h6> --}}
                    <h6 class="section-subtitle mb-4" style="font-size: 25px;">WHO WE ARE</h6>
                    <label>{{ $companyData['who_we_are'] }}</label>
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
                            <label>{{ $companyData['what_we_do'] }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->

    <!-- Opportunity Section -->
    <section id="opportunity" class="section pt-0" style="background-color: rgb(255, 241, 215);">
        <br>
        <br>
        <div class="container">
            <h6 class="section-title text-center" style="color: rgb(152, 17, 10); text-align: center;">Window Of Opportunity</h6>
            {{-- <h6 class="section-subtitle text-center mb-5 pb-3"></h6> --}}

            <div class="wrapper">
                <div class="container-wrap">
                    <span class="num" data-val="1200">00</span>
                    <h5 class="text" style="text-align: center;">Shares (%)</h5>
                    <span class="text">More Shares Than
                        Image and Text
                        Content Combined</span>
                </div>
                <div class="container-wrap">
                    <span class="num" data-val="59">00</span>
                    <h5 class="text" style="text-align: center;">Engagement (%)</h5>
                    <span class="text">More Engagement than Other
                        Types of Content</span>
                </div>
                <div class="container-wrap">
                    <span class="num" data-val="54">00</span>
                    <h5 class="text" style="text-align: center;">People (%)</h5>
                    <span class="text">Majority of the People Want Marketers to Produce More Video Content
                    </span>
                </div>
                <div class="container-wrap">
                    <span class="num" data-val="27">00</span>
                    <h5 class="text" style="text-align: center;">Lift (%)</h5>
                    <span class="text">Video Ad Campaigns Drive
                        More brand Awareness
                        Compared to Other Ads</span>
                </div>
                <div class="container-wrap">
                    <span class="num" data-val="54">00</span>
                    <h5 class="text" style="text-align: center;">Min</h5>
                    <span class="text">On Average A Person
                        Uses Facebook</span>
                </div>
                <div class="container-wrap">
                    <span class="num" data-val="8">0</span>
                    <h5 class="text" style="text-align: center;">Billion</h5>
                    <span class="text">Daily Facebook
                        Views</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF Opportunity Section -->

    <!-- Service Section -->
    <section id="service" class="section pt-0" style="background-color: rgb(255, 241, 215);">
        <br>
        <br>
        <br>
        <div class="container">
            <h6 class="section-title text-center">Our Wings</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Services We Provide.</h6>

            <div class="row">
                <?php $i = 1; ?>
                @foreach ($wingsData as $row)
                <div class="col-md-4 wings">
                    <div class="card mb-4 mb-md-0 wings-box" style="border-radius: 10px; background-color: #f5ba56;">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold"> {{ sprintf('%02d', $i++) }} </small>
                            <h5 class="card-title mt-3"> {{ $row->name }} <h5>
                                    <p class="mb-0">{{ $row->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->



    <!-- Works Section -->
    <section class="section" id="works" style="background-color: rgb(255, 241, 215);">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Our Works</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>

            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Bosphorus.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">Bosphorus</h6>
                            <p>We are promoting this premium restaurant which is slowly making its way forward <span id="bosphorusdots">...</span>
                            <span id="bosphorusmore">to be one of the best coffee shop in town, through digital content, digital 
                            engagement, campaign, brand promotion,  print & production.</span><a href="javascript:void(0)" onclick="revealbosphorusmore()" id="revealbosphorusmore" style="color:rgb(152, 17, 10)">Read more</a></p></p></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;"
                                id="mpopupLink">See Our Work</a>
                        </div>
                    </div>
                </div>
                <!-- Modal popup box -->
                <div id="mpopupBox" class="mpopup">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">×</span>
                        </div>
                        <div class="modal-body">
                            <div class="portfolio-item"
                                style="display: flex; flex-direction: column; align-items: center; justify-content: space-between;">
                                <img src="{{ asset('assets/imgs/web-1.jpg') }}" class="img-fluid" alt="image" width="300"
                                    height="auto">
                                <img src="{{ asset('assets/imgs/advertising-2.jpg') }}" class="img-fluid" alt="image" width="500"
                                    height="auto">
                                <img src="{{ asset('assets/imgs/web-1.jpg') }}" class="img-fluid" alt="image" width="300"
                                    height="auto">
                                <img src="{{ asset('assets/imgs/advertising-2.jpg') }}" class="img-fluid" alt="image" width="500"
                                    height="auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Bosphorus.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">Black Forest Resort</h6>
                            <p>We are promoting this exotic resort which is slowly making its way forward <span id="bfrdots">...</span>
                                <span id="bfrmore">to be one of the best eco-tourism resort in Bangladesh, through digital content, digital 
                                enagagement, and brand promotion.</span><a href="javascript:void(0)" onclick="revealbfrmore()" id="revealbfrmore" style="color:rgb(152, 17, 10)">Read more</a></p></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;"
                                id="mpopupLink">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Brac.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">BRAC - Shomotontro</h6>
                            <p>We, as Event partner, collaborated with Gender, Justice and Diversity Programme <span id="bracdots">...</span>
                                <span id="bracmore">of Brac to create awareness amongst mass people through Dhaka List Fest 2023 and BRAC Hope
                                Festival 2023, regarding the equality and equity of gender discrimination we face in our
                                day-to-day life in our society.</span><a href="javascript:void(0)" onclick="revealbracmore()" id="revealbracmore" style="color:rgb(152, 17, 10)">Read more</a></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Bkash.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">Bkash</h6>
                            <p>Brand promotion through 'Quiz Master', an online quiz campaign in Bkash app.</p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Bosphorus.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">International Bilingual Learning Center</h6>
                            <p>Caving pathway through Logo branding and engaging educators through brand promotion.</p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Amira.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">Amira</h6>
                            <p>Brand promotion through digital content, campaign,production and <span id="amiradots">...</span>
                                <span id="amiramore">social media engagement.</span><a href="javascript:void(0)" onclick="revealamiramore()" id="revealamiramore" style="color:rgb(152, 17, 10)">Read more</a></p>
                            </p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/BGCCI.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">BGCCI</h6>
                            <p>Promoted the brand through publications. And production of AV to celebrate <span id="bgccidots">...</span>
                                <span id="bgccimore">50 Years of Bangladesh-Germany Bilateral Relations.</span><a href="javascript:void(0)" onclick="revealbgccimore()" id="revealbgccimore" style="color:rgb(152, 17, 10)">Read more</a></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Undp.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">UNDP</h6>
                            <p>Participated in the Youth Against Corruption campaign as an event partner <span id="undpdots">...</span>
                                <span id="undpmore">with UNDP to sensitize young people regarding corruption and promote anti-corruption awareness and
                                advocacy.</span><a href="javascript:void(0)" onclick="revealundpmore()" id="revealundpmore" style="color:rgb(152, 17, 10)">Read more</a></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Basundhara.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">Bashundhara Group</h6>
                            <p>Promoted the brand by providing creative suppport on digital contents, <span id="bashundharagroupdots">...</span>
                                <span id="bashundharagroupmore">souvenir design, press ads. In addition, printing of press ad, and souvenirs assured the partnership we
                                have with the brand.</span><a href="javascript:void(0)" onclick="revealbashundharagroupmore()" id="revealbashundharagroupmore" style="color:rgb(152, 17, 10)">Read more</a></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4 work-section" style="border-radius: 10px; background-color: #f5ba56;">
                        <img src="{{ asset('assets/clients/Forest-lounge.png') }}" alt="image"
                            style="width: 250px; margin: 15px auto;">
                        <div class="card-body">
                            <h6 class="card-title">The Forrest Lounge</h6>
                            <p>Promoted the brand through product photography, production <span id="forestloungedots">...</span>
                                <span id="forestloungemore">of creative designs and digital contents 
                                for social media platforms.</span><a href="javascript:void(0)" onclick="revealforestloungemore()" id="revealforestloungemore" style="color:rgb(152, 17, 10)">Read more</a></p>
                            <a href="javascript:void(0)" class="small text-muted"
                                style="position: absolute; bottom: 10px; text-decoration: underline;">See Our Work</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of works section -->

    <!-- Team Section -->
    {{-- <section id="team" class="section pt-0">
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
    </section> --}}
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
    <section class="section" id="clients" style="background-color: rgb(255, 241, 215);">
        <div class="container">
            <h6 class="section-title text-center mb-0">Our Clients</h6>
            <h6 class="section-subtitle mb-5 text-center"></h6>
            <div class="relative" style="position: relative;">
                <div class="owl-carousel client-carousel">
                    @foreach ($clientsData as $client)
                    <div class="item">
                        <img class="client-image" src="{{ asset('client_images/'.$client->path) }}" alt="{{ $client->name }}" style="width: 160px; height: auto;"/>
                    </div>
                    @endforeach
                   
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
            <div id="map" style="overflow: hidden;"><img id="office-map" src="{{ asset('assets/imgs/Location.jpg') }}"
                    alt="office-map">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 my-3">
                    <h6 class="mb-0">Phone</h6>
                    <p class="mb-4">{{ $companyData['phone'] }}</p>

                    <h6 class="mb-0">Address</h6>
                    <p class="mb-4">{{ $companyData['address'] }}</p>

                    <h6 class="mb-0">Email</h6>
                    <p class="mb-0">{{ $companyData['email'] }}</p>
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
        // Select modal
        var mpopup = document.getElementById('mpopupBox');

        // Select trigger link
        var mpLink = document.getElementById("mpopupLink");

        // Select close action element
        var close = document.getElementsByClassName("close")[0];

        // Open modal once the link is clicked
        mpLink.onclick = function () {
            mpopup.style.display = "block";
        };

        // Close modal once close element is clicked
        close.onclick = function () {
            mpopup.style.display = "none";
        };

        // Close modal when user clicks outside of the modal box
        window.onclick = function (event) {
            if (event.target == mpopup) {
                mpopup.style.display = "none";
            }
        };
        function revealbracmore() {
            var dots = document.getElementById("bracdots");
            var moreText = document.getElementById("bracmore");
            var btnText = document.getElementById("revealbracmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealbfrmore() {
            var dots = document.getElementById("bfrdots");
            var moreText = document.getElementById("bfrmore");
            var btnText = document.getElementById("revealbfrmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealbosphorusmore() {
            var dots = document.getElementById("bosphorusdots");
            var moreText = document.getElementById("bosphorusmore");
            var btnText = document.getElementById("revealbosphorusmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealamiramore() {
            var dots = document.getElementById("amiradots");
            var moreText = document.getElementById("amiramore");
            var btnText = document.getElementById("revealamiramore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealbgccimore() {
            var dots = document.getElementById("bgccidots");
            var moreText = document.getElementById("bgccimore");
            var btnText = document.getElementById("revealbgccimore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealundpmore() {
            var dots = document.getElementById("undpdots");
            var moreText = document.getElementById("undpmore");
            var btnText = document.getElementById("revealundpmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealbashundharagroupmore() {
            var dots = document.getElementById("bashundharagroupdots");
            var moreText = document.getElementById("bashundharagroupmore");
            var btnText = document.getElementById("revealbashundharagroupmore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
        function revealforestloungemore() {
            var dots = document.getElementById("forestloungedots");
            var moreText = document.getElementById("forestloungemore");
            var btnText = document.getElementById("revealforestloungemore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = " Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <script>
        var counter = true;

        $(document).ready(function () {
            var top_of_element = $("#opportunity").offset().top;
            var bottom_of_element = $("#opportunity").offset().top + $("#opportunity").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();

            if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
                if(counter == true){
                    let valueDisplays = document.querySelectorAll(".num");
                    console.log(valueDisplays);
                    let interval = 5000;
                    valueDisplays.forEach((valueDisplay) => {
                        let startValue = 0;
                        let endValue = parseInt(valueDisplay.getAttribute
                        ("data-val"));
                        let duration= Math.floor(interval / endValue);
                        let counter = setInterval(function () {
                            startValue += 1;
                            valueDisplay.textContent = startValue;
                            if (startValue == endValue) {
                                clearInterval(counter);
                            }
                        }, duration);
                    });

                    counter = false;
                }
                
            } else {
                // the element is not visible, do something else
                // alert('no');
            }
        });

        $(window).scroll(function () {
            var top_of_element = $("#opportunity").offset().top;
            var bottom_of_element = $("#opportunity").offset().top + $("#opportunity").outerHeight();
            var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
            var top_of_screen = $(window).scrollTop();

            if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
                if(counter == true){
                    let valueDisplays = document.querySelectorAll(".num");
                    console.log(valueDisplays);
                    let interval = 5000;
                    valueDisplays.forEach((valueDisplay) => {
                        let startValue = 0;
                        let endValue = parseInt(valueDisplay.getAttribute
                        ("data-val"));
                        let duration= Math.floor(interval / endValue);
                        let counter = setInterval(function () {
                            startValue += 1;
                            valueDisplay.textContent = startValue;
                            if (startValue == endValue) {
                                clearInterval(counter);
                            }
                        }, duration);
                    });

                    counter = false;
                }
                
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
            scrollFunction();

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
