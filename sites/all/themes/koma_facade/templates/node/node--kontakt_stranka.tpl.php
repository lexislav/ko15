<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-medium"><?= $node->title ?></h2>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" target="" title=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="" target="" title=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="" target="" title=""><i class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>
            </div>
        </header>
    </div>

    <article class="m-contact">
        <header>

            <div class="m-contact--summary">
                <h1 class="m-contact--hed color-black"><?php print t('KOMA FACADE s.r.o.') ?></h1>

                <div class="m-contact--description">
                    <?= $content['field_basic_text']['#items'][0]['value'] ?>
                    <br />
                    <span class="color-primary">T</span> <?= $content['kontakt_telefon']['#items'][0]['value'] ?>
                    <br />

                    <?php if ($content['kontakt_fax']['#items'][0]['value']) {
                        ?>
                        <span class="color-primary">F</span> <?= $content['kontakt_fax']['#items'][0]['value'] ?>
                        <br />
                        <?php
                    }
                    ?>

                    <span class="color-primary">E</span> <?= $content['kontakt_email']['#items'][0]['value'] ?></span>
                    <br />
                </div>

                <div class="m-contact--meta"></div>

            </div>

            <div class="m-contact--image" style="background-image: url(<?= image_style_url('x294-226', $content['field_image']['#items'][0]['uri']) ?>)">
                <a target="_blank" href="https://goo.gl/maps/A9XaGenNSGu"><img src="<?= image_style_url('x294-226', $content['field_image']['#items'][0]['uri']) ?>" alt="" /></a>
            </div>

            <div class="m-contact--map" style="background-image: url(<?= image_style_url('x294-226', $content['field_image']['#items'][1]['uri']) ?>)">
                <a target="_blank" href="https://goo.gl/maps/A9XaGenNSGu"><img src="<?= image_style_url('x294-226', $content['field_image']['#items'][1]['uri']) ?>" alt="" /></a>
            </div>

        </header>
    </article>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <!-- @todo: add measure code-->
                <a href="<?php print url('node/2786', array('absolute' => true)); ?>#formSection" onclick="ga('send', 'event', 'button', 'click', 'zeptejte se nas');">
                    <button class="button"><?php print t('Ask us') ?></button>
                </a>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <!-- @todo: add measure code-->
                    <li>
                        <a href="#kariera" onclick="ga('send', 'event', 'button', 'click', 'kariera v koma');"><?php print t('Career with KOMA') ?> </a>
                    </li>
                    <li><a href="#adresar"><?php print t('Directory') ?> </a></li>
                    <li>
                        <a href="#formSection" onclick="ga('send', 'event', 'button', 'click', 'tlacitko kontaktni formular');">&darr; <?php print t('Contact form') ?> </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

</div>

<!-- contact list -->
<div class="m-section bg-white" id="adresar" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-small color-primary"><?php print t('COMPANY DIRECTORY') ?></h2>
            </div>
        </header>
    </div>
    <?php
    $block = module_invoke('views', 'block_view', 'kontakty-block_1');
    print render($block);
    ?>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div>

<?php

