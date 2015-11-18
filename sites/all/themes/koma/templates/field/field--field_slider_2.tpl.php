<div class="slides full-carousel" <?php koma_theme_wrapper(__FILE__)?>>

    <?php
    foreach ($items AS $pole) {

        $uricko = $pole['field_basic_img']['#items'][0]['uri'];
        ?>
        <div class="m-card_reference l-single slide">

            <article class="m-story">
                <header>
                    <div class="m-item--image" style="background-image: url(<?= image_style_url('none', $uricko) ?>)">
                        <!--                                    <a href="--><? //=drupal_get_path_alias() ?><!--">-->
                        <img src="<?= image_style_url('none', $uricko) ?>" alt="" />
                        <!--                                    </a>-->
                    </div>

                    <div class="m-item--summary">
                        <h1 class="m-item--hed"><?= $pole['field_basic_title']['#items'][0]['value'] ?></h1>

                        <div class="m-item--description">
                            <?= @$pole['field_basic_text']['#items'][0]['value'] ?>
                        </div>
                    </div>
                </header>

                <div class="m-card--more">&rarr;</div>

            </article>
        </div>
    <?php } ?>

</div>
