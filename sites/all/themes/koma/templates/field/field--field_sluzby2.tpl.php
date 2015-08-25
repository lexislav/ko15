<div class="m-section_vertical-tabs" id="sluzby">
    <div class="m-section--container">
        <div slick>
            <div class="row">

                <header class="m-section--header">
                    <div class="l-full">
                        <h2 class="m-section--hed mm-big"><?= $items[0]['field_basic_title']['#items'][0]['value'] ?></h2>
                    </div>
                </header>
                <div class="m-section--nav">
                    <nav slick-method="mouseenter" carouselnav>
                        <ul>
                            <?php
                            foreach ($items AS $poradi => $pole) {
                                if ($poradi == 0) continue;
                                ?>
                                <li slick-to="<?= ($poradi) ?>"><a
                                        href="<?= @test_lang_prefix($pole['field_page_link']['#items'][0]['url']) ?>"><?= $pole['field_basic_title']['#items'][0]['value'] ?></a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="m-section--carousel" carousel>
                <?php
                unset($pole);
                foreach ($items AS $poradi2 => $pole) {
                    if($pole['field_basic_img']['#items'][0]['uri']==''){
                        $file = file_load($pole['field_basic_img']['#items'][0]['fid']);
                        $uri = ($file->uri);
                    }else{
                        $uri = $pole['field_basic_img']['#items'][0]['uri'];
                    }
                    ?>
                    <div class="slide m-card_thumb">
                        <article class="m-story">
                            <header>
                                <div class="m-item--image"
                                     style="background-image: url(<?= image_style_url('x595-0', $uri) ?>)">
                                    <a href="">
                                        <img
                                            src="<?= image_style_url('x595-0', $uri) ?>"
                                            alt=""/>
                                    </a>
                                </div>
                                <h1 class="m-item--hed">
                                    <a href="<?= @test_lang_prefix($pole['field_page_link']['#items'][0]['url']) ?>"><?= @$pole['field_basic_popis']['#items'][0]['value'] ?></a>
                                </h1>

                                <div class="m-item--description">
                                    <?=@$pole['field_basic_popis']['#items'][0]['value'] ?>
                                </div>
                            </header>
                        </article>
                    </div>
                <?php
                }
                ?>


            </div>

        </div>
    </div>


</div>


