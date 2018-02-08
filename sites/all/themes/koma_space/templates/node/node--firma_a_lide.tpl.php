<?php
//
//dsm($node);
//dsm($content);
//
//?>

<article <?php koma_theme_wrapper(__FILE__)?>>

    <div class="m-section l-feed_carousel bg-secondary-light">
        <div class="row">
            <header class="m-section--header">
                <div class="l-half">
                    <h1 class="m-basic-page--hed"><?php print t('THE COMPANY') ?> <span class="color-primary">& <?php print t('PEOPLE') ?></span></h1>
                </div>
            </header>
        </div>

       </div>

    <!-- sekce se 4 kartami-->
    <div class="m-section l-feed_four bg-secondary-light">

        <?php
        if (isset($content['field_img_text_text'][0])) {

//            $content['field_img_text_text'][0]['myclass'] = "mm-promo";

            // @todo: potrebuji pridat do tehle sablony classu, tak aby to neovlivnilo jina zobrazeni
            print render($content['field_img_text_text']);
        }
        ?>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>

</article>




<div class="m-section l-feed_four bg-white" id="produktreihen">
  <div class="row">
    <header class="m-section--header">

      <div class="l-third">
        <h2 class="mm-small color-primary"><?php print t('PRODUCT SERIES') ?></h2>
      </div>
      <div class="l-two-thirds">
      </div>
    </header>
  </div>

  <?php
  if (isset($content['field_produktove_rady'][0])) {
    print render($content['field_produktove_rady']);
  }
  ?>

  <div class="row">
    <footer class="m-section--footer">
      <div class="l-half">

        <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>

      </div>
      <div class="l-half">
      </div>
    </footer>
  </div>
</div>




<?php
if (isset($content['field_bigimg_a_text'][0])) {
  print render($content['field_bigimg_a_text']);
}
?>




<div class="m-section l-feed_three bg-white" id="ke-stazeni" <?php koma_theme_wrapper(__FILE__)?>>

  <div class="row">
    <header class="m-section--header">
      <div class="l-full">
        <h2 class="m-section--hed mm-big "><?php print t('For download') ?></h2>
      </div>
    </header>
  </div>
  <div class="row">
    <div class="l-single">
      <?php

      $dnode = node_load(2499);


      $field_brozury = field_view_field('node', $dnode, 'field_brozury');
      $field_specifikace = field_view_field('node', $dnode, 'field_specifikace');
      $field_ceniky = field_view_field('node', $dnode, 'field_ceniky');



      print render($field_brozury);
      ?>
    </div>
    <div class="l-single">
      <?php
      print render($field_specifikace);
      ?>
    </div>
    <div class="l-single">
      <?php
      print render($field_ceniky);
      ?>
    </div>
  </div>
  <div class="row">
    <footer class="m-section--footer">
      <div class="l-half">

        <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>

      </div>
      <div class="l-half">
      </div>
    </footer>
  </div>
</div>



