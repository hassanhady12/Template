var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 300,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".slide-content", {
  slidesPerView: 2,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 3,
    },
  },
});

let span = document.querySelector(".up");

window.onscroll = function () {
  this.scrollY >= 1000
    ? span.classList.add("show")
    : span.classList.remove("show");
};

span.onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};

var copy = document.querySelector(".logos-slide").cloneNode(true);
document.querySelector(".logo-slider").appendChild(copy);

const translation = {
  ar: {
    home: "ألصفحه الرئسيه",
    aboutus: "من نحن",
    Trainingplatform: "منصه التدريب",
    Ourcourses: " دوراتنا",
    Trainers: "المدربون",
    Centernews: "اخبار المركز",
    Connectus: "تواصل معنا",
  },
  en: {
    home: "Home",
    aboutus: "about",
    Trainingplatform: "Trainingplatform",
    Ourcourses: "Our courses",
    Trainers: "Trainers",
    Centernews: "Center news",
    Connectus: "Contact",
  },
};

const languaageSelector = document.querySelector("select");

languaageSelector.addEventListener("change", (Event) => {
  setLanguage(Event.target.value);
});

const setLanguage = (language) => {
  const elemnts = document.querySelectorAll("[data-i18n]");
  elemnts.forEach((elemnt) => {
    const tranKey = elemnt.getAttribute("data-i18n");
    elemnt.textContent = translation[language][tranKey];
  });
};

const elemnt = document.querySelector(".loade55");

console.log(elemnt.classList);
window.addEventListener("load", () => {
  setTimeout(() => {
    elemnt.classList.remove("overlayload");
  }, 3000);
});
