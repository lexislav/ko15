<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php
$nodik = node_load($row->entity);




if ($row->_entity_properties['entity']->type == 'koma_zpravodaj') {

    if (isset($row->_field_data['field_field_zpravodaj_main_img'][0])) {
        $uricko = $row->field_field_zpravodaj_main_img[0]['raw']['uri'];
    } else {
        $uricko = $row->field_field_zpravodaj_foogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
    }
  $image_uri      = $uricko;
  $style          = 'x595-0';
  $derivative_uri = image_style_path($style, $image_uri);
  $success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
  $newimgurl  = file_create_url($derivative_uri);

    $kategorie = $row->field_field_zpravodaj_kategorie[0]['rendered']['#markup'];
    $rok = $row->field_field_zpravodaj_publikace[0]['rendered']['#markup'];
    $popis = $row->_field_data['nid']['entity']->type;
    $popis .= ' / ' . $kategorie;
    $popis .= ' | ' . $rok;
    $src_img = $newimgurl;


} elseif ($row->_field_data['nid']['entity']->type == 'reference') {
    if (isset($row->field_field_reference_main_img[0])) {
        $uricko = $row->field_field_reference_main_img[0]['raw']['uri'];
    } else {
        $uricko = $row->field_field_reference_fotogalerie[0]['raw']['entity']->field_fotogalerie_main_img['und'][0]['uri'];
    }
  $image_uri      = $uricko;
  $style          = 'x595-0';
  $derivative_uri = image_style_path($style, $image_uri);
  $success        = file_exists($derivative_uri) || image_style_create_derivative(image_style_load($style), $image_uri, $derivative_uri);
  $newimgurl  = file_create_url($derivative_uri);

    $popis = $row->_field_data['nid']['entity']->type;
    $kategorie = $row->field_field_reference_vyrobkova_rada[0]['rendered']['#markup'];
    $rok = str_replace('-01-01 00:00:00', '', $row->field_field_reference_rok[0]['raw']['value']);
    $popis .= ' / ' . $kategorie;
    $popis .= ' | ' . $rok;
    $src_img = $newimgurl;
}else{
    $popis = 'Stránka';
}

$title = strip_tags($row->_field_data['nid']['entity']->title);
$horni_popis = $popis;
$link = test_lang_prefix('node/' . $row->nid);


/*echo $title . '<br />';
echo $src_img . '<br />';//obrazek neni vsude
echo $horni_popis . '<br />';
echo $link . '<br />';
echo '<br />-----<br />';*/

?>
<div class="m-card_list l-single">
    <article class="m-story">
        <header class="m-item--header">
            <?php if (isset($src_img)) { ?>
                <div class="m-item--image" style="background-image: url(<?=$src_img ?>)">
                    <a href="<?=$link ?>"><img src="<?=$src_img ?>" alt="<?=$title; ?>" title="<?=$title; ?>" /></a>
                </div>
            <?php } ?>
            <h1 class="m-item--hed"><a href="<?=$link; ?>"><?=$title; ?></a></h1>

            <div class="m-item--summary">
                <div class="m-item--description">
                    <?=$horni_popis; ?>
                </div>
            </div>
        </header>
    </article>
</div>

