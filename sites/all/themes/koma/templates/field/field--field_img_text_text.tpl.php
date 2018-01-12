<!--<div class="m-section l-feed_--><? //= (count($items) == 3) ? 'triple-card' : 'four' ?><!--">-->

<div class="row rowfix" <?php koma_theme_wrapper(__FILE__)?>>
    <?php
    $modificatiorClass = '';
    if (isset($items[0]['myclass'])) $modificatiorClass = $items[0]['myclass'];
    ?>

    <?php

    foreach ($items AS $cast) {

      if($cast['field_basic_img']['#items'][0]['uri']==''){
        $file = file_load($cast['field_basic_img']['#items'][0]['fid']);
        $uri = ($file->uri);
      }else{
        $uri = $cast['field_basic_img']['#items'][0]['uri'];
      }

      ?>

        <div class="m-card_standard <?php echo $modificatiorClass; ?> l-single">

            <article class="m-story">
                <header>
                    <a href="<?= $cast['field_page_link']['#items'][0]['display_url'] ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>" style="display: block; height: 100%;">
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('none', $uri) ?>)">
                            <a href="<?= ($cast['field_page_link']['#items'][0]['display_url']) ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>">
                                <img src="<?= image_style_url('none', $uri) ?>" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= ($cast['field_page_link']['#items'][0]['display_url']) ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>"><?= $cast['field_basic_title']['#items'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p><?= @$cast['field_basic_text']['#items'][0]['value'] ?></p>
                            </div>
                        </div>
                    </a>
                </header>
            </article>
            <div class="m-card--more">
                <a href="<?= ($cast['field_page_link']['#items'][0]['display_url']) ?>" title="<?= $cast['field_basic_title']['#items'][0]['value'] ?>">&rarr;</a>
            </div>
        </div>
    <?php } ?>

</div>

<!--</div>-->
