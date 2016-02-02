<?php
if (isset($row->field_field_zpravodaj_main_img[0])) {
    $uricko = $row->field_field_zpravodaj_main_img[0]['raw']['uri'];
    $text = $fields['field_zpravodaj_perex']->content;
} elseif(isset($row->field_field_zpravodaj_foogalerie)) {
    $uricko = $row->field_field_zpravodaj_foogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
    $text = $fields['field_zpravodaj_perex']->content;
    $prislusenstvi = 1;
} elseif(isset($row->field_field_basic_img[0]['raw']['uri'])) {
    $uricko = $row->field_field_basic_img[0]['raw']['uri'];
    $text = $fields['field_basic_text']->content;

}
?>
<article class="m-story">
    <header>
        <div class="m-item--image" style="background-image: url(<?= image_style_url('x595-0', $uricko) ?>)">
            <a href="<?= test_lang_prefix('node/'.$row->nid) ?>">
                <img src="<?= image_style_url('x595-0', $uricko) ?>" alt=""/>
            </a>
        </div>
        <div class="m-item--summary">
            <h1 class="m-item--hed">
                <a href="<?= test_lang_prefix('node/'.$row->nid) ?>"><?= $row->_field_data['nid']['entity']->title ?></a>
            </h1>

            <div class="m-item--description">
                <p><?= $text ?>
                    <br />
                    <a href="<?= test_lang_prefix('node/'.$row->nid) ?>">&rarr;</a></p>
            </div>
            <?php if(isset($prislusenstvi)){?>
            <div class="m-item--meta">
                <span><?= $row->field_field_zpravodaj_kategorie[0]['rendered']['#markup'] ?> /</span> <span
                    class="colored"><?= $row->field_field_zpravodaj_publikace[0]['rendered']['#markup'] ?></span>
            </div>
            <?php } ?>
        </div>
    </header>
</article>
