<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?><!DOCTYPE html><!--[if IEMobile 7]>
<html class="iem7" <?php print $html_attributes; ?>><![endif]--><!--[if lte IE 6]>
<html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]--><!--[if (IE 7)&(!IEMobile)]>
<html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]--><!--[if IE 8]>
<html class="lt-ie9" <?php print $html_attributes; ?>><![endif]--><!--[if (gte IE 9)|(gt IEMobile 7)]><!-->
<html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="cleartype" content="on">

    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />

    <?php print $styles; ?>
    <?php print $scripts; ?>

    <!-- google GA -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-39630593-1', 'auto');
      ga('send', 'pageview');
    </script>


    <?php if ($add_html5_shim and !$add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/html5.js"></script><![endif]-->
    <?php elseif ($add_html5_shim and $add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/html5-respond.js"></script><![endif]-->
    <?php elseif ($add_respond_js): ?>
        <!--[if lt IE 9]>
        <script src="<?php print $base_path . $path_to_zen; ?>/js/respond.js"></script><![endif]-->
    <?php endif; ?>

    <script src="https://www.koma-space.at/sites/all/themes/koma/js/komacookies.js" async></script>
    <script>
      var koma_eu_config = {
        "l18n": {
            <?php
            if(test_lang_code() == 'en'){
            ?>
          "text": "Cookies allow you to utilise the services provided by us. By utilising our services, you automatically agree with the use of cookies.",
          "accept": "OK",
          "more": "Legal warning / More at:,
          "link": "https://www.koma-space.at/en/informations-about-cookies"
            <?php
            }elseif(test_lang_code() == 'de'){
            ?>
          "text": "Cookies ermöglichen Ihnen die Nutzung der von uns bereitgestellten Dienstleistungen. Mit der Nutzung unserer Dienstleistungen stimmen Sie automatisch der Nutzung von Cookies zu.",
          "accept": "OK",
          "more": "Rechtliche Hinweise / Mehr auf:",
          "link": "https://www.koma-space.at/de/cookies"
            <?php
            }
            ?>
        }
      };
    </script>
    <!-- // @formatter:off -->
    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1554088384828107');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1554088384828107&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- // @formatter:on -->
</head>
<?php
if ($_SERVER['SERVER_ADDR'] == '217.115.249.155') {
    $jakej = 'internet';
} else {
    $jakej = 'local';
}
?>
<body class="komaspace l-page <?php print $classes; ?> <?= $jakej ?>" <?php print $attributes; ?>>
<?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>" class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
<?php endif; ?>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<div class="m-page-scroll">
    <div class="m-page-scroll--item">
        <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/scroll-down-sipka.svg" alt="Scroll Down" class="scroll-sipka" /> <?php print t('Scroll down') ?>
    </div>
</div>

<?php if ($user->uid == 0 AND !drupal_is_front_page() ) { ?>
    <!-- postrani lista s odkazem na poptávky  -->
    <section>
        <style>
            .tabs_wrap-secondary {
                position: fixed;
                top: 50%;
                z-index: 9999;
                background: #c20e1a;
                padding: 0;
                color: white;
                height: 38px;
                cursor: pointer;
                width: 210px;
                box-shadow: 2px 6px 15px rgba(0, 0, 0, .2);
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;
                transform: rotate(-90deg);
                transform-origin: 0% 0%;
            }

            .tabs_wrap-secondary {
                color: white;
                text-decoration: none;
            }

            .tabs_wrap-secondary-label {
                text-transform: uppercase;
            }
        </style>
        <a class="tabs_wrap-secondary" href="<?= test_lang_prefix('node/2466') ?>#formSection" onclick="ga('send', 'event', 'button', 'click', 'poslat_poptavku');">
            <div>&darr;</div>&nbsp;<div class="tabs_wrap-secondary-label"><?php print t('CONTACT NOW') ?></div>
        </a>
    </section>
<?php } ?>

<!-- app scripts -->
<script>
  var googleAdWordsID = "835061881";
  var sklikId = null;
</script>
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/app.js"></script>

<!-- leady.cz -->
<script type="text/javascript"> var leady_track_key = "zdY943A7JNzTW7S9";
  var leady_track_server = document.location.protocol + "//t.leady.cz/";
  (function () {
    var l = document.createElement("script");
    l.type = "text/javascript";
    l.async = true;
    l.src = leady_track_server + leady_track_key + "/L.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(l, s);
  })();
</script>

<!-- sklik --><!-- sklik -->

<!-- google remarketing support for ASYNC calls -->
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>


<!-- google remarketing : START -->
<script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 835061881;
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/835061881/?guid=ON&amp;script=0" /></div></noscript>
<!-- google remarketing : END -->

</body>
</html>
