// run foundation
jQuery(document).foundation();

// koma modular
// var googleAdWordsID = "847326048";
// var sklikId = "100033708";

// koma rent
// var googleAdWordsID = "835058301";
// var sklikId = "100035525";


// koma space
// var googleAdWordsID = "835061881";
// var sklikId = null;

// map dollar back to jQuery
var $ = jQuery;

function isGAApi(apiID) {
  if (typeof googleApiVersion != 'undefined') {
    if (googleApiVersion === apiID) {
      return true
    }
    return false
  }
  console.log('GA API: deprecated');
  return false
}


$(".accordeon-items").click(function () {
  $(this).toggleClass("open-accordeon");
});

function getSelectionText() {
  var text = "";
  if (window.getSelection) {
    text = window.getSelection().toString();
  } else if (document.selection && document.selection.type != "Control") {
    text = document.selection.createRange().text;
  }
  return text;
}

function extractEmails(text) {
  return text.match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi);
}

function extractPhone(text) {
  var clean = text.replace(/ /g, '');
  return clean.match(/([0-9|\(|\)]{9,15})/gi);
}

function hackSeznamSklik() {
  if (sklikId !== null) {
    console.log('renew/send: sklik iframe');
    $("#komasklik").remove();
    $('body').append('<iframe id="komasklik" width="119" height="22" frameborder="0" scrolling="no" src="//c.imedia.cz/checkConversion?c=' + sklikId + '&amp;color=ffffff&amp;v=0"></iframe>');
  }
}

function sendGaAdwords(action, email) {
  window.google_trackConversion({
    google_conversion_id: googleAdWordsID,
    google_custom_params: {
      action: action,
      email: email
    },
    google_remarketing_only: true
  });
}

function registerNewsletterGA() {
  console.log("registerGGMailEvents:On");
  // rent: #webform-client-form-1442
  // space: #webform-client-form-1442
  $('#webform-client-form-1442').on('submit', function (event) {

    if (isGAApi(2018)) {

      gtag('event', 'send', {
        'event_category': 'form',
        'event_action': 'sent',
        'event_label': 'vyplneny_e-bulletin'
      });

    } else {
      ga('send', 'event', 'form', 'sent', 'vyplneny e-bulletin');

    }


  })
}


function registerGGMailEvents() {
  console.log("registerGGMailEvents:On");
  jQuery('a').on('click', function (e) {
    //e.preventDefault(); // for debug only

    var el = $(e.currentTarget);
    var link = el.attr('href');
    if (!link || link === '' || link === '#') {
      return;
    }

    // send mail link
    if (link.indexOf("mailto:") >= 0) {
      e.preventDefault();
      var mailto = link.substr(7, link.length);

      if (isGAApi(2018)) {
        gtag('event', 'send', {
          'event_category': 'mail',
          'event_action': 'click',
          'event_label': mailto
        });
      } else {
        ga('send', 'event', 'mail', 'click', mailto);
      }

      sendGaAdwords('mail-click', mailto);
      hackSeznamSklik();
      fbq('track', '<COPY_OR_CLICK_ON_EMAIL>');
      setTimeout(function () {
        window.location.href = "mailto:" + mailto;
      }, 1000);

    }

  });
}

function registerGACopyEvents() {
  console.log("registerGACopyEvents:On");

  $(document).bind('copy', function (event) {
      var text = getSelectionText();

      if (text.length < 40) {
        var mails = extractEmails(text);
        var phones = extractPhone(text);

        if (mails && mails.length > 0) {
          // send only one mail
          var mail = mails[0];
          // console.log("copy mail "+ mail);

          if (isGAApi(2018)) {
            gtag('event', 'send', {
              // Event parameters
              'event_category': 'mail',
              'event_action': 'copy',
              'event_label': mail
            });

          } else {
            ga('send', 'event', 'mail', 'copy', 'zkopirovani emailu ' + mail);
          }
          sendGaAdwords('mail-copy', mail);

          <!-- Měřicí kód Sklik.cz -->
          hackSeznamSklik();

          console.log('send fb: COPY_OR_CLICK_ON_EMAIL');
          fbq('track', '<COPY_OR_CLICK_ON_EMAIL>');

        }

        if (phones && phones.length > 0) {
          // send only one phone
          var phone = phones[0];
          // console.dir("copy phone: "+ phone);

          if (isGAApi(2018)) {
            gtag('event', 'send', {
              // Event parameters
              'event_category': 'phone',
              'event_action': 'copy',
              'event_label': phone
            });

          } else {
            ga('send', 'event', 'phone', 'copy', 'zkopirovani telefonu ' + phone);
          }

        }
      }

    }
  )

}

