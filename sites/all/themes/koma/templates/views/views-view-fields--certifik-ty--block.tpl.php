<?php
$uricko = $row->field_field_cert_logo[0]['raw']['uri'];
$image_uri      = $uricko;
$style          = 'x130';
$derivative_uri = image_style_path($style, $image_uri);
$success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
$newimgurl  = file_create_url($derivative_uri);
?>
<div class="m-card_certificate l-single">
    <article class="m-story">
        <header>
            <div class="m-item--image" style="background-image: url(<?= $newimgurl ?>)">
                <a href="<?= test_lang_prefix('node/'.$row->nid)?>">
                    <img src="<?= $newimgurl ?>" alt=""/>
                </a>
            </div>
            <div class="m-item--summary">
                <h1 class="m-item--hed">
                    <a href="<?= test_lang_prefix('node/'.$row->nid)?>"><?= $row->_field_data['nid']['entity']->title ?></a>

                </h1>

                <div class="m-item--description"><?= $fields['field_cert_popis']->content ?></div>
            </div>
        </header>
    </article>
</div>