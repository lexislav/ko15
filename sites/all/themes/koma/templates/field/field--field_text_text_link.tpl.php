<div class="m-section l-feed_two bg-secondary-light" <?php koma_theme_wrapper(__FILE__)?>>

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></h2>
    </header>

    <div class="row rowfix">
        <?php
        foreach ($items AS $poradi => $pole) {
            if ($poradi == 0) continue;
            ?>
            <div class="m-card_centered-text l-single bg-secondary-light">

                <article class="m-story">
                    <header>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed"><a href="<?= $pole['field_page_link']['#items'][0]['url'] ?>"><?= $pole['field_basic_title']['#items'][0]['value'] ?></a></h1>

                            <div class="m-item--description">
                                <?= $pole['field_basic_text']['#items'][0]['value'] ?>
                            </div>
                        </div>
                    </header>

                    <footer class="m-item--footer"><!-- dummy gallery--></footer>
                </article>

            </div>

        <?php } ?>
    </div>

    <footer class="m-section--footer"></footer>
</div>



