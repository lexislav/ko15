<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="row">
        <header class="m-section--header">

        </header>
    </div>

    <article class="m-reference">
        <header>
          <div class="m-reference--image" style="background-image: url(<?= image_style_url('x618-480', $node->field_simple_img['und'][0]['uri']) ?>)">
            <a href=""><img src="<?= image_style_url('x618-480', $node->field_simple_img['und'][0]['uri']) ?>" alt="" /></a>
          </div>
 <?php global $language?>
          <?=$node->body[$language->language][0]['value']?>
        </header>


    </article>
    <div class="row">
        <footer class="m-section--footer">

        </footer>
    </div>
</div>

