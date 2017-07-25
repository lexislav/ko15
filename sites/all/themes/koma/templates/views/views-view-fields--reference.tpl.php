<?php
// @TODO zkontrolovat kategorie a tenhle seznam
$poleprobarvy = array(
    107 => 1,
    92 => 2,
    102 => 3,
    104 => 4,
    105 => 5,
    103 => 6,
    106 => 7,
    108 => 8,
    109 => 8,
    111 => 9,
    110 => 10,
    114 => 10
);
if (isset($row->field_field_reference_main_img[0])) {
    $uricko = $row->field_field_reference_main_img[0]['raw']['uri'];
} else {
    $uricko = $row->field_field_reference_fotogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
}
$image_uri      = $uricko;
$style          = 'x595-0';
$derivative_uri = image_style_path($style, $image_uri);
$success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
$newimgurl  = file_create_url($derivative_uri);
?>
<div
    class="m-card_vertical mm-color-<?= $poleprobarvy[$row->field_field_reference_kategorie_stavby[0]['raw']['tid']] ?> l-single">
    <article class="m-story">
        <header>
            <div class="m-item--image" style="background-image: url(<?= $newimgurl ?>)">
                <a href="<?= test_lang_prefix('node/'.$row->nid) ?>">
                    <img src="<?= $newimgurl ?>" alt=""/>
                </a>
            </div>
            <div class="m-item--summary">
                <h1 class="m-item--hed">
                    <a href="<?= test_lang_prefix('node/'.$row->nid) ?>"><?= $row->_field_data['nid']['entity']->title ?></a>
                </h1>

                <div class="m-item--meta">
                    <span><?= $row->field_field_reference_kategorie_stavby[0]['rendered']['#markup'] ?> / </span>
                    <span class="colored"><?= $row->field_field_reference_rok[0]['rendered']['#markup'] ?></span>
                </div>
            </div>
        </header>
    </article>
    <div class="m-card--more"><a title="<?= $row->_field_data['nid']['entity']->title ?>" href="<?= test_lang_prefix('node/'.$row->nid) ?>">&rarr;</a></div>
</div>
