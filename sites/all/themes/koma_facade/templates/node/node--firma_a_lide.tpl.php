<?php
//
//dsm($node);
//dsm($content);
//
//?>

<article <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="m-section l-feed_carousel bg-secondary-light">
        <div class="row">
            <header class="m-section--header">
                <div class="l-half">
                    <h1 class="m-basic-page--hed"><?php print t('THE COMPANY') ?> <span class="color-primary">& <?php print t('PEOPLE') ?></span></h1>
                </div>
            </header>
        </div>

        <div class="row rowfix">
            <div class="m-section--content">

                <div class="l-full">
                  <?php
                  if (isset($content['field_slider_2'][0])) {
                    print render($content['field_slider_2']);
                  }
                  ?>
                </div>

            </div>
        </div>
    </div>

    <!-- sekce se 4 kartami-->
    <div class="m-section l-feed_four bg-secondary-light">
        <div class="row">
            <header class="m-section--header"></header>
        </div>

      <?php
      if (isset($content['field_img_text_text'][0])) {

        $content['field_img_text_text'][0]['myclass'] = "mm-promo";

        // @todo: potrebuji pridat do tehle sablony classu, tak aby to neovlivnilo jina zobrazeni
        print render($content['field_img_text_text']);
      }
      ?>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>

</article>


<div class="m-section l-feed_three bg-white" id="ke-stazeni" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big "><?php print t('For download') ?></h2>
            </div>
        </header>
    </div>
    <div class="row">
        <div class="l-single">
          <?php
          if (isset($content['field_brozury'][0])) {
            print render($content['field_brozury']);
          }
          ?>
        </div>
        <div class="l-single">
          <?php
          $block = module_invoke('views', 'block_view', 'buletin-block');
          print render($block);
          ?>
        </div>
        <div class="l-single">
          <?php
          if (isset($content['field_ceniky'][0])) {
            print render($content['field_ceniky']);
          }
          ?>
        </div>
    </div>

</div>

<div class="kotva" id="dalsi-informace" <?php koma_theme_wrapper(__FILE__) ?>></div>
<?php
$block = module_invoke('views', 'block_view', 'publicita-block');
print render($block);
?>







<?php
if (isset($content['field_text_text_link'][0])) {
  print render($content['field_text_text_link']);
}
?>



<?php
if (isset($_POST['mailto'])) {
  if (empty($_POST['lastname'])) {
    $mailto = $_POST['mailto'];
    $mailfrom = $_POST['email'];
    $name = $_POST['name'];
    $text = $_POST['body'];
    test_mail($mailfrom, $mailto, 'Nová zpráva - kontaktní formulář KOMA', $name . "\n" . $text);
    test_mail('info@koma-modular.cz', $mailfrom, 'Nová zpráva - kontaktní formulář KOMA', $name . "\n" . $text);

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
                          <br/><?php print t('a na vámi zadanou adresu') ?>
                          <span><?= $mailfrom ?></span>
                      </p>
                      <a href="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" class="button">Odeslat novou zprávu
                          <i class="fa fa-paper-plane-o"></i></a>
                      <br/>
                  </div>
              </div>
          </div>
      </div>

      <!--  Metrics start  -->
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
              <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/847326048/?label=x9y2CPqRy3IQ4NaElAM&amp;guid=ON&amp;script=0"/>
          </div>
      </noscript>

      <!-- Měřicí kód Sklik.cz -->
      <iframe width="119" height="22" frameborder="0" scrolling="no" src="//c.imedia.cz/checkConversion?c=100033707&amp;color=ffffff&amp;v=0"></iframe>

      <script>

        jQuery(document).ready(function () {
          // ga
          if (isGAApi(2018)) {
            gtag('event', 'send', {
              'event_category': 'form',
              'event_action': 'sent',
              'event_label': 'odeslat zpravu'
            });
          }
          else {
            ga('send', 'event', 'form', 'sent', 'odeslat zpravu');
          }

          // FB
          fbq('track', '<FORMULAR_SEND>');

        });
      </script>
      <!--  Metrics: End  -->

  <?php }
}
else { ?>

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
                    <span id="targetMailInfo">info@koma-modular.cz</span>
                </header>


                <!--@TODO dodelat cele vsechno omg-->

                <div class="m-contact-form--content">
                    <form action="<?php print url('node/1552', ['absolute' => TRUE]); ?>#contact-form" method="post">
                        <input type="hidden" name="mailto" id="mailto" value="info@koma-modular.cz"/>
                        <input type="text" name="lastname" class="lastname" value=""/>
                        <input type="text" id="name" name="name" placeholder="<?php print t('Your first and surname') ?>" required/>
                        <input type="email" id="email" name="email" placeholder="<?php print t('Your e-mail address') ?>" required/>
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



