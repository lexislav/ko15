<article <?php koma_theme_wrapper(__FILE__) ?>>
  <?php




  $poradi = 0;
  foreach ($content['field_rental_stranka']['#items'] as $item) {


    if($item['field_simple_img']['und'][0]['uri']==''){
      $file = file_load($item['field_simple_img']['und'][0]['fid']);
      $uri = ($file->uri);
    }else{
      $uri = $item['field_simple_img']['und'][0]['uri'];
    }
    if ($poradi % 2 == 0) {
      ?>
      <!-- obrazek vlevo-->
      <div class="m-section l-section_half-page" <?php koma_theme_wrapper(__FILE__)?>>
        <!-- left-->
        <div class="l-half-wide mm-left mm-has-background" style="background-image: url('<?= image_style_url('none', $uri) ?>');">
          <div class="l-content-wrap">
            <div class="l-content">
              <!-- obsah levé-->
            </div>
          </div>
        </div>
        <!-- right-->
        <div class="l-half-wide mm-right bg-secondary">
          <div class="l-content-wrap">
            <div class="l-content">
              <!-- obsah pravé-->

              <div class="m-card_half-block">
                <h2 class="m-item--hed mm-big"><a href="<?=$item['field_page_link']['und'][0]['display_url']?>" title="<?=$item['title_field']['und'][0]['value']?>"><?=$item['title_field']['und'][0]['value']?></a></h2>
                <div class="m-item--content">
                  <p><?=$item['field_basic_popis_2']['und'][0]['value']?></p>
                </div>
                <div class="m-item--meta">
                  <a href="<?=$item['field_page_link']['und'][0]['display_url']?>" title="<?=$item['title_field']['und'][0]['value']?>"><div class="button primary"><?=$item['field_page_link']['und'][0]['title']?> →</div></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <?php
    }
    else {
      ?>
      <!-- obrazek vpravo-->
      <div class="m-section l-section_half-page">
        <!-- left-->
        <div class="l-half-wide mm-left bg-white">
          <div class="l-content-wrap">
            <div class="l-content">
              <!-- obsah pravé-->

              <div class="m-card_half-block">
                <h2 class="m-item--hed mm-big"><a href="<?=$item['field_page_link']['und'][0]['display_url']?>" title=""><?=$item['title_field']['und'][0]['value']?></a></h2>

                <div class="m-item--content">
                  <p><?=$item['field_basic_popis_2']['und'][0]['value']?></p>
                </div>
                <div class="m-item--meta">
                  <a href="<?=$item['field_page_link']['und'][0]['display_url']?>" title="<?=$item['title_field']['und'][0]['value']?>"><div class="button primary"><?=$item['field_page_link']['und'][0]['title']?> →</div></a>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- right-->
        <div class="l-half-wide mm-right mm-has-background" style="background-image: url('<?= image_style_url('none', $uri) ?>');">
          <div class="l-content-wrap">
            <div class="l-content">
              <!-- obsah levé-->
            </div>
          </div>
        </div>
      </div>

      <?php
    }
    $poradi++;

  }

  ?>


  <div class="m-section l-feed_three bg-white" id="downloads" <?php koma_theme_wrapper(__FILE__)?>>

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
        if (isset($content['field_brozury'][0])) {
          print render($content['field_brozury']);
        }
        ?>
      </div>
      <div class="l-single">
        <?php
        if (isset($content['field_specifikace'][0])) {
          print render($content['field_specifikace']);
        }
        ?>
      </div>
      <div class="l-single">
        <?php
        if (isset($content['field_ceniky'][0])) {
          print render($content['field_ceniky']);
        }
        ?>
      </div>
    </div>

  </div>
  <div class="m-section l-feed_three" id="service">
    <div class="row">

    </div>
  </div>

<div class="m-section l-feed_three bg-white">
  <div class="row">
    <footer class="m-section--footer">
      <div class="l-half">
        <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
      </div>
      <div class="l-half">
        <div class="m-section--more">
<!--          <a href="#slusby">--><?php //print t('WHOLE ARCHIVES') ?><!-- &rarr;</a>-->
<!--          <a href="#faq">--><?php //print t('WHOLE ARCHIVES') ?><!-- &rarr;</a>-->
        </div>
      </div>
    </footer>
  </div>
</div>






  <?php
  //  if (isset($content['field_reference_stranka_segment'][0])) {
  //    print render($content['field_reference_stranka_segment']);
  //  }


  if (isset($content['field_sluzby2'][0])) {
    print render($content['field_sluzby2']);
  }
?>
  <div id="faq"></div>
  <?php
  if (isset($content['field_segment_faq'][0])) {
    print render($content['field_segment_faq']);
  }
  ?>


</article>

