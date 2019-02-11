<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-half">
                <h2 class="m-section--hed mm-medium"><?= $node->title ?></h2>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" target="" title=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" target="" title=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" target="" title=""><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </header>
    </div>

    <article class="m-contact">
        <header>
            <div class="m-contact--summary">
                <div class="m-contact--description">
                  <?= $content['field_basic_text']['#items'][0]['value'] ?>
                </div>
                <div class="m-contact--meta"></div>
            </div>

            <div class="m-contact--image"
                    style="background-image: url(<?= image_style_url('x294-226', $content['field_image']['#items'][0]['uri']) ?>)">
                <a target="_blank"
                        href="https://www.google.at/maps/place/Technologiezentrum+Seestadt/@48.2231931,16.5090741,15.75z/data=!4m13!1m7!3m6!1s0x476d01a68145ed91:0xadc07b1001661953!2sSeestadtstraße+27,+1220+Wien!3b1!8m2!3d48.2233228!4d16.5096749!3m4!1s0x476d01a67e8508cf:0x2b6a2ac399d27528!8m2!3d48.2232522!4d16.5095116"><img
                            src="<?= file_create_url( $content['field_image']['#items'][0]['uri']) ?>"
                            alt=""/></a>
            </div>

            <div class="m-contact--map"
                    style="background-image: url(<?= image_style_url('x294-226', $content['field_image']['#items'][1]['uri']) ?>)">
                <a target="_blank"
                        href="https://www.google.at/maps/place/Technologiezentrum+Seestadt/@48.2231931,16.5090741,15.75z/data=!4m13!1m7!3m6!1s0x476d01a68145ed91:0xadc07b1001661953!2sSeestadtstraße+27,+1220+Wien!3b1!8m2!3d48.2233228!4d16.5096749!3m4!1s0x476d01a67e8508cf:0x2b6a2ac399d27528!8m2!3d48.2232522!4d16.5095116"><img
                            src="<?= file_create_url($content['field_image']['#items'][1]['uri']) ?>"
                            alt=""/></a>
            </div>
        </header>
    </article>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <a href="<?= test_basic_url() ?>kontakt#formSection">
                    <button class="button"><?php print t('Ask us') ?></button>
                </a>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="#kariera"><?php print t('Career with KOMA') ?> </a></li>
                    <li><a href="#adresar"><?php print t('Directory') ?> </a></li>
                    <li><a href="#formSection">&darr; <?php print t('Contact form') ?> </a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>



<div class="m-section bg-white"  <?php koma_theme_wrapper(__FILE__) ?>>

    <!-- header sekce-->
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-medium color-primary"><?php print t('Adresář firmy') ?></h2>
            </div>
        </header>
    </div>
    <div class="row fix-height-kontakty">
      <?php
      $block = module_invoke('views', 'block_view', 'kontakty-block');
      print render($block);
      ?>
    </div>
    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>

</div>
<!-- contact list -->


<?php

