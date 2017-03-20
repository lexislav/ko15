<?php
$modificatiorClass = '';
if (isset($items[0]['myclass'])) $modificatiorClass = $items[0]['myclass'];
?>
<div class="m-section l-feed_two <?=$modificatiorClass ?>" theme-wrapper="_double-image-card.tpl.php" >



  <!-- section header-->
  <div class="row">
    <header class="m-section--header">
      <div class="l-full"></div>
    </header>
  </div>

  <div class="row rowfix">


    <div class="m-card_image l-single">
      <article class="m-story">
        <header>
          <div class="m-item--image" style="background-image: url(<?= image_style_url('x617-fit', $items[0]['field_jeden_obrazek']['#items'][0]['uri']) ?>)">
            <a href="<?=$items[0]['field_page_link']['#items'][0]['display_url']?>">
              <img src="<?= image_style_url('x617-fit', $items[0]['field_jeden_obrazek']['#items'][0]['uri']) ?>" alt="">
            </a>
          </div>
          <div class="m-item--summary">
            <h1 class="m-item--hed">
              <a href="<?=$items[0]['field_page_link']['#items'][0]['display_url']?>"><?=$items[0]['field_basic_title']['#items'][0]['value']?></a>
            </h1>
          </div>
        </header>
        <div class="m-card--more">→ </div>
      </article>
    </div>


    <div class="m-card_image l-single">
      <article class="m-story">
        <header>
          <div class="m-item--image" style="background-image: url(<?= image_style_url('x617-fit', $items[1]['field_jeden_obrazek']['#items'][0]['uri']) ?>)">
            <a href="<?=$items[1]['field_page_link']['#items'][0]['display_url']?>">
              <img src="<?= image_style_url('x617-fit', $items[1]['field_jeden_obrazek']['#items'][0]['uri']) ?>" alt="">
            </a>
          </div>
          <div class="m-item--summary">
            <h1 class="m-item--hed">
              <a href="<?=$items[1]['field_page_link']['#items'][0]['display_url']?>"><?=$items[1]['field_basic_title']['#items'][0]['value']?></a>
            </h1>
          </div>
        </header>
        <div class="m-card--more">→ </div>
      </article>
    </div>

  </div>

  <!-- section footer -->
  <div class="row">
    <footer class="m-section--footer">
      <div class="l-half"></div>
      <div class="l-half"></div>
    </footer>
  </div>
</div>