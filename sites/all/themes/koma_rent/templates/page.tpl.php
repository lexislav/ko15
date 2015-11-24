<?php print render($tabs); ?>
<?php
if ($user->uid == 1) {
    print $messages;
}
?>
<div class="l-navbar">
    <div class="m-navbar mm-secondary" id="navbarSecondary">
        <div class="m-navbar--container">
            <ul class="m-navbar--menu m-navbar--menu-tertiary">
                <li class="m-navbar--menu-social m-navbar--menu-twitter">
                    <a target="_blank" title="" href="<?= variable_get('nastaveni_twitter', 'nastaveni') ?>">
                        <span class="fa fa-twitter"><em class="">Twitter</em></span>
                    </a>
                </li>
                <li class="m-navbar--menu-social m-navbar--menu-facebook">
                    <a target="_blank" title="" href="<?= variable_get('nastaveni_fb', 'nastaveni') ?>">
                        <span class="fa fa-facebook"><em>Facebook</em></span>
                    </a>
                </li>
                <li class="m-navbar--menu-social m-navbar--menu-youtube">
                    <a target="_blank" title="" href="<?= variable_get('nastaveni_youtube', 'nastaveni') ?>">
                        <span class="fa fa-youtube-play"><em class="">YouTube</em></span>
                    </a>
                </li>
            </ul>
            <ul class="m-navbar--menu m-navbar--menu-secondary">
                <li class="m-navbar--menu-dropdown">
                    <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false"><em class="">Language</em></a>
                    <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                        <?php print block_render('locale', 'language'); ?>
                    </ul>
                </li>
            </ul>
            <?php
            function block_render($module, $block_id)
            {
                $block = block_load($module, $block_id);
                $block_content = _block_render_blocks(array($block));
                $build = _block_get_renderable_array($block_content);
                $block_rendered = drupal_render($build);
                return $block_rendered;
            }

            ?>
            <ul class="m-navbar--menu m-navbar--menu-primary">
                <li class="m-navbar--menu-callout">
                    <?php
                    if ($language->language == 'cs') {
                        print variable_get('nastaveni_tel_cs', 'nastaveni');
                    } elseif ($language->language == 'en') {
                        print variable_get('nastaveni_tel_en', 'nastaveni');
                    } elseif ($language->language == 'de') {
                        print variable_get('nastaveni_tel_de', 'nastaveni');
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="m-navbar mm-primary" id="navbarPrimary">
        <div class="m-navbar--container">
            <a class="m-navbar--logo" href="<?= $front_page ?>">
                <div class="mm-has-svg" style="background-image: url('<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma_rent/logo.svg');"></div>
            </a>
            <div class="xmega">
                <?php print render($page['navigation']); ?>
            </div>
        </div>
    </div>
</div>
<?php print render($page['hledani']); ?>

<!-- content. -->
<?php // print render($page['content']); ?>


<div style="background-color: deeppink; padding: 30px; color:white; text-align: center"> Sekce na hp rentu, 3 bloky, titulek, podtitulek, button.</div><!-- konec sekce s karuselem -->


<!-- sekce 3 boxy -->
<div class="m-section l-feed_triple-card" <?php koma_theme_wrapper(__FILE__) ?>>

    <!-- hlavička sekce-->
    <div class="row">
        <header class="m-section--header">
            <div class="columns small-12 small-centered">
                <h2 class="m-section--hed mm-big mm-tiny mm-center">Když pronájem tak
                    <span class="color-primary">Koma rent</span></h2>

            </div>
            <div class="columns small-12 medium-8 small-centered">
                <div class="mm-center mm-s mm-normal mm-nocase mm-grid-pad-top">
                    Pronájem obytných kontejnerů, celých modulárních staveb včetně doplňků a příslušenství pro různé účely a příležitosti. Pronájem je budoucnost.
                </div>
            </div>
        </header>
    </div>

    <!-- tělo sekce-->
    <div class="row rowfix">

        <?php for ($i = 0; $i < 3; $i++) { ?>
            <!--karty v sekci-->
            <div class="m-card_standard l-single">
                <!-- obsah karty-->
                <article class="m-story">
                    <!-- hlavička karty-->
                    <header>
                        <div class="m-item--image" style="background-image: url(http://lorempixel.com/282/181)">
                            <a href="" title="">
                                <img src="http://lorempixel.com/282/181" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="" title="">blalblal</a>
                            </h1>

                            <div class="m-item--description">
                                bla bla bla bla
                            </div>
                        </div>
                    </header>
                </article>
                <!-- more odkaz-->
                <div class="m-card--more">
                    <a href="#" title="">&rarr;</a>
                </div>
                <!-- konec obsahu karty-->
            </div><!-- konec karty-->
        <?php } ?>

    </div>


    <!-- patička sekce-->
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-full">
                <div class="mm-center">
                    <button class="button" style="margin: 0">Kontaktujte nás</button>
                </div>
            </div>
        </footer>
    </div>

</div><!-- .sekce 1 -->


<!-- sekce s karuselem -->
<div style="background-color: deeppink; padding: 30px; color:white; text-align: center"> Sekce na hp rentu, 3 bloky v pravo, texty v levo + nově logo + aktuální patička.</div><!-- konec sekce s karuselem -->


<!-- sekce 3 vlevo + text vpravo + logo -->
<div class="m-section l-section_side-triple bg-white" style="background-image: url('/sites/all/themes/koma/assets/images/mozaika-koma.png')" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full"></div>
        </header>
    </div>

    <div class="row" style="position: relative;">
        <h2 class="m-section--hed mm-big mm-tiny mm-pad-bottom firstline-primary">
            Text1 <br>
            Text2 <br>
            Text3 <br>

        </h2>
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="l-section--item m-card_image" <?php koma_theme_wrapper(__FILE__) ?>>
                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(http://lorempixel.com/400/600)">
                            <a href="#">
                                <img src="http://lorempixel.com/400/600" alt="" />
                            </a>
                        </div>
                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href="#">titulek titulek tituled</a>
                            </h1>

                            <div class="m-item--description ellipsis"></div>
                        </div>
                    </header>
                    <div class="m-card--more"><a href="#"> &rarr;</a></div>
                </article>
            </div>
        <?php } ?>

        <div class="m-section--logo" style="position: absolute; width: 116px; height: 84px; overflow: hidden; bottom: 0; left:20px; ">
            <a href="#"><img src="/sites/all/themes/koma/assets/images/logo-apst-cz.png" alt="" /></a>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
            </div>
            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" title="">firma a lidé &rarr;</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div><!-- sekce 3 vlevo + text vpravo + logo -->


<!-- sekce s karuselem -->
<div style="background-color: deeppink; padding: 30px; color:white; text-align: center"> Sekce "Proč koma rent, titulek v levo, sezanm v pravo"</div><!-- konec sekce s karuselem -->


<div class="m-section bg-white" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full"></div>
        </header>
    </div>

    <div class="row" style="position: relative;">

        <div class="l-half"><h2 class="m-item--hed mm-upcase color-primary mm-xl">Proč koma rent</h2></div>
        <div class="l-half">
            <ol class="m-list">
                <?php for ($idx = 1; $idx <= 4; $idx++) { ?>
                    <li><span class="m-list--bullet"><?php echo $idx; ?>.</span>zakladní elektrovize
                        <strong>Zdarma</strong></li>
                <?php } ?>
            </ol>
        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div>


<!-- sekce typ kontaineru -->
<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">sekce - typ kontajneru</div><!-- konec sekce s karuselem -->

<div class="m-section" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-item--hed">Article xy</h2>
            </div>
        </header>
    </div>

    <div class="row mm-pad-bottom">


        <!-- 1/2-->
        <div class="l-half">
            <!-- wyswyg start-->
            <div class="m-table mm-type-dark">
                <table>
                    <?php for ($idx = 1; $idx <= 12; $idx++) { ?>
                        <tr>
                            <td>Typ</td>
                            <td>Cl3fadfa</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- wyswyg start-->

            <div class="m-item--description">
                <p>Kontejner s otevřenou stranou, který umožňuje vytváření prostoru podle Vašich předsav. Chcete větší kancelář, vytvořit prostor ve školce nebo šatnu pro sportovce? Toto je jedna z částí, kterou budete potřebovat .</p>
                <p>K dispozici také v šíři 2990 mm.</p>
            </div>
        </div>

        <!-- 1/2-->
        <div class="l-half">
            <div class="m-item--image mm-grid-gutter-bottom">
                <img src="http://lorempixel.com/640/400/" alt="schema">
            </div>
            <ul class="small-block-grid-3 " data-clearing style="margin-left: -10px;">
                <li><a href="http://lorempixel.com/900/600/"><img src="http://lorempixel.com/300/200/"></a></li>
                <li><a href="http://lorempixel.com/900/600/"><img src="http://lorempixel.com/300/200/"></a></li>
                <li><a href="http://lorempixel.com/900/600/"><img src="http://lorempixel.com/300/200/"></a></li>
            </ul>
        </div>

    </div>
    <!-- nema patičku-->
</div>


<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">!!! Opravená sekce, na stránce produkty a služby špatně titule, patička, do textu se generuje body apod.</div>

<div class="m-section l-feed_one bg-secondary-light mm-has-background" style="background-image: url('/sites/all/themes/koma/assets/images/kamiony.jpg')" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header"></header>
    </div>

    <div class="row rowfix">
        <div class="m-card_centered-text l-single bg-secondary-light">

            <article class="m-story">
                <header class="m-item--header">
                    <div class="m-item--hed color-white">eTady je titulek</div>
                    <div class="m-item--summary">
                        <div class="m-item--description color-white mm-bold">
                            <p>
                                K pronájmu nabízíme široké spektrum doplňkévých služeb, včetně dopravy, servisu a údržby pronajatých sestav. Nabízíme finanční poradenství k dlouhodobým pronájmům a další… </p>
                        </div>
                </header>
            </article>

            <div class="m-card--more ">
                <a class="button" href="#">Příslušenstvi →</a>
            </div>

        </div>
    </div>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>

</div>


<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">ke stažení upravená verze, m-properties správně nastavené na větší. Nikde tam nesmí být tag ASIDE, ve stávající šabloně kterou máme v komě je balast + nezpracované todo pro MR.</div>

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
                    <h3 class="m-aside-block--hed">BAZAR</h3>
                </header>

                <div class="m-reference--meta m-properties mm-size-l">

                    <dl class="mm-nolabels mm-noborder">
                        <dt>Garáže - sestava 2 ks kontejnerů </dt>
                        <dd><a href="http://www.koma-modular.cz/nabidka/garaze-sestava-2-ks-kontejneru" title="Garáže - sestava 2 ks kontejnerů ">
                                <i class="fa fa-file-pdf-o"></i>Garáže - sestava 2 ks kontejnerů </a></dd>
                    </dl>

                    <dl class="mm-nolabels mm-noborder">
                        <dt>Garáže - sestava 2 ks kontejnerů </dt>
                        <dd><a href="http://www.koma-modular.cz/nabidka/garaze-sestava-2-ks-kontejneru" title="Garáže - sestava 2 ks kontejnerů ">
                                <i class="fa fa-file-pdf-o"></i>Garáže - sestava 2 ks kontejnerů </a></dd>
                    </dl>

                    <dl class="mm-nolabels mm-noborder">
                        <dt>Garáže - sestava 2 ks kontejnerů </dt>
                        <dd><a href="http://www.koma-modular.cz/nabidka/garaze-sestava-2-ks-kontejneru" title="Garáže - sestava 2 ks kontejnerů ">
                                <i class="fa fa-file-pdf-o"></i>Garáže - sestava 2 ks kontejnerů </a></dd>
                    </dl>


                </div>
            </div>
        </div>

        <div class="l-single">
            <div class="m-aside-block bg-secondary-light mm-pad">
                <header class="m-aside-block--header">
                    <h3 class="m-aside-block--hed">BAZAR</h3>
                </header>

                <div class="m-reference--meta m-properties mm-size-l">

                    <dl class="mm-nolabels mm-noborder">
                        <dt>Garáže - sestava 2 ks kontejnerů </dt>
                        <dd><a href="http://www.koma-modular.cz/nabidka/garaze-sestava-2-ks-kontejneru" title="Garáže - sestava 2 ks kontejnerů ">
                                <i class="fa fa-file-pdf-o"></i>Garáže - sestava 2 ks kontejnerů </a></dd>
                    </dl>

                    <dl class="mm-nolabels mm-noborder">
                        <dt>Garáže - sestava 2 ks kontejnerů </dt>
                        <dd><a href="http://www.koma-modular.cz/nabidka/garaze-sestava-2-ks-kontejneru" title="Garáže - sestava 2 ks kontejnerů ">
                                <i class="fa fa-file-pdf-o"></i>Garáže - sestava 2 ks kontejnerů </a></dd>
                    </dl>

                    <dl class="mm-nolabels mm-noborder">
                        <dt>Garáže - sestava 2 ks kontejnerů </dt>
                        <dd><a href="http://www.koma-modular.cz/nabidka/garaze-sestava-2-ks-kontejneru" title="Garáže - sestava 2 ks kontejnerů ">
                                <i class="fa fa-file-pdf-o"></i>Garáže - sestava 2 ks kontejnerů </a></dd>
                    </dl>


                </div>
            </div>
        </div>

    </div>
</div>


<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">Faq, nastavený trochu jinak, jiná velikost fontu v headeru, barva fontu v headeru, zbytek stejný</div>

<div class="m-section l-feed_three bg-white" <?php koma_theme_wrapper(__FILE__) ?>>

    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <h2 class="m-section--hed mm-medium color-primary">Faq / Knowledge base</h2>
            </div>
        </header>
    </div>


    <!-- layout řádky-->
    <div class="row rowfix">
        <?php for ($idx = 1; $idx <= 5; $idx++) { ?>
            <!-- layout karty -->
            <div class="m-card_faq l-single">
                <!-- obsah karty-->
                <article class="m-story">
                    <header>
                        <h1 class="m-item--hed">
                            <a href="http://www.koma-modular.cz/znalostni-baze/jaky-rozsah-specifikace-montazi-provadi-koma-modular-v-zahranici">Jaký rozsah (specifikace) montáží provádí KOMA Modular v&nbsp;zahraničí?</a>
                        </h1>

                        <div class="m-item--summary">
                            <div class="m-item--description"></div>
                        </div>
                    </header>
                </article>
                <!-- konec obsahu karty-->
            </div>
        <?php } ?>
        <!-- konec karty-->
    </div>
    <!-- konec řádky-->


    <!-- patička sekce-->
    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <ul class="m-section--nav inline">
                    <li><a href="" title="">&uarr; Nahoru</a></li>
                </ul>
            </div>

            <div class="l-half">
                <ul class="m-section--nav inline-right">
                    <li><a href="" title="">Pronájmy</a></li>
                    <li><a href="" title="">Technická pomoc</a></li>
                    <li><a href="" title="">Faq</a></li>
                </ul>
            </div>
        </footer>
    </div>

</div>

<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">Detail page se dvěma sloupci, předělaný. sekce se dá použít i na  pronájem kontainerů</div>


<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__) ?>>

    <!-- header sekce-->
    <div class="row">
        <header class="m-section--header">
            <!-- full page layout-->
            <div class="l-full">
                <!-- drobky-->
                <nav class="breadcrumbs">
                    <a href="/">Domů</a><a href="/reference">reference</a><a href="/reference/archiv">ARCHIV REFERENCÍ</a>
                </nav>
            </div>
        </header>
    </div>

    <!-- artikl -->
    <article>
        <div class="row">
            <!-- 1/2-->
            <div class="l-half">
                <header>

                    <div class="m-reference--summary">
                        <h1 class="m-reference--hed"><a href="">Ubytovna pro uprchlíky v Anröchte, DE</a></h1>
                    </div>
                </header>
                <div class="m-body--content">
                    <p>Dodali jsme první část ubytovny pro uprchlíky do německého města Anröchte. Přízemní budova je sestavená z&nbsp;23 modulů výrobkové řady StandardLine. V&nbsp;ubytovně je kromě jednotlivých pokojů pro uprchlíky i společné sociální zařízení a kuchyň. Druhá část ubytovny by měla být dodána do konce roku 2015.</p>
                </div>
                <button class="button" style="margin: 0">Pronájem &rarr;</button>
            </div>
            <!-- 2/2-->
            <div class="l-half">

                <div class="m-reference--image" style="background-image: url(http://www.koma-modular.cz/sites/default/files/styles/x618-480/public/soubory/fotogalerie/reference//uvodni?itok=_rvgewtr)">
                    <a href=""><img src="http://www.koma-modular.cz/sites/default/files/styles/x618-480/public/soubory/fotogalerie/reference//uvodni?itok=_rvgewtr" alt=""></a>
                </div>


                <div class="m-aside-block">
                    <header class="m-aside-block--header">
                        <div class="m-aside-block--summary">
                            <h2 class="m-aside-block--hed">→ Fotogalerie</h2>
                            <div class="m-aside-block--meta">
                                (13 fotografií)
                            </div>
                        </div>
                    </header>

                    <div class="m-aside-block--content">
                        <ul class="m-gallery" data-clearing>
                            <li class="m-gallery--item">
                                <a href="http://www.koma-modular.cz/sites/default/files/styles/zadny/public/tempfotogalerie/dpa-anrochte-2.jpg?itok=hveNC31L"><img src="http://www.koma-modular.cz/sites/default/files/styles/x186-139/public/tempfotogalerie/dpa-anrochte-2.jpg?itok=6KMb-CXb"></a>
                            </li>
                            <li class="m-gallery--item">
                                <a href="http://www.koma-modular.cz/sites/default/files/styles/zadny/public/tempfotogalerie/dpa-anrochte-1.jpg?itok=V5-y-Jn6"><img src="http://www.koma-modular.cz/sites/default/files/styles/x186-139/public/tempfotogalerie/dpa-anrochte-1.jpg?itok=kICIl0MV"></a>
                            </li>
                            <li class="m-gallery--item">
                                <a href="http://www.koma-modular.cz/sites/default/files/styles/zadny/public/tempfotogalerie/dpa-anrochte-18.jpg?itok=tOgGWN5x"><img src="http://www.koma-modular.cz/sites/default/files/styles/x186-139/public/tempfotogalerie/dpa-anrochte-18.jpg?itok=5bI217hV"></a>
                            </li>
                            <li class="m-gallery--item">
                                <a href="http://www.koma-modular.cz/sites/default/files/styles/zadny/public/tempfotogalerie/dpa-anrochte-3.jpg?itok=uTLwQdTX"><img src="http://www.koma-modular.cz/sites/default/files/styles/x186-139/public/tempfotogalerie/dpa-anrochte-3.jpg?itok=Hiy1uOBl"></a>
                            </li>
                            <li class="m-gallery--item">
                                <a href="http://www.koma-modular.cz/sites/default/files/styles/zadny/public/tempfotogalerie/dpa-anrochte-7.jpg?itok=IFxIKlri"><img src="http://www.koma-modular.cz/sites/default/files/styles/x186-139/public/tempfotogalerie/dpa-anrochte-7.jpg?itok=pzNZ6pzB"></a>
                            </li>
                            <li class="m-gallery--item">
                                <a href="http://www.koma-modular.cz/sites/default/files/styles/zadny/public/tempfotogalerie/dpa-anrochte-13.jpg?itok=G-D7eZ-d"><img src="http://www.koma-modular.cz/sites/default/files/styles/x186-139/public/tempfotogalerie/dpa-anrochte-13.jpg?itok=z0oOTHfO"></a>
                            </li>

                        </ul>
                    </div>

                </div>


            </div>
        </div>
    </article>


    <div class="row">
        <footer class="m-section--footer">
            <div class="l-half">
                <div class="m-section--top jsActivated"><a href="">NAHORU ↑</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more">
                    <a href="http://www.koma-modular.cz/reference/archiv">CELÝ ARCHIV →</a>
                </div>
            </div>
        </footer>
    </div>

</div>


<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">Navigace NEXT PREV</div><!--.content-->

<div class="m-section l-navigation bg-white" theme-wrapper="node--reference.tpl.php">
    <div class="row">
        <div class="l-prev m-card_nav">

            <article class="m-story">
                <header>
                    <div class="m-item--image" style="background-image: url(http://lorempixel.com/400/300/)">
                        <a href="http://www.koma-modular.cz/reference/zakladni-skola-schaarbeek-b ">
                            <img src="http://lorempixel.com/400/300/" alt="">
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed">
                            <a href="http://www.koma-modular.cz/reference/zakladni-skola-schaarbeek-b">Základní škola Schaarbeek, B</a>
                        </h1>
                    </div>
                </header>
            </article>
        </div>

        <div class="l-next m-card_nav">
            <article class="m-story">
                <header>
                    <div class="m-item--image" style="background-image: url(http://lorempixel.com/400/300/)">
                        <a href="http://www.koma-modular.cz/reference/bytove-domy-pro-uprchliky-hamburk-brookkehre-str-de">
                            <img src="http://lorempixel.com/400/300/" alt="">
                        </a>
                    </div>
                    <div class="m-item--summary">
                        <h1 class="m-item--hed">
                            <a href="http://www.koma-modular.cz/reference/bytove-domy-pro-uprchliky-hamburk-brookkehre-str-de">Bytové domy pro uprchlíky Hamburk – Brookkehre Str., DE</a>
                        </h1>

                    </div>
                </header>
            </article>
        </div>

    </div>
</div>





<div style="background-color: deeppink; padding: 30px; color:white; text-align: center">Detail page příslušenství</div><!--.content-->

<!--paticka-->
<footer class="m-footer m-section l-footer">
    <div class="m-footer--container">
        <div class="row">
            <section class="m-footer--section">
                <a class="m-footer--logo" href="/">
                    <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/logo-koma-inline-white.svg" alt="" />
                </a>
            </section>
            <section class="m-footer--section">
                &nbsp;
                <?php print theme('links__system_secondary_menu', array(
                    'links' => $secondary_menu,
                    'attributes' => array(
                        'class' => array('m-footer--menu-primary'),
                    )
                )); ?>
                <!--            @TODO Upravit podle predlohy-->
                <!--                    <li class="m-footer--menu-link">-->
                <!--                        <a target="{{ link.target }}" title="{{ link.title }}"><em class="">{{ link.title }}</em></a>-->
                <!--                    </li>-->
            </section>

            <section class="m-footer--section">
                <ul class="m-footer--menu-secondary">

                    <li class="m-footer--menu-link">
                        <a href="<?= variable_get('nastaveni_fb', 'nastaveni') ?>" target="" title=""><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="m-footer--menu-link">
                        <a href="<?= variable_get('nastaveni_twitter', 'nastaveni') ?>" target="" title=""><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="m-footer--menu-link">
                        <a href="<?= variable_get('nastaveni_youtube', 'nastaveni') ?>" target="" title=""><i class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>

            </section>
        </div>
        <div class="row">
            <section class="m-footer--subsection">
                <a class="m-footer--author" href="/">
                    <a href="">© 2015 – 2017 KOMA Modular, s. r. o.</a>
                </a>
            </section>
            <section class="m-footer--subsection">
                <a class="m-footer--author" href="/">
                    <a target="_blank" href="http://www.odoka.cz/">Od Oka</a>
                </a>
            </section>
        </div>
    </div>
</footer><!--paticka-->
