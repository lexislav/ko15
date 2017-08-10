<?php
$prev_nid = prev_next_nid($node->nid, 'prev');
$next_nid = prev_next_nid($node->nid, 'next');
?>

<div class="m-section l-detail-page" update <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <article class="m-story">
        <header>

            <div class="m-story--summary">
                <h1 class="m-story--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-story--meta">
                    <dl>
                        <dt><?php print t('Datum') ?></dt>
                        <dd><?= ($content['field_zpravodaj_publikace'][0]['#markup']); ?></dd>
                    </dl>

                    <dl>
                        <dt><?php print t('Category') ?></dt>
                        <dd style="display: none;">
                            <a href="<?= test_basic_url() ?>zpravodaj?field_zpravodaj_kategorie_tid=<?= $content['field_zpravodaj_kategorie']['#items'][0]['tid'] ?>" title="<?= $content['field_zpravodaj_kategorie'][0]['#title'] ?>">
                                <?= ($content['field_zpravodaj_kategorie'][0]['#title']); ?>
                            </a>
                        </dd>
                        <dd>
                            <?= ($content['field_zpravodaj_kategorie'][0]['#title']); ?>
                        </dd>
                    </dl>
                </div>

            </div>
        </header>

        <?php
        $hasImage = false;
        if (isset($node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'][0])) {
            $hasImage = true;
        }
        $contentClass = '';
        if ($hasImage) {
            $contentClass = "mm-has-image";
        }
        ?>

        <div class="m-story--content <?php echo $contentClass; ?>">


            <div class="m-body--content">
                <?php if ($hasImage) { ?>
                    <div class="m-story--image mm-mobile">
                        <img src="<?= image_style_url('x412-300', $node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'][0]['uri']) ?>" alt="">
                    </div>
                <?php } ?>


                <?= ($content['field_zpravodaj_text']['#items'][0]['value']); ?>
                <?php
                if (isset($content['field_zpravodaj_video']['#items'])) {

                    foreach ($content['field_zpravodaj_video']['#items'] AS $video) { ?>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video['video_id'] ?>?rel=0" frameborder="0" allowfullscreen></iframe>
                        <br />
                    <?php };
                } ?>
            </div>

            <div class="m-story--aside">

                <?php if ($hasImage) {
                  $image_uri      = $node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'][0]['uri'];
                  $style          = 'x412-300';
                  $derivative_uri = image_style_path($style, $image_uri);
                  $success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
                  $newimgurl  = file_create_url($derivative_uri);


                    ?>
                    <div class="m-story--image mm-desktop">
                        <img src="<?= $newimgurl ?>" alt="">
                    </div>
                <?php }

                    if (isset($content['field_zpravodaj_soubory']['#items'])) {
                        $output = field_view_field('node', $node, 'field_zpravodaj_soubory');
                        print render($output);
                    }
                echo "<br />";
                    if (isset($content['field_zpravodaj_link']['#items'])) {
                        $output = field_view_field('node', $node, 'field_zpravodaj_link');
                        print render($output);
                    }
                ?>
            </div>
            <?php
            if (isset($node->field_zpravodaj_foogalerie['und'])):
                ?>
                <aside>
                    <div class="m-aside-block">
                        <header class="m-aside-block--header">
                            <div class="m-aside-block--summary">
                                <h2 class="m-aside-block--hed">&rarr; <?php print t('Photo gallery') ?></h2>

                                <div class="m-aside-block--meta">
                                    (<?= count($node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und']) ?> <?php print t('photographs') ?>
                                    )
                                </div>
                            </div>
                        </header>
                        <div class="m-aside-block--content">
                            <ul class="m-gallery mm-medium" class="clearing-thumbs" data-clearing>
                                <?php foreach ($node->field_zpravodaj_foogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $obrazek) {
                                  $image_uri      = $obrazek['uri'];
                                  $style          = 'x412-300';
                                  $derivative_uri = image_style_path($style, $image_uri);
                                  $success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
                                  $newimgurlthumb  = file_create_url($derivative_uri);
                                    ?>
                                    <li class="m-gallery--item">
                                        <a href="<?= file_create_url($obrazek['uri']) ?>"><img src="<?= $newimgurlthumb ?>"></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>


                    </div>
                </aside>
                <?php
            endif;
            ?>
        </div>
    </article>

    <footer class="m-section--footer" style="padding: 0" <?php koma_theme_wrapper(__FILE__) ?>>

        <!-- starší novější -->
        <?php if (($prev_nid[0]->prev_nid > 0) || ($next_nid[0]->next_nid > 0)) { ?>
            <div class="clearfix">
                <div class="row" style="padding:  48px 0">
                    <div class="l-half" style="padding: 0 48px; text-align: right">
                        <?php
                        if ($prev_nid[0]->prev_nid > 0) {
                            ?>
                            <a href="<?= test_lang_prefix('node/' . $prev_nid[0]->prev_nid) ?>">&larr;<?php print t('STARŠÍ') ?></a>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="l-half" style="padding: 0 48px;">
                        <?php
                        if ($next_nid[0]->next_nid > 0) {
                            ?>
                            <a href="<?= test_lang_prefix('node/' . $next_nid[0]->next_nid) ?>"><?php print t('NOVĚJŠÍ') ?>&rarr;</a>

                            <?php
                        }
                        ?>
                    </div>

                </div>
            </div>
        <?php } ?>

        <div class="bg-white clearfix">
            <div class="row" style="padding:  48px 0">

                <div class="l-third">
                    <div class="m-section--top">
                        <a href=""><?php print t('UP') ?> &uarr;</a></div>
                </div>
                <div class="l-two-thirds">
                    <?php
                    $tree = taxonomy_get_tree(5);
                    ?>
                    <ul class="m-section--nav inline-right">
                        <?php
                        foreach ($tree as $term) {

                            ?>
                            <li>
                                <a href="<?= test_basic_url() ?>zpravodaj?field_zpravodaj_kategorie_tid=<?= $term->tid ?>" title="<?= $term->name ?>"><?= $term->name ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

