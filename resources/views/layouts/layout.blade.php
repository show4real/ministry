<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cooking - Restaurants Category Bootstrap Responsive Website Template - Home : W3Layouts</title>
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <style>
    /* Custom CSS */
    .custom-card {
      background-color: #fff;
      border: none;
      border-radius: 0px;
      transition: background-color 0.3s ease;
      
    }
    .custom-card:hover {
      background-color: gold;
    }
    .card-icon {
      font-size: 3rem;
      color: #333;
      margin: auto;
    }
    .card-img-top {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .card-text{
        line-height:1.9;
        
    }
  </style>
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    MFM Rehoboth<i class="fas fa-cross ms-1"></i>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="{{(Request::url() == url('/') ? 'nav-item nav-link active': 'nav-item nav-link a') }}"
                             aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{(Request::url() == url('/about-us') ? 'nav-item nav-link active': 'nav-item nav-link a') }}" href="/about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{(Request::url() == url('/our-events') ? 'nav-item nav-link active': 'nav-item nav-link a') }}" href="/our-events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{(Request::url() == url('/your-story') ? 'nav-item nav-link active': 'nav-item nav-link a') }}" href="/your-story">Your Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{(Request::url() == url('/connect') ? 'nav-item nav-link active': 'nav-item nav-link a') }}"href="/connect">Connect</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{(Request::url() == url('/contact-us') ? 'nav-item nav-link active': 'nav-item nav-link a') }}" href="contact-us">Contact</a>
                        </li>
                    </ul>
                   
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>

    @yield('content')
    <footer class="w3l-footer-16">
        <div class="footer-top-16 py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-lg-4 pb-2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3>About Us</h3>
                        <p>MFM Rehoboth</p>
                        <div class="columns-2 mt-4">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 column ps-xl-5 mt-sm-0 mt-4">
                        <h3>Quick Link</h3>
                        <ul class="footer-gd-16">
                            <li><a href="about-us">About Us</a></li>
                            <li><a href="our-events">Events</a></li>
                            <li><a href="#connect">Connect with us</a></li>
                            <li><a href="#blog">Blog Posts</a></li>
                            <li><a href="contact-us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 column ps-xl-5 pe-lg-0 mt-lg-0 mt-4">
                        <h3>Contact Info</h3>
                        <ul class="footer-contact-list">
                            <li class=""><i class="fas fa-map-marker-alt"></i><span>10001, 5th Avenue,
                                    #32841 block, USA</span></li>
                            <li class="mt-2"><i class="fas fa-phone-alt"></i><span><a href="tel:+12 23456790">+1223
                                        456 790</a></span></li>
                        </ul>
                        
                    </div>
                    <div class="col-lg-3 col-6 column ps-xl-5 pe-lg-0 mt-lg-0 mt-4">
                        <h3>Open Hours</h3>
                        <div>
                           
                            <p class="mt-2"><span>Mon – Sat</span> : 9Am – 6Pm</p>
                            <p> <span>Sunday</span> : CLOSED</p>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-section text-center py-4">
            <p class="copy-text py-1">&copy; 2024</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- slider-js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
    <script src="assets/js/jquery.zoomslider.min.js"></script>
    <!-- //slider-js -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>