<div class="m-section l-feed_<?= (count($items) == 3) ? 'triple-card' : 'four' ?>" <?php koma_theme_wrapper(__FILE__)?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top">JSME PŘEDNÍ ČESKÝ VÝROBCE
                    <br /><span class="color-primary">MODULÁRNÍ VÝSTAVBYz</span></h2>
            </div>
        </header>
    </div>

    <div class="row rowfix">

        <?php
        foreach ($items AS $pole) {
            $cast = ($pole['entity']['field_collection_item'][key($pole['entity']['field_collection_item'])]);

            ?>

            <div class="m-card_standard l-single">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x282-181', $cast['field_hpc_1_img']['#items'][0]['uri']) ?>)">
                            <a href="<?= $cast['field_hpc_1_odkaz']['#items'][0]['value'] ?><!--" title="<?= $cast['field_hpc_1_nadpis']['#items'][0]['value'] ?>">
                                <img src="<?= image_style_url('x282-181', $cast['field_hpc_1_img']['#items'][0]['uri']) ?>" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="<?= $cast['field_hpc_1_odkaz']['#items'][0]['value'] ?>" title="<?= $cast['field_hpc_1_nadpis']['#items'][0]['value'] ?>"><?= $cast['field_hpc_1_nadpis']['#items'][0]['value'] ?></a>
                            </h1>

                            <div class="m-item--description">
                                <p><?= @$cast['field_hpc_1_text']['#items'][0]['value'] ?></p>
                            </div>
                        </div>
                    </header>
                </article>

                <div class="m-card--more">
                    <a href="<?= $cast['field_hpc_1_odkaz']['#items'][0]['value'] ?>" title="<?= $cast['field_hpc_1_nadpis']['#items'][0]['value'] ?>">&rarr;</a>
                </div>

            </div>

        <?php } ?>
    </div>
