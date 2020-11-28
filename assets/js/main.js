(function ($) {
  "use strict"


  /* 1. Proloder */
  $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
      'overflow': 'visible'
    });
  });

  /* 2. sticky And Scroll UP */
  $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    if (scroll < 400) {
      $(".header-sticky").removeClass("sticky-bar");
      $('#back-top').fadeOut(500);
    } else {
      $(".header-sticky").addClass("sticky-bar");
      $('#back-top').fadeIn(500);
    }
  });

  // Scroll Up
  $('#back-top a').on("click", function () {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });


  /* 3. slick Nav */
  // mobile_menu
  var menu = $('ul#navigation');
  if (menu.length) {
    menu.slicknav({
      prependTo: ".mobile_menu",
      closedSymbol: '+',
      openedSymbol: '-'
    });
  };




  /* 4. MainSlider-1 */
  // h1-hero-active
  function mainSlider() {
    var BasicSlider = $('.slider-active');
    BasicSlider.on('init', function (e, slick) {
      var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);
    });
    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);
    });
    BasicSlider.slick({
      autoplay: true,
      autoplaySpeed: 4000,
      dots: true,
      fade: true,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      }
      ]
    });

    function doAnimations(elements) {
      var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      elements.each(function () {
        var $this = $(this);
        var $animationDelay = $this.data('delay');
        var $animationType = 'animated ' + $this.data('animation');
        $this.css({
          'animation-delay': $animationDelay,
          '-webkit-animation-delay': $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function () {
          $this.removeClass($animationType);
        });
      });
    }
  }
  mainSlider();



  /* 4. Testimonial Active*/
  $('.testmonial-item-active').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.testmonial-nav'
  });
  $('.testmonial-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.testmonial-item-active',
    dots: false,
    prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
    centerMode: true,
    focusOnSelect: true,
    centerPadding: 0,
  });



  /* 6. Nice Selectorp  */
  var nice_Select = $('select');
  if (nice_Select.length) {
    nice_Select.niceSelect();
  }

  // Brand Active
  $('.brand-active').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 400,
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
          infinite: true,
          dots: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
          infinite: true,
          dots: false,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });



  // Single Img slder
  $('.man-slider-active').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    speed: 400,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });



  /* 7. data-background */
  $("[data-background]").each(function () {
    $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
  });


  /* 10. WOW active */
  new WOW().init();

  // 11. ---- Mailchimp js --------//  
  function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
  }
  mailChimp();


  // 12 Pop Up Img
  var popUp = $('.single_gallery_part, .img-pop-up');
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }
  // 12 Pop Up Video
  var popUp = $('.popup-video');
  if (popUp.length) {
    popUp.magnificPopup({
      type: 'iframe'
    });
  }

  /* 13. counterUp*/
  $('.counter').counterUp({
    delay: 10,
    time: 3000
  });

  /* 14. Datepicker */
  $('#datepicker1').datepicker();

  // 15. Time Picker
  $('#timepicker').timepicker();

  //16. Overlay
  $(".snake").snakeify({
    speed: 200
  });


  //17.  Progress barfiller

  $('#bar1').barfiller();
  $('#bar2').barfiller();
  $('#bar3').barfiller();
  $('#bar4').barfiller();
  $('#bar5').barfiller();
  $('#bar6').barfiller();




  // Modal Activation
  $('.search-switch').on('click', function () {
    $('.search-model-box').fadeIn(400);
  });

  $('.search-close-btn').on('click', function () {
    $('.search-model-box').fadeOut(400, function () {
      $('#search-input').val('');
    });
  });

})(jQuery);

// Toggle payment method border and update selected payment method
function toggleBorder(elem, id, customer_id) {
  cards = document.getElementsByClassName('payment-border-toggle');
  for (let i = 0; i < cards.length; i++) {
    document.getElementsByClassName('payment-border-toggle')[i].classList.remove('border-primary');
  }
  elem.classList.add('border-primary');
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "update_user_account", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(`submit=select-payment&id=${id}&customer_id=${customer_id}`);
  console.log(id);

}

// Toggle delivery address border and update selected delivery address method
function addressToggleBorder(elem, id, customer_id) {
  cards = document.getElementsByClassName('address-border-toggle');
  for (let i = 0; i < cards.length; i++) {
    document.getElementsByClassName('address-border-toggle')[i].classList.remove('border-primary');
  }
  elem.classList.add('border-primary');
  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "update_user_account", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(`submit=select-address&id=${id}&customer_id=${customer_id}`);
  console.log(id);

}

// Varaible to store id of address to be deleted
let deleteAddressId;

// Varaible to store id of payment method to be deleted
let deletePaymentMethodId;

// Function to set id of address to be deleted
function setDeleteAddress(id) {
  deleteAddressId = id;
  console.log(`Delete this ${id}`);
}

// Function to set id of payment method to be deleted
function setDeletePaymentMethod(id) {
  deletePaymentMethodId = id;
  console.log(`Delete this ${id}`);
}

// Function to delete address and refresh page
function deleteAddress() {
  if (deleteAddressId) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        location.reload();
      }
    };
    xhttp.open("POST", "update_user_account", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`submit=delete-address&id=${deleteAddressId}`);
    console.log(`Deleted ${deleteAddressId}`)
  }
}

// Function to delete payment method and refresh page
function deletePaymentMethod() {
  if (deletePaymentMethodId) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        location.reload();
      }
    };
    xhttp.open("POST", "update_user_account", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`submit=delete-payment&id=${deletePaymentMethodId}`);
    console.log(`Deleted ${deletePaymentMethodId}`)
  }
}
