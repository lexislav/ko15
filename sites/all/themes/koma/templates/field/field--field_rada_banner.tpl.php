<?php
foreach ($items AS $pole) {
    $cast = ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]['#entity']);

}
?>
<div class="m-section l-feed_one bg-secondary-light mm-has-background" style="background-image: url(<?= image_style_url('none', $cast->field_basic_img['und'][0]['uri']) ?>)" <?php koma_theme_wrapper(__FILE__)?>>

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-normal mm-center color-white"><?= $cast->field_basic_title[$element['#language']][0]['value'] ?></h2>
    </header>

    <div class="row rowfix">
        <div class="m-card_centered-text l-single bg-secondary-light">

            <article class="m-story">
                <header class="m-item--header">
                    <div class="m-item--summary">
                        <div class="m-item--description color-white mm-bold ">
                            <?= $cast->field_basic_text[$element['#language']][0]['value'] ?>
                        </div>
                    </div>
                </header>
            </article>

            <div class="m-card--more "><a class="button" href="<?= $cast->field_page_link[$element['#language']][0]['display_url'] ?>"><?= $cast->field_page_link[$element['#language']][0]['title'] ?> &rarr;</a></div>
        </div>
    </div>

</div>
