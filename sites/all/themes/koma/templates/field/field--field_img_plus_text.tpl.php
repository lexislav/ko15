<?php
if($items[0]['field_basic_img']['#items'][0]['uri']==''){
    $file = file_load($items[0]['field_basic_img']['#items'][0]['fid']);
    $uri = ($file->uri);
}else{
    $uri = $items[0]['field_basic_img']['#items'][0]['uri'];
}
foreach ($items AS $pole) {
    $cast = ($pole);
    ?>
    <!--@TODO NONE neni styl, vyresit-->
    <!--@TODO spatne spatne spatne struktura-->

    <div class="m-section l-feed_one bg-secondary-light mm-has-background mm-pad-double" style="background-image: url(<?= image_style_url('none', $uri) ?>)" <?php koma_theme_wrapper(__FILE__)?>>

        <header class="m-section--header">
            <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border"><?= $cast['field_basic_title']['#items'][0]['value'] ?></h2>
        </header>


        <div class="row rowfix">
            <div class="m-card_centered-text bg-secondary-light">

                <article class="m-story">
                    <header class="m-item--header">
                        <div class="m-item--summary">
                            <div class="m-item--description">
                                <?= $cast['field_basic_text']['#items'][0]['value'] ?>
                            </div>
                        </div>
                    </header>

                    <footer class="m-item--footer">   <?php
                        if (isset($cast['field_page_link']['#items'][0]['url'])) {
                            ?>
                            <div class="m-card--more ">
                                <a class="button" href="<?=$cast['field_page_link']['#items'][0]['url']?>"><?=$cast['field_page_link']['#items'][0]['title']?> →</a>
                            </div>

                            <?php
                        }
                        ?></footer>
                </article>

            </div>
        </div>

    </div>
<?php } ?>


