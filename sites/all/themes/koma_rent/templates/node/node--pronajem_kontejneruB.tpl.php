<?php
//

$typ = 1;
$vyskaObrazku = '330';
if ($node->nid == 2290) {
    $typ = 0;
    $vyskaObrazku = '480';

}
//?>

<!--sekce s fotkou v pravo-->
<?php
if ($typ == 1) {
    ?>
    <div class="m-section" <?php koma_theme_wrapper(__FILE__) ?>>

        <!-- header sekce-->
        <div class="row">
            <header class="m-section--header">
                <!-- full page layout-->
                <div class="l-full">
                    <!-- drobky-->
                    <nav class="breadcrumbs">
                        <?php
                            foreach (drupal_get_breadcrumb() AS $drobek) {
                                echo $drobek;
                            }
                        ?>
                    </nav>
                </div>

                <div class="l-half">
                    <header>
                        <h1 class="m-item--hed mm-bold mm-big mm-color-black"><?= $title ?></h1>
                    </header>
                </div>
                <div class="l-half">
                    <ul class="m-section--nav inline-right">
                        <li><a href="#kariera">Ostatníaaa</a></li>
                        <li><a href="#kariera">Skladové</a></li>
                        <li><a href="#adresar">Sanitární</a></li>
                        <li><a href="#formSection">| Obytné</a></li>
                    </ul>

                </div>
            </header>
        </div>


        <article>
            <div class="row">
                <!-- 1/2-->
                <div class="l-half">
                    <header>
                    </header>
                    <div class="m-item--description mm-pad-bottom">
                        <?= $content['field_cert_popis']['#items'][0]['value'] ?>
                    </div>
                    <?php if ($typ == 0) { ?>
                        <a href="<?= test_basic_url() ?>kontakty#formSection">
                            <button class="button" style="margin: 0">Kontaktujte nás &rarr;</button>
                        </a>
                    <?php } ?>
                </div>
                <!-- 2/2-->
                <div class="l-half">
                    <div class="m-item--image"
                         style="background-image: url(<?= image_style_url('x618-' . $vyskaObrazku, $content['field_jeden_obrazek']['#items'][0]['uri']) ?>)">
                        <img
                            src="<?= image_style_url('x618-' . $vyskaObrazku, $content['field_jeden_obrazek']['#items'][0]['uri']) ?>"
                            alt="">
                    </div>
                </div>
            </div>
        </article>


        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>

    </div>
<?php }else{ ?>

    <div class="m-section" <?php koma_theme_wrapper(__FILE__) ?>>

        <!-- header sekce-->
        <div class="row">
            <header class="m-section--header"></header>
        </div>

        <!-- artikl -->

        <article>
            <div class="row">
                <!-- 1/2-->
                <div class="l-half">
                    <header>
                        <h1 class="m-item--hed mm-bold mm-big mm-color-black"><?=$title?></h1>
                    </header>
                    <div class="m-item--description mm-pad-bottom">
                        <?=$content['field_cert_popis']['#items'][0]['value']?>
                    </div>
                    <a href="<?= test_basic_url() ?>kontakty#formSection"><button class="button" style="margin: 0">Kontaktujte nás &rarr;</button></a>
                </div>
                <!-- 2/2-->
                <div class="l-half">
                    <div class="m-item--image" style="background-image: url(<?= image_style_url('x618-480', $content['field_jeden_obrazek']['#items'][0]['uri']) ?>)">
                        <img src="<?= image_style_url('x618-480', $content['field_jeden_obrazek']['#items'][0]['uri']) ?>" alt="">
                    </div>
                </div>
            </div>
        </article>

        <div class="row">
            <footer class="m-section--footer"></footer>
        </div>

    </div>





<?php } ?>
<!--end: sekce s fotkou v pravo-->

<!--proc koma rent-->
<div class="m-section bg-white" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full"></div>
        </header>
    </div>

    <div class="row" style="position: relative;">

        <div class="l-half"><h2 class="m-item--hed mm-upcase color-primary mm-xl">Proč koma rent</h2></div>
        <div class="l-half">

            <?= $content['field_basic_text']['#items'][0]['value'] ?>

        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div>
<!--end: proc koma rent-->


