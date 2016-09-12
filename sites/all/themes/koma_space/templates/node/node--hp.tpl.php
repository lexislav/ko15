<!--slider-->
<?php
$wrapper = entity_metadata_wrapper('node', $node);
$pole_slider = $content['field_hlavni_slider']['#items'];
?>

<div class="hero-tabs mm-four neco" slick>
  <div class="hero-slides" carousel>
    <?php
    foreach ($pole_slider as $cislo => $r) {
      if(isset($r['field_basic_img']['und'][0]['uri'])){
        $uri = $r['field_basic_img']['und'][0]['uri'];
      }else{
        $uri = file_load($r['field_basic_img']['und'][0]['fid'])->uri;
      }



      if ($cislo == 0) {

        ?>
        <div class="content-tab mm-center mm-welcome" style="background-image: url(<?= image_style_url('none', $uri) ?>);">
          <div class="row">
            <div class="description">
              <?= $r['field_basic_text']['und'][0]['value'] ?>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <div class="content-tab <?php echo ($cislo <= 2) ? '' : 'mm-right'; ?>" style="background-image: url(<?= image_style_url('none', $uri) ?>);">
          <div class="row">
            <div class="description">
              <?= $r['field_basic_text']['und'][0]['value'] ?>
            </div>
          </div>
        </div>
        <?php
      }
    }
    ?>
  </div>
  <div class="navigation" carouselnav slick-method="mouseenter">
    <div class="l-grid">
      <?php
      foreach ($pole_slider as $cislo => $r) {
        if ($cislo == 0) continue;
        $odkaz_nid = $content['field_hlavni_slider']['#object']->field_hlavni_slider['cs'][$cislo]['field_c_hp_odkaz']['und'][0]['target_id'];
        ?>

        <div class="tab" slick-to="<?= $cislo ?>">
          <?php
          $logoClass = '';
          if ($cislo == 1) {
            $logoClass = 'koma-modular';
            $urlwebu = test_basic_url('koma-modular.cz');
          }
          if ($cislo == 2) {
            $logoClass = 'koma-space';
            $urlwebu = test_basic_url_special('koma-space.at');
          }
          if ($cislo == 3) {
            $logoClass = 'koma-rent';
            $urlwebu = 'http://www.koma-rent.cz';
          }
          if ($cislo == 4) {
            $logoClass = 'koma-slovakia';
            $urlwebu = 'http://koma-slovakia.sk/';
          }

          ?>

          <?= $theme_path ?>
          <a target="_blank" href="<?= $urlwebu ?>">
            <div class="tab-logo <?=$cislo?> <?= $logoClass ?>"></div>
          </a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div><!--slider-->


<?php
// @todo: REZ: tohle nema byt samostatna sekce ale jen titulek sekce viz nasledujici render(content[field_img_text_text])
?>
<div class="m-section l-feed_triple-card bg-secondary-light" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top"><?=$content['field_hp_1_prvni_text']['#items'][0]['value']?><br />
                    <span class="color-primary"><?=$content['field_hp_1_druhy_text']['#items'][0]['value']?></span>
                </h2>
            </div>
        </header>
    </div>


    <?php
    // @todo: REZ: sem musíš poslat titulek a ne ho dat do separatni sekce
    print render($content['field_img_text_text']);
    ?>
    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div><!--koma zpravodaj-->

<div class="m-section l-feed_block-carousel bg-white" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-section--underlay"></div>

    <div class="row">
        <header class="m-section--header">
            <div class="l-third">
                <h2 class="m-section--hed mm-small color-primary"><?php print t('KOMA Bulletin') ?></h2>
            </div>
            <?php
            $tree = taxonomy_get_tree(5);
            ?>
            <div class="l-two-thirds">
                <ul class="m-section--nav inline-right">
                    <?php foreach ($tree as $term) {
                        $termLang = taxonomy_term_load($term->tid);
                        ?>
                        <li class="tid_<?= $term->tid ?>">
                            <a href="<?= test_basic_url() ?>zpravodaj?field_zpravodaj_kategorie_tid=<?= $term->tid ?>" title="<?= $termLang->name ?>"><?= $termLang->name ?></a>
                        </li>
                    <?php
                    unset($termLang);
                    } ?>
                </ul>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-section--content slider block-feed-slider mm-red-arrows">
            <?php
            $block = module_invoke('views', 'block_view', 'zpravodajhp-block');
            print render($block);
            ?>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more">
                    <a href="<?= test_basic_url()?>zpravodaj"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--koma zpravodaj konec-->


<!--cim se lisime zacatek-->
<div class="m-section l-section_side-triple bg-white" style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')" <?php koma_theme_wrapper(__FILE__)?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full"></div>
        </header>
    </div>

    <div class="row">
        <h2 class="m-section--hed mm-big mm-tiny mm-pad-bottom firstline-primary">
            <?php foreach ($content['field_hp_2_text']['#items'] as $cislo2 => $text) { ?>
                <!-- odkaz http://www.koma-modular.cz/o-firme/hodnoty-vize-strategie-firmy -->
                <a href="<?=$content['field_page_link']['#items'][0]['url']?>"><?= $text['value'] ?></a><br />
            <?php } ?>
        </h2>
        <?php print render($content['field_hp_2_odkazy']); ?>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half"></div>
        </footer>
    </div>
</div><!--cim se lisime konec-->
