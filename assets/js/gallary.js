document.querySelectorAll(".item img").forEach((img) => {
  // Ideally, we would know the image size or aspect ratio beforehand...
  if (img.naturalHeight) {
    setItemRatio.call(img);
  } else {
    img.addEventListener("load", setItemRatio);
  }
});

function setItemRatio() {
  this.parentNode.style.setProperty(
    "--ratio",
    this.naturalHeight / this.naturalWidth
  );
}

(function ($) {
  "use strict";

  // Window Resize Mobile Menu Fix
  mobileNav();

  // Scroll animation init
  window.sr = new scrollReveal();

  // Page loading animation
  $(window).on("load", function () {
    if ($(".cover").length) {
      $(".cover").parallax({
        imageSrc: $(".cover").data("image"),
        zIndex: "1",
      });
    }

    $("#preloader").animate(
      {
        opacity: "0",
      },
      600,
      function () {
        setTimeout(function () {
          $("#preloader").css("visibility", "hidden").fadeOut();
        }, 300);
      }
    );
  });

  // Window Resize Mobile Menu Fix
  $(window).on("resize", function () {
    mobileNav();
  });

  // Window Resize Mobile Menu Fix
  function mobileNav() {
    var width = $(window).width();
    $(".submenu").on("click", function () {
      if (width < 992) {
        $(".submenu ul").removeClass("active");
        $(this).find("ul").toggleClass("active");
      }
    });
  }
})(window.jQuery);
