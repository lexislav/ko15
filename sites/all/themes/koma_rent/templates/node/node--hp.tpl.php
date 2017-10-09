<!--slider-->
<?php
$wrapper = entity_metadata_wrapper('node', $node);
$pole_slider = $content['field_hlavni_slider']['#items'];
// dpm($content['field_hlavni_slider']);
?>
<div class="hero-tabs mm-four" slick <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="hero-slides" carousel>
        <?php
        foreach ($pole_slider as $cislo => $r) {
          if($r['field_basic_img']['und'][0]['uri']==''){
            $file = file_load($r['field_basic_img']['und'][0]['fid']);
            $uri = ($file->uri);
          }else{
            $uri = $r['field_basic_img']['und'][0]['uri'];
          }

          if ($cislo == 0) {
                ?>
                <div class="content-tab mm-center mm-welcome"
                     style="background-image: url(<?= image_style_url('none', $uri) ?>);">
                    <div class="row">
                        <div class="description">
                            <p><?= $r['field_basic_text']['und'][0]['value'] ?></p>

                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="content-tab <?php echo ($cislo <= 2) ? '' : 'mm-right'; ?>"
                     style="background-image: url(<?= image_style_url('none', $uri) ?>);">
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
                if ($cislo == 0) continue;

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

<?php
// @todo: REZ: tohle nema byt samostatna sekce ale jen titulek sekce viz nasledujici render(content[field_img_text_text])
?>
<!-- sekce 3 boxy -->
<div class="m-section l-feed_triple-card" <?php koma_theme_wrapper(__FILE__) ?>>

    <!-- hlavička sekce-->
    <div class="row">
        <header class="m-section--header">
            <div class="columns small-12 small-centered">
                <h2 class="m-section--hed mm-big mm-tiny mm-center"><?= $content['field_hp_1_prvni_text']['#items'][0]['value'] ?>
                    <span class="color-primary"><?= $content['field_hp_1_druhy_text']['#items'][0]['value'] ?></span>
                </h2>

            </div>
            <div class="columns small-12 medium-8 small-centered">
                <div
                    class="mm-center mm-s mm-normal mm-nocase mm-grid-pad-top"><?= $content['field_hp_1_treti_text']['#items'][0]['value'] ?></div>
            </div>
        </header>
    </div>

    <!-- tělo sekce-->
    <?php
    // @todo: REZ: sem musíš poslat titulek a ne ho dat do separatni sekce
    print render($content['field_img_text_text']);
    ?>
    <!-- patička sekce-->
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-full">
                <div class="mm-center">
                    <a href="<?= test_basic_url() ?>kontakty#formSection">
                        <button class="button" style="margin: 0"><?php print t('Contact us') ?></button>
                    </a>
                </div>
            </div>
        </footer>
    </div>

</div><!-- .sekce 1 -->


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
                            <a href="<?= test_basic_url() ?>zpravodaj?field_zpravodaj_kategorie_tid=<?= $term->tid ?>"
                               title="<?= $termLang->name ?>"><?= $termLang->name ?></a>
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
                    <a href="<?= test_basic_url() ?>zpravodaj"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--koma zpravodaj konec-->


<!--cim se lisime zacatek-->
<div class="m-section l-section_side-triple bg-white"
     style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full"></div>
        </header>
    </div>

    <div class="row" style="position: relative;">
        <h2 class="m-section--hed mm-big mm-tiny mm-pad-bottom firstline-primary">
            <?php foreach ($content['field_hp_2_text']['#items'] as $cislo2 => $text) { ?>
                <?= $text['value'] ?><br/>
            <?php } ?>
        </h2>
        <?php print render($content['field_hp_2_odkazy']); ?>

        <div class="m-section--logo"
             style="position: absolute; width: 116px; height: 84px; overflow: hidden; bottom: 0; left:20px; ">
            <a href="#"><img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/logo-apst-cz.png" alt=""/></a>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="<?= test_lang_prefix('node/2282') ?>" title="">firma a lidé &rarr;</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div><!-- sekce 3 vlevo + text vpravo + logo -->
<!--cim se lisime konec-->
