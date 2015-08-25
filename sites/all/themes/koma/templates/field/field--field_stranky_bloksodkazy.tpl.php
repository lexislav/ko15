<?php foreach ($items[0]['entity']['field_collection_item'] AS $pole) { ?>

    <div class="m-section l-feed_two bg-secondary-light">
        <header class="m-section--header">
            <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border"><?= $pole['field_cs_nadpis_bloku']['#items'][0]['value'] ?></h2>
        </header>

        <div class="row rowfix">
            <?php
            foreach ($pole['field_cs_blok']['#items'] AS $index => $clanek) {
                $cast = ($pole['field_cs_blok'][$index]['entity']['field_collection_item'][key($pole['field_cs_blok'][$index]['entity']['field_collection_item'])]);
                ?>
                <div class="m-card_centered-text l-single bg-secondary-light">

                    <article class="m-story">
                        <header>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href=""><?= $cast['field_cs_cs_nadpis']['#items'][0]['value'] ?></a>
                                </h1>

                                <div class="m-item--description">
                                    <?= $cast['field_cs_cs_text']['#items'][0]['value'] ?>
                                </div>
                            </div>
                        </header>
                        <footer class="m-item--footer">
                            tady bude fotka, nebo gallerka
                        </footer>
                    </article>

                </div>
            <?php } ?>
        </div>

    </div>
<?php } ?>

