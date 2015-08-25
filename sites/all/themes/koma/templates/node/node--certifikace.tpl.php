<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <?php
    //    dsm($content);
    //    dsm($node);
    //    ?>

    <article class="m-reference">
        <header>
            <div class="m-reference--image mm-preview-fit" style="background-image: url(<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>)">
                <a href=""><img src="<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>" alt="" /></a>
            </div>
            <div class="m-reference--summary">
                <h1 class="m-reference--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-reference--description"></div>
                <div class="m-reference--meta m-properties">
                    <dl>
                        <dt><?php print t('Classification') ?></dt>
                        <dd><?= ($content['field_cert_kategorie'][0]['#title']); ?></dd>
                    </dl>
                    <dl>
                        <dt><?php print t('Certifikát ke stažení') ?></dt>
                        <dd><a href="<?= (file_create_url($content['field_cert_cert']['#items'][0]['uri'])); ?>"><?= $title ?></a>
                        </dd>
                    </dl>
                    <dl>
                        <dt><?php print t('Popis Certifikatu') ?></dt>
                        <dd><?= $content['field_cert_popis']['#items'][0]['value'] ?></dd>
                    </dl>

                </div>
            </div>
        </header>

    </article>
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">

                      <div class="m-section--more"><a href="http://www.koma-modular.cz/o-firme/certifikace"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a></div>
            </div>
        </footer>
    </div>
</div>
