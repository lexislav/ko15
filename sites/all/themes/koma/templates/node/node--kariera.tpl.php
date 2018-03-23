<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <nav class="breadcrumbs">
                    <?php
                    foreach (drupal_get_breadcrumb() AS $drobek) {
                        echo $drobek;
                    }
                    ?>
                </nav>

            </div>
        </header>
    </div>

    <article class="m-story">
        <header>


            <!--            <div class="m-story--image">-->
            <!--                <a href=""> &nbsp; </a>-->
            <!--            </div>-->

            <div class="m-story--summary">

                <h1 class="m-story--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-story--description">
                    <p></p>
                </div>

                <div class="m-story--meta">


                </div>
            </div>


        </header>
        <div class="m-story--content">
            <div class="m-body--content">
                <?= $content['field_kariera_text']['#items'][0]['value'] ?>
            </div>

        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more">
                    <a href="<?=test_basic_url()?>firma-a-lide/kariera"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
                </div>
            </div>
        </footer>
    </div>
</div>



