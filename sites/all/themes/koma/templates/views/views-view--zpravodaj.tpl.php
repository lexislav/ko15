<!--views-view--zpravodaj.tpl.php-->

<div class="m-section l-feed_two">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><?php print t('Zpravodaj')?></h2>
            </div>
        </header>
    </div>


    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <?php print $title; ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($header): ?>
        <div class="view-header">
            <?php print $header; ?>
        </div>
    <?php endif; ?>

    <?php if ($exposed): ?>
        <div class="m-filter">
            <div class="l-grid">
                <?php print $exposed; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($attachment_before): ?>
        <div class="attachment attachment-before">
            <?php print $attachment_before; ?>
        </div>
    <?php endif; ?>

    <?php if ($rows): ?>
        <div class="row">
            <?php print $rows; ?>
        </div>
    <?php elseif ($empty): ?>
        <div class="view-empty">
            <?php print $empty; ?>
        </div>
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
<div class="m-section bg-white">
    <div class="row">

        <footer class="m-section--footer">
            <div class="l-left">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-center">&nbsp;
                <?php if ($pager):
                    $pager = str_replace('class="item-list"', 'class="m-pagination"', $pager);
                    $pager = str_replace('class="pager"', 'class="m-pagination--container"', $pager);
                    $pager = str_replace('pager-current', 'current', $pager);
                    $pager = str_replace('pager-next', 'pager-next arrow', $pager);
                    ?>
                    <?php print $pager; ?>
                <?php endif; ?>

            </div>
            <div class="l-right">
                <div class="m-section--more"><a href="http://<?=explode('?',$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])[0]?>"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a></div>
            </div>
        </footer>

    </div>
</div>
<!--views-view--zpravodaj.tpl.php-->