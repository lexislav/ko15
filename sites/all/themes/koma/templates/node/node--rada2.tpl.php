<?php
//dsm($node);
//dsm($content);
?>

<?php print render($content['field_fotogalerie']); ?>

<div class="m-section l-detail-page bg-white">

    <header class="m-section--header bg-secondary-light">
                <div class="row ">
                    <div class="l-full">

                        <nav class="breadcrumbs">
                            <?php
                            foreach (drupal_get_breadcrumb() AS $drobek) {
                                echo $drobek;
                            }
                            ?>
                        </nav>

                    </div>
                </div>
    </header>

    <article class="m-basic-page">
        <header class="m-basic-page--header">

            <div class="row">
                <div class="l-half">
                    <h1 class="m-basic-page--hed"><a href=""><?= $node->title ?></a></h1>
                </div>

                <div class="l-full">

                    <figure class="m-basic-page--image" style="background-image: url(<?= image_style_url('x1266-0', $node->field_hlavni_obrazek['und'][0]['uri']) ?>)">
                        <a href=""><img src="<?= image_style_url('x1266-0', $node->field_hlavni_obrazek['und'][0]['uri']) ?>" alt="" /></a>

                        <figcaption>
                            <?= $node->field_hlavni_obrazek_text[$node->language][0]['value'] ?>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="m-basic-page--content">


                <div class="m-body--content">
                    <?= $node->field_basic_text[$node->language][0]['value'] ?>
                </div>


                <?php
                if (isset($content['field_segment_soubory'][0])) {
                    print render($content['field_segment_soubory']);
                }
                ?>

            </div>
        </div>

    </article>
</div>


<?php print render($content['field_blok_1img']); ?>

<div class="m-section l-feed_two bg-secondary-light">

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-tiny mm-center mm-border"><?= $node->field_basic_title[$node->language][0]['value'] ?></h2>
    </header>

    <div class="row">
        <?php
        print render($content['field_blok_moreimg']);
        ?>
    </div>

</div>


<?php print render($content['field_obrazek_s_textem']); ?>

<div class="m-section l-feed_block-carousel">

    <div class="m-section--underlay"></div>

    <div class="row">
        <div class="l-section--content slider block-feed-slider mm-red-arrows">
            <?php
            $block = module_invoke('views', 'block_view', 'segmentreference-block_1');
            print render($block);
            ?>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">UP &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="">WHOLE ARCHIVES &rarr;</a></div>
            </div>
        </footer>
    </div>

</div>

<?php
print render($content['field_segment_faq']);
?>
