<!--slider-->
<?php
$wrapper = entity_metadata_wrapper('node', $node);
$pole_slider = $content['field_hlavni_slider']['#items'];
?>
<div class="hero-tabs" slick>
    <div class="hero-slides" carousel>
        <?php
        foreach ($pole_slider as $cislo => $r) {
            if ($cislo == 0) {
                ?>
                <div class="content-tab mm-center mm-welcome"
                     style="background-image: url(<?= image_style_url('none', $r['field_basic_img']['und'][0]['uri']) ?>);">
                    <div class="row">
                        <div class="description">
                            <p><?= $r['field_basic_text']['und'][0]['value'] ?></p>
                            <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/square-down.svg"
                                 alt=""/>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="content-tab <?php echo ($cislo <= 3) ? '' : 'mm-right'; ?>"
                     style="background-image: url(<?= image_style_url('none', $r['field_basic_img']['und'][0]['uri']) ?>);">
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
</div>
<!--slider-->

<!--text-->
<div>
<?=$content['field_basic_text'][0]['#markup']; ?>
</div>
<!--end: text-->


<!--koma zpravodaj-->
<div class="m-section l-feed_block-carousel bg-white">
    <div class="m-section--underlay"></div>

    <div class="row">
        <header class="m-section--header">
            <div class="l-third">
                <h2 class="m-section--hed mm-small color-primary"><?php print t('Koma zpravodaj') ?></h2>
            </div>
            <?php
            $tree = taxonomy_get_tree(5);
            ?>

            <div class="l-two-thirds">
                <ul class="m-section--nav inline-right">
                    <?php foreach ($tree as $term) { ?>
                        <li class="tid_<?= $term->tid ?>">
                            <a href="<?= test_basic_url() ?>zpravodaj?field_zpravodaj_kategorie_tid=<?= $term->tid ?>"
                               title="<?= $term->name ?>"><?= $term->name ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-section--content slider block-feed-slider">
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

