<div class="m-card_faq l-single nid-<?=$row->nid?>">
    <article class="m-story">
        <header>
            <h1 class="m-item--hed">
                <a target="_blank" href="<?=@$row->field_field_odkazy_p_link[0]['raw']['display_url']?>">
                    <?= $row->_field_data['nid']['entity']->title ?>
                </a>
            </h1>

            <div class="m-item--summary">
                <div class="m-item--description">
                    <p><?= str_replace('&amp;#160;','',$fields['nothing']->content) ?></p>
                </div>
            </div>
        </header>
    </article>
</div>