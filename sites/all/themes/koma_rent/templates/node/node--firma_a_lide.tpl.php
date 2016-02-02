<?php
//
//dsm($node);
//dsm($content);
//
//?>

<article <?php koma_theme_wrapper(__FILE__)?>>

    <div class="m-section l-feed_carousel bg-secondary-light">
        <div class="row">
            <header class="m-section--header">
                <div class="l-half">
                    <h1 class="m-basic-page--hed"><?php print t('THE COMPANY') ?> <span class="color-primary">& <?php print t('PEOPLE') ?></span></h1>
                </div>
            </header>
        </div>

        <div class="row rowfix">
            <div class="m-section--content">

                <div class="l-full">
                    <?php
                    if (isset($content['field_slider_2'][0])) {
                        print render($content['field_slider_2']);
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

    <!-- sekce se 4 kartami-->
    <div class="m-section l-feed_four bg-secondary-light">
        <div class="row">
            <header class="m-section--header"></header>
        </div>

        <?php
        if (isset($content['field_img_text_text'][0])) {

            $content['field_img_text_text'][0]['myclass'] = "mm-promo";

            // @todo: potrebuji pridat do tehle sablony classu, tak aby to neovlivnilo jina zobrazeni
            print render($content['field_img_text_text']);
        }
        ?>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>
    </div>

</article>




<div class="m-section l-feed_two bg-white" id="ke-stazeni" <?php koma_theme_wrapper(__FILE__)?>>



    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-medium color-primary mm-upcase"><?php print t('For download') ?></h2>
            </div>
        </header>
    </div>

    <div class="row">
        <div class="l-single">
            <?php
            if (isset($content['field_brozury'][0])) {
                print render($content['field_brozury']);
            }
            ?>
        </div>

        <div class="l-single">
            <?php
            if (isset($content['field_ceniky'][0])) {
                print render($content['field_ceniky']);
            }
            ?>
        </div>
    </div>


</div>







<div class="kotva" id="dalsi-informace" <?php koma_theme_wrapper(__FILE__)?>></div>
<?php
$block = module_invoke('views', 'block_view', 'publicita-block');
print render($block);
?>

<?php
dpm($content['field_text_text_link']);
if (isset($content['field_text_text_link'][0])) {
    print render($content['field_text_text_link']);
}
?>



