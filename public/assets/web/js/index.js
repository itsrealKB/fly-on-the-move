$(".deal-row").slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1595,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 1203,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    console.log(target, "target");
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});

const tab = document.querySelectorAll("[data-view-target]");
const tabContent = document.querySelectorAll("[data-view-content]");

tab.forEach((tab2) => {
  tab2.addEventListener("click", () => {
    const target = document.querySelector(tab2.dataset.viewTarget);
    console.log(target, "tab 2");
    tabContent.forEach((tabContents) => {
      tabContents.classList.remove("active");
    });
    tab.forEach((tab2inner) => {
      tab2inner.classList.remove("active");
    });
    tab2.classList.add("active");
    target.classList.add("active");
  });
});

$(".deal-slides-wrap").slick({
  dots: false,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  prevArrow: $(".deal-prev-arrow"),
  nextArrow: $(".deal-next-arrow"),
  arrows: true,
  responsive: [
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".partner-slides-wrap").slick({
  slidesToShow: 2,
  autoplay: false,
  autoplaySpeed: 0,
  arrows: false,
  centerMode: true,
  centerPadding: '150px',
  responsive: [
    {
      breakpoint: 1366,
      settings: {
        infinite: true,
        dots: false,
        centerPadding: '30px',
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 3,
        infinite: true,
        dots: false,
        centerPadding: '0px',
      },
    },
  ],
});

$(".slogan-slider").slick({
  dots: false,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  cssEase: "linear",
  responsive: [
  ],
});

$(document).ready(function () {
  $("#menu-btn").click(function () {
    $("#header-offcanva").toggleClass("active-sidebar", "2000");
  });

});



document.addEventListener("DOMContentLoaded", function () {
  let anchors=document.querySelectorAll(".dropdown-item-new");
  anchors[0].target="_blank";
  anchors[1].target="_blank"
  document.querySelectorAll(".dropdown-toggle").forEach(function (dropdown) {
      dropdown.addEventListener("click", function (event) {
          event.preventDefault();
          event.stopPropagation();

          let dropdownMenu = this.nextElementSibling;

          document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
              if (menu !== dropdownMenu) {
                  menu.classList.remove("show");
              }
          });

          dropdownMenu.classList.toggle("show");
       
      });
  });

  document.addEventListener("click", function () {
      document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
          menu.classList.remove("show");
      });
  });
}); 



document.querySelectorAll(".video-wrapper").forEach((wrapper) => {
  let video = wrapper.querySelector("video");
  let overlay = wrapper.querySelector(".overlay");

  overlay.addEventListener("click", function () {
      video.play();
      overlay.style.display = "none"; 
  });

  video.addEventListener("pause", function () {

  });
});




var btn = $("#scroll-top-btn");

$(window).scroll(function () {
  if ($(window).scrollTop() > 1500) {
    btn.addClass("show");
  } else {
    btn.removeClass("show");
  }
});

btn.on("click", function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "300");
});


// const desktopMenu = $("#desktopNavbar")

// $(window).scroll(function () {
//   if ($(window).scrollTop() > 260 && screen.width > 767) {
//     desktopMenu.addClass("desktopNavshow");
//   } else {
//     desktopMenu.removeClass("desktopNavshow");
//   }
// });

const drawerBtn = document.getElementById('drawerButton');
const drawer = document.getElementById('mydrawer');

drawerBtn.addEventListener('mouseenter', function() {
  drawer.classList.add('active-drawer');
});

drawerBtn.addEventListener('mouseleave', function() {
  setTimeout(() => {
    if (!drawer.matches(':hover')) {
      drawer.classList.remove('active-drawer');
    }
  }, 100);
});

drawer.addEventListener('mouseleave', function() {
  drawer.classList.remove('active-drawer');
});




