<?php
$pocet = count($items) - 1;
foreach ($items AS $kolik => $item) {
    ?>
    <div class="m-section" <?php koma_theme_wrapper(__FILE__) ?>>
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-item--hed"><?= $item['title_field']['#items'][0]['value'] ?></h2>
                </div>
            </header>
        </div>

        <div class="row mm-pad-bottom">
            <!-- 1/2-->
            <div class="l-half">
                <!-- wyswyg start-->
                <div class="m-table mm-type-dark">
                    <?= $item['field_tabulka_text']['#items'][0]['value'] ?>
                </div>
                <!-- wyswyg start-->

                <div class="m-item--description">
                    <?= $item['field_basic_text']['#items'][0]['value'] ?>
                </div>
            </div>

            <!-- 1/2-->
            <div class="l-half">
                <div class="m-item--image mm-grid-gutter-bottom">
                    <img title="<?= $item['field_jeden_obrazek']['#items'][0]['title'] ?>"
                         src="<?= image_style_url('x617-fit', $item['field_jeden_obrazek']['#items'][0]['uri']) ?>"
                         alt="schema">
                </div>
                <?php
                if ($item['field_basic_img']['#items'][0]['filename'] != 'noimg.png') {
                    ?>
                    <ul class="small-block-grid-3 " data-clearing style="margin-left: -10px;">
                        <li>
                            <a href="<?= image_style_url('x323-242', $item['field_basic_img']['#items'][0]['uri']) ?>"><img
                                    title="<?= $item['field_basic_img']['#items'][0]['title'] ?>"
                                    src="<?= image_style_url('x323-242', $item['field_basic_img']['#items'][0]['uri']) ?>"></a>
                        </li>
                        <?php
                        if ($item['field_image']['#items'][0]['filename'] != 'noimg.png') {
                            ?>
                            <li>
                                <a href="<?= image_style_url('x323-242', $item['field_image']['#items'][0]['uri']) ?>"><img
                                        title="<?= $item['field_image']['#items'][0]['title'] ?>"
                                        src="<?= image_style_url('x323-242', $item['field_image']['#items'][0]['uri']) ?>"></a>
                            </li>
                            <?php
                        }
                        if ($item['field_simple_img']['#items'][0]['filename'] != 'noimg.png') {
                            ?>
                            <li>
                                <a href="<?= image_style_url('x323-242', $item['field_simple_img']['#items'][0]['uri']) ?>"><img
                                        title="<?= $item['field_simple_img']['#items'][0]['title'] ?>"
                                        src="<?= image_style_url('x323-242', $item['field_simple_img']['#items'][0]['uri']) ?>"></a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>

        </div>

    </div>
    <?php


    if ($pocet != $kolik) {
        ?>
        <div class="m-section bg-white" <?php koma_theme_wrapper(__FILE__) ?>>


            <div class="row">
                <footer class="m-section--footer">
                    <div class="l-half">
                        <ul class="m-section--nav inline">
                            <li><a href="" title="">↑ Nahoru</a></li>
                        </ul>
                    </div>
                    <div class="l-half">
                        <ul class="m-section--nav inline-right">
                            <li><a href="<?= test_basic_url() ?>prislusenstvi-a-vybaveni" title="">Exkluzivní</a>
                            </li>
                            <li><a href="<?= test_lang_prefix('node/2348') ?>">Ostatní</a></li>
                            <li><a href="<?= test_lang_prefix('node/2302') ?>">Skladové</a></li>
                            <li><a href="<?= test_lang_prefix('node/2301') ?>">Sanitární</a></li>
                            <li><a href="<?= test_lang_prefix('node/2285') ?>">| Obytné</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
    <?php } ?>
<?php } ?>