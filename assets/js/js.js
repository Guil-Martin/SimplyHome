const navbar = $(".headerNav");
const burgerMenu = $(".burgerMenu");

if (navbar.hasClass("home")) {
  // Add sticky bar on home for tablet format
  if (window.innerWidth < 768) {
    navbar.addClass("stickyNav");
  }
}

/* Close all opened menus */
$(document).on("click", function (e) {  
  e.stopPropagation();
  if (burgerMenu.css("display") != "none") {
    burgerMenu.slideToggle();
  }
});

$(".burgerButton").on("click", function (e) {
  e.stopPropagation();
  burgerMenu.slideToggle();
});