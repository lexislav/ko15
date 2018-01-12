<?php
foreach ($items AS $druhetri) {
  if(  isset($druhetri['field_basic_img']['#items'][0]['uri'])   AND ($druhetri['field_basic_img']['#items'][0]['uri']=='')){
    $file = file_load($druhetri['field_basic_img']['#items'][0]['fid']);
    $uri = ($file->uri);
  }else{
    $uri = $druhetri['field_basic_img']['#items'][0]['uri'];
  }

  $image_uri      = $uri;
  $style          = 'zadny';
  $derivative_uri = image_style_path($style, $image_uri);
  $success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
  $new_image_url  = file_create_url($derivative_uri);




    ?>

    <div class="l-section--item m-card_image" <?php koma_theme_wrapper(__FILE__)?>>
        <article class="m-story">
            <header>
                <div class="m-item--image" style="background-image: url(<?= $new_image_url?>)">
                    <a href="<?=@ $druhetri['field_page_link']['#items'][0]['title'] ?>">
                        <img src="<?= $new_image_url ?>" alt="" />
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
