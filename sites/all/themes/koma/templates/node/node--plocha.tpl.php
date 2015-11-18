<?php
$nid= 'node/782';

echo drupal_lookup_path('alias',$nid,'en');

$tree = taxonomy_get_tree(5);
$term = taxonomy_term_load(24);
$translated_term = $term->name_field[$language][0]['value'];

?>

<!-- full size breakout -->
<div class="m-section l-feed_one bg-secondary-light mm-has-background" style="background-image: url(http://lorempixel.com/900/600)" <?php koma_theme_wrapper(__FILE__)?>>

    <header class="m-section--header">
        <h2 class="m-section--hed mm-medium mm-normal mm-center color-white">TEST Nabídka fasádních systémů</h2>
    </header>

    <div class="row">
        <div class="m-card_centered-text l-single bg-secondary-light">

            <article class="m-story">
                <header class="m-item--header">
                    <div class="m-item--summary">
                        <div class="m-item--description color-white mm-bold ">
                            <p>Obytné kontejnery si můžete vybrat podle sebe, žádné vaše přání není nerealizovatelné. Renomované specializované firmy nabízí řadu variant: na výběr jsou samostatné obytné a sanitární kontejnery i složité sestavy, které mohou mít i tři patra. Obytné buňky se tak stávají jedinečným řešením třeba pro zmíněné mládežnické ubytovny nebo pro školky, kterých je v Česku stále nedostatek.</p>
                        </div>
                    </div>
                </header>
            </article>
            <div class="m-card--more "><a class="button" href="">něco dalšího o fasádách &rarr;</a></div>
        </div>
    </div>

</div>
<!-- full size breakout -->



<!--paginace footer-->
<div class="m-section l-feed_four" <?php koma_theme_wrapper(__FILE__)?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big">Paginace ve footer + Filter v header</span></h2>
            </div>
        </header>
    </div>


    <!-- filter markup-->

    <div class="m-filter">
        <div class="l-grid">
            <form action="">
                <div class="l-left">

                    <ul class="m-filter--items">
                        <li class="label">
                            <div>vyber</div>
                        </li>
                        <li>
                            <select name="timepass" class="ch-select">
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                            </select>
                        </li>

                        <li>
                            <select name="timepass" class="ch-select">
                                <option value="A">Option A</option>
                                <option value="A" class="category">Category A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A" class="category">Category B</option>
                                <option value="A">Option A</option>
                            </select>
                        </li>

                    </ul>
                </div>

                <div class="l-right">
                    <ul class=" m-filter--items">
                        <li>
                            <select name="timepass" class="ch-select">
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                                <option value="A">Option A</option>
                            </select>
                        </li>
                    </ul>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <?php for($i=0; $i<4; $i++) { ?>
            <div class="m-card_product mm-color-{{ a }} l-single">

                <article class="m-product">
                    <header>
                        <div class="m-item--image" style="background-image: url(http://lorempixel.com/400/600)">
                            <a href="">
                                <img src="http://lorempixel.com/400/600" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="">titulek titulek titulek titulek titulek</a>
                            </h1>

                            <div class="m-item--description">
                                <p>Morbi vulpctum ex, enim sit amet ult  s hendrerit.</p>
                            </div>

                        </div>
                    </header>
                </article>
                <div class="m-card--more"><a href="">&rarr;</a></div>
            </div>
        <?php } ?>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <footer class="m-section--footer">
                <div class="l-left">
                    <div class="m-section--top"><a href="">UP &uarr;</a></div>
                </div>
                <div class="l-center">

                    <div class="m-pagination">
                        <ul class="m-pagination--container">
                            <li class="arrow unavailable"><a href="">&laquo;</a></li>
                            <li class="current"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li class="unavailable"><a href="">&hellip;</a></li>
                            <li><a href="">12</a></li>
                            <li><a href="">13</a></li>
                            <li class="arrow"><a href="">&raquo;</a></li>
                        </ul>
                    </div>

                </div>
                <div class="l-right">
                    <div class="m-section--more"><a href="">WHOLE ARCHIVES &rarr;</a></div>
                </div>
            </footer>
        </footer>
    </div>

</div>
<!--paginace ve footer-->

<!-- produkt -->
<div class="m-section l-feed_four" <?php koma_theme_wrapper(__FILE__)?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big">Reference / <span class="color-primary">archiv referencí</span></h2>
            </div>
        </header>
    </div>


    <div class="row">
       <?php for($i=0; $i<4; $i++) { ?>
        <div class="m-card_product mm-color-{{ a }} l-single">

            <article class="m-product">
                <header>
                    <div class="m-item--image" style="background-image: url(http://lorempixel.com/400/600)">
                        <a href="">
                            <img src="http://lorempixel.com/400/600" alt="" />
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed">
                            <a href="">titulek titulek titulek titulek titulek</a>
                        </h1>

                        <div class="m-item--description">
                            <p>Morbi vulpctum ex, enim sit amet ult  s hendrerit.</p>
                        </div>

                    </div>
                </header>
            </article>
            <div class="m-card--more"><a href="">&rarr;</a></div>
        </div>
       <?php } ?>
    </div>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href="">UP &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" title="Novinky">Technická pomoc</a></li>
                    <li><a href="">informace pro architekty</a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>

<!-- produkt -->



<!-- dummy gallery-->
<div class="m-section" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-big mm-tiny mm-center mm-pad-bottom mm-pad-top">galerie</h2>
            </div>
        </header>
    </div>

    <div class="row">
        <!-- gallerie -->
        <!-- zobrazení přes featured image-->
        <ul class="clearing-thumbs clearing-feature" data-clearing>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-1.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-1.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-2.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-2.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-3.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-3.jpg"></a></li>
            <li class="clearing-featured-img"><a href="/sites/all/themes/koma/assets/gallery/full/img-4.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-4.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-5.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-5.jpg"></a></li>
        </ul>
        <!-- konec galerie-->
    </div>
    <hr />
    <div class="row">
        <!-- gallerie -->
        <!-- obecná galerie -->
        <ul class="clearing-thumbs" data-clearing>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-1.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-1.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-2.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-2.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-3.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-3.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-4.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-4.jpg"></a></li>
            <li><a href="/sites/all/themes/koma/assets/gallery/full/img-5.jpg"><img src="/sites/all/themes/koma/assets/gallery/thumb/img-5.jpg"></a></li>
        </ul>
        <!-- konec galerie-->
    </div>

    <div class="row">
        <footer class="m-section--footer">Každá sekce musí mít markup patičky i hlavičky, i když bude jejich obsah prázdný</footer>
    </div>
</div>
<!-- dummy gallery-->






<!-- dummy bannery-->

<div class="m-section bg-primary" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    Obytné kontejnery si můžete vybrat podle sebe,<a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<div class="m-section bg-secondary" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <!--<div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>-->
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    Obytné kontejnery si můžete vybrat podle sebe,<a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<div class="m-section bg-secondary-light" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    Obytné kontejnery si můžete vybrat podle sebe,<a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<div class="m-section bg-secondary-light" <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-section--close" close-section>&times;</div>
    <article class="m-banner">
        <header>
            <div class="m-banner--image" style="background-image: url(http://lorempixel.com/300/300)">
                <a href="">
                    <img src="http://lorempixel.com/300/300" alt="" />
                </a>
            </div>
            <div class="m-banner--summary">
                <h1 class="m-banner--hed">
                    <a href=""> žádné vaše přání není nerealizovatelné.</a>
                </h1>
            </div>
        </header>
    </article>
</div>

<!-- dummy bannery-->



<script type="text/javascript" src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/components/slick-carousel/slick/slick.min.js"></script>