if (isset($_POST['mailto'])) {
  if (empty($_POST['zip'])) {
    $mailto = $_POST['mailto'];
    $mailfrom = $_POST['email'];
    $name = $_POST['name'];
    $text = $_POST['body'];
    test_mail($mailfrom, $mailto, 'Nová zpráva - kontaktní formulář KOMA', $name . "\n" . $text);
    test_mail('obchod@koma-modular.cz', $mailfrom, 'Nová zpráva - kontaktní formulář KOMA', $name . "\n" . $text);

    ?>
    <div class="m-section" id="contact-form" <?php koma_theme_wrapper(__FILE__) ?>>
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center"><?php print t('Formulář byl úspěšně odeslán') ?></h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form mm-sent">
                <div class="m-contact-form--content">
                    <p>
                        <i class="fa fa-paper-plane-o"></i> <?php print t('Formulář byl úspěšně odeslán na adresu') ?>
                        :
                        <span><?= $mailto ?></span>
                        <br /><?php print t('a na vámi zadanou adresu') ?>
                        <span><?= $mailfrom ?></span>
                    </p>
                    <a href="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" class="button">Odeslat novou zprávu
                        <i class="fa fa-paper-plane-o"></i></a>
                    <br />
                </div>
            </div>
        </div>
    </div>

    <!--  Metrics start -->
    <!-- Google Code for Odesl&aacute;n&iacute; kontaktn&iacute;ho formul&aacute;&#345;e Conversion Page -->
    <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 847326048;
      var google_conversion_language = "en";
      var google_conversion_format = "3";
      var google_conversion_color = "ffffff";
      var google_conversion_label = "x9y2CPqRy3IQ4NaElAM";
      var google_remarketing_only = false;
      /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/847326048/?label=x9y2CPqRy3IQ4NaElAM&amp;guid=ON&amp;script=0" />
        </div>
    </noscript>

    <!-- Měřicí kód Sklik.cz -->
    <iframe width="119" height="22" frameborder="0" scrolling="no" src="//c.imedia.cz/checkConversion?c=100039884&amp;color=ffffff&amp;v="></iframe>

    <script>

      jQuery( document ).ready(function() {
        // ga
        if(isGAApi(2018)) {
          gtag('event', 'send', {
            'event_category': 'form',
            'event_action': 'sent',
            'event_label': 'odeslat zpravu'
          });
        } else {
          ga('send', 'event', 'form', 'sent', 'odeslat zpravu');
        }

        // FB
        fbq('track', '<FORMULAR_SEND>');

      });
    </script>
    <!--  Metrics: End  -->

<?php }  } else { ?>

    <div class="m-section" id="formSection" <?php koma_theme_wrapper(__FILE__) ?>>
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center"><?php print t('DO YOU WANT TO ASK ABOUT ANYTHING?') ?>
                        <span class="color-primary"> <?php print t('WRITE TO US') ?></span>
                    </h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form">
                <header>
                    <i class="fa fa-paper-plane-o"></i> <?php print t('The contact form will be sent to the following address') ?>
                    :
                    <span id="targetMailInfo">obchod@koma-modular.cz</span>
                </header>


                <!--@TODO dodelat cele vsechno omg-->

                <div class="m-contact-form--content">
                    <form action="<?php print url('node/1444', array('absolute' => true)); ?>#contact-form" method="post">
                        <input type="hidden" name="mailto" id="mailto" value="obchod@koma-modular.cz" />
                        <input type="text" name="lastname" class="lastname" value="" />
                        <input type="text" name="zip" class="zmiz" value="" />
                        <input type="text" id="name" name="name" placeholder="<?php print t('Your first and surname') ?>" required />
                        <input type="email" id="email" name="email" placeholder="<?php print t('Your e-mail address') ?>" required />
                        <textarea id="body" name="body" style="height: 200px" required placeholder="<?php print t('The text of your question') ?>"></textarea>
                        <button type="submit" class="button"><?php print t('Send the message') ?>
                            <i class="fa fa-paper-plane-o"></i></button>
                    </form>
                </div>


            </div>
        </div>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>

    <?php
}
?>

<!-- volna mista-->
<div class="m-section bg-white" id="kariera" <?php koma_theme_wrapper(__FILE__) ?>>

    <?php
    global $language;
    if ($language->language == 'cs') {
        ?>
        <div class="row">
            <header class="m-section--header"></header>
        </div>
        <div class="row">
            <div class="m-card_bigpromo l-single bg-secondary-light">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x633-540', $content['field_basic_img']['#items'][0]['uri']) ?>)">
                            <a href="<?= test_lang_prefix('firma-a-lide/kariera') ?>">
                                <img src="<?= image_style_url('x633-540', $content['field_basic_img']['#items'][0]['uri']) ?>" alt="">
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed mm-center">
                                <a href="<?= test_lang_prefix('firma-a-lide/kariera') ?>" onclick="ga('send', 'event', 'button', 'click', 'kariera v koma');"><?php print t('Kariéra v KOMA') ?></a>
                            </h1>

                            <div class="m-item--description">
                                <?= $content['field_basic_popis_2']['#items'][0]['value'] ?>
                            </div>

                            <div class="m-card--more bg-8">
                                <a href="<?= test_lang_prefix('firma-a-lide/kariera') ?>" title="<?php print t('Aktuální volná místa') ?>" onclick="ga('send', 'event', 'button', 'click', 'aktualni volna mista');"><?php print t('Aktuální volná místa') ?>&nbsp;→</a>
                            </div>
                        </div>
                    </header>

                </article>

            </div>
        </div>
        <?php
    }
    ?>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a>
                </div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li>
                        <a href="<?= test_lang_prefix('node/1552 ') ?>"><?php print t('Company & people') ?></a>
                    </li>
                    <li>
                        <a href="<?= test_lang_prefix('node/1612') ?>"><?php print t('HODNOTY, FILOZOFIE, VIZE') ?> </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</div>


<!--@TODO nacitat drupaloidne-->
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/contact.js"></script>


