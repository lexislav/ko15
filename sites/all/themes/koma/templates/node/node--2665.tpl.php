<?php
$body_field = field_get_items('node', $node, 'body');
$body = field_view_value('node', $node, 'body', $body_field[0]);
$img_path = image_style_url('x618-480', $node->field_jeden_obrazek['und'][0]['uri'])
?>
<div class="m-section" theme-wrapper="node--pronajem_kontejneru.tpl.php">
    

    <div class="row mm-pad-bottom">
        <header class="m-section--header">
            <div class="l-full">
              <h2 class="m-section--hed mm-big"><?=$title?></h2>
            </div>
        </header>

        <!-- 1/1-->    
        <div class="l-half">
            <div class="m-item--description mm-pad-bottom">
                <?php print render($body);?>
            </div>
        </div>
        
        <!-- 2/2-->
        <div class="small-12 large-offset-1 large-5 columns">
            <div class="m-item--image" style="background-image: url(<?=$img_path?>)">
                <img src="<?=$img_path?>" alt="">
            </div>
        </div>
    </div>

</div>

<?php
//vypise cast s inzeratama
$block = module_invoke('views', 'block_view', 'publicita-block_1');
print render($block);
?>