if (isset($_POST['mailto'])) {
if(empty($_POST['lastname'])){
  $mailto = $_POST['mailto'];
  $mailfrom = $_POST['email'];
  $name = $_POST['name'];
  $text = $_POST['body'];
  test_mail($mailfrom, $mailto, 'Nová zpráva - kontaktní formulář KOMA', $name . "\n" . $text);
  test_mail('info@koma-space.at', $mailfrom, 'Nová zpráva - kontaktní formulář KOMA', $name . "\n" . $text);
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
                        <i class="fa fa-paper-plane-o"></i> <?php print t('Formulář byl úspěšně odeslán na adresu') ?>:
                        <span><?= $mailto ?></span>
                        <br/><?php print t('a na vámi zadanou adresu') ?> <span><?= $mailfrom ?></span>
                    </p>
                    <a href="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" class="button"><?php print t('Odeslat novou zprávu')?>
                        <i class="fa fa-paper-plane-o"></i></a>
                    <br/>
                </div>
            </div>
        </div>
    </div>

    <!--  Metrics start -->
    <!-- Google Code for Odesl&aacute;n&iacute; kontaktn&iacute;ho formul&aacute;&#345;e Conversion Page -->
    <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 835061881;
      var google_conversion_language = "en";
      var google_conversion_format = "3";
      var google_conversion_color = "ffffff";
      var google_conversion_label = "SVUrCLTj7nQQ-ZCYjgM";
      var google_remarketing_only = false;
      /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/835061881/?label=SVUrCLTj7nQQ-ZCYjgM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>

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

<?php } } else { ?>

    <div class="m-section" id="formSection" <?php koma_theme_wrapper(__FILE__) ?>>
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center"><?php print t('DO YOU WANT TO ASK ABOUT ANYTHING?') ?>
                        <span class="color-primary"> <?php print t('WRITE TO US') ?></span></h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form">
                <header>
                    <i class="fa fa-paper-plane-o"></i> <?php print t('The contact form will be sent to the following address') ?>: <span id="targetMailInfo">info@koma-space.at</span>
                </header>

                <div class="m-contact-form--content">
                    <form action="https://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>#contact-form" method="post">
                        <input type="hidden" name="mailto" id="mailto" value="info@koma-space.at"/>
                        <input type="text" name="lastname" class="lastname" value="" />
                        <input type="text" id="name" name="name"
                                placeholder="<?php print t('Your first and surname') ?>" required/>
                        <input type="email" id="email" name="email"
                                placeholder="<?php print t('Your e-mail address') ?>" required/>
                        <textarea id="body" name="body" style="height: 200px" required
                                placeholder="<?php print t('The text of your question') ?>"></textarea>
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

<!-- volna mista-->

<div class="m-section bg-white" id="kariera" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <div class="row">
        <div class="m-card_bigpromo l-single bg-secondary-light">

            <article class="m-story">
                <header>
                    <div class="m-item--image"
                            style="background-image: url(<?= image_style_url('x633-540', $content['field_basic_img']['#items'][0]['uri']) ?>)">
                        <a href="https://www.koma-space.at/de/kariera/verkaeufer-im-aussendienst-mw-b2b-vertrieb-wien-niederoesterreich">
                        <?php /* <a href="<?= test_lang_prefix('firma-a-lide/kariera') ?>"> */ ?>
                            <img
                                    src="<?= image_style_url('x633-540', $content['field_basic_img']['#items'][0]['uri']) ?>"
                                    alt="">
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed mm-center">
                            <?php /*<a href="<?= test_lang_prefix('firma-a-lide/kariera') ?>"><?php print t('Kariéra v KOMA') ?></a>*/ ?>
                            <a href="https://www.koma-space.at/de/kariera/verkaeufer-im-aussendienst-mw-b2b-vertrieb-wien-niederoesterreich"><?php print t('Kariéra v KOMA') ?></a>
                        </h1>

                        <div class="m-item--description">
                          <?= $content['field_basic_popis_2']['#items'][0]['value'] ?>
                        </div>

                        <div class="m-card--more bg-8">
                            <?php /* <a href="<?= test_lang_prefix('firma-a-lide/kariera') ?>" */ ?>
                            <a href="https://www.koma-space.at/de/kariera/verkaeufer-im-aussendienst-mw-b2b-vertrieb-wien-niederoesterreich"
                                    title="<?php print t('Aktuální volná místa') ?>"><?php print t('Aktuální volná místa') ?>
                                &nbsp;→</a>
                        </div>
                    </div>
                </header>

            </article>

        </div>
    </div>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="<?= test_lang_prefix('node/1552 ') ?>"><?php print t('FIRMA A LIDÉ') ?></a></li>
                    <li><a href="<?= test_lang_prefix('node/1612') ?>"><?php print t('HODNOTY, FILOZOFIE, VIZE') ?> </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</div>


<!--@TODO nacitat drupaloidne-->
<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/js/contact.js"></script>


