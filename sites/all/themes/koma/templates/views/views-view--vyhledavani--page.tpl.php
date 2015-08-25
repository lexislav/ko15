<div class="m-section bg-white">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h1 class="m-section--hed mm-big mm-tiny mm-left"><?php print t('SEARCH ENGINE') ?></h1>
            </div>
        </header>
    </div>

    <?php

    if ($exposed): ?>
        <div class="row">

            <div class="l-full">
                <div class="m-filter m-search--filters">
                    <?php print $exposed; ?>
                </div>
            </div>

        </div>
    <?php endif;

    ?>

    <?php if ($rows){ ?>
        <div class="row">
            <div class="l-full">
                <h2 class="m-search--hed"><?php print t('search results') ?>: <?=$view->exposed_raw_input['keys']?></h2>
            </div>

            <div class="m-search--results l-feed_list">
                <?php print $rows; ?>
            </div>
        </div>

    <?php }

    if(@$view->total_rows==0 AND (strlen(@$view->exposed_raw_input['keys'])>0)){ ?>
        <div class="row">
            <div class="l-single">
                <div class="m-search--noresults">
                    <h2 class="m-search--hed"><?php print t('The search has yielded no result.') ?></h2>

                    <div class="m-search--description">
                        <p><?php print t('Check if the spelling is correct. Remove quotation marks. The search query Benefits of modular construction will yield more results than "benefits of modular construction". If you extend your inquiry with the logical conjunction "OR", for example -module OR container-, you will get more results than for the search query -module container-.') ?> </p>

                        <?php print $empty; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-left">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-center">
                <?php if ($pager):
                    $pager = str_replace('class="item-list"', 'class="m-pagination"', $pager);
                    $pager = str_replace('class="pager"', 'class="m-pagination--container"', $pager);
                    $pager = str_replace('pager-current', 'current', $pager);
                    $pager = str_replace('pager-next', 'pager-next arrow', $pager);
                    ?>
                    <?php print $pager; ?>
                <?php endif; ?>
            </div>
            <div class="l-right"></div>
        </footer>
    </div>

</div>
