 <!-- Offcanvas Area Start -->
 <div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="{{asset('frontend/assets/img/logo.svg')}} " alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <p class="text d-none d-lg-block">
                    Nous sommes une agence digitale spécialisée dans la création de sites web sur mesure, le
                    développement d'applications et la gestion de la présence en ligne.
                </p>
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Sénégal, Mbour RN 01, En face Papisen </a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="mailto:info@azent.com"><span
                                        class="mailto:info@daemontech.com">info@daemontech.com</span></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank" href="#">Lundi-Vendredi, 09am -07pm</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+221771117420">+221 77 111 74 20</a>
                            </div>
                        </li>
                    </ul>
                    <div class="header-button mt-4">
                        <a href="https://zcal.co/daemontech/30min" class="theme-btn text-center">
                            <span>Parler à un spécialiste<i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                    <!-- <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>

<!-- Header Section Start -->
<header>
    <div id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main style-2">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img width="200" src=" {{asset('frontend/assets/img/logo-daemon-f.png')}} " alt="logo-img">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="index.html">
                                                Acceuil
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <!-- <ul class="submenu has-homemenu">
                                                <li>
                                                    <div class="homemenu-items">
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb">
                                                                <img src="assets/img/header/home-1.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index.html" class="theme-btn">
                                                                        <span>Multi Page</span>
                                                                    </a>
                                                                    <a href="index-one-page.html" class="theme-btn">
                                                                        <span>One Page</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 01
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/header/home-2.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-2.html" class="theme-btn">
                                                                        <span>Multi Page</span>
                                                                    </a>
                                                                    <a href="index-two-page.html" class="theme-btn">
                                                                        <span>One Page</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 02
                                                                </h4>
                                                            </div>
                                                        </div>
                                                        <div class="homemenu">
                                                            <div class="homemenu-thumb mb-15">
                                                                <img src="assets/img/header/home-3.jpg" alt="img">
                                                                <div class="demo-button">
                                                                    <a href="index-3.html" class="theme-btn">
                                                                        <span>Multi Page</span>
                                                                    </a>
                                                                    <a href="index-three-page.html"
                                                                        class="theme-btn">
                                                                        <span>One Page</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu-content text-center">
                                                                <h4 class="homemenu-title">
                                                                    Home 03
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> -->
                                        </li>

                                        <li>
                                            <a href="#about">Notre agence</a>
                                        </li>
                                        <li>
                                            <a href="#services"> Services </a>
                                        </li>
                                        <!-- <li>
                                            <a href="#team"> Equipe </a>
                                        </li> -->
                                        <li>
                                            <a href="#projet"> Projets </a>
                                        </li>
                                        <li>
                                            <a href="#work"> Process </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <!-- <a href="#0" class="search-trigger search-icon"><i class="fal fa-search"></i></a>
                        <a href="#0"><i class="fa-solid fa-cart-shopping"></i></a> -->
                        <div class="header-button ms-4">
                            <a href="https://zcal.co/daemontech/30min" class="gt-btn">
                                <span>
                                    Entrer en contact
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </span>
                            </a>
                        </div>
                        <div class="header__hamburger d-block d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    