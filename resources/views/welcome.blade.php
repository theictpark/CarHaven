<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ridek Online Taxi Booking HTML5 Template">
    <meta name="author" content="DynamicLayers">

    <title>Ridek - Online Taxi Booking Service HTML5 Template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user') }}/assets/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/elements.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/header.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/slider.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/blog.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('user') }}/assets/css/responsive.css">
</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
	</p><![endif]-->

    <header class="main-header">

        <!--/.top-header-->
        <div class="mid-header">
            <div class="container">
                <div class="mid-header-wrap">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ asset('user') }}/assets/img/logo-dark.png" alt="Logo"></a>
                    </div>
                    <!--/.site-logo-->
                    <ul class="header-info">
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Call us now</span><a href="tel:5267214392">5267-214-392</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-envelope-open"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Email now</span><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="024b6c646d2c706b666769426f636b6e2c616d6f">[email&#160;protected]</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Halk Street</span>New York, USA - 2386</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.mid-header-->
        <div class="nav-menu-wrapper">
            <div class="container">
                <div class="nav-menu-inner">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{ asset('user') }}/assets/img/logo-dark.png" alt="Logo"></a>
                    </div>
                    <!--/.site-logo-->
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">

                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="menu-right-item">
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="menu-btn">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="menu-btn">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="menu-btn">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--/.nav-menu-->
    </header>
    <!--/.main-header-->

    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Our Services!</h4>
                <h2>Start your journey with <br><span>Ridek Taxi</span> Company!</h2>
                <p>Everything your taxi business <br>needs is already here! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <section class="service-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('user') }}/assets/img/service-1.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('user') }}/assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Regular Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('user') }}/assets/img/service-2.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('user') }}/assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Airport Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('user') }}/assets/img/service-3.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('user') }}/assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Luggage Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('user') }}/assets/img/service-4.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('user') }}/assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">City Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('user') }}/assets/img/service-5.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('user') }}/assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Business Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="{{ asset('user') }}/assets/img/service-5.jpg" alt="img">
                            <div class="service-shape-wrap">
                                <div class="service-shape"></div>
                            </div>
                            <div class="service-car"><img src="{{ asset('user') }}/assets/img/car-1.png" alt="car"></div>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-details.html">Local Transport</a></h3>
                            <p>Everything your taxi business needs is already here! Ridek made for taxi service companies!</p>
                            <a class="read-more" href="service-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.service-section-->

    <section class="cta-section-2 padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="cta-content">
                        <h4>Ridek Taxi Services!</h4>
                        <h2>Feel your journey with Ridek!</h2>
                        <a href="book-taxi.html" class="default-btn">Book a Taxi</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <ul class="check-list">
                        <li><i class="las la-arrow-right"></i>Easy payment systems.</li>
                        <li><i class="las la-arrow-right"></i>Make safety a top priority.</li>
                        <li><i class="las la-arrow-right"></i>First and quick pickups.</li>
                        <li><i class="las la-arrow-right"></i>Access Ridek globally.</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="cta-men"></div>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->

    <section class="blog-section bg-grey padding">
        <div class="container">
            <div class="section-heading text-center mb-40">
                <h4><span></span>Recent Posts!</h4>
                <h2>News And Insights!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="row grid-post">
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('user') }}/assets/img/post-1.jpg" alt="post">
                            <a href="blog-details.html" class="post-category">Business</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3>
                                    <a href="blog-details.html" class="hover">How to start initiating an startup in few days.</a>
                                </h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('user') }}/assets/img/post-2.jpg" alt="post">
                            <a href="blog-details.html" class="post-category">Startup</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3>
                                    <a href="blog-details.html">Financial experts support help you to find out.</a>
                                </h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-15">
                    <div class="post-card">
                        <div class="post-thumb">
                            <img src="{{ asset('user') }}/assets/img/post-3.jpg" alt="post">
                            <a href="blog-details.html" class="post-category">Finance</a>
                        </div>
                        <div class="post-content-wrap">
                            <ul class="post-meta">
                                <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                <li><i class="las la-user"></i>Elliot Alderson</li>
                            </ul>
                            <div class="post-content">
                                <h3>
                                    <a href="blog-details.html">Innovative business all over the world.</a>
                                </h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a href="blog-details.html" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.blog-section-->

    <footer class="footer-section">
        <!--/.footer-top-wrap-->
        <div class="footer-mid-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Working Hours</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Monday - Friday:</span>9.00am To 8.00pm</li>
                                <li><span>Saturday:</span>10.00am To 7.30pm</li>
                                <li><span>Sunday:</span>Close Day!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item footer-list">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="book-taxi.html">Taxi Booking</a></li>
                                <li><a href="faqs.html">Help Center</a></li>
                                <li><a href="about-us.html">Privacy and Policy</a></li>
                                <li><a href="about-company.html">Terms of Use</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Head Office</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Location:</span>153 Williamson Plaza, Maggieberg, MT 09514</li>
                                <li><span>Join Us:</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item subscribe-wrap">
                            <div class="widget-title">
                                <h3>Newsletter Signup</h3>
                            </div>
                            <form action="#" class="subscribe-form">
                                <input class="form-control" type="email" name="email" placeholder="Your Email" required="">
                                <input type="hidden" name="action" value="mailchimpsubscribe">
                                <button class="submit">Subscribe Now</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-mid-wrap-->
        <div class="copyright-wrap">
            <div class="container">
                <p>© <span id="currentYear"></span> Car Haven All Rights Reserved.</p>
            </div>
        </div>
        <!--/.copyright-wrap-->
    </footer>


    <!--jQuery Lib-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/jquary-3.6.0.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/swiper.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/venobox.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/smooth-scroll.js"></script>
    <script src="{{ asset('user') }}/assets/js/vendor/wow.min.js"></script>
    <script src="{{ asset('user') }}/assets/js/main.js"></script>



</html>
