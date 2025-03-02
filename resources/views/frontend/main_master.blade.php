<!DOCTYPE html>
<html lang="zxx">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ex-coders">
    <meta name="description" content="Daemon Tech - IT Solution & Technology ">
    <!-- ======== Page title ============ -->
    <title>Daemon Tech</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href=" {{asset('frontend/assets/img/favicon.svg')}} ">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/bootstrap.min.css')}} ">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/all.min.css')}} ">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/animate.css')}} ">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/magnific-popup.css')}} ">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/meanmenu.css')}} ">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/swiper-bundle.min.css')}} ">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/nice-select.css')}} ">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href=" {{asset('frontend/assets/css/main.css')}}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
            </div>
            <p class="text-center">Tech</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

     @yield('main')

    <!--<< All JS Plugins >>-->
    <script src=" {{asset('frontend/assets/js/jquery-3.7.1.min.js')}} "></script>
    <!--<< Viewport Js >>-->
    <script src=" {{asset('frontend/assets/js/viewport.jquery.js')}} "></script>
    <!--<< Bootstrap Js >>-->
    <script src=" {{asset('frontend/assets/js/bootstrap.bundle.min.js')}} "></script>
    <!--<< Nice Select Js >>-->
    <script src=" {{asset('frontend/assets/js/jquery.nice-select.min.js')}} "></script>
    <!--<< Waypoints Js >>-->
    <script src=" {{asset('frontend/assets/js/jquery.waypoints.js')}} "></script>
    <!--<< Counterup Js >>-->
    <script src=" {{asset('frontend/assets/js/jquery.counterup.min.js')}} "></script>
    <!--<< Swiper Slider Js >>-->
    <script src=" {{asset('frontend/assets/js/swiper-bundle.min.js')}} "></script>
    <!--<< MeanMenu Js >>-->
    <script src=" {{asset('frontend/assets/js/jquery.meanmenu.min.js')}} "></script>
    <!--<< Magnific Popup Js >>-->
    <script src=" {{asset('frontend/assets/js/jquery.magnific-popup.min.js')}} "></script>
    <!--<< Wow Animation Js >>-->
    <script src=" {{asset('frontend/assets/js/wow.min.js')}} "></script>
    <!--<< Main.js >>-->
    <script src=" {{asset('frontend/assets/js/main.js')}} "></script>
</body>

</html>