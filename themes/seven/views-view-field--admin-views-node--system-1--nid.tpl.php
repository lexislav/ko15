<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>

<?php
 
 

//$casti = explode('|',$output);
//$node_type = str_replace('_','-',$casti[0]);
//$languages = locale_language_list('name');//seznam jazyku v systemu
//$pole = array();
//
//
//
//$result = db_query('SELECT language FROM {entity_translation} WHERE entity_id = '.$casti[1]);
//$translations = $result->fetchAllKeyed();
//
//
//
//dsm($translations);

//$translations = translation_node_get_translations(intval($casti[1]));//preklady tohodle nid
echo '<ul>';

//if (count($translations) > 0) {//kdyz je vic prekladu
//  dsm($translations);
//
//  foreach ($languages AS $znacka => $jazyk) {
//    if (isset($translations[$znacka])) {
//
//      dsm($translations[$znacka]);
//      $pole[$znacka]['odkaz'] = "http://koma1.cz/node/" . $translations[$znacka]->nid . "/edit";
//      $pole[$znacka]['trida'] = 'jazyk_ano';
//
//    }
//    else {
//      $pole[$znacka]['odkaz'] = intval($output);
//      $pole[$znacka]['trida'] = 'jazyk_ne';
//    }
//
//  }
//
//
//}
//else {
//  foreach ($languages AS $znacka => $jazyk) {
//    $pole[$znacka]['odkaz'] = intval($output);
//    $pole[$znacka]['trida'] = 'jazyk_ne';
//  }
//}


//
//foreach ($languages AS $znacka => $jazyk) {
//
//
//  if (isset($translations[$znacka])) {
//
//
//    ?>
<!--    <li class="jazyk_ano">-->
<!--      <a title="--><?//= $znacka ?><!--"-->
<!--         href="http://koma1.cz/node/--><?//= $translations[$znacka]->nid ?><!--/edit">-->
<!--        <img width="15px" src="http://koma1.cz/sites/all/modules/languageicons/flags/--><?//= $znacka ?><!--.png" />-->
<!--      </a>-->
<!--    </li>-->
<!--  --><?//
//  }elseif($jazyk==$casti[2]){
//?>
<!--    <li class="jazyk_ano">-->
<!--      <a title="--><?//= $znacka ?><!--"-->
<!--         href="http://koma1.cz/node/--><?//=$casti[1] ?><!--/edit">-->
<!--        <img width="15px" src="http://koma1.cz/sites/all/modules/languageicons/flags/--><?//= $znacka ?><!--.png" />-->
<!--      </a>-->
<!--    </li>-->
<!--    --><?php
//  }
//  else {
//    ?>
<!---->
<!--    <li class="jazyk_ne">-->
<!--      <a title="--><?//= $znacka ?><!--"-->
<!--         href="http://koma1.cz/node/add/--><?//=$node_type?><!--?translation=--><?//=$casti[1]?><!--&target=--><?//=$znacka?><!--">-->
<!--        <img width="15px" src="http://koma1.cz/sites/all/modules/languageicons/flags/--><?//= $znacka ?><!--.png" />-->
<!--      </a>-->
<!--    </li>-->
<!--  --><?php
//  }
//
//
//}






?>




</ul>

 
