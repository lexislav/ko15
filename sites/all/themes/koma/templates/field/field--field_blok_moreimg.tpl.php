<!--field--field_blok_moreimg.tpl.php-->
<?php
//dsm($element);
//dsm($items);
//print render($element['field_segment_fotogalerie']);

foreach ($items AS $pole) {
    $cast = ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]);
 //   dsm($cast);
 //  dsm($cast['field_segment_fotogalerie']['#object']->field_segment_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und']);
    ?>

    <div class="m-card_centered-text l-single bg-secondary-light" <?php koma_theme_wrapper(__FILE__)?>>
        <article class="m-story">
            <header>
                <div class="m-item--summary">
                    <h1 class="m-item--hed">
                        <a href=""><?= $cast['field_basic_title']['#items'][0]['value'] ?></a>
                    </h1>

                    <div class="m-item--description">
                        <?= $cast['field_basic_text']['#items'][0]['value'] ?>
                    </div>
                </div>
            </header>
            <footer class="m-item--footer">
                <!-- dummy gallery-->
                <div class="m-section">
                    <div class="row">
                        <header class="m-section--header">

                        </header>
                    </div>

                    <div class="row">
                        <!-- gallerie -->
                        <!-- zobrazení přes featured image-->
                        <ul class="clearing-thumbs clearing-feature" data-clearing>

                            <?php
                            if(isset($cast['field_basic_img']['#items'])){

                                ?>
                                <li class="clearing-featured-img"><a href="<?= image_style_url('none', $cast['field_basic_img']['#items'][0]['uri']) ?>"><img src="<?= image_style_url('x182-132', $cast['field_basic_img']['#items'][0]['uri']) ?>"></a></li>
                                <?php
                            }
                            if(isset($cast['field_segment_fotogalerie']['#items'])){
                             foreach($cast['field_segment_fotogalerie']['#object']->field_segment_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $poradi => $img){
                                 ?>
                                 <li class="<?=($poradi==0)?'clearing-featured-img':''?>"><a href="<?= image_style_url('none', $img['uri']) ?>"><img src="<?= image_style_url('x182-132', $img['uri']) ?>"></a></li>
                                 <?php
                             }
                            }
                            ?>


                        </ul>
                        <!-- konec galerie-->
                    </div>


                    <div class="row">
                        <footer class="m-section--footer"></footer>
                    </div>
                </div>
                <!-- dummy gallery-->
            </footer>
        </article>
    </div>





<?php

}

