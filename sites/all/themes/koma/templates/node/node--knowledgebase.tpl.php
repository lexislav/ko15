<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <!--            <div class="row ">-->
            <!--                <div class="l-full">-->
            <!---->
            <!--                    <nav class="breadcrumbs">-->
            <!--                        --><?php
            //                        foreach (drupal_get_breadcrumb() AS $drobek) {
            //                            echo $drobek;
            //                        }
            //                        ?>
            <!--                    </nav>-->
            <!---->
            <!--                </div>-->
            <!--            </div>-->
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
                        <dt><?php print t('Category') ?></dt>
                        <dd><?= ($content['field_knowledgebase_kategorie'][0]['#title']); ?></dd>
                    </dl>
                </div>
            </div>
        </header>
        <div class="m-story--content">
            <div class="m-body--content">
                <?= ($content['field_knowledgebase_text']['#items'][0]['value']); ?>
            </div>
        </div>
    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-third">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-two-thirds">
            </div>
        </footer>
    </div>
</div>
