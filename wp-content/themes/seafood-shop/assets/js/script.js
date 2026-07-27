// Scroll to Top
window.onscroll = function() {
  const seafood_shop_button = document.querySelector('.scroll-top-btn');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    seafood_shop_button.style.display = "block";
  } else {
    seafood_shop_button.style.display = "none";
  }
};

document.querySelector('.scroll-top-btn a').onclick = function(event) {
  event.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
};

// Blog Slider
jQuery(document).ready(function() {
  jQuery('.best-seller-section .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"], 
    dots: true,
    rtl: false,
    responsive: {
    0: { 
      items: 1 
    },
    600: { 
      items: 2 
    },
    992: { 
      items: 2 
    },
    1200: { 
      items: 3 
    }
  },
  autoplay: true,
  });
});

// Site Title
document.addEventListener("DOMContentLoaded", () => {
  const seafood_shop_menu = document.querySelector(".header-btm-left .wp-block-navigation__responsive-container"),
        seafood_shop_logo = document.querySelector(".home .header-top .header-logo-box");
  if (!seafood_shop_menu || !seafood_shop_logo) return;

  const seafood_shop_update = () => {
    seafood_shop_logo.style.cssText = seafood_shop_menu.classList.contains("is-menu-open")
      ? "z-index:1;"
      : "";
  };

  seafood_shop_update();
  new MutationObserver(seafood_shop_update).observe(seafood_shop_menu, { attributes: true, attributeFilter: ["class"] });
});

/* Activation Notice */
(function ($) {
    "use strict";

    // Handle install and activate plugins button click
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();
        var button = $(this);
        button.attr("disabled", "disabled");
        button.text("Installing & Activating recommended plugins").addClass("processing-spinner");

        var activationData = {
            action: "seafood_shop_install_and_activate_plugins",
            nonce: seafood_shop_localize.nonce,
        };

        $.post(seafood_shop_localize.ajax_url, activationData, function (response) {
            console.log("asdasd", response);
            if (response.success) {
                window.location.href = seafood_shop_localize.redirect_url;
            } else {
                button.text(response.data.message);
            }
        });
    });

    // Handle notice dismiss button click
    $(document).on('click', '.notice-info .notice-dismiss', function () {
        var type = $(this).closest('.notice-info').data('notice');

        $.ajax({
            type: 'POST',
            url: seafood_shop_localize.ajax_url,
            data: {
                action: 'seafood_shop_dismissed_notice_handler',
                type: type,
                wpnonce: seafood_shop_localize.dismiss_nonce
            },
            success: function (response) {
                if (response.success) {
                    console.log("Notice dismissed successfully");
                } else {
                    console.log("Failed to dismiss notice");
                }
            }
        });
    });

})(jQuery);
