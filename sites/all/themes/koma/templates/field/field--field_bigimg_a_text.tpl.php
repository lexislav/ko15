

<div class="m-section l-feed_one bg-secondary-light mm-has-background"
     style="background-image: url('<?= image_style_url('none', $items[0]['field_basic_img']['#items'][0]['uri']) ?>')" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <div class="row rowfix">
        <div class="m-card_centered-text l-single bg-secondary-light">

            <article class="m-story">
                <header class="m-item--header">
                    <div class="m-item--hed color-white"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></div>
                    <div class="m-item--summary">
                        <div class="m-item--description color-white mm-bold">
                            <?= $items[0]['field_basic_text']['#items'][0]['value'] ?>
                        </div>
                </header>
            </article>

            <div class="m-card--more ">
                <a class="button" href="<?= test_lang_prefix($items[0]['field_page_link']['#items'][0]['url']) ?>"><?= $items[0]['field_page_link']['#items'][0]['title'] ?> →</a>
            </div>

        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>

</div>
