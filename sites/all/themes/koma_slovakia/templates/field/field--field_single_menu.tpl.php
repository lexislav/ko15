<ul class="button-group aa" <?php koma_theme_wrapper(__FILE__)?>>
    <?php
    foreach ($items AS $poradi => $pole) {
      //  if ($poradi == 0) continue;
        global $language;
        if($language->language=='cs'){
            $jazyk = '/';
        }else{
            $jazyk = '/'.$language->language.'/';
        }

        ?>
        <li class="text-double-button">
            <a href="<?=@($GLOBALS['base_url'].$jazyk.$pole['field_page_link']['#items'][0]['url']) ?>"><?= @ $pole['field_basic_title']['#items'][0]['value'] ?>
                <span><?= $pole['field_basic_popis']['#items'][0]['value'] ?></span></a></li>
    <?php } ?>
</ul>
