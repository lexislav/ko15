<div id="produktove-rady">

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

        <div class="m-basic-page--content">
            <?php
            print render($content);
            ?>
        </div>
    </div>
</div>

