<div id="produktove-rady" <?php koma_theme_wrapper(__FILE__)?>>






  <div class="m-section l-feed_four">
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h1 class="m-basic-page--hed mm-big mm-pad-bottom"><?= $title ?></h1>
                </div>
                <div class="l-third"></div>
                <div class="l-two-thirds"></div>
            </header>
        </div>




    </div>


  <?php
  if (isset($content['field_reference_slider'][0])) {
    print render($content['field_reference_slider']);
  }
  ?>





  <?php
  if (isset($content['field_double_image_card'][0])) {
    $content['field_double_image_card'][0]['myclass'] = "bg-white";
    print render($content['field_double_image_card']);
  }
  ?>



  <?php
  if (isset($content['field_or_odkazy'][0])) {
    $content['field_or_odkazy'][0]['myclass'] = "bg-white";
    print render($content['field_or_odkazy']);
  }
  ?>




</div> 