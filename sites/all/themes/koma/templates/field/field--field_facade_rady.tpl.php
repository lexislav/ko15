<!-- produkt -->

    <div class="row rowfix" <?php koma_theme_wrapper(__FILE__)?>>
        <?php



        foreach ($element['#items'] AS $pole) {


            if($pole['field_basic_img']['und'][0]['uri']==''){
                $file = file_load($pole['field_basic_img']['und'][0]['fid']);
                $uri = ($file->uri);
            }else{
                $uri = $pole['field_basic_img']['und'][0]['uri'];
            }


             ?>
                <div class="m-card_product l-single">
                    <article class="m-product">
                        <header>
                            <div class="m-item--image" style="background-image: url(<?=@ image_style_url('x595-0', $uri) ?>)">
                                <a odkaz="" href="<?=($pole['field_page_link']['und'][0]['display_url'])?>">
                                    <img src="<?= @image_style_url('x595-0', $uri) ?>" alt=""/>
                                </a>
                            </div>
                            <div class="m-item--summary">
                                <h1 class="m-item--hed">
                                    <a href="<?=($pole['field_page_link']['und'][0]['display_url'])?>"><?=$pole['field_basic_title']['und'][0]['value']?></a>
                                </h1>

                                <div class="m-item--description">
                                    <?=@$pole['field_basic_text']['und'][0]['value']?>
                                </div>
                            </div>
                        </header>
                    </article>
                    <div class="m-card--more"><a href="<?=($pole['field_page_link']['und'][0]['display_url'])?>">&rarr;</a></div>
                </div>
        <?php
        }
        ?>
    </div>
