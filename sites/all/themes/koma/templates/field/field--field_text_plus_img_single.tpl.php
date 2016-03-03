<!--field--field_text_plus_img_single.tpl.php-->
<?php


foreach($items AS $item) {

  if($item['field_basic_img']['#items'][0]['uri']==''){
    $file = file_load($item['field_basic_img']['#items'][0]['fid']);
    $uri = ($file->uri);
  }else{
    $uri = $item['field_basic_img']['#items'][0]['uri'];
  }


    ?>

    <div class="m-section l-feed_one bg-white" <?php koma_theme_wrapper(__FILE__)?>>

        <header class="m-section--header"></header>

        <div class="row rowfix">
            <div class="m-card_bigteaser l-single bg-secondary-light">

                <article class="m-story">
                    <header>
                        <div class="m-item--image"
                             style="background-image: url(<?= image_style_url('x633-540', $uri) ?>)">
                            <a href=""><img
                                    src="<?= image_style_url('x633-540', $uri) ?>"
                                    alt=""/></a>
                        </div>

                        <div class="m-item--summary">
                            <h1 class="m-item--hed"><a
                                    href=""><?= $item['field_basic_title']['#items'][0]['value'] ?></a></h1>

                            <div
                                class="m-item--description"><?= $item['field_basic_text']['#items'][0]['value'] ?></div>

                            <?php
                            //@TODO: tady se parsuje barevny kod a beru z nej jen cislo, zde by se měla používat classa bg-cisloBarvy, nikoli color-CisloBarvy
                            $barva = explode("-", $item['field_barva_odkazu']['#items'][0]['value']);
                            $barvaClass = 'bg-' . $barva[1];
                            ?>

                            <div class="m-card--more <?php echo $barvaClass; ?>">
                                <a href="<?= test_lang_prefix($item['field_page_link']['#items'][0]['url']) ?>"
                                   title="<?= $item['field_page_link']['#items'][0]['title'] ?>"><?= $item['field_page_link']['#items'][0]['title'] ?></a>
                            </div>
                        </div>
                    </header>
                </article>

            </div>
        </div>

        <footer class="m-section--footer"></footer>

    </div>
    <?php
}?>
<!--end: field--field_text_plus_img_single.tpl.php-->
