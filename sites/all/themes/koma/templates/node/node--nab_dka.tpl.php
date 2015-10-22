<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
                        <div class="l-full">

<!--                            <nav class="breadcrumbs">-->
<!--                                --><?php
//                                foreach (drupal_get_breadcrumb() AS $drobek) {
//                                    echo $drobek;
//                                }
//                                ?>
<!--                            </nav>-->
                        </div>
        </header>
    </div>

    <article class="m-story">
        <header>


            <div class="m-story--image">
                <a href=""> &nbsp; </a>
            </div>

            <div class="m-story--summary">

                <h1 class="m-story--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-story--description">
                    <p></p>
                </div>

                <div class="m-story--meta">

                    <dl>
                        <dt><?php print t('Category') ?></dt><dd><?= ($content['field_zpravodaj_kategorie'][0]['#title']); ?></dd>
                    </dl>

                    <dl>
                        <dt><?php print t('Datum') ?></dt><dd><?= ($content['field_zpravodaj_publikace'][0]['#markup']); ?></dd>
                    </dl>

                </div>
            </div>


        </header>
        <div class="m-story--content">
            <div class="m-body--content">
                <?= ($content['field_nabidka_text']['#items'][0]['value']); ?>
            </div>
            <?php
            if (isset($node->field_nabidka_fotogalerie['und'])):
                ?>
                <aside>
                    <div class="m-aside-block">
                        <header class="m-aside-block--header">
                            <div class="m-aside-block--summary">
                                <h2 class="m-aside-block--hed">
                                    &rarr; <?php print t('Photo gallery') ?></h2>

                                <div class="m-aside-block--meta">
                                    (<?= count($node->field_nabidka_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und']) ?> <?php print t('photographs') ?>)
                                </div>
                            </div>
                        </header>
                        <div class="m-aside-block--content">
                            <ul class="m-gallery mm-medium" class="clearing-thumbs" data-clearing>
                                <?php foreach ($node->field_nabidka_fotogalerie['und'][0]['entity']->field_fotogalerie_imgs['und'] AS $obrazek) { ?>
                                    <li class="m-gallery--item">
                                        <a href="<?= image_style_url('x412-300', $obrazek['uri']) ?>"><img src="<?= image_style_url('x412-300', $obrazek['uri']) ?>"></a>
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
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP',array(),array('langcode'=>'cs',)) ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <?php
                $tree = taxonomy_get_tree(6);
                ?>
                <ul class="m-section--nav inline-right">
                    <?php
                    foreach ($tree as $term) {

                        ?>
                        <li>
                            <a href="<?= test_basic_url() ?>nabidka?field_nabidka_kategorie_tid=<?= $term->tid ?>" title="<?= $term->name ?>"><?= $term->name ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </footer>
    </div>
</div>
