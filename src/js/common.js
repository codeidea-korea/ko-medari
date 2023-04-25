AOS.init({
  duration: 500, // 애니메이션 지속 시간 (500ms)
  once: true,
});

// 모달창
$(document).ready(function () {
  // 모달 열기 버튼 클릭 이벤트
  $(".openModal").click(function () {
    $(".modalContainer").fadeIn(200); // fadeIn()으로 모달창을 보여주고, 애니메이션을 위한 클래스 추가
    $(".modalContent").addClass("modal-animation");
    $("body").addClass("modal-open"); // body에 모달창 열림을 나타내는 클래스 추가
    $(".modalContent").removeClass("modal_animation_out");
  });

  // 모달 닫기 버튼 클릭 이벤트
  $(".closeModal").click(function () {
    $(".modalContent").removeClass("modal-animation"); // 애니메이션 클래스 제거
    $(".modalContainer").fadeOut(200); // fadeOut()으로 모달창을 사라지게 하고
    $(".modalContent").addClass("modal_animation_out");
    $("body").removeClass("modal-open"); // body에서 모달창 열림을 나타내는 클래스 제거
  });

  // 모달 외부 클릭 이벤트
  $(".modalContainer").click(function (e) {
    // 모달 내부를 클릭하면 이벤트 처리하지 않음
    if (e.target !== this) return;
    $(".modalContent").removeClass("modal-animation"); // 애니메이션 클래스 제거
    $(".modalContainer").fadeOut(200); // fadeOut()으로 모달창을 사라지게 하고
    $(".modalContent").addClass("modal_animation_out");
    $("body").removeClass("modal-open"); // body에서 모달창 열림을 나타내는 클래스 제거
  });
});

// body 스크롤 막기
$(document).on("touchmove", function (e) {
  if ($("body").hasClass("modal-open")) {
    e.preventDefault();
  }
});

// main_01 스와이퍼
const swiper = new Swiper(".swiper-container01", {
  slidesPerView: "1.5",
  spaceBetween: 20,
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false, // 스와이프해도 오토플레이 유지
  },
  preloadImages: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>';
    },
  },
  on: {
    init: function () {
      const totalSlides = this.slides.length - 0; // 처음과 마지막의 빈 슬라이드를 제외한 슬라이드 개수
      const currentSlide = this.realIndex; // 현재 슬라이드의 인덱스
      const swiperNum = document.querySelector(".swiper-num");
      swiperNum.innerHTML = currentSlide + 1 + "/" + totalSlides; // 슬라이드 번호는 1부터 시작하므로 1을 더해줍니다.
    },
    slideChange: function () {
      const totalSlides = this.slides.length - 0;
      const currentSlide = this.realIndex;
      const swiperNum = document.querySelector(".swiper-num");
      swiperNum.innerHTML = currentSlide + 1 + "/" + totalSlides;
    },
  },
});
// main_02 스와이퍼
const swiper2 = new Swiper(".swiper-container02", {
  slidesPerView: "2",
  spaceBetween: 0,
  freeMode: true,
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false, // 스와이프해도 오토플레이 유지
  },
  preloadImages: true,
});

// main_03 스와이퍼
const swiper3 = new Swiper(".swiper-container03", {
  slidesPerView: "1.5",
  spaceBetween: 20,
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false, // 스와이프해도 오토플레이 유지
  },
  preloadImages: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>';
    },
  },
  on: {
    init: function () {
      const totalSlides = this.slides.length - 0; // 처음과 마지막의 빈 슬라이드를 제외한 슬라이드 개수
      const currentSlide = this.realIndex; // 현재 슬라이드의 인덱스
      const swiperNum = document.querySelector(".swiper-num");
      swiperNum.innerHTML = currentSlide + 1 + "/" + totalSlides; // 슬라이드 번호는 1부터 시작하므로 1을 더해줍니다.
    },
    slideChange: function () {
      const totalSlides = this.slides.length - 0;
      const currentSlide = this.realIndex;
      const swiperNum = document.querySelector(".swiper-num");
      swiperNum.innerHTML = currentSlide + 1 + "/" + totalSlides;
    },
  },
});

// main_03 스와이퍼
const swiper4 = new Swiper(".swiper-container04", {
  slidesPerView: "1.5",
  spaceBetween: 20,
  loop: true,
  loopAdditionalSlides: 1,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false, // 스와이프해도 오토플레이 유지
  },
  preloadImages: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    type: "bullets",
    renderBullet: function (index, className) {
      return '<span class="' + className + '"></span>';
    },
  },
  on: {
    init: function () {
      const totalSlides = this.slides.length - 0; // 처음과 마지막의 빈 슬라이드를 제외한 슬라이드 개수
      const currentSlide = this.realIndex; // 현재 슬라이드의 인덱스
      const swiperNum = document.querySelector(".swiper-num");
      swiperNum.innerHTML = currentSlide + 1 + "/" + totalSlides; // 슬라이드 번호는 1부터 시작하므로 1을 더해줍니다.
    },
    slideChange: function () {
      const totalSlides = this.slides.length - 0;
      const currentSlide = this.realIndex;
      const swiperNum = document.querySelector(".swiper-num");
      swiperNum.innerHTML = currentSlide + 1 + "/" + totalSlides;
    },
  },
});

// nav 스크롤
$(window).on("scroll", function () {
  if ($(window).scrollTop() == 0) {
    $(".scroll_nav img").attr("src", "/src/images/kodari_logo_color.svg");
    $(".scroll_nav button img").attr("src", "/src/images/ham_btn_color.svg");
    $(".scroll_nav").css("background-color", "transparent");
  } else {
    $(".scroll_nav img").attr("src", "/src/images/kodari_logo_color.svg");
    $(".scroll_nav button img").attr("src", "/src/images/ham_btn_color.svg");
    $(".scroll_nav").css("background-color", "#fff");
  }
});

// 탭 스크롤
// $(document).ready(function () {
//   const tabContainer = $(".tab");

//   $(window).scroll(function () {
//     const scrollPosition = $(window).scrollTop();

//     if (scrollPosition === 0) {
//       tabContainer.removeClass("active");
//     } else {
//       tabContainer.addClass("active");
//     }
//   });

//   // 초기 페이지 로드시 active 클래스 설정
//   $(window).trigger("scroll");
// });

// menu on off
$(document).ready(function () {
  const menu = $(".menu");
  const menuOpen = $(".menu_open");
  const close = $(".close");
  const html = $("html");

  menu.on("click", function () {
    menuOpen.addClass("active");
    html.addClass("menu_active");
  });

  close.on("click", function () {
    menuOpen.removeClass("active");
    html.removeClass("menu_active");
  });

  const list = $(".list");

  list.on("click", function () {
    $(this).toggleClass("on");
    $(this).next(".list_open").toggleClass("show");
  });
});

// bottom_nav
$(document).ready(function () {
  const bNav = $(".b_nav");
  const Footer = $("footer");
  let lastScrollTop = 0;

  $(window).scroll(function () {
    const currentScrollTop = $(this).scrollTop();

    if (currentScrollTop <= 0 || $(window).scrollTop() == 0) {
      // 스크롤이 맨 위에 도달한 경우 또는 처음 로딩된 경우
      bNav.addClass("active");
    } else if (currentScrollTop < lastScrollTop) {
      // 스크롤이 위로 올라가는 경우
      bNav.addClass("active");
    } else {
      // 스크롤이 아래로 내려가는 경우
      bNav.removeClass("active");
    }
    lastScrollTop = currentScrollTop;
  });
});
