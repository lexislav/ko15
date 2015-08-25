<?php
//dsm($element);
//dsm($items);
foreach ($items AS $pole) {
    $cast = ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]);
    //   dsm($cast);
    ?>
    <!--@TODO NONE neni styl, vyresit-->

    <div class="m-section l-feed_one bg-secondary-light mm-has-background" style="background-image: url(<?= image_style_url('none', $cast['field_basic_img']['#items'][0]['uri']) ?>)">

        <header class="m-section--header">
            <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border"><?= $cast['field_basic_title']['#items'][0]['value'] ?></h2>
        </header>

        <div class="row rowfix">
            <div class="m-card_centered-text l-single bg-secondary-light">

                <article class="m-story">
                    <header class="m-item--header">
                        <div class="m-item--summary">
                            <div class="m-item--description">
                                <?= $cast['field_basic_text']['#items'][0]['value'] ?>
                            </div>
                        </div>
                    </header>

                    <footer class="m-item--footer"></footer>
                </article>

            </div>
        </div>

    </div>
<?php } ?>


