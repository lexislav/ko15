<div class="m-section_vertical-tabs" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="m-section--container">
        <div slick>
            <div class="row">

                <header class="m-section--header">
                    <div class="l-full">
                        <h2 class="m-section--hed mm-big"><?= $element['#title'] ?></h2>
                    </div>
                </header>

                <div class="m-section--nav">
                    <nav slick-method="mouseenter" carouselnav>
                        <ul>
                            <?php
                            foreach ($items AS $pole) {
                                $zkracenina = (($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]['field_cs_b2_odkaz']));
                                foreach ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]['field_cs_b2_odkaz']['#items'] AS $poradi => $cast) {
                                    $hodnota = ($zkracenina[$poradi]['entity']['field_collection_item'][$cast['value']]);
                                    ?>
                                    <li slick-to="<?= ($poradi) ?>">
                                        <a href=""><?= $hodnota['field_cs_cs2_nadpis']['#items'][0]['value'] ?></a>
                                    </li>
                                    <?php
                                }
                                ?><?php
                            }
                            ?>


                        </ul>
                    </nav>
                </div>
            </div>

            <div class="m-section--carousel" carousel>

                <?php
                foreach ($items AS $pole) {
                    $zkracenina = (($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]['field_cs_b2_odkaz']));
                    foreach ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]['field_cs_b2_odkaz']['#items'] AS $poradi => $cast) {
                        $hodnota = ($zkracenina[$poradi]['entity']['field_collection_item'][$cast['value']]);
                        ?>
                        <div class="slide m-card_thumb">
                            <article class="m-story">
                                <header>
                                    <div class="m-item--image" style="background-image: url(<?= image_style_url('x595-0', $hodnota['field_cs_cs2_img']['#items'][0]['uri']) ?>)">
                                        <a href="">
                                            <img src="<?= image_style_url('x595-0', $hodnota['field_cs_cs2_img']['#items'][0]['uri']) ?>" alt="" />
                                        </a>
                                    </div>
                                    <h1 class="m-item--hed">
                                        <a href="<?= @$hodnota['field_cs_cs2_odkaz']['#items'][0]['url'] ?>"><?= @$hodnota['field_cs_cs2_popis']['#items'][0]['value'] ?></a>
                                    </h1>

                                    <div class="m-item--description">
                                        <?= $hodnota['field_cs_cs2_popis']['#items'][0]['value'] ?>
                                    </div>
                                </header>
                            </article>
                        </div>


                        <?php
                    }
                    ?><?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


