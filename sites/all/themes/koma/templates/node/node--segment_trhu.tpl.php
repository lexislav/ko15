<?php
global $language;
?>
    <div class="m-section l-detail-page bg-white" <?php koma_theme_wrapper(__FILE__)?>>

        <header class="m-section--header bg-secondary-light">
            <div class="row ">
                <div class="l-full">

                    <nav class="breadcrumbs">
                        <?php
                        if(drupal_get_breadcrumb()){
                          foreach (drupal_get_breadcrumb() AS $drobek) {
                            echo $drobek;
                          }
                        }

                        ?>
                    </nav>

                </div>
            </div>
        </header>

        <article class="m-basic-page">
            <header class="m-basic-page--header">
                <div class="row">
                    <div class="l-half">
                        <h1 class="m-basic-page--hed"><?= $node->title ?></h1>
                    </div>

                    <div class="l-full">
                        <figure class="m-basic-page--image" style="background-image: url(<?= $GLOBALS['base_url'] ?>/sites/default/files/segment_trhu/<?= $node->field_segment_img['und'][0]['filename'] ?>)">
                            <a href=""><img src="<?= $GLOBALS['base_url'] ?>/sites/default/files/segment_trhu/<?= $node->field_segment_img['und'][0]['filename'] ?>" alt="" /></a>
                            <figcaption>
                                <?= $content['field_segment_img_text']['#items'][0]['value'] ?>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </header>

            <div class="row">
                <div class="m-basic-page--content">
                    <div class="m-body--content"><?= $content['field_segment_text']['#items'][0]['value'] ?></div>

                    <?php //print render($content['field_segment_reference']); ?>

                    <?php if (isset($content['field_segment_soubory']['#items'])) {
                        print render($content['field_segment_soubory']);
                    } ?>
                </div>
            </div>
        </article>

    </div>


    <div class="m-section l-feed_list bg-white">
        <div class="row rowfix">
            <?php
            $poletid = array();
            if($node->field_segment_reference['und']){
              foreach ($node->field_segment_reference['und'] AS $referencetemp) {
                $poletid[] = ($referencetemp['entity']->field_reference_kategorie_stavby['und'][0]['tid']);
                if (isset($referencetemp['entity']->field_reference_kategorie_stavby['und'][1]['tid'])) {
                  $poletid[] = ($referencetemp['entity']->field_reference_kategorie_stavby['und'][1]['tid']);
                }
              }
            }


            $polejmen = taxonomy_term_load_multiple($poletid);
            if($node->field_segment_reference['und']){
              foreach ($node->field_segment_reference['und'] AS $reference) {

                $reference['entity']->field_reference_zeme['und'][0]['iso2'];
                $rok = str_replace('-01-01 00:00:00', '', $reference['entity']->field_reference_rok['und'][0]['value']);
                ?>

                <div class="m-card_reference-horizontal l-single">

                  <article class="m-reference">
                    <header>
                      <!-- @TODO dodelat nacitani main img z fotogalerie -->
                      <div class="m-item--image" style="background-image: url(<?= image_style_url('x310-340', $reference['entity']->field_reference_main_img['und'][0]['uri']) ?>)">
                        <a href="">
                          <img src="<?= image_style_url('x310-340', $reference['entity']->field_reference_main_img['und'][0]['uri']) ?>" alt="" />
                        </a>
                      </div>

                      <div class="m-item--summary">
                        <h1 class="m-item--hed">
                          <a href="<?= test_lang_prefix('node/' . $reference['entity']->nid) ?>"><?= $reference['entity']->title ?></a>
                        </h1>

                        <div class="m-item--description  ">
                          <p><?php if (isset($reference['entity']->field_reference_perex[$language->language][0]['value'])) {
                              echo $reference['entity']->field_reference_perex[$language->language][0]['value'];
                            } else {
                              echo truncate($reference['entity']->field_reference_text[$language->language][0]['value']);
                            }

                            ?>
                            <br />
                            <a href="<?= test_lang_prefix('node/' . $reference['entity']->nid) ?>">
                              <?php print t('Reference detail') ?></a> &rarr;
                            <?php
                            if (@$user->uid > 0) {
                              ?>
                              [
                              <a href="<?= test_lang_prefix('node/' . $reference['entity']->nid) ?>/edit">editovat</a>]
                              <?php
                            }
                            ?>
                          </p>
                        </div>
                      </div>

                      <div class="m-properties">
                        <dl>
                          <dt><?php print t('Classification') ?></dt>
                          <dd><?= $polejmen[$reference['entity']->field_reference_kategorie_stavby['und'][0]['tid']]->name ?>
                            – <?= $polejmen[$reference['entity']->field_reference_kategorie_stavby['und'][1]['tid']]->name ?></dd>
                        </dl>

                        <dl>
                          <dt><?php print t('Year of implementation') ?></dt>
                          <dd><?= $rok ?></dd>
                        </dl>

                        <dl>
                          <dt><?php print t('Country of implementation') ?></dt>
                          <dd><?= test_get_list($reference['entity']->field_reference_zeme['und'][0]['iso2']); ?></dd>
                        </dl>

                        <!--@TODO dodelat if pro zobrazeni-->
                        <dl>
                          <dt class="mm-label"><?php print t('Technical Specifications') ?></dt>

                          <?php if (isset($reference['entity']->field_reference_pomodulu['und'][0]['value'])) { ?>
                            <dt class="mm-sub"><?php print t('Number of modules') ?></dt>
                            <dd><?= $reference['entity']->field_reference_pomodulu['und'][0]['value'] ?></dd>
                          <?php } ?>

                          <?php if (isset($reference['entity']->field_reference_delka[$language->language][0]['value'])) { ?>
                            <dt class="mm-sub"><?php print t('Length of manufacture') ?></dt>
                            <dd><?= $reference['entity']->field_reference_delka[$language->language][0]['value'] ?></dd>
                          <?php } ?>

                          <?php if (isset($reference['entity']->field_reference_dstavby[$language->language][0]['value'])) { ?>
                            <dt class="mm-sub"><?php print t('Length of construction') ?></dt>
                            <dd><?= $reference['entity']->field_reference_dstavby[$language->language][0]['value'] ?></dd>
                          <?php } ?>

                          <?php if (isset($reference['entity']->field_reference_plocha['und'][0]['value'])) { ?>
                            <dt class="mm-sub"><?php print t('Usable area') ?></dt>
                            <dd><?= $reference['entity']->field_reference_plocha['und'][0]['value'] ?>
                              m<sup>2</sup>
                            </dd>
                          <?php } ?>
                        </dl>


                      </div>
                    </header>
                  </article>
                </div>
              <?php }
            }



            ?>
        </div>
    </div>


