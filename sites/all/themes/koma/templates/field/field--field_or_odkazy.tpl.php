<div class="m-section l-feed_three">

    <div class="row">
        <header class="m-section--header">
            <!--            <div class="l-full">-->
            <!--                <h2 class="m-section--hed">Objekty <span class="color-primary">dle účelu</span></h2>-->
            <!--            </div>-->
        </header>
    </div>

    <div class="row rowfix">
        <?php
        // @TODO zkontrolovat kategorie a tenhle seznam

        $poleprobarvy = array(
            107 => 1,
            92 => 2,
            102 => 3,
            104 => 4,
            105 => 5,
            103 => 6,
            106 => 7,
            108 => 8,
            109 => 8,
            111 => 9,
            110 => 10,
            114 => 10
        );


        foreach ($items AS $poradi => $cast) {

            $target_id = ($element['#object']->field_or_odkazy['cs'][$poradi]['field_ereference_segment']['und'][0]['target_id']);
            $node_target = node_load($target_id); // $nid contains the node id




            if (isset($cast['field_page_link']['#items'][0]['url'])) {

                $odkaz =  ($cast['field_page_link']['#items'][0]['display_url']);
            } else {
                $odkaz = test_lang_prefix('node/' . $element['#object']->field_or_odkazy['cs'][$poradi]['field_ereference_segment']['und'][0]['target_id']);
            }

            ?>

            <div class="m-card_image mm-color-<?= $poleprobarvy[$cast['field_or_reference']['#items'][0]['tid']] ?> l-single">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x595-0', $node_target->field_segment_img['und'][0]['uri']) ?>)">
                            <a href="<?= $odkaz ?>">
                                <img src="<?= image_style_url('x595-0',$node_target->field_segment_img['und'][0]['uri']) ?>" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $odkaz ?>"><?= $node_target->title ?></a>
                            </h1>

                            <div class="m-item--description">
                                <?= $cast['field_basic_text']['#items'][0]['value'] ?>
                            </div>
                        </div>
                    </header>
                    <div class="m-card--more">&rarr; </div>
                </article>

            </div>

        <?php
            unset($node_target);
        } ?>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" title=""><?php print t('TECHNICAL ASSISTANCE') ?></a></li>
                    <li><a href=""><?php print t('Information for architects') ?></a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>










