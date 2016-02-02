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
                <li class="m-navbar--menu-social m-navbar--menu-facebook">
                    <a target="_blank" title="" href="https://www.facebook.com/KOMA-RENT-sro-252931971538577/">
                        <span class="fa fa-facebook"><em>Facebook</em></span>
                    </a>
                </li>

                <li class="m-navbar--menu-social m-navbar--menu-youtube">
                    <a target="_blank" title="" href="https://www.youtube.com/user/TopKOMASPACE">
                        <span class="fa fa-youtube-play"><em class="">YouTube</em></span>
                    </a>
                </li>
            </ul>



        </div>
    </div>

    <div class="m-navbar mm-primary" id="navbarPrimary">


        <div class="m-navbar--container">

            <a class="m-navbar--logo" href="<?= $front_page ?>">
                <div class="mm-has-svg"
                     style="background-image: url('<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma_rent/logo.svg');"></div>
            </a>

            <div class="xmega">
                <?php print render($page['navigation']); ?>
            </div>
        </div>

    </div>

    <?php
    if ($user->uid > 0) {
        $banner1 = node_load(2316);
        if ($banner1->status == 1) {

            if(isset($banner1->field_simple_img['und'][0]['uri'])){
                $uri1 = $banner1->field_simple_img['und'][0]['uri'];
            }
            ?>
            <div id="page-banner" class="m-section <?=($banner1->field_banner_barva['und'][0]['value']==2)?'bg-secondary':'bg-primary';?>" <?php koma_theme_wrapper(__FILE__) ?>>
                <div class="m-section--close" close-section>&times;</div>
                <article class="m-banner">
                    <header>
                        <?php if(isset($banner1->field_simple_img['und'][0]['uri'])){ ?>
                            <div class="m-banner--image" style="background-image: url(<?= image_style_url('0x60', $uri1) ?>)">
                                <a href="<?=$banner1->field_page_link[test_lang_code()][0]['url']?>">
                                    <img src="<?= image_style_url('0x60', $uri1) ?>" />
                                </a>
                            </div>
                        <?php } ?>
                        <div class="m-banner--summary">
                            <h1 class="m-banner--hed">
                                <?=$banner1->field_basic_text[test_lang_code()][0]['value']?>
                            </h1>
                        </div>
                    </header>
                </article>
            </div>

            <?php
        }
    }
    ?>
</div>

<?php print render($page['hledani']); ?>
<?php print render($page['content']); ?>


<!--certifikace-->
<div class="m-section l-feed_six">
    <header class="m-section--header">
        <h2 class="m-section--hed mm-small mm-center color-secondary"><?php print t('CERTIFICATION') ?></h2>
    </header>
    <div class="row rowfix">
        <?php
        $block = module_invoke('views', 'block_view', 'certifik_ty-block');
        print render($block);
        ?>
    </div>
    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>
</div><!--certifikace-->


<!--support-->
<div class="m-section m-section_support">

    <div class="l-grid">
        <div class="m-section--item">

            <article class="m-newsletter">
                <header>
                    <div class="m-item--hed-icon"
                         style="background-image: url(<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/votaznik.png)"></div>
                    <h1 class="m-item--hed mm-small color-primary"><?php print t('Customer support') ?></h1>
                </header>

                <div
                    class="m-item--description"><?php print t('Have you not found answers to your questions here? Ask us directly!') ?></div>
                <a href="<?= test_basic_url() ?>kontakty#formSection">
                    <button><?php print t('Ask us') ?> &rarr;</button>
                </a>
            </article>

        </div>

        <div class="m-section--item worker">
            <img src="<?= $GLOBALS['base_url'] ?>/sites/koma/assets/images/worker.jpg"/>
        </div>

        <div class="m-section--item">

            <article class="m-bulletin">

                <header>
                    <h1 class="m-item--hed mm-small color-primary"><?php print t('Get modular news with e-bulletin') ?></h1>
                </header>


                <div
                    class="m-item--description"><?php print t('If you subscribe to our monthly e-bulletin you will be periodically informed about the latest developments in the world of modular architecture and new offers of the KOMA modular building system.') ?></div>

                <?php print render($page['form_email']); ?>
            </article>

        </div>
    </div>

</div><!--support-->


<footer class="m-footer m-section l-footer">
    <div class="m-footer--container">
        <div class="row">
            <section class="m-footer--section">
                <a class="m-footer--logo" href="/">
                    <img src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma_rent/logo-koma-rent-inline-white.svg" alt="" />
                </a>
            </section>
            <section class="m-footer--section">
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
                        <a href="https://www.facebook.com/KOMA-RENT-sro-252931971538577/" target="" title=""><i class="fa fa-facebook"></i></a>
                    </li>

                    <li class="m-footer--menu-link">
                        <a href="https://www.youtube.com/user/TopKOMASPACE" target="" title=""><i class="fa fa-youtube-play"></i></a>
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
