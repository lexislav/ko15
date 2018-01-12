<div class="m-basic-page--accordeon" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="">
      <?php
      foreach ($items AS $poradi => $pole) {

          ?>
          <div class="accordeon-items">
              <div class="accordeon-item-header">
                  <h3><?=$pole['field_basic_title']['#items'][0]['value']?></h3>
              </div>
              <div class="accordeon-item-body">
                  <p><?=$pole['field_basic_text']['#items'][0]['value']?></p>
              </div>
          </div>
      <?php } ?>


    </div>
</div>