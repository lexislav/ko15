<?php
$body_field = field_get_items('node', $node, 'body');
$body = field_view_value('node', $node, 'body', $body_field[0]);
$img_path = image_style_url('x618-480', $node->field_jeden_obrazek['und'][0]['uri'])
?>
<div class="m-section" theme-wrapper="node--pronajem_kontejneru.tpl.php">

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
                  <?php print render($body);?>
                </div>

            </div>
            <!-- 2/2-->
            <div class="l-half">
                <div class="m-item--image" style="background-image: url(<?=$img_path?>)">
                    <img src="<?=$img_path?>" alt="">
                </div>
            </div>
        </div>
    </article>

    <div class="row">
        <footer class="m-section--footer"></footer>
    </div>

</div>

<?php
//vypise cast s inzeratama
$block = module_invoke('views', 'block_view', 'publicita-block_1');
print render($block);
?>