<?php
$block = module_invoke('views', 'block_view', 'segmentreference-block');
print render($block);
?>

<?php if (false) {
    //// to dole vzniklo chybou s gitem, nechci to radsi zatim mazat, tak je to jen zakazany
    ?>

    <?php //if (isset($node->field_segment_reference['und'])) { ?>
    <div class="m-section l-feed_list bg-white" <?php koma_theme_wrapper(__FILE__)?>>
        <div class="row">
            <?php
            $poletid = array();
            if($node->field_segment_reference['und']){
              foreach ($node->field_segment_reference['und'] AS $referencetemp) {
                $poletid[] = ($referencetemp['entity']->field_reference_kategorie_stavby['und'][0]['tid']);
                if (isset($referencetemp['entity']->field_reference_kategorie_stavby['und'][1]['tid'])) {
                  $poletid[] = ($referencetemp['entity']->field_reference_kategorie_stavby['und'][1]['tid']);
                }
              }
            }

            $polejmen = taxonomy_term_load_multiple($poletid);
if($node->field_segment_reference['und']){
  foreach ($node->field_segment_reference['und'] AS $reference) {


    $reference['entity']->field_reference_zeme['und'][0]['iso2'];


    $rok = str_replace('-01-01 00:00:00', '', $reference['entity']->field_reference_rok['und'][0]['value']);
    ?>
    <div class="m-card_reference-horizontal l-single">
      <article class="m-reference ">
        <header>
          <!--                        @TODO dodelat nacitani main img z fotogalerie-->
          <div class="m-item--image" style="background-image: url(<?= image_style_url('x310-340', $reference['entity']->field_reference_main_img['und'][0]['uri']) ?>)">
            <a href="">
              <img src="<?= image_style_url('x310-340', $reference['entity']->field_reference_main_img['und'][0]['uri']) ?>" alt="" />
            </a>
          </div>

          <div class="m-item--summary">
            <h1 class="m-item--hed">
              <a href="<?= test_lang_prefix('node/' . $reference['entity']->nid) ?>"><?= $reference['entity']->title ?></a>
            </h1>

            <div class="m-item--description">

              <p><?php if (isset($reference['entity']->field_reference_perex[$language->language][0]['value'])) {
                  echo $reference['entity']->field_reference_perex[$language->language][0]['value'];
                } else {
                  echo truncate($reference['entity']->field_reference_text[$language->language][0]['value']);
                }

                ?>
                <br />
                <a href="<?= test_lang_prefix('node/' . $reference['entity']->nid) ?>"><?php print t('Reference detail') ?></a> &rarr;

                <?php
                if (@$user->uid > 0) {
                  ?>
                  [
                  <a href="<?= test_lang_prefix('node/' . $reference['entity']->nid) ?>/edit">editovat</a>]
                  <?php
                }
                ?>


            </div>
        </header>
      </article>

    </div>
  <?php }
}


            ?>


        </div>
    </div>

    <?php
}

?>


<?php
// @todo asi by bylo fajn mít tohle někde pro globální použití? - MR: drupal to umi sam, jen obcas to potrebuju osekat ja sam a to je zatim  jen tady.

function truncate($string, $length = 250, $append = "&hellip;")
{
    $string = trim($string);

    if (strlen($string) > $length) {
        $string = wordwrap($string, $length);
        $string = explode("\n", $string, 2);
        $string = $string[0] . $append;
    }

    return $string;
}




