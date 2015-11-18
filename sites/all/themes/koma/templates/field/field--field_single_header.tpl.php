<?php
if($items[0]['field_basic_img']['#items'][0]['uri']==''){
    $file = file_load($items[0]['field_basic_img']['#items'][0]['fid']);
    $uri = ($file->uri);
}else{
    $uri = $items[0]['field_basic_img']['#items'][0]['uri'];
}
?>
<figure class="m-basic-page--image" style="background-image: url(<?= image_style_url('none', $uri) ?>)" <?php koma_theme_wrapper(__FILE__)?>>
     <img src="<?= image_style_url('none', $uri) ?>" alt="" />
    <figcaption>
        <?=$items[0]['field_basic_text']['#items'][0]['value']?>
    </figcaption>
</figure>
