<?php

/**
 * @file field.tpl.php
 * Default template implementation to display the value of a field.
 *
 * This file is not used and is here as a starting point for customization only.
 * @see theme_field()
 *
 * Available variables:
 * - $items: An array of field values. Use render() to output them.
 * - $label: The item label.
 * - $label_hidden: Whether the label display is set to 'hidden'.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - field: The current template type, i.e., "theming hook".
 *   - field-name-[field_name]: The current field name. For example, if the
 *     field name is "field_description" it would result in
 *     "field-name-field-description".
 *   - field-type-[field_type]: The current field type. For example, if the
 *     field type is "text" it would result in "field-type-text".
 *   - field-label-[label_display]: The current label position. For example, if
 *     the label position is "above" it would result in "field-label-above".
 *
 * Other variables:
 * - $element['#object']: The entity to which the field is attached.
 * - $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
 * - $element['#field_name']: The field name.
 * - $element['#field_type']: The field type.
 * - $element['#field_language']: The field language.
 * - $element['#field_translatable']: Whether the field is translatable or not.
 * - $element['#label_display']: Position of label display, inline, above, or
 *   hidden.
 * - $field_name_css: The css-compatible field name.
 * - $field_type_css: The css-compatible field type.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_field()
 * @see theme_field()
 *
 * @ingroup themeable
 */
?>
<aside <?php koma_theme_wrapper(__FILE__)?>>
    <div class="m-aside-block bg-secondary-light mm-pad">
        <header class="m-aside-block--header">
            <h3 class="m-aside-block--hed"><?php print t('For download') ?></h3>
        </header>
        <div class="m-reference--meta m-properties">
            <?php
            foreach ($items AS $soubor) {
                $trida = '';
                $typ = end(explode('.', $soubor['#file']->filename));
                switch ($typ) {
                    case "zip":
                        $trida = 'fa-file-archive-o';
                        break;
                    case "xls":
                        $trida = 'fa-file-excel-o';
                        break;
                    case "xlsx":
                        $trida = 'fa-file-excel-o';
                        break;
                    case "doc":
                        $trida = 'fa-file-word-o';
                        break;
                    case "docx":
                        $trida = 'fa-file-word-o';
                        break;
                    case "pdf":
                        $trida = 'fa-file-pdf-o';
                        break;
                    case "txt":
                        $trida = 'fa-file-text-o';
                        break;
                    default:
                        $trida = 'fa-file-o';
                }
                ?>
                <dl class="mm-nolabels mm-noborder">
                    <dt><?=$soubor['#file']->description?></dt>
                    <dd><a href="<?= file_create_url($soubor['#file']->uri)?>" target="_blank" title="<?=$soubor['#file']->description?>">
                            <i class="fa <?=$trida?>"></i> <?=$soubor['#file']->description?></a></dd>
                </dl>
            <?php
            }
            ?>
        </div>
    </div>
</aside>




