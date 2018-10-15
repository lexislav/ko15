<?php if (empty($title)): ?>
  <?php $title = $view->get_title(); ?>
<?php endif; ?>
<div class="m-section <?= $trida ?>">

    <header class="m-section--header">
      <div class="row ">
        <div class="l-full">

          <nav class="breadcrumbs">
              <a href="/">Domů</a><a href="/kontakt">Kontakt</a><a href="/kontakt/telefonni-seznam">Telefonní seznam firmy</a>
              <?php
                foreach (drupal_get_breadcrumb() AS $drobek) {
                  echo $drobek;
                }
                ?>
          </nav>

        </div>
      </div>

      <div class="row">
      
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><?php print t($title); ?></h2>
            </div>
      
      </div>
    </header>

  </div>


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
        <div class="m-section bg-white">
          <div class="row">
          <?php print $rows; ?>
          </div>
        </div>
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
</div><?php /* class view */ ?>


</div>

