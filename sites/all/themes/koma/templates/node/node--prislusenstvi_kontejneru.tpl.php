<?php
$prev_nid = prev_next_nid($node->nid, 'prev');
$next_nid = prev_next_nid($node->nid, 'next');
$next_title = db_query('SELECT title_field_value FROM {field_data_title_field} WHERE entity_id = :nid AND language = :lang', array(':nid' => $next_nid[0]->next_nid, ':lang' => test_lang_code()))->fetchField();
$prev_title = db_query('SELECT title_field_value FROM {field_data_title_field} WHERE entity_id = :nid AND language = :lang', array(':nid' => $prev_nid[0]->prev_nid, ':lang' => test_lang_code()))->fetchField();

?>
<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__) ?>>

    <!-- header sekce-->
    <div class="row">
        <header class="m-section--header">
            <!-- full page layout-->
            <div class="l-full">
                <!-- drobky-->
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

    <!-- artikl -->
    <article>
        <div class="row">
            <!-- 1/2-->
            <div class="l-half">
                <header>

                    <div class="m-story--summary">
                        <h1 class="m-story--hed mm-pad-bottom"><?php print $title; ?></h1>
                    </div>
                </header>
                <div class="m-body--content mm-pad-bottom">
                    <?php print ($content['field_basic_text']['#items'][0]['value']) ?>
                </div>
            </div>
            <!-- 2/2-->
            <div class="l-half">

                <div class="m-story--image"
                     style="background-image: url(<?= image_style_url('x618-480', $node->field_basic_img['und'][0]['uri']) ?>)">
                    <a href=""><img
                            src="<?= image_style_url('x618-480', $node->field_basic_img['und'][0]['uri']) ?>"
                            alt=""></a>
                </div>


                <div class="m-aside-block">
                    <header class="m-aside-block--header">
                        <div class="m-aside-block--summary">
                            <h2 class="m-aside-block--hed">→ Fotogalerie</h2>

                            <div class="m-aside-block--meta">
                                (<?= count($node->field_basic_img['und']) ?>  fotografií)
                            </div>
                        </div>
                    </header>

                    <div class="m-aside-block--content">
                        <div class="row">

                            <ul class="m-gallery" data-clearing>
                                <?php foreach ($node->field_basic_img['und'] AS $obrazek) { ?>
                                    <li class="m-gallery--item">
                                        <a href="<?= image_style_url('zadny', $obrazek['uri']) ?>"><img src="<?= image_style_url('x412-300', $obrazek['uri']) ?>"></a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </article>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top jsActivated"><a href="">NAHORU ↑</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more">
                    <a href="http://new.koma-rent.cz/prislusenstvi-a-vybaveni">CELÝ ARCHIV →</a>
                </div>
            </div>
        </footer>
    </div>

</div>
<?php
//@TODO upravit modul na next a prev aby umel i tohle
?>
<div class="m-section l-navigation bg-white" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="row">
        <?php

        if ($prev_nid[0]->prev_nid > 0) {
            ?>
            <div class="l-prev m-card_nav">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('thumbnail', $prev_nid[0]->prev_img) ?>)">
                            <a href="<?= test_lang_prefix('node/' . $prev_nid[0]->prev_nid) ?> ">
                                <img src="<?= image_style_url('thumbnail', $prev_nid[0]->prev_img) ?>" alt="" />
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
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('thumbnail', $next_nid[0]->next_img) ?>)">
                            <a href="<?= test_lang_prefix('node/' . $next_nid[0]->next_nid) ?>">
                                <img src="<?= image_style_url('thumbnail', $next_nid[0]->next_img) ?>" alt="" />
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