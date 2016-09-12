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

    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="cleartype" content="on">

    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <?php print $styles; ?>
    <?php print $scripts; ?>


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

    <script src="http://www.koma-modular.cz/sites/all/themes/koma/js/komacookies.js" async></script>
    <script>
        var koma_eu_config = {
            "l18n": {
                <?php
                if(test_lang_code()=='en'){
                    ?>
                "text": "Cookies allow you to utilise the services provided by us. By utilising our services, you automatically agree with the use of cookies.",
                "accept": "OK",
                "more": "Legal warning / More at:,
                "link": "http://www.koma-modular.cz/en/informations-about-cookies"
                <?php
                }elseif(test_lang_code()=='de'){
                ?>
                "text": "Cookies ermöglichen Ihnen die Nutzung der von uns bereitgestellten Dienstleistungen. Mit der Nutzung unserer Dienstleistungen stimmen Sie automatisch der Nutzung von Cookies zu.",
                "accept": "OK",
                "more": "Rechtliche Hinweise / Mehr auf:",
                "link": "http://www.koma-modular.cz/de/cookies"
                <?php
                }
                ?>
            }
        };
    </script>

</head>
<?php
if($_SERVER['SERVER_ADDR']=='217.115.249.155'){
    $jakej = 'internet';
}else{
    $jakej = 'local';
}
?>
<body class="komaspace l-page <?php print $classes; ?> <?= $jakej ?>" <?php print $attributes; ?>>
<?php if ($skip_link_text && $skip_link_anchor): ?>
    <p id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>"
           class="element-invisible element-focusable"><?php print $skip_link_text; ?></a>
    </p>
<?php endif; ?>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
<div class="m-page-scroll">
    <div class="m-page-scroll--item">
        <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/scroll-down-sipka.svg"
             alt="Scroll Down" class="scroll-sipka"/> <?php print t('Scroll down') ?>
    </div>
</div>
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/app.js"></script>
<script type="text/javascript"> var leady_track_key = "zdY943A7JNzTW7S9";
    var leady_track_server = document.location.protocol + "//t.leady.cz/";
    (function () {
        var l = document.createElement("script");
        l.type = "text/javascript";
        l.async = true;
        l.src = leady_track_server + leady_track_key + "/L.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(l, s);
    })(); </script>
</body>
</html>
