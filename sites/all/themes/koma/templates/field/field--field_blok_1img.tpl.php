<!--field--field_blok_1img.tpl.php-->
<div class="m-section l-feed_one bg-white">
    <header class="m-section--header"></header>

    <div class="row rowfix">
        <?php

        foreach ($items AS $pole) {
            $cast = ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]);

            ?>

            <div class="m-card_bigteaser l-single bg-secondary-light">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x633-540', $cast['field_basic_img']['#items'][0]['uri']) ?>)">
                            <a href="">
                                <img src="<?= image_style_url('x633-540', $cast['field_basic_img']['#items'][0]['uri']) ?>" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href=""><?= $cast['field_basic_title']['#items'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description">
                                <?= $cast['field_basic_text']['#items'][0]['value'] ?>
                            </div>

                            <div class="m-card--more bg-8">
                                <a href="<?= $cast['field_page_link']['#items'][0]['url'] ?>" title="<?= $cast['field_page_link']['#items'][0]['title'] ?>"><?= $cast['field_page_link']['#items'][0]['title'] ?></a>
                            </div>
                        </div>
                    </header>
                </article>

            </div>
        <?php } ?>
    </div>

    <footer class="m-section--footer"></footer>
</div>
