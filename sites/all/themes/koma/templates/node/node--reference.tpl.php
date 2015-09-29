<?php
$prev_nid = prev_next_nid($node->nid, 'prev');
$next_nid = prev_next_nid($node->nid, 'next');
$next_title = db_query('SELECT title_field_value FROM {field_data_title_field} WHERE entity_id = :nid AND language = :lang', array(':nid' => $next_nid[0]->next_nid, ':lang' => $node->language))->fetchField();
$prev_title = db_query('SELECT title_field_value FROM {field_data_title_field} WHERE entity_id = :nid AND language = :lang', array(':nid' => $prev_nid[0]->prev_nid, ':lang' => $node->language))->fetchField();


if (isset($node->field_reference_main_img['und'][0]['uri'])) {
    $urickoMain =$node->field_reference_main_img['und'][0]['uri'];
} else {
    $urickoMain = $node->field_reference_fotogalerie[$node->language][0]['entity']->field_fotogalerie_main_img['und'][0]['uri'];
}


?>

<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
            </div>
        </header>
    </div>
    <article class="m-reference">
        <header>
            <div class="m-reference--image"
                 style="background-image: url(<?= image_style_url('x618-480', $urickoMain) ?>)">
                <a href=""><img
                        src="<?= image_style_url('x618-480', $urickoMain) ?>"
                        alt=""/></a>
            </div>
            <div class="m-reference--summary">
                <h1 class="m-reference--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-reference--description">
                    <p></p>
                </div>
                <div class="m-reference--meta m-properties">
                    <dl>
                        <!--                        @TODO kategorie predelat-->
                        <dt><?php print t('Classification') ?></dt>
                        <dd><?= ($content['field_reference_kategorie_stavby'][0]['#title']); ?>
                            – <?= ($content['field_reference_kategorie_stavby'][1]['#title']); ?></dd>
                    </dl>
                    <dl>

                        <dt><?php print t('Year of implementation') ?></dt>
                        <dd><?= ($content['field_reference_rok'][0]['#markup']); ?></dd>
                    </dl>
                    <?php if (isset($content['field_reference_vyrobkova_rada'][0]['#title'])): ?>
                        <dl>
                            <dt><?php print t('PRODUCT SERIES') ?></dt>
                            <dd><?= ($content['field_reference_vyrobkova_rada'][0]['#title']); ?></dd>
                        </dl>
                    <?php endif ?>
                    <dl>
                        <dt><?php print t('Country of implementation') ?> </dt>
                        <dd><?= test_get_list($content['field_reference_zeme']['#items'][0]['iso2']); ?></dd>
                    </dl>
                    <?php if (isset($content['field_reference_pomodulu']['#items'][0]['value'])): ?>
                        <dl>
                            <dt class="mm-label"><?php print t('Technical Specifications') ?></dt>
                            <?php if (isset($content['field_reference_pomodulu']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_pomodulu']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_pomodulu']['#items'][0]['value']); ?></dd><?php endif ?>
                            <?php if (isset($content['field_reference_delka']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_delka']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_delka']['#items'][0]['value']); ?></dd><?php endif ?>
                            <?php if (isset($content['field_reference_dstavby']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_dstavby']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_dstavby']['#items'][0]['value']); ?></dd><?php endif ?>
                            <?php if (isset($content['field_reference_plocha']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_plocha']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_plocha']['#items'][0]['value']); ?> m<sup>2</sup>
                                </dd><?php endif ?>
                            <?php if (isset($content['field_reference_poznamka']['#items'][0]['value'])): ?>
                                <dt class="mm-sub"><?= ($content['field_reference_poznamka']['#title']); ?></dt>
                                <dd><?= ($content['field_reference_poznamka']['#items'][0]['value']); ?></dd><?php endif ?>
                        </dl>
                    <?php endif ?>
                </div>
            </div>
        </header>

        <div class="m-reference--content">
            <div class="m-body--content"><?= ($content['field_reference_text']['#items'][0]['value']); ?>


                <?php

                if (isset($content['field_reference_video']['#items'])) {

                    foreach ($content['field_reference_video']['#items'] AS $video) {

                        ?>
                        <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/<?= $video['video_id'] ?>?rel=0" frameborder="0"
                                allowfullscreen></iframe>
                        <br/>

                        <?php
                    };


                }


                ?>


            </div>
            <aside>
                <div class="m-aside-block">
                    <header class="m-aside-block--header">
                        <div class="m-aside-block--summary">
                            <h2 class="m-aside-block--hed">&rarr; <?php print t('Photo gallery') ?></h2>
                            <?php
                            if (isset($node->field_reference_fotogalerie[test_lang_code()][0]['entity']->field_fotogalerie_imgs['und'])) {
                                $cesta = $node->field_reference_fotogalerie[test_lang_code()][0]['entity']->field_fotogalerie_imgs['und'];
                            } else {
                                $cesta = $node->field_reference_fotogalerie['cs'][0]['entity']->field_fotogalerie_imgs['und'];
                            }
 
                            ?>
                            <div class="m-aside-block--meta">
                                (<?= count($cesta) ?>
                                <?php print t('photographs') ?>)
                            </div>
                        </div>
                    </header>


                    <div class="m-aside-block--content">
                        <ul class="m-gallery" class="clearing-thumbs" data-clearing>
                            <?php


                            foreach ($cesta AS $poradi => $obrazek) { ?>
                                <li class="m-gallery--item">
                                    <a href="<?= image_style_url('zadny', $obrazek['uri']) ?>"><img
                                            src="<?= image_style_url('x186-139', $obrazek['uri']) ?>"></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </aside>
        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a
                        href="http://www.koma-modular.cz/reference/archiv"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
                </div>
            </div>
        </footer>
    </div>
</div>
<div class="m-section l-navigation bg-white">
    <div class="row">
        <?php
        if ($prev_nid[0]->prev_nid > 0) {
            ?>
            <div class="l-prev m-card_nav">

                <article class="m-story">
                    <header>
                        <div class="m-item--image"
                             style="background-image: url(<?= image_style_url('thumbnail', $prev_nid[0]->prev_img) ?>)">
                            <a href="<?= test_lang_prefix('node/' . $prev_nid[0]->prev_nid) ?> ">
                                <img src="<?= image_style_url('thumbnail', $prev_nid[0]->prev_img) ?>" alt=""/>
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= test_lang_prefix('node/' . $prev_nid[0]->prev_nid) ?>"><?= $prev_title ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p></p>
                            </div>
                        </div>
                    </header>
                </article>
            </div>
            <?php
        }
        ?>
        <?php
        if ($next_nid[0]->next_nid > 0) {
            ?>
            <div class="l-next m-card_nav">
                <article class="m-story">
                    <header>
                        <div class="m-item--image"
                             style="background-image: url(<?= image_style_url('thumbnail', $next_nid[0]->next_img) ?>)">
                            <a href="<?= test_lang_prefix('node/' . $next_nid[0]->next_nid) ?>">
                                <img src="<?= image_style_url('thumbnail', $next_nid[0]->next_img) ?>" alt=""/>
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= test_lang_prefix('node/' . $next_nid[0]->next_nid) ?>"><?= $next_title ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p></p>
                            </div>
                        </div>
                    </header>
                </article>
            </div>
            <?php
        }
        ?>
    </div>
</div>
