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
    <?php  print $scripts; ?>

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

    <script src="https://www.koma-facade.cz/sites/all/themes/koma_facade/js/komacookies.js" async></script>
    <script>
      var koma_eu_config = {
        "l18n": {
            <?php
            if(test_lang_code() == 'en'){
            ?>
          "text": "Cookies allow you to utilise the services provided by us. By utilising our services, you automatically agree with the use of cookies.",
          "accept": "OK",
          "more": "Legal warning / More at:,
          "link": "https://www.koma-facade.cz/en/cookies"
            <?php
            }elseif(test_lang_code() == 'de'){
            ?>
          "text": "Cookies ermöglichen Ihnen die Nutzung der von uns bereitgestellten Dienstleistungen. Mit der Nutzung unserer Dienstleistungen stimmen Sie automatisch der Nutzung von Cookies zu.",
          "accept": "OK",
          "more": "Rechtliche Hinweise / Mehr auf:",
          "link": "https://www.koma-facade.cz/de/cookies"
            <?php
            }
            ?>
        }
      };
    </script>
    <!-- // @formatter:off -->

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '133400910573829'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"src="https://www.facebook.com/tr?id=133400910573829&ev=PageView&noscript=1" /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <!-- // @formatter:on -->
</head>
<?php if ($_SERVER['SERVER_ADDR'] == '95.129.100.186') { $jakej = 'internet'; } else { $jakej = 'local'; } ?>

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

<!-- app scripts -->
<script>
  var googleAdWordsID = "835061881";
  var sklikId = null;
</script>

<!-- APP.JS-->
<script>var googleApiVersion = 2018</script>
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/app.js"></script>

<!-- Sklik -->
<script type="text/javascript">
    /* <![CDATA[ */
    var seznam_retargeting_id = 52689;
    /* ]]> */
</script>
<script type="text/javascript" src="//c.imedia.cz/js/retargeting.js"></script>
<!-- sklik -->

<!-- google gtag-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-62231986-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-62231986-3');
</script>


<!-- google remarketing support for ASYNC calls -->
<!--<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>-->


<!-- google remarketing : START -->
<!--<script type="text/javascript">-->
<!--  /* <![CDATA[ */-->
<!--  var google_conversion_id = 835061881;-->
<!--  var google_custom_params = window.google_tag_params;-->
<!--  var google_remarketing_only = true;-->
<!--  /* ]]> */-->
<!--</script>-->
<!---->
<!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>-->
<!--<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/835061881/?guid=ON&amp;script=0" /></div></noscript>-->
<!-- google remarketing : END -->

</body>
</html>
