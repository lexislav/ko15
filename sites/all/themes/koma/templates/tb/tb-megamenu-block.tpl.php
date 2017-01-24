<?php if ($content) : ?>
    <div class="tblock">
        <?php


        $content = str_replace('</table></p>','</table>',$content);
        print str_replace('<p><h3>','<h3>',$content) ?>
    </div>
<?php endif; ?>
