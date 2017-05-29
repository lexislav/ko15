<div class="m-card_faq l-single nid-<?=$row->nid?>">

    <article class="m-story">
        <header>
            <h1 class="m-item--hed">
                <a target="_blank" href="<?=drupal_get_path_alias('node/'.$row->nid,$row->node_language)?>">
                    <?= $row->node_title ?>
                </a>
            </h1>

            <div class="m-item--summary">
                <div class="m-item--description">

                </div>
            </div>
        </header>
    </article>
</div>