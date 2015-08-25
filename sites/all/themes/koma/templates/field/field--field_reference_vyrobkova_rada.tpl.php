<!--field--field_reference_vyrobkova_rada.tpl.php-->
<div class="m-section l-feed_block-carousel">

    <header class="m-section--header"></header>

    <div class="m-section--underlay"></div>

    <div class="row rowfix">
        <div class="l-section--content slider block-feed-slider">
            <?php
            $block = module_invoke('views', 'block_view', 'segmentreference-block');
            print render($block);
            ?>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href=""><?php print t('WHOLE ARCHIVES') ?> &rarr;</a></div>
            </div>
        </footer>
    </div>

</div>
<!--field--field_reference_vyrobkova_rada.tpl.php-->