function registerContactFormManager() {

  console.log("registerContactFormManager:On");

  var targetFormField = jQuery("#mailto");
  var targetInfoElement = jQuery("#targetMailInfo");

  jQuery('[fillform]').each(function () {
    var el = jQuery(this);

    el.click(function (e) {
      e.preventDefault();

      var injectName = el.data('name');
      var injectSubject = el.data('subject');
      var injectEmail = el.data('email');


      targetFormField.attr('value', injectEmail);
      targetInfoElement.text(injectEmail);

      var scrollTo = jQuery('#formSection').position().top - 100;
      jQuery('body,html').animate({scrollTop: scrollTo}, '500', 'swing', function () {
        //console.log('Fill form with: ' + injectName, injectEmail, injectSubject);
      });

      // console.log('send ga: mail click: ' + injectEmail);
      if (isGAApi(2018)) {
        gtag('event', 'send', {
          // Event parameters
          'event_category': 'mail',
          'event_action': 'click',
          'event_label': injectEmail
        });

      } else {
        // send GA event

        ga('send', 'event', 'mail', 'click', injectEmail);
      }
      sendGaAdwords('mail-click', injectEmail);

      // <!-- Měřicí kód Sklik.cz -->
      hackSeznamSklik();

      console.log('send fb: COPY_OR_CLICK_ON_EMAIL');
      fbq('track', '<COPY_OR_CLICK_ON_EMAIL>');

    });
  });
}


// collapsible
function registerCollapsible() {
  console.log('registerCollapsible:On');

  jQuery('[collapsible]').each(function () {
    var el = jQuery(this);

    if (el.data('target') == "parent") {
      el.click(function () {
        el.parent().toggleClass("is-open");
      });
    } else if (el.data('target')) {
      el.click(function () {
        var tgt = jQuery(el.data('target'));
        tgt.toggleClass("is-open");
      });
    } else {
      el.click(function () {
        el.toggleClass("is-open");
      });
    }
  });
}

// close section
function registerCloseSection() {
  console.log("registerCloseSection:On");

  jQuery('[close-section]').each(function () {
    var el = jQuery(this);
    el.click(function () {
      el.parent().css("display", "none");
    });
  });
}

// cookie banner
function registerCookieBannerManager() {
  console.log("registerCookieBannerManager:On");

  var hostname = jQuery('<a>').prop('href', '/').prop('hostname');
  var hostCookieName = hostname + "-banner";

  if (!jQuery.cookie(hostCookieName)) {
    console.log("> Show banners")
    jQuery("#page-banner").show();
    var date = new Date();
    date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
    jQuery.cookie(hostCookieName, true, {expires: date});
  } else {
    console.log("> Hide banners");
    jQuery("#page-banner").hide();
  }
}

// navbar controlls
function registerNavbarManagers() {
  console.log("registerNavbarManagers:On");

  // resize Navbar
  var navbarPrimary = jQuery('#navbarPrimary');
  var navbarSecondary = jQuery('#navbarSecondary');
  var scrollDriver = jQuery(window);

  var currentTop = function () {
    return scrollDriver.scrollTop();
  }

  jQuery(window).scroll(function () {
    if (currentTop() > 40) {
      if (!navbarPrimary.hasClass("is-collapsed")) {
        navbarPrimary.addClass("is-collapsed");
      }
      if (!navbarSecondary.hasClass("is-hidden")) {
        navbarSecondary.addClass("is-hidden");
      }
    } else {
      navbarPrimary.removeClass("is-collapsed");
      navbarSecondary.removeClass("is-hidden");
    }
  });
}

// slickManager
function registerSlickMangers() {
  console.log("registerSlickMangers:On");

  var currentSlide = -1;

  jQuery('[slick]').each(function () {
    var SlickWrapper = jQuery(this);
    var carousel = SlickWrapper.find('[carousel]');
    var oldActive = null;
    var nav = SlickWrapper.find('[carouselnav]');

    if (carousel) {
      carousel.slick({
        dots: false,
        infinite: true,
        //fade: true,
        //cssEase: 'linear',
        draggable: false,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
      });

      carousel.on('afterChange', function (event, slick, currentSlide) {
        if (nav) {
          var items = nav.find('[slick-to]');
          if (oldActive) {
            oldActive.removeClass("active");
          }
          for (var i = 0; i < items.length; i++) {
            var item = jQuery(items[i]);
            if (item.attr('slick-to') == currentSlide) {
              item.addClass("active");
              oldActive = item;
            }
          }
        }
      });
    }

    if (nav) {
      //  console.log("nav");
      var count = 0;
      var items = nav.find('[slick-to]');
      for (var i = 0; i < items.length; i++) {
        var item = jQuery(items[i]);

        if (nav.attr("slick-method") == "mouseenter") {

          item.mouseenter(function (e) {
            if (oldActive) {
              oldActive.removeClass("active");
            }

            e.preventDefault();
            carousel.slick('slickGoTo', jQuery(this).attr('slick-to'));
            currentSlide = carousel.slick('slickCurrentSlide');
            //console.log(currentSlide);
            jQuery(this).addClass("active");
            oldActive = jQuery(this);
          });

        } else {
          item.click(function (e) {

            if (oldActive) {
              oldActive.removeClass("active");
            }

            e.preventDefault();
            carousel.slick('slickGoTo', jQuery(this).attr('slick-to'));
            currentSlide = carousel.slick('slickCurrentSlide');
            //console.log(currentSlide);
            jQuery(this).addClass("active");
            oldActive = jQuery(this);
          });
        }
      }
    }
  });
}

