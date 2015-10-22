<?php

//dsm($node);
//dsm($content);
?>


<div class="m-section l-detail-page bg-white">

    <header class="m-section--header bg-secondary-light">
        <!--        <div class="row ">-->
        <!--            <div class="l-full">-->
        <!---->
        <!--                <nav class="breadcrumbs">-->
        <!--                    <a href="#">Home</a>-->
        <!--                    <a href="#">Features</a>-->
        <!--                    <a class="unavailable" href="#">Gene Splicing</a>-->
        <!--                    <a class="current" href="#">Cloning</a>-->
        <!--                </nav>-->
        <!---->
        <!--            </div>-->
        <!--        </div>-->
    </header>

    <article class="m-basic-page">
        <header class="m-basic-page--header">

            <div class="row">
                <div class="l-half">
                    <h1 class="m-basic-page--hed"><a href=""><?= $node->title ?></a></h1>
                </div>

                <div class="l-full">

                    <figure class="m-basic-page--image" style="background-image: url(<?= image_style_url('x1266-0', $node->field_stranka_mainimg['und'][0]['uri']) ?>)">
                        <a href=""><img src="<?= image_style_url('x1266-0', $node->field_stranka_mainimg['und'][0]['uri']) ?>" alt="" /></a>
                        <figcaption>
                            <?= $node->field_stranka_imgtext[$node->language][0]['value'] ?>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </header>

        <div class="row">
            <div class="m-basic-page--content">
                <div class="m-body--content">
                    <?= $node->field_stranka_text[$node->language][0]['value'] ?>
                </div>

                <?php
                if (isset($content['field_stranka_soubory'][0])) {
                    print render($content['field_stranka_soubory']);
                }
                ?>

            </div>
        </div>

    </article>


</div>
<?php
print render($content);
?>

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


{% include "subtemplates/feed-block-carousel.twig" %} {# @todo musi byt bez hlavičky a patičky#}

{% include "subtemplates/feed-three_faq.twig" %}
