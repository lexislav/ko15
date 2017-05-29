<!--views-view--publicita--block.tpl.php-->
<div class="m-section l-feed_three bg-white">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">

            </div>
        </header>
    </div>
    <div class="row">

      <?php print render($title_prefix); ?>

      <?php print render($title_suffix); ?>
      <?php if ($header): ?>
          <div class="view-header">
            <?php print $header; ?>
          </div>
      <?php endif; ?>

      <?php if ($exposed): ?>
          <div class="view-filters">
            <?php print $exposed; ?>
          </div>
      <?php endif; ?>

      <?php if ($attachment_before): ?>
          <div class="attachment attachment-before">
            <?php print $attachment_before; ?>
          </div>
      <?php endif; ?>

      <?php if ($rows): ?>

        <?php

        //dsm($rows);

        print $rows; ?>

      <?php elseif ($empty): ?>
          <div class="view-empty">
            <?php print $empty; ?>
          </div>
      <?php endif; ?>

      <?php if ($pager): ?>
        <?php print $pager; ?>
      <?php endif; ?>

      <?php if ($attachment_after): ?>
          <div class="attachment attachment-after">
            <?php print $attachment_after; ?>
          </div>
      <?php endif; ?>

      <?php if ($more): ?>
        <?php print $more; ?>
      <?php endif; ?>

      <?php if ($footer): ?>
          <div class="view-footer">
            <?php print $footer; ?>
          </div>
      <?php endif; ?>

      <?php if ($feed_icon): ?>
          <div class="feed-icon">
            <?php print $feed_icon; ?>
          </div>
      <?php endif; ?>

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
