<!--slider-->
<?php
$wrapper = entity_metadata_wrapper('node', $node);
$pole_slider = $content['field_hlavni_slider']['#items'];
?>
<div class="hero-tabs mm-five" slick>
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
                        $urlwebu = 'https://www.koma-rent.cz';
                    }
                    if ($cislo == 4) {
                        $logoClass = 'koma-slovakia';
                        $urlwebu = 'http://koma-slovakia.sk/';
                    }
                    if ($cislo == 5) {
                        $logoClass = 'koma-facade';
                        $urlwebu = 'https://www.koma-facade.cz/';
                    }

                    ?>

                    <?= $theme_path ?>
                    <a target="_blank" href="<?= $urlwebu ?>">
                        <div class="tab-logo <?= $logoClass ?>"></div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div><!--slider-->

<!--text-->
<div class="m-section">

    <div class="row">
        <header class="m-section--header">
            <div class="l-third">
                <h2 class="m-section--hed mm-small color-primary"><?php print t('About group') ?></h2>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-full">
            <div class="l-section--content mm-medium mm-tiny">
                <?php echo strip_tags($content['field_basic_text'][0]['#markup'], '<strong><em><b><a><i>');?>
            </div>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>

</div><!--end: text-->


<!--koma zpravodaj-->
<div class="m-section l-feed_block-carousel bg-white">
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
        <div class="l-section--content slider block-feed-slider">
            <?php
            $block = module_invoke('views', 'block_view', 'zpravodajhp-block_1');
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
</div><!--koma zpravodaj konec-->

