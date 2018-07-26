<ul class="button-group" <?php koma_theme_wrapper(__FILE__)?>>
    <li class="text-label-button"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></li>
    <?php
    foreach ($items AS $poradi => $pole) {
        if ($poradi == 0) continue;
        global $language;
        if($language->language=='cs'){
            $jazyk = '/';
        }else{
            $jazyk = '/'.$language->language.'/';
        }

        ?>
        <li class="text-double-button">
            <a href="<?=@ $pole['field_page_link']['#items'][0]['url'] ?>"><?= @ $pole['field_basic_title']['#items'][0]['value'] ?>
                <span><?= $pole['field_basic_popis']['#items'][0]['value'] ?></span></a></li>
    <?php } ?>
</ul>
