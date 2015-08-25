// run foundation
jQuery(document).foundation();


//
jQuery(function () {

    //
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
            })
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
                        jQuery(this).addClass("active");
                        oldActive = jQuery(this);
                    });
                }


            }
        }

    });


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


// hack megamenu, prehazení DOM kuli Safari
    var submenucounter = 0;
    var tabs = Array();
    var menuroot = jQuery("#mega");

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

    jQuery(".xmega").append(menuroot);

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
});


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


// script


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

// close section

jQuery('[close-section]').each(function () {
    var el = jQuery(this);
    el.click(function () {
        el.parent().css("display", "none");
    });
});


// chosen filters - select boxes


jQuery(".form-select").chosen({
    width: "95%",
    inherit_select_classes: true,
    create_option: true,
    persistent_create_option: true,
    create_option_text: 'add',
    disable_search_threshold: 40,
    //allow_single_deselect: true
});

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
