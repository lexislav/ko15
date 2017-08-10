<div class="m-card_faq l-single nid-<?= $row->nid ?>" <?php koma_theme_wrapper(__FILE__) ?>>

    <article class="m-story">
        <header>
            <h1 class="m-item--hed">
                <?php if (arg(1) == 2665 ) {
                    // @todo: Hack, natvrdo id stánky, může se rozbít (http://www.koma-modular.cz/firma-a-lide/kariera)
                    ?>
                    <a href="http://www.koma-modular.cz/<?= drupal_get_path_alias('node/' . $row->nid, $row->node_language) ?>" onclick="ga('send', 'event', 'button', 'click', 'volna pracovni mista');">
                        <?= $row->node_title ?>
                    </a>
                <?php } else { ?>
                    <a href="http://www.koma-modular.cz/<?= drupal_get_path_alias('node/' . $row->nid, $row->node_language) ?>">
                        <?= $row->node_title ?>
                    </a>
                <?php } ?>
            </h1>

            <div class="m-item--summary">
                <div class="m-item--description">

                </div>
            </div>
        </header>
    </article>
</div>
