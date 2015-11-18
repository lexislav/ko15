<div class="m-section l-feed_two bg-secondary-light" <?php koma_theme_wrapper(__FILE__)?>>

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></h2>
    </header>

    <div class="row rowfix">
        <?php
        foreach ($items AS $poradi => $pole) {

            if ($poradi == 0) continue;
            ?>
            <div class="m-card_centered-text l-single">

                <article class="m-story">

                    <header>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= @$pole['field_page_link']['#items'][0]['url'] ?>"><?= @$pole['field_basic_title']['#items'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description">
                                <?= $pole['field_basic_text']['#items'][0]['value'] ?>
                            </div>
                        </div>
                    </header>

                    <div class="row">
                        <div class="m-item--content">
                            <!-- obsah gallerie -->

                                <ul class="m-gallery  clearing-thumbs clearing-feature" data-clearing>
                                    <?php
                                    if (isset($pole['field_segment_fotogalerie']['#items'])) {
                                        foreach ($pole['field_segment_fotogalerie']['#object']->field_segment_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $poradi => $img) { ?>
                                            <li class="<?= ($poradi == 0) ? 'clearing-featured-img' : '' ?> cB">
                                                <a href="<?= image_style_url('none', $img['uri']) ?>"><img src="<?= image_style_url('x182-132', $img['uri']) ?>"></a>
                                            </li>

                                        <?php }
                                    } else {
                                        if (isset($pole['field_basic_img']['#items'])) { ?>
                                            <li class="clearing-featured-img cA">
                                                <a href="<?= image_style_url('none', $pole['field_basic_img']['#items'][0]['uri']) ?>"><img src="<?= image_style_url('x182-132', $pole['field_basic_img']['#items'][0]['uri']) ?>"></a>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>

                            <!-- konec obsahu galerie-->

                        </div>
                    </div>

                    <footer class="m-item--footer">
                        <div class="row">
                            <footer class="m-section--footer">
                                <?php if (isset($pole['field_page_link']['#items'][0])) { ?>
                                    <a href="<?= $pole['field_page_link']['#items'][0]['display_url'] ?>"><?= $pole['field_page_link']['#items'][0]['title'] ?></a>
                                <?php } ?>
                            </footer>
                        </div>
                    </footer>

                </article>

            </div>
        <?php } ?>
    </div>

</div>



