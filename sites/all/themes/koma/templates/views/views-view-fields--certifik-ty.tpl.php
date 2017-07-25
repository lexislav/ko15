<?php
if (isset($row->_field_data['nid']['entity']->field_cert_nahled[test_lang_code()][0])) {
    $uricko = $row->_field_data['nid']['entity']->field_cert_nahled[test_lang_code()][0]['uri'];
} else {
    $uricko = $row->_field_data['nid']['entity']->field_field_cert_cert[0]['rendered']['#preview'];
}
$image_uri      = $uricko;
$style          = 'x595-0';
$derivative_uri = image_style_path($style, $image_uri);
$success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
$newimgurl  = file_create_url($derivative_uri);
?>
<article class="m-story">
    <header>
        <div class="m-item--image mm-preview-fit" style="background-image: url(<?= $newimgurl ?>)">
            <a href="<?=test_lang_prefix('node/'.$row->nid)?>">
                <img src="<?= $newimgurl ?>" alt=""/>
            </a>
        </div>
        <div class="m-item--summary">
            <h1 class="m-item--hed"><a href="<?=test_lang_prefix('node/'.$row->nid)?>">
                <?= $row->_field_data['nid']['entity']->title ?></a>
            </h1>

            <div class="m-item--description">
                <p><?= $fields['field_cert_popis']->content ?></p>
                <a href="<?=test_lang_prefix('node/'.$row->nid)?>">&rarr;</a>
            </div>
            <div class="m-item--meta">
                <span><?= $row->field_field_cert_kategorie[0]['rendered']['#markup'] ?>
            </div>
        </div>
    </header>
</article>
