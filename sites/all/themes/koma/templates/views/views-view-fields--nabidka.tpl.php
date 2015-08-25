<?php

$nid = 'node/'.$row->nid;

?>

<dl class="mm-nolabels mm-noborder">
    <dt><?=$row->_field_data['nid']['entity']->title?></dt>
    <dd><a href="<?=test_lang_prefix($nid)?>" title="<?=$row->_field_data['nid']['entity']->title?>">
            <i class="fa fa-file-pdf-o"></i> <?=$row->_field_data['nid']['entity']->title?></a></dd>
</dl>