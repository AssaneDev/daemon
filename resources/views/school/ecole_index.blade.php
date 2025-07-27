<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Thememarch" />
  <!-- Favicon Icon -->
  <link rel="icon" href=" {{asset('ecole/assets/img/favicon.svg')}} " />
  <link rel="stylesheet" type="text/css" href=" {{asset('ecole/ssets/fonts/flaticon_daevnt.css')}} a" />
  <!-- Site Title -->
  <title>Daemon School Digital</title>
  <link rel="stylesheet" href=" {{asset('ecole/assets/css/plugins/swiper-bundle.min.css')}} " />
  <link rel="stylesheet" href=" {{asset('ecole/assets/css/plugins/bootstrap.min.css')}} " />
  <link rel="stylesheet" href=" {{asset('ecole/assets/css/style.css')}} " />
</head>

<style>
  .speakers-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
  }

  @media (max-width: 992px) {
    .speakers-grid-3 {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 576px) {
    .speakers-grid-3 {
      grid-template-columns: 1fr;
    }
  }
</style>

<body>
  <!-- Start Header Section -->
  <header class="tm-site_header tm-style1 tm-sticky_header style-2">
    <div class="tm-main_header">
      <div class="container container-customizes">
        <div class="tm-main_header_in">
          <div class="tm-main-header-left">
            <a class="tm-site_branding" href="index.html">
              <img src="assets/img/icon/logo.svg" alt="..." />
            </a>
          </div>
          <div class="tm-main-header-center">
            <div class="tm-nav tm-medium">
              <ul class="tm-nav_list">
                <li><a href="#hero">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#pricing">Offres</a></li>
                <li><a href="#temoignages">Témoignages</a></li>
                <li><a href="#equipe">Équipe</a></li>
                <li><a href="#partenaires">Partenaires</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>

            </div>
          </div>
          <div class="tm-main-header-right">
            <div class="d-flex align-items-center gap-3">
              <div class="offcanvaopen-btn cursor-pointer button-offcanva style-2" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                  <path
                    d="M16 7.1668C14.4121 7.1668 13.1298 5.89066 13.1298 4.3336C13.1298 2.77646 14.4122 1.5 16 1.5C17.5872 1.5 18.8703 2.77621 18.8703 4.3332C18.8703 5.89026 17.5871 7.1668 16 7.1668ZM16 30.5C14.4122 30.5 13.1298 29.2231 13.1298 27.6668C13.1298 26.1105 14.4122 24.8336 16 24.8336C17.5871 24.8336 18.8703 26.1105 18.8703 27.6668C18.8703 29.2231 17.5871 30.5 16 30.5ZM16 18.8332C14.4122 18.8332 13.1298 17.5563 13.1298 16C13.1298 14.4429 14.4121 13.1668 16 13.1668C17.5872 13.1668 18.8703 14.443 18.8703 16C18.8703 17.5563 17.5871 18.8332 16 18.8332ZM4.20361 7.1668C2.6157 7.1668 1.33337 5.89066 1.33337 4.3336C1.33337 2.77654 2.6157 1.5004 4.20361 1.5004C5.79152 1.5004 7.07385 2.77654 7.07385 4.3336C7.07385 5.89066 5.79152 7.1668 4.20361 7.1668ZM4.20401 13.1668C5.79192 13.1668 7.07425 14.4429 7.07425 16C7.07425 17.5563 5.79152 18.8332 4.20361 18.8332C2.61578 18.8332 1.33337 17.5563 1.33337 16C1.33337 14.443 2.61603 13.1668 4.20401 13.1668ZM27.7965 13.1668C29.3836 13.1668 30.6667 14.443 30.6667 16C30.6667 17.5563 29.3836 18.8332 27.7965 18.8332C26.2094 18.8332 24.9262 17.5563 24.9262 16C24.9262 14.443 26.2093 13.1668 27.7965 13.1668ZM4.20401 24.8336C5.79184 24.8336 7.07425 26.1105 7.07425 27.6668C7.07425 29.2231 5.79152 30.5 4.20361 30.5C2.61578 30.5 1.33337 29.2231 1.33337 27.6668C1.33337 26.1105 2.61611 24.8336 4.20401 24.8336ZM27.7965 7.1668C26.2093 7.1668 24.9262 5.89059 24.9262 4.3336C24.9262 2.77661 26.2093 1.5004 27.7965 1.5004C29.3836 1.5004 30.6667 2.77661 30.6667 4.3336C30.6667 5.89059 29.3836 7.1668 27.7965 7.1668ZM27.7965 24.8336C29.3836 24.8336 30.6667 26.1105 30.6667 27.6668C30.6667 29.2231 29.3836 30.5 27.7965 30.5C26.2094 30.5 24.9262 29.2231 24.9262 27.6668C24.9262 26.1105 26.2094 24.8336 27.7965 24.8336Z"
                    fill="white" stroke="#131313" />
                </svg>
              </div>

              <a href="{{route('ecole.form')}}" class="primary__btn">
                <span> PLAN PERSONALISER</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Start offcanvas body -->
  <div id="hero" class="offcanvas offcanvas-end style-1" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
      <p class="close-text">CLOSE</p>
      <button type="button" class="btn-close btn-close-black ms-auto" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="offcanvas-body__coustom-style">
        <div class="offcanvas-body__content">
          <div class="offcanvas-body__info">
            <a href="tel:+1-416-8241228" class="offcanvas-body__phone">+1-416-8241228</a>
            <a href="tel:+1-416-7130327" class="offcanvas-body__phone">+1-416-7130327</a>
            <a href="mailto:contact@example.com" class="offcanvas-body__email">contact@example.com</a>
            <p class="offcanvas-body__desp">
              612-7 Roanoke Rd, Toronto, ON M3A 1E3, Canada
            </p>
          </div>
          <div class="offcanvas-body__email-social">
            <div class="offcanvas-body__input">
              <input type="text" class="offcanvas-body__input__email" placeholder="Enter Your Email Address" />
              <button class="offcanvas-body__input__btn">
                <span> Subscribe</span>
                <span class="offcanvas-body__input__btn__icon"><svg xmlns="http://www.w3.org/2000/svg" width="21"
                    height="21" viewBox="0 0 21 21" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M3.4707 10.5029C3.4707 10.1577 3.75053 9.87793 4.0957 9.87793H17.8457C18.1909 9.87793 18.4707 10.1577 18.4707 10.5029C18.4707 10.8481 18.1909 11.1279 17.8457 11.1279H4.0957C3.75053 11.1279 3.4707 10.8481 3.4707 10.5029Z"
                      fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M11.7788 4.43599C12.0228 4.19191 12.4186 4.19191 12.6626 4.43599L18.2876 10.061C18.5317 10.3051 18.5317 10.7008 18.2876 10.9449L12.6626 16.5699C12.4186 16.8139 12.0228 16.8139 11.7788 16.5699C11.5347 16.3258 11.5347 15.9301 11.7788 15.686L16.9618 10.5029L11.7788 5.31987C11.5347 5.07579 11.5347 4.68007 11.7788 4.43599Z"
                      fill="white" />
                  </svg></span>
              </button>
            </div>
            <div class="tm-height-40 tm-height-lg-30"></div>
            <div class="offcanvas-body__social social">
              <ul class="social__items">
                <li class="social__item">
                  <a href="https://www.facebook.com/" class="social__link" data-discover="true">
                    <i class="flaticon-facebook"></i>
                  </a>
                </li>
                <li class="social__item">
                  <a href="https://www.linkedin.com/login" class="social__link" data-discover="true">
                    <i class="flaticon-linkedin"></i>
                  </a>
                </li>
                <li class="social__item">
                  <a href="https://x.com/?lang=en" class="social__link" data-discover="true">
                    <i class="flaticon-twitter"></i>
                  </a>
                </li>
                <li class="social__item">
                  <a href="https://www.instagram.com/accounts/login" class="social__link" data-discover="true">
                    <i class="flaticon-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Section -->

  <!-- Start Hero 1-->
  <!-- <section class="tm-slider creative-conference creative-conference__slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="creative-conference__wrapper parallax-item" data-swiper-parallax="800">
          <img src="assets/img/hero/creative-conference.png" class="creative-conference__img" alt="..." />
          <div class="container container-customizes">
            <div class="creative-conference__content">
              <h1 class="creative-conference__title anim-line-words home-intro__highlight">
                <span class="home-intro__highlight-word">✨ Boostez</span>
                <span class="home-intro__highlight-word">Votre</span>
                <span class="home-intro__highlight-word small-text">Visibilité</span>
              </h1>


            </div>
          </div>
          <div class="cc__slider--btn">
            <a href="events-details.html" class="zigzag__btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="151" viewBox="0 0 150 151" fill="none">
                <path class="zigzagShape"
                  d="M150.008 75.9336C150.008 82.2685 140.829 87.3126 139.284 93.155C137.66 99.2 143.03 108.164 139.967 113.443C136.862 118.812 126.392 118.606 122.035 122.975C117.678 127.344 117.885 137.801 112.503 140.907C107.209 143.973 98.2604 138.592 92.2154 140.208C86.373 141.769 81.325 150.932 74.9901 150.932C68.6552 150.932 63.6111 141.753 57.7687 140.208C51.7237 138.592 42.7755 143.973 37.4811 140.907C32.1114 137.801 32.3179 127.332 27.949 122.975C23.5801 118.618 13.1226 118.824 10.0167 113.443C6.95052 108.148 12.3322 99.2 10.7157 93.155C9.15483 87.3126 -0.00793457 82.2685 -0.00793457 75.9336C-0.00793457 69.5987 9.17071 64.5507 10.7157 58.7083C12.3322 52.6633 6.95449 43.715 10.0167 38.4207C13.1226 33.051 23.592 33.2575 27.949 28.8886C32.306 24.5197 32.0995 14.0622 37.4811 10.9563C42.7755 7.89407 51.7237 13.2718 57.7687 11.6553C63.6111 10.0944 68.6552 0.931641 74.9901 0.931641C81.325 0.931641 86.373 10.1103 92.2154 11.6553C98.2604 13.2718 107.209 7.89407 112.503 10.9563C117.873 14.0622 117.666 24.5316 122.035 28.8886C126.404 33.2456 136.866 33.051 139.967 38.4207C143.03 43.715 137.652 52.6633 139.268 58.7083C140.837 64.5507 150.008 69.5987 150.008 75.9336Z"
                  stroke="white" stroke-width="3" fill="white" />
              </svg>
              <div class="zigzag__btn--text">
                <span>Pour</span>
                <span class="zigzag__btn--icon">
                  <i class="flaticon-right-arrow"></i>
                </span>
                <span> Les écoles</span>
              </div>
            </a>
          </div>
        </div>
      </div>


    </div>


    <div class="cc_contact--bar" data-src="assets/img/hero/contact-bar.png">
      <div class="cc_contact--bar__socialtext left-border">
        <p>Sénégal , Dakar</p>
      </div>
      <div class="cc_contact--bar__number left-border">
        <a href="telto:Info@daevnt.org.world">339994157
        </a>
      </div>
      <div class="cc_contact--bar__email left-border">
        <a href="emailto:Info@daevnt.org.world">daemontech01@yahoo.fr</a>
      </div>
    </div>
  </section> -->
  <!-- End Hero -->

  <!-- Start Hero -->
  <section id="hero" class="tm-slider creative-conference creative-conference__slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="creative-conference__wrapper parallax-item" data-swiper-parallax="800">
          <img src="assets/img/hero/creative-conference.png" class="creative-conference__img" alt="..." />
          <div class="container container-customizes">
            <div class="creative-conference__content">
              <h1 class="creative-conference__title anim-line-words home-intro__highlight">
                <span class="home-intro__highlight-word">✨ Boostez</span>
                <span class="home-intro__highlight-word small-text">Sa Visibilité</span>
              </h1>
              <div class="creative-conference__speaker">
                <img class="speaker__img" src="assets/img/hero/avatar.png" alt="..." />
                <div class="speaker__content">
                  <div class="speaker__inner-text anim-line-words">
                    PUBLICITE
                  </div>
                  <h6 class="speaker__name">Daemon Digital School</h6>
                  <p class="speaker__desp">Le partenaire des écoles</p>
                </div>
              </div>
              <div class="creative-conference__datetime">
                <p class="datetime_desp">

                </p>
                <div class="datetime__content">
                  <p class="datetime__name"></p>
                  <h6 class="datetime__desp"></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="cc__slider--btn">
            <a href="events-details.html" class="zigzag__btn">
              <svg xmlns="http://www.w3.org/2000/svg" width="150" height="151" viewBox="0 0 150 151" fill="none">
                <path class="zigzagShape"
                  d="M150.008 75.9336C150.008 82.2685 140.829 87.3126 139.284 93.155C137.66 99.2 143.03 108.164 139.967 113.443C136.862 118.812 126.392 118.606 122.035 122.975C117.678 127.344 117.885 137.801 112.503 140.907C107.209 143.973 98.2604 138.592 92.2154 140.208C86.373 141.769 81.325 150.932 74.9901 150.932C68.6552 150.932 63.6111 141.753 57.7687 140.208C51.7237 138.592 42.7755 143.973 37.4811 140.907C32.1114 137.801 32.3179 127.332 27.949 122.975C23.5801 118.618 13.1226 118.824 10.0167 113.443C6.95052 108.148 12.3322 99.2 10.7157 93.155C9.15483 87.3126 -0.00793457 82.2685 -0.00793457 75.9336C-0.00793457 69.5987 9.17071 64.5507 10.7157 58.7083C12.3322 52.6633 6.95449 43.715 10.0167 38.4207C13.1226 33.051 23.592 33.2575 27.949 28.8886C32.306 24.5197 32.0995 14.0622 37.4811 10.9563C42.7755 7.89407 51.7237 13.2718 57.7687 11.6553C63.6111 10.0944 68.6552 0.931641 74.9901 0.931641C81.325 0.931641 86.373 10.1103 92.2154 11.6553C98.2604 13.2718 107.209 7.89407 112.503 10.9563C117.873 14.0622 117.666 24.5316 122.035 28.8886C126.404 33.2456 136.866 33.051 139.967 38.4207C143.03 43.715 137.652 52.6633 139.268 58.7083C140.837 64.5507 150.008 69.5987 150.008 75.9336Z"
                  stroke="white" stroke-width="3" fill="white" />
              </svg>
              <div class="zigzag__btn--text">
                <span>Com</span>
                <span class="zigzag__btn--icon">
                  <i class="flaticon-right-arrow"></i>
                </span>
                <span> Ecole</span>
              </div>
            </a>
          </div>
        </div>
      </div>


    </div>

    <div class="cc__slider--controller">
      <div class="cc__slider__prve--btn">
        <div class="dotshape"></div>
        <h6 class="text"></h6>
      </div>
      <div class="cc__slider__next--btn">
        <div class="dotshape"></div>
        <h6 class="text"></h6>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <!-- Start About Section -->
  <section id="about" class="container">
    <div class="tm-height-150 tm-height-lg-80"></div>
    <div class="about-content fade-up">
      <div class="about-content__wapper">
        <p class="about-content__subtitle">🎓 Valorisez votre école grâce au digital </p>
        <h3 class="about-content__info">
          Daemon Tech accompagne <span class="highlight-text"> les établissements privés</span> dans leur communication
          moderne et efficace
          :<span class="highlight-text"> réseaux sociaux, site web, contenus visuels… </span>Attirez plus d’élèves et
          développez votre notoriété.
        </h3>
        <!-- <p class="about-content__subtitle style1">
          Let me know if you’d like any refinements!
        </p> -->
        <div class="about-content__btn-phone">
          <a href="about-us.html" class="primary__btn"> Demandez une présentation gratuite</a>
          <a href="tel:+14168241228" class="about-phone-info">
            <div class="social__icon-btn" data-discover="true">
              <i class="flaticon-telephone"></i>
            </div>
            <p class="about-phone-text">77 235 38 97</p>
          </a>
        </div>
      </div>
    </div>
    <div class="tm-height-150 tm-height-lg-80"></div>
    <div class="funfact-content">
      <div class="funfact-content__wapper">
        <div class="funfact-content__item">
          <h2 class="funfact-content__item--cunter">
            <span class="counter">10</span>
          </h2>
          <h6 class="funfact-content__item--title">Community Manager</h6>
          <p class="funfact-content__item--desp">
            Experts des réseaux sociaux à votre écoutes
          </p>
        </div>
        <div class="funfact-content__item">
          <h2 class="funfact-content__item--cunter">
            <span class="counter">5</span>
          </h2>
          <h6 class="funfact-content__item--title">Graphistes</h6>
          <p class="funfact-content__item--desp">
            Pour une reactivité pour vos conceptions graphiques
          </p>
        </div>
        <div class="funfact-content__item">
          <h2 class="funfact-content__item--cunter">
            <span class="counter">2</span>
          </h2>
          <h6 class="funfact-content__item--title">Développeurs</h6>
          <p class="funfact-content__item--desp">
            Pour des sites webs ou logiciel de gestion pour votre établissements
          </p>
        </div>
      </div>
    </div>
    <div class="tm-height-150 tm-height-lg-80"></div>
  </section>
  <!-- End About Section -->

  <!-- Start Feature Section -->
  <section id="services" class="feature-section">
    <div class="feature-content tm-bg" data-src="assets/img/feature/feature-bg.png">
      <div class="tm-height-90 tm-height-lg-80"></div>
      <div class="feature-content__wrapper container-customizes">

        <!-- Boutons -->
        <div class="feature-content__buttons">
          <button class="feature-content__button button-active" data-target="about">Pourquoi le digital ?</button>
          <button class="feature-content__button" data-target="who">Pour qui ?</button>
          <button class="feature-content__button" data-target="topic">Nos services</button>
        </div>

        <div class="tm-height-60 tm-height-lg-50"></div>

        <!-- Contenus -->
        <div>
          <!-- Onglet 1 -->
          <div class="feature-content__info" data-content="about" style="display: flex;">
            <div class="feature-content__speaker">
              <img src="assets/img/feature/feature-1.png" alt="École digitale" class="feature-content__img fade-up" />
            </div>
            <div class="feature-content__person__info fade-up" data-delay="0.2">
              <p class="feature-content__tagline">Visibilité, notoriété, modernité</p>
              <h3 class="feature-content__title">
                Le digital pour
                <span class="feature-content__headline">attirer plus d’élèves</span>
              </h3>
              <p class="feature-content__description">
                Aujourd’hui, les parents et élèves recherchent leur futur établissement en ligne.
                Être présent sur les réseaux sociaux ou via un site web valorise votre image
                et facilite les inscriptions. Ne laissez pas votre école invisible !
              </p>
              <a class="primary__btn" href="#contact">CONTACTEZ-NOUS</a>
            </div>
          </div>

          <!-- Onglet 2 -->
          <div class="feature-content__info" data-content="who" style="display: none;">
            <div class="feature-content__speaker fade-up">
              <img src="assets/img/feature/feature-2.png" alt="Public cible" class="feature-content__img" />
            </div>
            <div class="feature-content__person__info fade-up" data-delay="0.2">
              <p class="feature-content__tagline">Écoles privées, franco-sénégalaises, internationales</p>
              <h3 class="feature-content__title">
                Une solution adaptée
                <span class="feature-content__headline">à chaque établissement</span>
              </h3>
              <p class="feature-content__description">
                Que vous soyez une petite école ou un grand établissement, nous personnalisons votre
                stratégie digitale selon vos besoins : visibilité locale, promotion d’événements,
                inscriptions, ou communication interne.
              </p>
              <a class="primary__btn" href="#contact">EN SAVOIR PLUS</a>
            </div>
          </div>

          <!-- Onglet 3 -->
          <div class="feature-content__info" data-content="topic" style="display: none;">
            <div class="feature-content__speaker fade-up">
              <img src="assets/img/feature/feature-3.png" alt="Services Daemon Tech" class="feature-content__img" />
            </div>
            <div class="feature-content__person__info fade-up" data-delay="0.2">
              <p class="feature-content__tagline">Communication digitale complète</p>
              <h3 class="feature-content__title">
                De la création
                <span class="feature-content__headline">à la gestion quotidienne</span>
              </h3>
              <p class="feature-content__description">
                ➤ Création et gestion de vos pages Facebook & Instagram<br />
                ➤ Création de site web vitrine<br />
                ➤ Contenus photo/vidéo pour vos événements<br />
                ➤ Sponsoring et stratégie digitale<br />
                ➤ Assistance et suivi mensuel
              </p>
              <a class="primary__btn" href="#services">VOIR NOS OFFRES</a>
            </div>
          </div>
        </div>

      </div>
      <div class="tm-height-100 tm-height-lg-80"></div>
    </div>
  </section>


  <!-- End Feature Section -->

  <!-- Start Pricing-->
  <div id="pricing" class="tm-height-150 tm-height-lg-80"></div>
  <div class="container">
    <div class="common-section-heading">
      <div class="common-section-heading__wapper type-2">
        <div class="common-section-heading__right">
          <div class="common-section-heading__content">
            <h2 class="common-section-heading__title">Nos Offres</h2>
          </div>
        </div>
        <div class="common-section-heading__left swiper__buttons">
          <p class="common-section-heading__subtitle">
            Choisissez la formule qui convient le mieux à votre école. Nos services sont adaptés à tous les budgets.
          </p>
        </div>
      </div>
    </div>

    <div class="package-content">

      <!-- Offre Starter -->
      <div class="fade-up">
        <div class="package-one style2 hover-active-class">
          <div class="package-head-info">
            <p class="title">Formule Starter</p>
            <h5 class="price">35 000 F / mois</h5>
          </div>
          <div class="border-horizontal"></div>
          <ul class="package-list">
            <li><i class="flaticon-check-mark"></i>Création ou gestion d’une page Facebook</li>
            <li><i class="flaticon-check-mark"></i>2 publications / semaine</li>
            <li><i class="flaticon-check-mark"></i>Design d’affiches simples inclus</li>
            <li><i class="flaticon-check-mark"></i>Suivi mensuel</li>
          </ul>
          <a href="#contact" class="primary__btn type-2">
            <span>Je suis intéressé</span>
          </a>
        </div>
      </div>

      <!-- Offre Standard -->
      <div class="fade-up" data-delay="0.2">
        <div class="package-two style2 hover-active-class active">
          <div class="package-head-info">
            <p class="title">Formule Standard</p>
            <h5 class="price">75 000 F / mois</h5>
          </div>
          <div class="border-horizontal"></div>
          <ul class="package-list">
            <li><i class="flaticon-check-mark"></i>Facebook + Instagram</li>
            <li><i class="flaticon-check-mark"></i>4 publications / semaine</li>
            <li><i class="flaticon-check-mark"></i>Contenus photos/vidéos inclus</li>
            <li><i class="flaticon-check-mark"></i>Stratégie de communication personnalisée</li>
          </ul>
          <a href="#contact" class="primary__btn type-2">
            <span>Choisir cette formule</span>
          </a>
        </div>
      </div>

      <!-- Offre Premium -->
      <div class="fade-up" data-delay="0.3">
        <div class="package-three style2 hover-active-class">
          <div class="package-head-info">
            <p class="title">Formule Premium</p>
            <h5 class="price">150 000 F / mois</h5>
          </div>
          <div class="border-horizontal"></div>
          <ul class="package-list">
            <li><i class="flaticon-check-mark"></i>Gestion complète Facebook + Instagram</li>
            <li><i class="flaticon-check-mark"></i>Création d’un site vitrine inclus</li>
            <li><i class="flaticon-check-mark"></i>Photos et vidéos pro à chaque événement</li>
            <li><i class="flaticon-check-mark"></i>Campagnes sponsorisées et reporting mensuel</li>
          </ul>
          <a href="#contact" class="primary__btn type-2">
            <span>Demander un rendez-vous</span>
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- End Pricing -->

  <!-- Start Testimonal -->
  <div id="temoignages" class="tm-height-150 tm-height-lg-80"></div>
  <section>
    <div class="container">
      <div class="common-section-heading">
        <div class="common-section-heading__wapper">
          <div class="common-section-heading__right">
            <div class="common-section-heading__content">
              <h2 class="common-section-heading__title">
                Ils nous ont choisis !
              </h2>
            </div>
          </div>
          <div class="common-section-heading__left swiper__buttons">
            <div class="common-section-heading__buttons">
              <button class="circle__btn-next testimonal-swiper__btn-next">
                <i class="flaticon-right-arrow-2"></i>
              </button>
              <button class="circle__btn-perv testimonal-swiper__btn-perv">
                <i class="flaticon-right-arrow-2"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonal-items testimonal-items__slider">
      <div class="swiper-wrapper testimonal-items__wrapper">
        <div class="swiper-slide">
          <div class="testimonal-item">
            <div class="testimonal-item__content">
              <p class="testimonal-item__subtitle">
                — Crhistelle, Kids Academy
              </p>
              <img src="assets/img/testimonal/star.png" class="testimonal-item__star" alt="..." />
              <h6 class="testimonal-item__title">
                Unmatched Energy & Innovation!
              </h6>

              <p class="testimonal-item__desp">
                "From interactive workshops to thought-provoking keynotes,
                this conference redefined how I see the future of my industry.
                I left feeling empowered and ready to take on new challenges!"
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonal-item">
            <div class="testimonal-item__content">
              <p class="testimonal-item__subtitle">
                — Sabine, Directrice Diarama
              </p>
              <img src="assets/img/testimonal/star.png" class="testimonal-item__star" alt="..." />
              <h6 class="testimonal-item__title">
                A Game-Changer for My Career!
              </h6>

              <p class="testimonal-item__desp">
                "Attending this event was the best decision I made this year!
                The speakers were truly inspiring, and I made incredible
                connections that have opened new opportunities for me."
              </p>
            </div>
          </div>
        </div>


        <div class="swiper-slide">
          <div class="testimonal-item">
            <div class="testimonal-item__content">
              <p class="testimonal-item__subtitle">
                — Bousso., Bousso Baobab
              </p>
              <img src="assets/img/testimonal/star.png" class="testimonal-item__star" alt="..." />
              <h6 class="testimonal-item__title">
                Unmatched Energy & Innovation!
              </h6>

              <p class="testimonal-item__desp">
                "From interactive workshops to thought-provoking keynotes,
                this conference redefined how I see the future of my industry.
                I left feeling empowered and ready to take on new challenges!"
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonal -->

  <!-- Start Future Events -->
  <div class="tm-height-150 tm-height-lg-80"></div>

  <!-- End  Future Events -->

  <!-- Start Video Section -->
  <!-- <div class="tm-height-150 tm-height-lg-80"></div>
  <a href="https://www.youtube.com/watch?v=VcaAVWtP48A" class="tm-center tm-video-block tm-style1 tm-video-open tm-bg">
    <img src="assets/img/bg/video-section-bg.png" class="video-img tm-bg fade-up" alt="..." />
    <span class="video-player-btn circle-btn-anim tm-center">
      <span class="text">PLAY VIDEO</span>
    </span>
  </a> -->
  <!-- End Video Section -->

  <!-- Start Speaker Section -->
  <div id="equipe" class="tm-height-150 tm-height-lg-80"></div>
  <section class="container">
    <div class="fade-up">
      <div class="speakers-section">
        <div class="speakers-section__heading">
          <h2 class="speakers-section__title">
            <span class="highlight">NOTRE ÉQUIPE</span> Digitale
          </h2>
        </div>
        <div class="tm-height-50 tm-height-lg-30"></div>

        <!-- Grille 3 colonnes responsive -->
        <div class="speakers-grid-3">
          <!-- Membre 1 -->
          <div class="speakers-card">
            <div class="speakers-top__img">
              <img src="assets/img/speaker/speaker-2.png" alt="Dady" />
              <div class="speakers-main__button-content">
                <div class="speakers-top__img__social">
                  <a href="https://www.facebook.com/" class="icon"><i class="flaticon-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="icon"><i class="flaticon-instagram"></i></a>
                  <a href="https://x.com/" class="icon"><i class="flaticon-twitter"></i></a>
                </div>
              </div>
            </div>
            <a href="speaker-details.html" class="speakers-card__info">
              <h6 class="speakers-card__title text-dot-left">Dady</h6>
              <p class="speakers-card__subtitle">Community Manager & Créateur de contenu</p>
            </a>
          </div>

          <!-- Membre 2 -->
          <div class="speakers-card">
            <div class="speakers-top__img">
              <img src="assets/img/speaker/speaker-1.png" alt="Coumba Ba" />
              <div class="speakers-main__button-content">
                <div class="speakers-top__img__social">
                  <a href="https://www.facebook.com/" class="icon"><i class="flaticon-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="icon"><i class="flaticon-linkedin"></i></a>
                </div>
              </div>
            </div>
            <a href="speaker-details.html" class="speakers-card__info">
              <h6 class="speakers-card__title text-dot-left">Coumba Ba</h6>
              <p class="speakers-card__subtitle">Développeuse</p>
            </a>
          </div>

          <!-- Membre 3 -->
          <div class="speakers-card">
            <div class="speakers-top__img">
              <img src="assets/img/speaker/speaker-3.png" alt="Khady Sow" />
              <div class="speakers-main__button-content">
                <div class="speakers-top__img__social">
                  <a href="https://www.facebook.com/" class="icon"><i class="flaticon-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="icon"><i class="flaticon-instagram"></i></a>
                  <a href="https://x.com/" class="icon"><i class="flaticon-twitter"></i></a>
                </div>
              </div>
            </div>
            <a href="speaker-details.html" class="speakers-card__info">
              <h6 class="speakers-card__title text-dot-left">Khady Sow</h6>
              <p class="speakers-card__subtitle">Graphiste</p>
            </a>
          </div>

          <!-- Membre 4 -->
          <div class="speakers-card">
            <div class="speakers-top__img">
              <img src="assets/img/speaker/speaker-4.png" alt="Awa" />
              <div class="speakers-main__button-content">
                <div class="speakers-top__img__social">
                  <a href="https://www.facebook.com/" class="icon"><i class="flaticon-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="icon"><i class="flaticon-instagram"></i></a>
                  <a href="https://x.com/" class="icon"><i class="flaticon-twitter"></i></a>
                </div>
              </div>
            </div>
            <a href="speaker-details.html" class="speakers-card__info">
              <h6 class="speakers-card__title text-dot-left">Awa</h6>
              <p class="speakers-card__subtitle">Impression sur support</p>
            </a>
          </div>

          <!-- Membre 5 -->
          <div class="speakers-card">
            <div class="speakers-top__img">
              <img src="assets/img/speaker/speaker-5.png" alt="Assane" />
              <div class="speakers-main__button-content">
                <div class="speakers-top__img__social">
                  <a href="https://www.facebook.com/" class="icon"><i class="flaticon-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="icon"><i class="flaticon-instagram"></i></a>
                  <a href="https://x.com/" class="icon"><i class="flaticon-twitter"></i></a>
                </div>
              </div>
            </div>
            <a href="speaker-details.html" class="speakers-card__info">
              <h6 class="speakers-card__title text-dot-left">Assane</h6>
              <p class="speakers-card__subtitle">Developpeur</p>
            </a>
          </div>

          <!-- Membre 6 -->
          <div class="speakers-card">
            <div class="speakers-top__img">
              <img src="assets/img/speaker/speaker-6.png" alt="Ndama" />
              <div class="speakers-main__button-content">
                <div class="speakers-top__img__social">
                  <a href="https://www.facebook.com/" class="icon"><i class="flaticon-facebook"></i></a>
                  <a href="https://www.instagram.com/" class="icon"><i class="flaticon-instagram"></i></a>
                  <a href="https://x.com/" class="icon"><i class="flaticon-twitter"></i></a>
                </div>
              </div>
            </div>
            <a href="speaker-details.html" class="speakers-card__info">
              <h6 class="speakers-card__title text-dot-left">Aicha</h6>
              <p class="speakers-card__subtitle">Graphiste</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Start Speaker Section -->

  <!-- Start Brands Sponsor -->
  <div id="partenaires" class="tm-height-150 tm-height-lg-80"></div>
  <section class="brands-sponsor">
    <div class="tm-height-105 tm-height-lg-80"></div>
    <div class="container">
      <div class="brands-sponsor__title">
        <h6 class="brands-sponsor__title--text">
          CLIENT . PARTENAIRE
        </h6>
      </div>
    </div>
    <div class="tm-height-50 tm-height-lg-50"></div>
    <div class="container-customizes">
      <div class="brands-sponsor__list brands-sponsor__slider tm-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="brands-sponsor__item">
              <img src="assets/img/testimonal/kids.jpg" alt="..." />
              <h6 class="brands-sponsor__title">Kids Academy</h6>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brands-sponsor__item">
              <img src="assets/img/testimonal/bousso.jpg" alt="" />
              <h6 class="brands-sponsor__title">Bousso Baobab</h6>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brands-sponsor__item">
              <img width="95px" src="assets/img/testimonal/diarama.jpg" alt="" />
              <h6 class="brands-sponsor__title">Diarama ART</h6>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="brands-sponsor__item">
              <img src="assets/img/icon/brands-icon-4.svg" alt="" />
              <h6 class="brands-sponsor__title">S.O.S PRINT</h6>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="tm-height-110 tm-height-lg-80"></div>
  </section>
  <!-- End Brands Sponsor -->



  <!-- Start Moving Text  -->
  <div class="tm-height-150 tm-height-lg-80"></div>
  <div class="moving-section__wrap">
    <div class="moving-section__in moving-section-in">
      <div class="moving-section">
        <h2 class="moving-section__title">
          Publictité <span class="highlight-text">Ecole</span>
        </h2>
      </div>
      <div class="moving-section">
        <h2 class="moving-section__title">
          Publictité <span class="highlight-text">Ecole</span>
        </h2>
      </div>
      <div class="moving-section">
        <h2 class="moving-section__title">
          Publictité <span class="highlight-text">Ecole</span>
        </h2>
      </div>
      <div class="moving-section">
        <h2 class="moving-section__title">
          Publictité <span class="highlight-text">Ecole</span>
        </h2>
      </div>
      <div class="moving-section">
        <h2 class="moving-section__title">
          Publictité <span class="highlight-text">Ecole</span>
        </h2>
      </div>
      <div class="moving-section">
        <h2 class="moving-section__title">
          Publictité <span class="highlight-text">Ecole</span>
        </h2>
      </div>
    </div>
  </div>
  <!-- End Moving Text  -->

  <!-- Start Recent News -->
  <div class="tm-height-150 tm-height-lg-80"></div>

  <!-- End Recent News -->

  <!-- Strat Contact -->
  <div id="contact" class="tm-height-150 tm-height-lg-80"></div>
  <div class="container-fluid px-md-0">
    <div class="contact-form-content">
      <div class="contact-form-img image-hov-one">
        <div class="tm-google-map tm-bg">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d965.7912618644765!2d-17.07293672438605!3d14.475210295402023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTTCsDI4JzMwLjgiTiAxN8KwMDQnMTguMiJX!5e0!3m2!1sfr!2ssn!4v1753363666434!5m2!1sfr!2ssn"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="contact-form fade-up">
        <div>
          <h3 class="contact-title">Commencez dès maintenant !</h3>
          <p class="contact-desp">
            Plus tôt vous nous contactez, plus vite votre communication sera optimisée.
          </p>
          <div class="tm-height-50 tm-height-lg-30"></div>
        </div>
        <form id="contactForm" method="post" action="#">
          <div class="form-inputs">
            <div class="type_1">
              <input type="text" name="prenom" id="firstname" class="csame" placeholder="Prénom *" required />
            </div>
            <div class="type_1">
              <input type="text" name="nom" id="lastname" class="csame" placeholder="Nom *" required />
            </div>
          </div>
          <div class="form-inputs">
            <div class="type_1">
              <input type="email" name="email" id="emailInput" class="csame" placeholder="Adresse Email *" required />
            </div>
            <div class="type_1">
              <input type="tel" name="telephone" id="YourPhone" class="csame" placeholder="Numéro de téléphone" />
            </div>
          </div>
          <div class="form-inputs">
            <div class="type_1">
              <select name="offre" id="offreInput" class="csame" required>
                <option value="" disabled selected hidden class="select-placeholder">Choisissez une formule</option>
                <option value="starter">Formule Starter – 35 000 F</option>
                <option value="standard">Formule Standard – 75 000 F</option>
                <option value="premium">Formule Premium – 150 000 F</option>
              </select>
            </div>
          </div>
          <div class="form-textarea">
            <div class="type_1">
              <textarea name="message" rows="3" id="textareaInput" class="csame"
                placeholder="Écrivez ici votre message ou besoin..."></textarea>
            </div>
          </div>
          <div class="tm-height-40 tm-height-lg-40"></div>
          <button type="submit" id="submit" class="primary__btn style2">
            Envoyer la demande
          </button>
        </form>
      </div>

    </div>
  </div>
  <!-- End Contact -->

  <!-- Start Footer -->
  <!-- <footer class="footer tm-bg" data-src="assets/img/bg/footer-bg.png">
    <img class="footer__bg--icon" src="assets/img/icon/footer-bg-icon.svg" alt="..." />
    <div class="tm-height-125 tm-height-lg-80"></div>
    <div class="footer__container container">
      <div class="footer__main">
        <div class="footer__left">
          <div class="footer__about">
            <img src="assets/img/icon/logo.svg" alt="Company Logo" class="footer__logo" />
            <p class="footer__description">
              Pellentesque nec tempor sapien. Pellentesque vel placerat nibh.
              Suspendisse venenatis.
            </p>
          </div>
          <div class="footer__input">
            <input type="text" class="footer__input__email" placeholder="Enter Your Email Address" name="email" />
            <button class="footer__input__btn" type="submit">
              <span> Subscribe</span>
              <span class="footer__input__btn__icon"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                  viewBox="0 0 21 21" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.4707 10.5029C3.4707 10.1577 3.75053 9.87793 4.0957 9.87793H17.8457C18.1909 9.87793 18.4707 10.1577 18.4707 10.5029C18.4707 10.8481 18.1909 11.1279 17.8457 11.1279H4.0957C3.75053 11.1279 3.4707 10.8481 3.4707 10.5029Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M11.7788 4.43599C12.0228 4.19191 12.4186 4.19191 12.6626 4.43599L18.2876 10.061C18.5317 10.3051 18.5317 10.7008 18.2876 10.9449L12.6626 16.5699C12.4186 16.8139 12.0228 16.8139 11.7788 16.5699C11.5347 16.3258 11.5347 15.9301 11.7788 15.686L16.9618 10.5029L11.7788 5.31987C11.5347 5.07579 11.5347 4.68007 11.7788 4.43599Z"
                    fill="white" />
                </svg></span>
            </button>
          </div>
        </div>
        <div class="footer__right">
          <div class="footer__list footer__list--useful">
            <h6 class="footer__title">Useful Link</h6>
            <ul class="footer__links">
              <li>
                <a href="about-us.html" class="footer__link">About Events</a>
              </li>
              <li>
                <a href="events.html" class="footer__link">Future Events</a>
              </li>
              <li>
                <a href="speaker.html" class="footer__link">Top Speakers</a>
              </li>
              <li><a href="faq.html" class="footer__link">Faq Pages</a></li>
              <li>
                <a href="contact-us.html" class="footer__link">Get Ticket</a>
              </li>
            </ul>
          </div>
          <div class="footer__list footer__list--services">
            <div class="footer__list--address">
              <h6 class="footer__title sp__btttom-10">Address:</h6>
              <p class="footer__desp">
                612-7 Roanoke Rd, Toronto, ON M3A 1E3, Canada
              </p>
            </div>
            <div class="footer__phone">
              <p class="footer__phonetitle">Phone:</p>
              <a href="tel:+1-234-567-8900" class="footer__phonenumber">
                +1-416-8241228
              </a>
            </div>
            <div class="footer__email">
              <p class="footer__emailtitle">Email:</p>
              <a href="mailto:info@email.com" class="footer__emailtext">
                info@email.com
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tm-height-125 tm-height-lg-60 tm-height-lg--33"></div>
    <div class="footer__copyright">
      <div class="container">
        <div class="footer__copyright__inner">
          <p class="footer__copytext">
            © 2025
            <a href="https://themeforest.net/user/thememarch" class="footer__copylink">Thememarch</a>. All Rights
            Reserved.
          </p>
          <div class="footer__solalicon">
            <div class="social">
              <ul class="social__items">
                <li class="social__item">
                  <a href="https://www.facebook.com/" target="_blank" class="social__link" data-discover="true">
                    <i class="flaticon-facebook"></i>
                  </a>
                </li>
                <li class="social__item">
                  <a href="https://www.linkedin.com/" target="_blank" class="social__link" data-discover="true">
                    <i class="flaticon-linkedin"></i>
                  </a>
                </li>
                <li class="social__item">
                  <a href="https://twitter.com/" target="_blank" class="social__link" data-discover="true">
                    <i class="flaticon-twitter"></i>
                  </a>
                </li>
                <li class="social__item">
                  <a href="https://www.instagram.com/" target="_blank" class="social__link" data-discover="true">
                    <i class="flaticon-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- End Footer -->

  <span class="tm-scrollup">
    <i class="flaticon-arrow-left-1"></i>
  </span>

  <!-- Start Video Popup -->
  <div class="tm-video-popup">
    <div class="tm-video-popup-overlay"></div>
    <div class="tm-video-popup-content">
      <div class="tm-video-popup-layer"></div>
      <div class="tm-video-popup-container">
        <div class="tm-video-popup-align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="tm-video-popup-close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

  <!-- Script -->
  <script src=" {{asset('ecole/assets/js/plugins/jquery-3.7.1.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/bootstrap.bundle.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/gsap.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/ScrollToPlugin.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/ScrollTrigger.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/SplitText.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/DrawSVGPlugin.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/plugins/swiper-bundle.min.js')}} "></script>
  <script src=" {{asset('ecole/assets/js/main.js')}} "></script>
</body>

</html>