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
                    <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false"><em
                            class="">Language</em></a>
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
                <div class="mm-has-svg"
                     style="background-image: url('<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/koma-group-o.png');"></div>
            </a>
            <div class="xmega">
                <div id="block-tb-megamenu-menu-megamenu" class="block block-tb-megamenu  block-tb-megamenu-menu-megamenu contextual-links-region first last odd">
                    <div class="megacleaned not-ready">
                        <div class="nav desktop">
                            <div class="item tb-megamenu-item level-1 mega">
                                <a href="/vyhledavani" class="mm-link-search" title="<?php print t('Search') ?>">
                                    <span class="icon"><?php print t('Search') ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($user->uid > 0) {
        $banner1 = node_load(2317);
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
<!--paticka-->
<footer class="m-footer m-section l-footer">
    <div class="m-footer--container">
        <div class="row">
            <section class="m-footer--section">
                <a class="m-footer--logo" href="/">
                    <img
                        src="<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/logo-koma-inline-white.svg"
                        alt=""/>
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
                        <a href="<?= variable_get('nastaveni_fb', 'nastaveni') ?>" target="" title=""><i
                                class="fa fa-facebook"></i></a>
                    </li>
                    <li class="m-footer--menu-link">
                        <a href="<?= variable_get('nastaveni_twitter', 'nastaveni') ?>" target="" title=""><i
                                class="fa fa-twitter"></i></a>
                    </li>
                    <li class="m-footer--menu-link">
                        <a href="<?= variable_get('nastaveni_youtube', 'nastaveni') ?>" target="" title=""><i
                                class="fa fa-youtube-play"></i></a>
                    </li>
                </ul>

            </section>
        </div>
        <div class="row">
            <section class="m-footer--subsection">
                <a class="m-footer--author" href="/">
                    <a href="">© 2015 – 2017 KOMA MODULAR, s. r. o.</a>
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
