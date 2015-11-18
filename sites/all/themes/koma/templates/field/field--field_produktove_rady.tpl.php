<!-- produkt -->

    <div class="row rowfix" <?php koma_theme_wrapper(__FILE__)?>>
        <?php
        foreach ($element['#items'] AS $pole) {


            if($pole['entity']->field_single_header['cs'][0]['field_basic_img']['und'][0]['uri']==''){
                $file = file_load($pole['entity']->field_single_header['cs'][0]['field_basic_img']['und'][0]['fid']);
                $uri = ($file->uri);
            }else{
                $uri = $pole['entity']->field_single_header['cs'][0]['field_basic_img']['und'][0]['uri'];
            }



             ?>
                <div class="m-card_product l-single">
                    <article class="m-product">
                        <header>
                            <div class="m-item--image" style="background-image: url(<?=@ image_style_url('x595-0', $uri) ?>)">
                                <a odkaz="" href="<?=test_lang_prefix('node/'.$pole['target_id'])?>">
                                    <img src="<?= @image_style_url('x595-0', $uri) ?>" alt=""/>
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="<?=test_lang_prefix('node/'.$pole['target_id'])?>"><?=$pole['entity']->title?></a>
                                </h1>

                                <div class="m-item--description">
                                    <?=@$pole['entity']->field_basic_popis_2[test_lang_code()][0]['value']?>
                                </div>
                            </div>
                        </header>
                    </article>
                    <div class="m-card--more"><a href="<?=test_lang_prefix('node/'.$pole['target_id'])?>">&rarr;</a></div>
                </div>
        <?php
        }
        ?>
    </div>
