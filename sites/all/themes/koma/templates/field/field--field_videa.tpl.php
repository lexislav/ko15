<div class="m-section l-feed_three" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><?php print t('Krátká videa') ?></h2>
            </div>
        </header>
    </div>
    <div class="row rowfix">
        <ul class="clearing-thumbs clearing-feature" data-clearing>
            <?php
            foreach ($element['#items'] AS $poradi => $pole) { ?>
                <li class="<?= ($poradi == 0) ? 'clearing-featured-img' : '' ?>">
                    <a href="<?= $pole['entity']->field_odkazy_v_link['und'][0]['input'] ?>"><img src="<?= $GLOBALS['base_url'] ?>/sites/default/files/youtube/<?= $pole['entity']->field_odkazy_v_link['und'][0]['video_id'] ?>.png"></a>
                </li>
            <?php } ?>
        </ul>

        <div class="row">
            <footer class="m-section--footer">
                <div class="l-half">
                    <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
                </div>
                <div class="l-half">
                    <!--                    <ul class="m-section--nav inline-right">-->
                    <!--                        <li><a href="" title="Novinky">Technická pomoc</a></li>-->
                    <!--                        <li><a href="">informace pro architekty</a></li>-->
                    <!--                    </ul>-->
                </div>
            </footer>
        </div>

    </div>
