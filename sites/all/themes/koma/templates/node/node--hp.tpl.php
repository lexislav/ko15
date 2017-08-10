<!--slider-->
<?php
$wrapper = entity_metadata_wrapper('node', $node);
$pole_slider = $content['field_hlavni_slider']['#items'];
// dpm($content['field_hlavni_slider']);
?>
<div class="hero-tabs" slick <?php koma_theme_wrapper(__FILE__) ?>>
  <div class="hero-slides" carousel>
    <?php
    foreach ($pole_slider as $cislo => $r) {

      if ($r['field_basic_img']['und'][0]['uri'] == '') {
        $file = file_load($r['field_basic_img']['und'][0]['fid']);
        $uri = ($file->uri);
      }
      else {
        $uri = $r['field_basic_img']['und'][0]['uri'];
      }


      if ($cislo == 0) {
        ?>
        <div class="content-tab mm-center mm-welcome" style="background-image: url(<?= image_style_url('none', $uri) ?>);">
          <div class="row">
            <div class="description">
              <p><?= $r['field_basic_text']['und'][0]['value'] ?></p>
            </div>
          </div>
        </div>
      <?php }
      else { ?>
        <div class="content-tab <?php echo ($cislo <= 3) ? '' : 'mm-right'; ?>" style="background-image: url(<?= image_style_url('none', $uri) ?>);">
          <div class="row">
            <div class="description">
              <p><?= $r['field_basic_text']['und'][0]['value'] ?></p>
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
        if ($cislo == 0) {
          continue;
        }

        $odkaz_nid = $content['field_hlavni_slider']['#object']->field_hlavni_slider['cs'][$cislo]['field_c_hp_odkaz']['und'][0]['target_id'];
        ?>
        <div class="tab color-<?= $cislo ?>" slick-to="<?= $cislo ?>">

          <a href="<?= test_lang_prefix('node/' . $odkaz_nid) ?>"><?= $r['field_basic_title']['und'][0]['value'] ?></a>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div><!--slider-->


<!--htmlblok-->
<?php
GLOBAL $user;
if($user->uid == 1 OR $user->uid == 114){
  $display = array('label' => 'hidden');
  $htmltext = field_view_field('node', $node, 'field_basic_popis_2',$display);
?>

<div class="m-section bg-white">
  <div class="row">
    <header class="m-section--header"></header>
  </div>
  <div class="row">
    <div class="small-12 medium-6 columns">
      <img src="<?= image_style_url('x618-0', $node->field_jeden_obrazek['und'][0]['uri']) ?>">
    </div>
    <div class="small-12 medium-6 columns">
      <h3 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top">
     <?php print render($htmltext); ?>
      </h3>
    </div>
  </div>
  <div class="row">
    <footer class="m-section--footer"></footer>
  </div>
</div>
<?php } ?>

<!--end: htmlblok-->

<?php
// @todo: REZ: tohle nema byt samostatna sekce ale jen titulek sekce viz nasledujici render(content[field_img_text_text])
?>
<div class="m-section l-feed_triple-card bg-secondary-light" <?php koma_theme_wrapper(__FILE__) ?>>
  <div class="row">
    <header class="m-section--header">
      <div class="l-full">
        <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top"><?= $content['field_hp_1_prvni_text']['#items'][0]['value'] ?>
          <br/>
          <span class="color-primary"><?= $content['field_hp_1_druhy_text']['#items'][0]['value'] ?></span>
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


<div class="m-section l-feed_block-carousel bg-white" <?php koma_theme_wrapper(__FILE__) ?>>
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
        <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a>
        </div>
      </div>
      <div class="l-half">
        <div class="m-section--more">
          <a href="<?= test_basic_url() ?>zpravodaj"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
        </div>
      </div>
    </footer>
  </div>
</div>
<!--koma zpravodaj konec-->


<!--cim se lisime zacatek-->
<div class="m-section l-section_side-triple bg-white" style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')" <?php koma_theme_wrapper(__FILE__) ?>>

  <div class="row">
    <header class="m-section--header">
      <div class="l-full"></div>
    </header>
  </div>

  <div class="row">
    <h2 class="m-section--hed mm-big mm-tiny mm-pad-bottom firstline-primary">
      <?php foreach ($content['field_hp_2_text']['#items'] as $cislo2 => $text) { ?>
        <!-- odkaz http://www.koma-modular.cz/o-firme/hodnoty-vize-strategie-firmy -->
        <a href="<?= $content['field_page_link']['#items'][0]['url'] ?>"><?= $text['value'] ?></a>
        <br/>
      <?php } ?>
    </h2>
    <?php print render($content['field_hp_2_odkazy']); ?>
  </div>

  <div class="row">
    <footer class="m-section--footer">
      <div class="l-half">
        <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a>
        </div>
      </div>
      <div class="l-half"></div>
    </footer>
  </div>
</div><!--cim se lisime konec-->
