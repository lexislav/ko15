<?php

if (isset($row->field_field_reference_main_img[0])) {
    $uricko = $row->field_field_reference_main_img[0]['raw']['uri'];
} else {
    $uricko = $row->field_field_reference_fotogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
}
$image_uri      = $uricko;
$style          = 'x618-480';
$derivative_uri = image_style_path($style, $image_uri);
$success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
$newimgurl  = file_create_url($derivative_uri);
if(count($view->result)>1){
    $celkem = (count($view->result));
    $cislo = $view->row_index + 1;



    $coco = 'l-single';
    if ($cislo == 1 OR $cislo == 6 OR $cislo == 7 OR $cislo == 12 OR $cislo == 13 OR $cislo == 18) {
        $coco = 'l-double';
    }

    if ($cislo == 1 OR $cislo == 4 OR $cislo == 7 OR $cislo == 10  OR $cislo == 13 OR $cislo == 16 ) {
        echo ' <div class="blok-feed-slide">';
    }
    ?>
    <div class="m-card_thumb  mm-has-hover <?= $coco ?> celkem_<?=$celkem?> cislo_<?=$cislo?>">
        <article class="m-story">
            <header>
                <div class="m-item--image" style="background-image: url(<?= $newimgurl ?>)">
                    <a href="<?= test_lang_prefix('node/'.$row->nid) ?>">
                        <img src="<?= $newimgurl ?>" alt=""/>
                    </a>
                </div>
                <div class="m-item--summary">
                    <h1 class="m-item--hed">
                        <?= $row->_field_data['nid']['entity']->title ?>
                    </h1>

                    <div class="m-item--description">
                        <p></p>
                    </div>
                </div>
                <div class="m-card--more">&rarr;</div>
            </header>
        </article>
    </div>
    <?php
    if ($cislo == 3 OR $cislo == 6 OR $cislo == 9 OR $cislo == 12  OR $cislo == 15 OR $cislo == 18 ) {
        echo '</div>';
    } else if(intval($celkem) ==  intval($cislo)){
        echo '</div>';
    }
}else{
         echo ' <div class="blok-feed-slide">';

    ?>
    <div class="m-card_thumb  mm-has-hover l-double">
        <article class="m-story">
            <header>
                <div class="m-item--image" style="background-image: url(<?= $newimgurl ?>)">
                    <a href="<?= test_lang_prefix('node/'.$row->nid) ?>">
                        <img src="<?= $newimgurl ?>" alt=""/>
                    </a>
                </div>
                <div class="m-item--summary">
                    <h1 class="m-item--hed">
                        <?= $row->_field_data['nid']['entity']->title ?>
                    </h1>

                    <div class="m-item--description">
                        <p></p>
                    </div>
                </div>
                <div class="m-card--more">&rarr;</div>
            </header>
        </article>
    </div>
 <?php
        echo '</div>';

}
