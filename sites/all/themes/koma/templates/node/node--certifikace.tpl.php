<div class="m-section l-detail-page">
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <nav class="breadcrumbs">
                    <?php
                    foreach (drupal_get_breadcrumb() AS $drobek) {
                        echo $drobek;
                    }
                    ?>
                </nav>

            </div>
        </header>
    </div>
    <article class="m-reference">
        <header>
            <div class="m-reference--image mm-preview-fit"
                 style="background-image: url(<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>)">
                <a href="<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>"><img
                        src="<?= image_style_url('x618-0', $content['field_cert_nahled']['#items'][0]['uri']) ?>"
                        alt=""/></a>
            </div>
            <div class="m-reference--summary">
                <h1 class="m-reference--hed"><a href=""><?php print $title; ?></a></h1>

                <div class="m-reference--description"></div>
                <div class="m-reference--meta">

                <div class=" m-properties">
                    <dl>
                        <dt><?php print t('Classification') ?></dt>
                        <dd><?= ($content['field_cert_kategorie'][0]['#title']); ?></dd>
                    </dl>
                    <dl>
                        <dt><i class="fa fa-download"></i> <?php print t('Download') ?></dt>
                        <dd>
                            <a href="<?= (file_create_url($content['field_cert_cert']['#items'][0]['uri'])); ?>"><?= $title ?></a>
                        </dd>
                    </dl>
                    <?php
                    if (isset($content['field_cert_popis']['#items'][0]['value'])) {
                        ?>
                        <dl>
                            <dt><?php print t('Description') ?></dt>
                            <dd><?= $content['field_cert_popis']['#items'][0]['value'] ?></dd>
                        </dl>
                    <?php } ?>
                </div>
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

                <div class="m-section--more"><a
                        href="http://www.koma-modular.cz/o-firme/certifikace"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
                </div>
            </div>
        </footer>
    </div>
</div>
