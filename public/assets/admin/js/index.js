$(".header-notif-bell").click(function() {
  $(".nortification-dropdown").addClass("active");
});
$("main").click(function() {
  $(".nortification-dropdown").removeClass("active");
});

$(".mob-menu-btn button").click(function() {
  $(".side-bar-area").addClass("active");
});
$(".side-bar-mob-close-btn").click(function() {
  $(".side-bar-area").removeClass("active");
});

function getCheckboxValue() {
  var checkbox = document.getElementById("notificationCheckbox");
  var isChecked = checkbox.checked;
}

function toggleActiveClass(checkbox) {
  var notification = checkbox.closest(".d-notification");
  if (notification) {
      notification.classList.toggle("active", checkbox.checked);
  }
}

const currentPath = window.location.href.split("/");
const path = currentPath[currentPath.length - 1];

const navLinks = document.querySelectorAll(".s-nav-link a");

navLinks.forEach((link) => {
  link.classList.remove("active");

  if (link.getAttribute("href") === path) {
      link.classList.add("active");
  }
});

// Active Links Function Modified By Khalil Rind
/* navLinks.forEach((link) => {
    link.classList.remove("active");
    const linkPath = link.getAttribute('href').split('/');
    const actualPath = linkPath[linkPath.length - 1];
    if(actualPath === path) {
        link.classList.add("active");
    }
}); */

$(function() {
  $("#orders-table-3").DataTable({
      processing: true,
      language: {
          paginate: {
              previous: '<i class="fa-solid fa-angle-left"></i>',
              next: '<i class="fa-solid fa-angle-right"></i>',
          },
      },
      columns: [{
              data: "Sr",
          },
          {
              data: "Affiliate Partner",
          },
          {
              data: "Sales to date",
          },
          {
              data: "Sales Vol. to Date",
          },
          {
              data: "Sales last 30 Days",
          },
          {
              data: "Sales Vol. last 30 Days",
          },
          {
              data: "Clicks",
          },
          {
              data: "purchase",
          },
      ],
  });
});
