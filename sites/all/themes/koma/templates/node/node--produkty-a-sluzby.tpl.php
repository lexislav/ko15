<?php
//
//dsm($node);
//dsm($content);
//
//?>
<article id="produktove-rady" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-section l-feed_four">
        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h1 class="m-basic-page--hed mm-big mm-pad-bottom"><?php print t('PRODUCTS') ?> <span class="color-primary"><?php print t('AND SERVICES') ?></span></h1>
                </div>
                <div class="l-third">
                    <h2 class="mm-small color-primary"><?php print t('PRODUCT SERIES') ?></h2>
                </div>
                <div class="l-two-thirds">
                </div>
            </header>
        </div>

        <?php
        if (isset($content['field_produktove_rady'][0])) {
            print render($content['field_produktove_rady']);
        }
        ?>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>


</article>

<div class="kotva" id="doplnkove-produkty"></div>
<?php
if (isset($content['field_bigimg_a_text'][0])) {
    print render($content['field_bigimg_a_text']);
}
?>


<div class="m-section l-feed_two bg-white" <?php koma_theme_wrapper(__FILE__)?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><span class="color-primary"><?php print t('CURRENT') ?></span> <?php print t('OFFER') ?></h2>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-single">
            <aside>
                <div class="m-aside-block bg-secondary-light mm-pad">
                    <header class="m-aside-block--header">
                        <h3 class="m-aside-block--hed">
                            <?php print t('SECOND-HAND SHOP') ?> </h3>
                    </header>
                    <?php
                    $block = module_invoke('views', 'block_view', 'nabidka-block');
                    print render($block);
                    ?>
                </div>
            </aside>


            <!--
            @todo: rez: davas tam kod z detailu stránky, ktery tam nema co dělat
            ten blok by měl generovat pouze tabulku s daty
            vnitřek tohoto bloku by měl vypada následně:

            <div class="m-reference--meta m-properties">
                <dl class="mm-nolabels mm-noborder">
                <dt>Modulární prodejna</dt>
                <dd><a href="nabidka/modularni-prodejna" title="Modulární prodejna">
                <i class="fa fa-file-pdf-o"></i> Modulární prodejna</a></dd>
                </dl>
            </div>

            nic víc žádné aside, žádné basic page atd...

            -->

        </div>

        <div class="l-single">
            <aside>
                <div class="m-aside-block bg-secondary-light mm-pad">
                    <header class="m-aside-block--header">
                        <h3 class="m-aside-block--hed">
                            <?php print t('MODULES READY FOR SALE') ?> </h3>
                    </header>
                    <?php
                    $block = module_invoke('views', 'block_view', 'nabidka-block_1');
                    print render($block);
                    ?>
                </div>
            </aside>
        </div>
    </div>
</div>

<?php
if (isset($content['field_sluzby2'][0])) {
    print render($content['field_sluzby2']);
}
if (isset($content['field_segment_faq'][0])) {
    print render($content['field_segment_faq']);
}
?>
<div id="modularni-vystavba" class="m-section l-feed_four" style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')" <?php koma_theme_wrapper(__FILE__)?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top"><?php print t('WE ARE A LEADING CZECH MANUFACTURER OF') ?>
                    <br /><span class="color-primary"><?php print t('MODULAR STRUCTURES') ?></span></h2>
            </div>
        </header>
    </div>
    <?php
    if (isset($content['field_img_text_text'][0])) {
        print render($content['field_img_text_text']);
    }
    ?>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half"></div>
        </footer>
    </div>
</div>


