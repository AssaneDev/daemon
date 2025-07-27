(function ($) {
  "use strict";

  /*
  |--------------------------------------------------------------------------
  | Template Name: Daevnt
  | Author: Thememarch
  | Version: 1.0.0
  |--------------------------------------------------------------------------
  |--------------------------------------------------------------------------
  | TABLE OF CONTENTS:
  |--------------------------------------------------------------------------
  | 1. Mobile Menu
  | 2. Sticky Header
  | 3. Dynamic Background
  | 4. Slick Slider
  | 5. Modal Video
  | 6. Scroll Up
  | 7. Fun Fact Counter
  | 8. Blogs Hover Effect
  | 9. Animate Elements
  | 10. Online Conference Hero Animation
  | 11. Text Moving Animation
  | 12. Zigzag Hover Animation
  | 13. Feature Content
  | 14. Package Content
  | 15. Container Around
  | 16. Coming Soon Counter
  |--------------------------------------------------------------------------
  */

  // Initialize exists helper
  $.exists = function (selector) {
    return $(selector).length > 0;
  };

  // Window load event
  $(window).on("load", function () {
    $(window).trigger("scroll");
    $(window).trigger("resize");
  });

  // Window scroll event
  $(window).on("scroll", function () {
    showScrollUp();
  });

  // Window resize event
  $(window).on("resize", function () {
    updateParallaxOnWidth();
  });

  // Register GSAP plugins
  gsap.registerPlugin(ScrollTrigger, SplitText, DrawSVGPlugin);
  gsap.config({
    trialWarn: false,
  });

  // Document ready event
  $(function () {
    mainNav();
    stickyHeader();
    dynamicBackground();
    swiperInit();
    modalVideo();
    scrollUp();
    funFactCounter();
    blogsHoverEffect();
    animateElements();
    onConHeroAnimation();
    TextScrollSlider();
    zigzagHoverBtn();
    featureContent();
    packageContent();
    containerAround();
    comingSoonCounterDown();
  });

  /*-------------------------------------------------
      1. Mobile Menu  
  -------------------------------------------------*/
  function mainNav() {
    // Add toggle elements
    $(".tm-nav").append('<span class="tm-munu_toggle"><span></span></span>');
    $(".menu-item-has-children").append(
      '<span class="tm-munu_dropdown_toggle"></span>'
    );
    $(".menu-item-has-black-section").append(
      '<span class="tm-munu_dropdown_toggle_1"></span>'
    );

    // Menu toggle functionality
    $(".tm-munu_toggle").on("click", function () {
      $(this)
        .toggleClass("tm-toggle_active")
        .siblings(".tm-nav_list")
        .slideToggle();
    });

    // Dropdown toggle functionality
    $(".tm-munu_dropdown_toggle").on("click", function () {
      $(this).toggleClass("active").siblings("ul").slideToggle();
      $(this).parent().toggleClass("active");
    });

    // Special dropdown toggle
    $(".tm-munu_dropdown_toggle_1").on("click", function () {
      $(this).toggleClass("active").siblings("ul").slideToggle();
      $(this).parent().toggleClass("active");
    });

    // Dark mode toggle
    $(".tm-mode_btn").on("click", function () {
      $(this).toggleClass("active");
      $("body").toggleClass("tm-dark");
    });

    // Side navigation
    $(".tm-icon_btn").on("click", function () {
      $(".tm-side_header").addClass("active");
    });

    $(".tm-close, .tm-side_header_overlay").on("click", function () {
      $(".tm-side_header").removeClass("active");
    });

    // Menu text split animation
    $(".tm-animo_links > li > a").each(function () {
      let text = $(this).html().split("").join("</span><span>");
      $(this).html(`<span class="tm-animo_text"><span>${text}</span></span>`);
    });
  }

  /*-------------------------------------------------
      2. Sticky Header
  -------------------------------------------------*/
  function stickyHeader() {
    const $window = $(window);
    let lastScrollTop = 0;
    const $header = $(".tm-sticky_header");
    const headerHeight = $header.outerHeight() + 30;

    $window.scroll(function () {
      const windowTop = $window.scrollTop();

      if (windowTop >= headerHeight) {
        $header.addClass("tm-gescout_sticky");
      } else {
        $header.removeClass("tm-gescout_sticky tm-gescout_show");
      }

      if ($header.hasClass("tm-gescout_sticky")) {
        if (windowTop < lastScrollTop) {
          $header.addClass("tm-gescout_show");
        } else {
          $header.removeClass("tm-gescout_show");
        }
      }

      lastScrollTop = windowTop;
    });
  }

  /*-------------------------------------------------
      3. Dynamic Background
  -------------------------------------------------*/
  function dynamicBackground() {
    $("[data-src]").each(function () {
      const src = $(this).data("src");
      if (src) {
        $(this).css("background-image", `url(${src})`);
      }
    });
  }

  /*-------------------------------------------------
      4. Slick Slider
  -------------------------------------------------*/

  function animateSwiperItemsWithScrollTrigger(containerSelector) {
    if (containerSelector) {
      const items = gsap.utils.toArray(`${containerSelector} .swiper-slide`);
      items.forEach((item, i) => {
        gsap.from(item, {
          opacity: 0,
          y: 60,
          duration: 0.75,
          ease: "power2.out",
          scrollTrigger: {
            trigger: item,
            start: "top 90%",
          },
          delay: (i % 6) * 0.1,
        });
      });
    }
  }

  function updateParallaxOnWidth() {
    const parallaxElements = document.querySelectorAll(".parallax-item");
    const width = window.innerWidth;
    let parallaxValue;

    if (width < 576) parallaxValue = 200;
    else if (width < 767) parallaxValue = 400;
    else if (width < 992) parallaxValue = 600;
    else if (width < 1399) parallaxValue = 800;
    else parallaxValue = 1500;

    parallaxElements.forEach((el) => {
      if (el.getAttribute("data-swiper-parallax") !== parallaxValue) {
        el.setAttribute("data-swiper-parallax", parallaxValue);
      }
    });
  }

  function swiperInit() {
    if ($.exists(".creative-conference__slider")) {
      const swiper = new Swiper(".creative-conference__slider", {
        loop: true,
        speed: 1200,
        parallax: true,
        watchSlidesProgress: true,
        slidesPerView: 1,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        zoom: {
          maxRatio: 1.2,
          minRatio: 1,
        },
        navigation: {
          nextEl: ".cc__slider__next--btn",
          prevEl: ".cc__slider__prve--btn",
        },
        on: {
          init(swiperInstance) {
            togglePrevButton(swiperInstance);
            runSlideAnimation();
            updateParallaxOnWidth();
          },
          slideChange(swiperInstance) {
            togglePrevButton(swiperInstance);
          },
          slideChangeTransitionStart() {
            runSlideAnimation();
          },
        },
      });

      function togglePrevButton(swiper) {
        const prevBtn = document.querySelector(".cc__slider__prve--btn");
        if (!prevBtn) return;

        prevBtn.style.opacity = swiper.isBeginning ? "0" : "1";
        prevBtn.style.visibility = swiper.isBeginning ? "hidden" : "visible";
      }

      function runSlideAnimation() {
        const activeBlock = document.querySelector(
          ".swiper-slide-active .creative-conference__wrapper"
        );
        if (activeBlock) createHomeIntro(activeBlock);
      }

      function createHomeIntro(block) {
        const highlightWords = block.querySelectorAll(
          ".creative-conference__title .home-intro__highlight-word"
        );

        const flairOne = block.querySelector(".speaker__name");
        const flairTwo = block.querySelector(".speaker__desp");
        const flairThree = block.querySelector(
          ".creative-conference__datetime"
        );
        const speaker__inner = block.querySelectorAll(".speaker__inner-text");
        const speaker__img = block.querySelectorAll(".speaker__img");

        function staggerWord(chars) {
          const color = "#7546FF";
          return gsap.to(chars.flat(), {
            color: color,
            ease: "power3.inOut",
            duration: 0.7,
            stagger: {
              each: 0.05,
              repeat: 1,
              yoyo: true,
            },
          });
        }

        function animateWords(words) {
          const [one, two] = [...words].map(
            (word) => new SplitText(word, { type: "chars" })
          );

          const tl = gsap.timeline();
          tl.add(staggerWord([one.chars, two.chars]));
          tl.from(
            [one.chars, two.chars],
            {
              rotateX: 50,
              opacity: 0,
              x: 20,
              duration: 0.85,
              stagger: 0.075,
              ease: "power3.inOut",
            },
            0
          );
          tl.from(
            speaker__img,
            {
              scale: 0.9,
              opacity: 0,
              duration: 1,
              stagger: 0.075,
              ease: "power3.inOut",
            },
            0.5
          );
          return tl;
        }

        function animateDetails() {
          const tl = gsap.timeline();
          tl.fromTo(
            [flairOne, flairTwo, flairThree],
            { y: 10, opacity: 0 },
            {
              y: 0,
              opacity: 1,
              ease: "power1.inOut",
              duration: 0.6,
              stagger: 0.2,
            },
            0
          );
          return tl;
        }

        function createTimelines() {
          gsap.set(block, { autoAlpha: 1 });

          const mm = gsap.matchMedia();
          mm.add(
            ["(prefers-reduced-motion: no-preference)", "(min-width: 1240px)"],
            () => {
              const tl = gsap.timeline();
              tl.add(animateWords(highlightWords));
              tl.add(animateDetails(), "-=1.7");
            }
          );
        }

        createTimelines();
      }
    }

    // Educational Conference Slider
    if ($.exists(".educational-conference__slider")) {
      const swiper = new Swiper(".educational-conference__slider", {
        loop: true,
        speed: 1200,

        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        navigation: {
          nextEl: ".ec__slider__next--btn",
          prevEl: ".ec__slider__prve--btn",
        },
        on: {
          init: function () {
            togglePrevButton(this);
          },

          slideChangeTransitionStart() {
            togglePrevButton(this);
          },
        },
      });

      function togglePrevButton(swiper) {
        const prevBtn = document.querySelector(".ec__slider__prve--btn");
        if (swiper.isBeginning) {
          prevBtn.style.opacity = "0";
          prevBtn.style.visibility = "hidden";
        } else {
          prevBtn.style.opacity = "1";
          prevBtn.style.visibility = "visible";
        }
      }
    }

    // Testimonial Slider
    if ($.exists(".testimonal-items__slider")) {
      const swiper = new Swiper(".testimonal-items__slider", {
        loop: true,
        speed: 800,
        autoplay: false,
        slidesPerView: "auto",
        pagination: {
          el: ".tm-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".testimonal-swiper__btn-next",
          prevEl: ".testimonal-swiper__btn-perv",
        },
      });
      animateSwiperItemsWithScrollTrigger(".testimonal-items__slider");
    }

    // OC Testimonial Slider
    if ($.exists(".oc-testimonal-items__slider")) {
      const swiper = new Swiper(".oc-testimonal-items__slider", {
        loop: true,
        speed: 800,
        spaceBetween: "2%",
        autoplay: false,
        slidesPerView: "auto",
        pagination: {
          el: ".tm-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".oc-testimonal-swiper__btn-next",
          prevEl: ".oc-testimonal-swiper__btn-perv",
        },
      });
      animateSwiperItemsWithScrollTrigger(".oc-testimonal-items__slider");
    }

    // Brands Sponsor Slider
    if ($.exists(".brands-sponsor__slider")) {
      const swiper = new Swiper(".brands-sponsor__slider", {
        loop: true,
        speed: 1000,
        autoplay: true,
        spaceBetween: "5%",
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: {
          clickable: true,
        },
      });
    }

    // OC Brands Sponsor Slider
    if ($.exists(".oc-brands-sponsor__slider")) {
      const swiper = new Swiper(".oc-brands-sponsor__slider", {
        loop: true,
        speed: 1000,
        autoplay: true,
        spaceBetween: 24,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: {
          clickable: true,
        },
      });
    }

    // Gallery Slider
    if ($.exists(".gallery-slider")) {
      const swiper = new Swiper(".gallery-slider", {
        loop: true,
        speed: 1000,
        autoplay: false,
        spaceBetween: 10,
        slidesPerView: "auto",
        pagination: {
          clickable: true,
        },
      });
    }

    // Team Single Page Slider
    if ($.exists(".team-single-page-slider")) {
      const swiper = new Swiper(".team-single-page-slider", {
        loop: true,
        speed: 1000,
        autoplay: true,
        slidesPerView: "auto",
        effect: "coverflow",
        spaceBetween: "12%",
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 2.5,
        },
        keyboard: {
          enabled: true,
        },
        navigation: {
          nextEl: ".button-next",
          prevEl: ".button-prev",
        },
      });
    }

    // Pricing Slider
    if ($.exists(".tm-pricing-slider")) {
      const swiper = new Swiper(".tm-pricing-slider", {
        loop: true,
        speed: 1000,
        autoplay: true,
        slidesPerView: "auto",
        centeredSlides: true,
        pagination: {
          clickable: true,
        },
      });

      // Stop autoplay on mouse enter
      $(".tm-pricing-slider").on("mouseenter", function () {
        swiper.autoplay.stop();
      });

      // Start autoplay on mouse leave
      $(".tm-pricing-slider").on("mouseleave", function () {
        swiper.autoplay.start();
      });
    }
  }

  /*-------------------------------------------------
      5. Modal Video
  -------------------------------------------------*/
  function modalVideo() {
    $(document).on("click", ".tm-video-open", function (e) {
      e.preventDefault();
      const videoId = $(this).attr("href").split("?v=")[1].trim();
      $(".tm-video-popup-container iframe").attr(
        "src",
        `https://www.youtube.com/embed/${videoId}`
      );
      $(".tm-video-popup").addClass("active");
    });

    $(document).on(
      "click",
      ".tm-video-popup-close, .tm-video-popup-layer",
      function (e) {
        e.preventDefault();
        $(".tm-video-popup").removeClass("active");
        $("html").removeClass("overflow-hidden");
        $(".tm-video-popup-container iframe").attr("src", "about:blank");
      }
    );
  }

  /*-------------------------------------------------
      6. Scroll Up
  -------------------------------------------------*/
  function scrollUp() {
    $(".tm-scrollup").on("click", function (e) {
      e.preventDefault();
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        0
      );
    });
  }

  function showScrollUp() {
    let scroll = $(window).scrollTop();
    if (scroll >= 350) {
      $(".tm-scrollup").addClass("tm-scrollup-show");
    } else {
      $(".tm-scrollup").removeClass("tm-scrollup-show");
    }
  }

  /*-------------------------------------------------
      7. Fun Fact Counter
  -------------------------------------------------*/
  function funFactCounter() {
    if ($.exists(".funfact-content__wapper")) {
      const wrapperList = gsap.utils.toArray(".funfact-content__wapper");
      const count_id = gsap.utils.toArray(".counter");

      // Counter animation
      if (count_id) {
        count_id.forEach((num) => {
          gsap.from(num, {
            scrollTrigger: {
              trigger: num,
              start: "top 90%",
            },
            delay: 0.2,
            innerText: 0,
            duration: 3,
            snap: {
              innerText: 1,
            },
          });
        });
      }
      wrapperList.forEach((wrapper) => {
        const items = Array.from(wrapper.children);
        items.forEach((item, i) => {
          gsap.from(item, {
            scrollTrigger: {
              trigger: wrapper,
              start: "top 90%",
            },
            y: 70,
            opacity: 0,
            delay: i * 0.1,
            duration: 0.75,
            ease: "power2.out",
          });
        });
      });
    }
  }

  /*-------------------------------------------------
      8. Blogs Hover Effect
  -------------------------------------------------*/
  function blogsHoverEffect() {
    if ($.exists(".recent-news__item__content")) {
      const links = document.querySelectorAll(".recent-news__item__content");

      links.forEach((link) => {
        const circle = link.querySelector(".hover-circle");

        if (!circle) return;

        link.addEventListener("mousemove", (e) => {
          const rect = link.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;

          circle.style.left = `${x}px`;
          circle.style.top = `${y}px`;
          circle.style.transform = "translate(-50%, -50%) scale(1)";
        });

        link.addEventListener("mouseleave", () => {
          circle.style.transform = "translate(-50%, -50%) scale(0)";
        });
      });
    }
  }

  /*-------------------------------------------------
      9. Animate Elements
  -------------------------------------------------*/
  function animateElements() {
    const allElements = document.querySelectorAll(
      ".fade-up, .fade-down, .fade-left, .fade-right, .zoom-in, .zoom-out, .flip-left, .flip-right, .slide-up"
    );

    if (!allElements.length) return;

    allElements.forEach((elem) => {
      let props = null;

      if (elem.classList.contains("fade-up")) props = { y: 70, opacity: 0 };
      else if (elem.classList.contains("fade-down"))
        props = { y: -70, opacity: 0 };
      else if (elem.classList.contains("fade-left"))
        props = { x: -70, opacity: 0 };
      else if (elem.classList.contains("fade-right"))
        props = { x: 70, opacity: 0 };
      else if (elem.classList.contains("zoom-in"))
        props = { scale: 0.8, opacity: 0 };
      else if (elem.classList.contains("zoom-out"))
        props = { scale: 1.2, opacity: 0 };
      else if (elem.classList.contains("flip-left"))
        props = { rotateY: -90, transformOrigin: "left center", opacity: 0 };
      else if (elem.classList.contains("flip-right"))
        props = { rotateY: 90, transformOrigin: "right center", opacity: 0 };
      else if (elem.classList.contains("slide-up"))
        props = { y: 100, opacity: 0 };
      else return;

      const delay = parseFloat(elem.dataset.delay) || 0;
      const duration = parseFloat(elem.dataset.duration) || 0.75;
      const ease = elem.dataset.ease || "power2.out";

      gsap.from(elem, {
        scrollTrigger: { trigger: elem, start: "top 90%" },
        ...props,
        delay,
        duration,
        ease,
      });
    });
  }

  /*-------------------------------------------------
      10. Online Conference Hero Animation
  -------------------------------------------------*/
  function onConHeroAnimation() {
    if ($.exists(".online-conference-hero__wrapper")) {
      gsap.utils.toArray(".online-conference-hero__wrapper").forEach((el) => {
        const heroManImgs = el.querySelectorAll(
          ".online-conference-hero-man__img"
        );
        const textAnimation = el.querySelectorAll(".curve-animation-content");

        gsap.set(heroManImgs, {
          opacity: 0,
          y: 50,
        });

        let tl = gsap.timeline({});

        textAnimation.forEach((text) => {
          tl.to(text, {
            onStart: () => {
              text.classList.add("active-animation");
            },
          });
        });

        heroManImgs.forEach((img) => {
          tl.to(
            img,
            {
              opacity: 1,
              y: 0,
              duration: 1,
              ease: "power2.out",
            },
            "-=1.3"
          );
        });
        el.addEventListener("mousemove", (e) => {
          const rect = el.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;

          const centerX = rect.width / 2;
          const centerY = rect.height / 2;

          const moveX = (x - centerX) / 20;
          const moveY = (y - centerY) / 20;

          const scale = gsap.utils.mapRange(0, rect.height, 0.95, 1.05, y);

          heroManImgs.forEach((img) => {
            gsap.to(img, {
              x: moveX,
              y: moveY,
              scale: scale,
              duration: 5,
              ease: "power3.out",
            });
          });
        });

        el.addEventListener("mouseleave", () => {
          heroManImgs.forEach((img) => {
            gsap.to(img, {
              x: 0,
              y: 0,
              scale: 1,
              duration: 5,
              ease: "power3.out",
            });
          });
        });
      });
    }
  }

  /*-------------------------------------------------
      11. Text Moving Animation
  -------------------------------------------------*/
  function TextScrollSlider() {
    if ($.exists(".moving-section-in")) {
      const element = document.querySelector(".moving-section-in");
      if (!element) {
        console.warn(`[ScrollSlider] Element not found: ${selector}`);
        return;
      }

      let position = 0;
      let velocity = 0;
      let isScrolling = false;
      let scrollTimer = null;

      const updateTransform = () => {
        element.style.transform = `translate3d(${position}%, 0, 0)`;
      };

      const animate = () => {
        if (velocity !== 0) {
          position -= velocity;
          if (position <= -150) {
            position = 0;
          }
          updateTransform();
          velocity *= 0.9;
          if (Math.abs(velocity) < 0.001) {
            velocity = 0; // Stop if too slow
          }
        }
        requestAnimationFrame(animate);
      };

      const onScroll = () => {
        velocity = 1;
        isScrolling = true;

        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(() => {
          isScrolling = false;
        }, 1000);
      };
      window.addEventListener("scroll", onScroll, { passive: true });

      requestAnimationFrame(animate);
    }
  }

  /*-------------------------------------------------
      12. Zigzag Hover Animation
  -------------------------------------------------*/
  function zigzagHoverBtn() {
    if ($.exists(".zigzag__btn")) {
      const buttons = document.querySelectorAll(".zigzag__btn");

      if (buttons.length) {
        buttons.forEach((button) => {
          const shape = button.querySelector(".zigzagShape");
          gsap.set(shape, { drawSVG: "0%" });

          button.addEventListener("mouseenter", () => {
            gsap.to(shape, {
              duration: 1,
              drawSVG: "100%",
              ease: "power2.out",
            });
          });

          button.addEventListener("mouseleave", () => {
            gsap.to(shape, {
              duration: 1,
              drawSVG: "0%",
              ease: "power2.out",
            });
          });
        });
      }
    }
  }

  /*-------------------------------------------------
      13. Feature Content
  -------------------------------------------------*/
  function featureContent() {
    if ($.exists(".feature-content")) {
      const buttons = document.querySelectorAll(".feature-content__button");
      const contents = document.querySelectorAll(".feature-content__info");

      buttons.forEach((button) => {
        button.addEventListener("click", () => {
          const target = button.getAttribute("data-target");

          // Remove active classes
          buttons.forEach((btn) => btn.classList.remove("button-active"));
          contents.forEach((content) => content.classList.remove("active"));

          // Add active classes
          button.classList.add("button-active");
          document
            .querySelector(`.feature-content__info[data-content="${target}"]`)
            .classList.add("active");
        });
      });

      // Set initial visible content
      document
        .querySelector('.feature-content__info[data-content="about"]')
        .classList.add("active");
    }
  }

  /*-------------------------------------------------
      14. Package Content
  -------------------------------------------------*/
  function packageContent() {
    if ($.exists(".package-content")) {
      const packageItems = document.querySelectorAll(
        ".package-content .style2"
      );
      packageItems.forEach((item) => {
        item.addEventListener("mouseenter", function () {
          packageItems.forEach((item) => {
            item.classList.remove("active");
          });
          this.classList.add("active");
        });
        item.addEventListener("mouseleave", function () {
          packageItems.forEach((item) => {
            item.classList.remove("active");
          });
          packageItems[1].classList.add("active");
        });
      });
    }
  }

  /*-------------------------------------------------
      15. Container Around
  -------------------------------------------------*/
  function containerAround() {
    if ($.exists("#containerAround")) {
      ScrollTrigger.matchMedia({
        "(min-width: 991px)": function () {
          let pinpontsection = document.getElementById("infoProduto");
          let section = document.getElementById("containerAround");
          let galeria = document.getElementById("scrollGaleria");

          ScrollTrigger.create({
            trigger: section,
            pin: pinpontsection,
            start: "top top+=10",
            end: "bottom top+=" + pinpontsection.clientHeight,
            endTrigger: galeria,
            pinSpacing: false,
          });
        },
      });
    }
  }


  const buttons = document.querySelectorAll('.feature-content__button');
  const infos = document.querySelectorAll('.feature-content__info');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('button-active'));
      infos.forEach(info => info.style.display = 'none');

      btn.classList.add('button-active');
      const target = btn.getAttribute('data-target');
      const content = document.querySelector(`[data-content="${target}"]`);
      if (content) content.style.display = 'flex';
    });
  });


  /*-------------------------------------------------
      16. Coming Soon Counter
  -------------------------------------------------*/
  function comingSoonCounterDown() {
    if ($.exists("#time-countdown-section")) {
      const countdownElements = {
        months: document.getElementById("months"),
        days: document.getElementById("days"),
        hours: document.getElementById("hours"),
        minutes: document.getElementById("minutes"),
        seconds: document.getElementById("seconds"),
      };

      const launchDate = new Date("2025-12-31T00:00:00");
      launchDate.setDate(launchDate.getDate() + 20);
      const targetDate = launchDate.getTime();

      const updateCountdown = () => {
        const timeRemaining = targetDate - new Date().getTime();

        if (timeRemaining <= 0) {
          clearInterval(interval);
          Object.values(countdownElements).forEach((el) => {
            gsap.to(el, {
              textContent: "0",
              duration: 0.5,
              ease: "none",
              snap: { textContent: 1 },
            });
          });
          return;
        }

        const units = {
          months: Math.floor(timeRemaining / (1000 * 60 * 60 * 24 * 30.44)),
          days: Math.floor(
            (timeRemaining % (1000 * 60 * 60 * 24 * 30.44)) /
            (1000 * 60 * 60 * 24)
          ),
          hours: Math.floor(
            (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
          ),
          minutes: Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60)),
          seconds: Math.floor((timeRemaining % (1000 * 60)) / 1000),
        };

        Object.keys(units).forEach((key) => {
          gsap.to(countdownElements[key], {
            textContent: units[key],
            duration: 0.5,
            ease: "none",
            snap: { textContent: 1 },
          });
        });
      };

      const interval = setInterval(updateCountdown, 1000);
      updateCountdown();
    }
  }
})(jQuery);