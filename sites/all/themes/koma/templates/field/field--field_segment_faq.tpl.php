<div class="m-section l-feed_three bg-white">

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big"><?php print t('Faq / Knowledge base') ?></h2>
            </div>
        </header>
    </div>

    <div class="row rowfix">
        <?php

        foreach ($element['#object']->field_segment_faq['und'] AS $pole) {

            ?>
            <div class="m-card_faq l-single">

                <article class="m-story">
                    <header>
                        <h1 class="m-item--hed">
                            <a href="<?= test_lang_prefix('node/'.$pole['entity']->nid) ?>"><?= $pole['entity']->title ?></a>
                        </h1>

                        <div class="m-item--summary">
                            <div class="m-item--description">
                            </div>
                        </div>
                    </header>
                </article>

            </div>
        <?php } ?>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="<?= test_basic_url() ?>znalostni-baze?field_knowledgebase_kategorie_tid=122" title=""><?php print t('TECHNICAL ASSISTANCE') ?></a></li>
                    <li><a href="<?= test_basic_url() ?>znalostni-baze?field_knowledgebase_kategorie_tid=123"><?php print t('Information for architects') ?></a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>
