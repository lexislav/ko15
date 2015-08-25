<?php
foreach ($items AS $druhetri) {
    ?>

    <div class="l-section--item m-card_image">
        <article class="m-story">
            <header>
                <div class="m-item--image" style="background-image: url(<?= image_style_url('zadny', $druhetri['field_basic_img']['#items'][0]['uri']) ?>)">
                    <a href="<?=@ $druhetri['field_page_link']['#items'][0]['title'] ?>">
                        <img src="<?= image_style_url('zadny', $druhetri['field_basic_img']['#items'][0]['uri']) ?>" alt="" />
                    </a>
                </div>
                <div class="m-item--summary">
                    <h1 class="m-item--hed">
                        <a href="<?=@ $druhetri['field_page_link']['#items'][0]['title'] ?>"><?= $druhetri['field_basic_title']['#items'][0]['value'] ?></a>
                    </h1>

                    <div class="m-item--description ellipsis"></div>
                </div>
            </header>
            <div class="m-card--more"><a href="<?= @$druhetri['field_page_link']['#items'][0]['title'] ?>"> &rarr;</a></div>
        </article>
    </div>
<?php
}
?>