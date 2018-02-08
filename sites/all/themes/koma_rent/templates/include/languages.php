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