<article id="produktove-rady" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="m-section l-feed_four">
        <div class="row">
            <header class="m-section--header">
                <div class="l-third">
                    <h2 class="mm-small color-primary">TYPY KONTEJNERŮ</h2>
                </div>
                <div class="l-two-thirds">
                    <ul class="m-section--nav inline-right">
                        <li><a href="#faq">ČASTÉ DOTAZY</a></li>
                        <li><a href="#download">KE STAŽENÍ</a></li>
                        <li><a href="#sluzby">&darr; SLUŽBY</a></li>
                    </ul>
                </div>


            </header>
        </div>

        <?php
        if (isset($content['field_produktove_rady'][0])) {
            print render($content['field_produktove_rady']);
        }
        ?>

        <div class="row">
            <footer class="m-section--footer">
                <div class="l-half">
                    <div class="m-section--top jsActivated"><a href="">NAHORU ↑</a></div>
                </div>
            </footer>
        </div>
    </div>


</article>

<div class="kotva" id="sluzby"></div>
<?php
if (isset($content['field_bigimg_a_text'][0])) {
    print render($content['field_bigimg_a_text']);
}
?>
<!--ke stazeni-->
<div class="kotva" id="download"></div>
<div class="m-section l-feed_two bg-white" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-medium color-primary mm-upcase">Ke stažení</h2>
            </div>
        </header>
    </div>

    <div class="row">

        <div class="l-single">
            <div class="m-aside-block bg-secondary-light mm-pad">
                <header class="m-aside-block--header">
                    <h3 class="m-aside-block--hed">INFORMACE K PRONÁJMU</h3>
                </header>
                <div class="m-reference--meta m-properties mm-size-l">
                    <!--                @TODO predelat na field tpl-->
                    <?php
                    foreach ($content['field_kestazeni_link']['#items'] AS $soubor) {
                        $typ = end(explode('.', $soubor['filename']));
                        switch ($typ) {
                            case "zip":
                                $trida = 'fa-file-archive-o';
                                break;
                            case "xls":
                                $trida = 'fa-file-excel-o';
                                break;
                            case "xlsx":
                                $trida = 'fa-file-excel-o';
                                break;
                            case "doc":
                                $trida = 'fa-file-word-o';
                                break;
                            case "docx":
                                $trida = 'fa-file-word-o';
                                break;
                            case "pdf":
                                $trida = 'fa-file-pdf-o';
                                break;
                            case "txt":
                                $trida = 'fa-file-text-o';
                                break;
                            default:
                                $trida = 'fa-file-o';
                        }
                        ?>
                        <dl class="mm-nolabels mm-noborder">
                            <dt><?= $soubor['description'] ?></dt>
                            <dd><a href="<?= file_create_url($soubor['uri']) ?>" title="<?= $soubor['description'] ?>">
                                    <i class="fa <?= $trida ?>"></i><?= $soubor['description'] ?> </a></dd>
                        </dl>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="l-single">
            <div class="m-aside-block bg-secondary-light mm-pad">
                <header class="m-aside-block--header">
                    <h3 class="m-aside-block--hed">BROŽURY</h3>
                </header>
                <div class="m-reference--meta m-properties mm-size-l">
                    <!--                @TODO predelat na field tpl-->
                    <?php
                    foreach ($content['field_brozury_link']['#items'] AS $soubor) {
                        $typ = end(explode('.', $soubor['filename']));
                        switch ($typ) {
                            case "zip":
                                $trida = 'fa-file-archive-o';
                                break;
                            case "xls":
                                $trida = 'fa-file-excel-o';
                                break;
                            case "xlsx":
                                $trida = 'fa-file-excel-o';
                                break;
                            case "doc":
                                $trida = 'fa-file-word-o';
                                break;
                            case "docx":
                                $trida = 'fa-file-word-o';
                                break;
                            case "pdf":
                                $trida = 'fa-file-pdf-o';
                                break;
                            case "txt":
                                $trida = 'fa-file-text-o';
                                break;
                            default:
                                $trida = 'fa-file-o';
                        }
                        ?>
                        <dl class="mm-nolabels mm-noborder">
                            <dt><?= $soubor['description'] ?></dt>
                            <dd><a href="<?= file_create_url($soubor['uri']) ?>" title="<?= $soubor['description'] ?>">
                                    <i class="fa <?= $trida ?>"></i><?= $soubor['description'] ?> </a></dd>
                        </dl>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="kotva" id="faq"></div>
<!--end: ke stazeni-->
<?php

if (isset($content['field_segment_faq'][0])) {
    print render($content['field_segment_faq']);
}
?>



