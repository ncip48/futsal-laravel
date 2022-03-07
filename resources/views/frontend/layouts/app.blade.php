<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <header>
        <div class="header-area-2 header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-wrap">
                            <div class="logo d-flex justify-content-between">
                                <a href="/" class="navbar-brand"> <img src="{{ asset('images/logo.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="navbar-icons">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                {{-- <div class="user-dropdown-icon">
                                    <i class="flaticon-user"></i>
                                    <div class="account-dropdown">
                                        <ul>
                                            <li class="account-el">
                                                <i class="bx bx-user-pin"></i>
                                                <a href="#">Sign in</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bxs-user-account"></i>
                                                <a href="#">My Account</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bx-extension"></i>
                                                <a href="#">Settings</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bx-log-in-circle"></i>
                                                <a href="#">Log out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                                <div class="mobile-menu d-flex ">
                                    <div class="top-search-bar m-0 d-block d-xl-none">
                                    </div>
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <nav class="main-nav">
                            <div class="navber-logo-sm">
                                <img src="assets/images/logo-2.png" alt="" class="img-fluid">
                            </div>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li><a href="about.html">About us </a></li>
                                <li><a href="destination.html">Destinations </a></li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Tour Package</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="package.html" class="sub-item">package</a></li>
                                        <li><a href="package-sidebar.html" class="sub-item">package sidebar</a>
                                        </li>
                                        <li><a href="package-standard.html" class="sub-item">package standard</a>
                                        </li>
                                        <li><a href="package-details.html" class="sub-item">package details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Blogs</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html" class="sub-item">Blog page</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-item">Blog sidebar</a></li>
                                        <li><a href="blog-standard.html" class="sub-item">Blog standard</a></li>
                                        <li><a href="blog-details.html" class="sub-item">blog-details </a></li>
                                    </ul>
                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Pages</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="gallary.html" class="sub-item">gallary page</a></li>
                                        <li><a href="guide.html" class="sub-item">guide page</a></li>
                                        <li><a href="destination.html" class="sub-item">destination page</a></li>
                                        <li><a href="404.html" class="sub-item">error page </a></li>
                                        <li><a href="faq.html" class="sub-item">FAQ page </a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us </a></li>
                            </ul>
                            <div class="navbar-icons-2">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                {{-- <div class="user-dropdown-icon">
                                    <i class="flaticon-user"></i>
                                    <div class="account-dropdown">
                                        <ul>
                                            <li class="account-el">
                                                <i class="bx bx-user-pin"></i>
                                                <a href="#">Sign in</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bxs-user-account"></i>
                                                <a href="#">My Account</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bx-extension"></i>
                                                <a href="#">Settings</a>
                                            </li>
                                            <li class="account-el">
                                                <i class="bx bx-log-in-circle"></i>
                                                <a href="#">Log out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="sidebar-contact">
                                <ul>
                                    <li class="sidebar-single-contact"><i class="bx bxs-phone"></i> <a
                                            href="tel:+17632275032">+1 763-227-5032</a></li>
                                    <li class="sidebar-single-contact"><i class="bx bxs-envelope"></i><a
                                            href="mailto:info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <form action="{{ url('searchbykode') }}" method="POST" style="margin:0px">
                @csrf
                <div class="main-searchbar">
                    <div class="searchbar-close">
                        <i class="bx bx-x"></i>
                    </div>
                    <input type="text" placeholder="Kode Booking......" name="kode">
                    <button type="submit" class="searchbar-icon" style="border:none;outline: none;">
                        <i class="bx bx-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </header>


    @yield('content')


    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="footer-info">
                        <div class="footer-logo">
                            <img src="{{ asset('images/logo-2.png') }}" alt="" class="img-fluid">
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid maxime aut ut voluptate
                            dolorum nisi ducimus ratione</p>
                        <div class="footer-social-icons">
                            <h5>Follow Us:</h5>
                            <ul>
                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-7">
                            <div class="footer-links">
                                <h5 class="widget-title">Contact us</h5>
                                <div class="contact-box">
                                    <span><i class="bx bx-phone"></i></span>
                                    <div>
                                        <a href="tel:+01852-1265122">+01852-1265122</a>
                                        <a href="tel:+01852-1265122">+01852-1265122</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <span><i class="bx bx-mail-send"></i></span>
                                    <div>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                        <a href="mailto:support@example.com">support@example.com</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <span><i class="bx bx-location-plus"></i></span>
                                    <div>
                                        <a href="#">2752 Willison Street <br>
                                            Eagan, United State</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5">
                            <div class="footer-links">
                                <h5 class="widget-title">support</h5>
                                <div class="category-list">
                                    <ul>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="blog.html">our Blogs</a></li>
                                        <li><a href="#">terms and conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="footer-links payment-links">
                                <h5 class="widget-title">We Accepts:</h5>
                                <div class="payment-cards">
                                    <img src="{{ asset('/images/payment-card-2.png') }}" alt=""
                                        class="img-fluid">
                                    <img src="{{ asset('/images/payment-card-1.png') }}" alt=""
                                        class="img-fluid">
                                    <img src="{{ asset('/images/payment-card-3.png') }}" alt=""
                                        class="img-fluid">
                                    <img src="{{ asset('/images/payment-card-4.png') }}" alt=""
                                        class="img-fluid">
                                    <img src="{{ asset('/images/payment-card-5.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyrigth-area">
                        <p>Copyright 2021 <a href="#">TourX</a> | Design By <a href="#">Egens Lab</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="Mid-client-iAW49GnBFbyLmHNh"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.timepicker.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/typed.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>
