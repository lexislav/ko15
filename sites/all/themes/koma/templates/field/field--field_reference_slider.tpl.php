<!-- field--field_reference_slider.tpl -->
<div class="m-section l-feed_carousel" <?php koma_theme_wrapper(__FILE__) ?>>

    <!--    <div class="row">-->
    <!--        <header class="m-section--header">-->
    <!--            <div class="l-full">-->
    <!--                <h2 class="m-section--hed mm-big">-->
  <?php //print t('Reference') ?><!--</h2>-->
    <!--            </div>-->
    <!--        </header>-->
    <!--    </div>-->

    <div class="row rowfix" style="overflow: visible">
        <div class="l-full" style="overflow: visible">
            <div class="slides full-carousel">
              <?php


              foreach ($element['#object']->field_reference_slider['und'] AS $pole) {


                $rok = str_replace('-01-01 00:00:00', '', $pole['entity']->field_reference_rok['und'][0]['value']);

                $fieldreference = $pole['entity']->field_reference_main_img;
                if (isset($fieldreference[key($fieldreference)][0])) {

                  $uricko = $fieldreference[key($fieldreference)][0]['uri'];
                }
                else {
                  $fieldreference = $pole['entity']->field_reference_fotogalerie;
                  $target_id = $fieldreference[key($fieldreference)][0]['target_id'];
                  $uricko = (node_load($target_id)->field_fotogalerie_main_img['und'][0]['uri']);


                }


                ?>

                  <div class="m-card_reference l-single slide">

                      <article class="m-story">
                          <header>
                              <div class="m-item--image" style="background-image: url(<?= image_style_url('x1266-0', $uricko) ?>)">
                                  <a href="<?= test_lang_prefix('node/' . $pole['entity']->nid) ?>">
                                      <img src="<?= image_style_url('x1266-0', $uricko) ?>" alt=""/>
                                  </a>
                              </div>

                              <div class="m-item--summary">
                                  <h1 class="m-item--hed">
                                      <a href="<?= test_lang_prefix('node/' . $pole['entity']->nid) ?>"><?= $pole['entity']->title ?></a>
                                  </h1>

                                  <div class="m-item--description">
                                      <p><?php print t('SELECTED REFERENCES') ?>
                                          <span class="color-body-font">[<?= $rok ?>]</span></p>
                                  </div>
                              </div>
                          </header>

                          <div class="m-card--more">&rarr;</div>
                      </article>

                  </div>
              <?php } ?>

            </div>

        </div>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a>
                </div>
            </div>
            <div class="l-half">
                <div class="m-section--more">
                    <a href="<?= test_basic_url() ?>reference/archiv"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
                </div>
            </div>
        </footer>
    </div>

</div>
<!-- end: field--field_reference_slider.tpl -->