// chosen filters - select boxes
function registerChosenManagers() {
  console.log("registerChosenManagers:On");
  var isMobile = jQuery('html').hasClass('touch');

  // apply chosen only for desktops, mobiles using native fields
  if (!isMobile) {
    jQuery(".form-select").chosen({
      width: "95%",
      inherit_select_classes: true,
      create_option: true,
      persistent_create_option: true,
      create_option_text: 'add',
      disable_search_threshold: 40,
      //allow_single_deselect: true
    });
  }
}

// button scrollTop
function registerScrollToTop() {
  console.log("registerScrollToTop:On");
  jQuery('.m-section--top').each(function () {
    var el = jQuery(this);
    el.addClass("jsActivated");
    el.click(function (e) {
      e.preventDefault();
      var scrollTo = 0;
      console.log("ScrollToTop");
      jQuery('body,html').animate({scrollTop: scrollTo}, '500', 'swing', function () {
        console.log("ScrollToTopDone");
      });
    });
  });
}

// hack megamenu, prehazení DOM kuli Safari
function registerMegaMenuHacks() {

  console.log("registerMegaMenuHacks:On");

  var submenucounter = 0;
  var tabs = Array();
  var menuroot = jQuery("#mega");
  var newRoot = jQuery(".xmega");

  function closeTabs() {
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].removeClass("is-opened");
    }
  }

  function openTabs() {
    for (var i = 0; i < tabs.length; i++) {
      tabs[i].addClass("is-opened");
    }
  }

  function closeMega() {
    closeTabs();
    menuroot.removeClass('is-opened');
  }

  function openAllTabs() {
    openTabs();
    menuroot.addClass('is-opened');
    //menuroot.css('height', jQuery(window).height());
    menuroot.find(".m-mega--sub").css('height', jQuery(window).height());
  }

  jQuery(".megacleaned > .nav > .item > .item-submenu").each(function () {
    var idGen = "mega-id-" + submenucounter;

    var sub = jQuery(this);
    var par = sub.parent();

    sub.attr("id", idGen);
    par.attr("open-mega", idGen);

    jQuery(".m-mega--sub").append(sub);
    tabs.push(sub);
    submenucounter++;

    par.hover(
      function () {
        //  console.log("openMega" + idGen );
        jQuery(".megacleaned .is-hovered").each(function () {
          jQuery(this).removeClass("is-hovered");
        });
        par.addClass("is-hovered");
        closeTabs();
        sub.addClass("is-opened");
        menuroot.addClass("is-opened");
        jQuery('body').addClass("scroll-lock");
      },
      function () {
        //par.removeClass("is-hovered");
      }
    );
  });

  newRoot.append(menuroot);
  newRoot.addClass('is-ready'); // this enable menu, it is set invisible on load

  jQuery("[open-mega-mobile]").click(function () {
    console.log("open hamburger");
    openAllTabs();
    jQuery('body').addClass("scroll-lock");
  });

  menuroot.hover(
    function () {
    },
    function () {
      jQuery(".megacleaned .is-hovered").each(function () {
        jQuery(this).removeClass("is-hovered");
      });
      closeMega();
      jQuery('body').removeClass("scroll-lock");
    }
  );

// pocita sloupce na mega
  jQuery(".m-mega .columns").each(function () {
    var el = jQuery(this);
    var cols = el.find("> .column");
    //console.log(cols.length);
    el.attr("cols", cols.length);
  });
}


/* NEED more refactor */
// block feed JS
var blogSlick = jQuery('.block-feed-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

// full size carousel
var blogSlick = jQuery('.full-carousel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  adaptiveHeight: true
});


/* HELPERS */

/* List available templace by parsiong theme-wrappers*/
function listTemplates() {
  console.log("listTemplates:On");
  jQuery('[theme-wrapper]').each(function () {
    var el = jQuery(this);
    console.dir(el.attr('theme-wrapper'));
  });
}

// main
jQuery(function () {

  registerMegaMenuHacks();
  registerCookieBannerManager();
  registerSlickMangers();
  registerChosenManagers();
  registerNavbarManagers();
  registerCollapsible();
  registerCloseSection();
  registerScrollToTop();
  registerContactFormManager();

  registerNewsletterGA();
  registerGGMailEvents();
  registerGACopyEvents();

  // helpers
  // listTemplates();

});

