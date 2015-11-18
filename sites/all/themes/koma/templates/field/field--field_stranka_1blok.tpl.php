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

//dsm($element);
//dsm($items);


foreach ($items[0]['entity']['field_collection_item'] AS $pole) { ?>

    <div class="m-section l-feed_one bg-white" <?php koma_theme_wrapper(__FILE__)?>>

        <header class="m-section--header">
            <h2 class="m-section--hed mm-medium mm-center"><?= $pole['field_cs_b1_nadpis']['#items'][0]['value'] ?></h2>
        </header>

        <div class="row rowfix">
            <div class="m-card_bigteaser l-single bg-secondary-light">

                <article class="m-story">
                    <header>
                        <div class="m-item--image" style="background-image: url(<?= image_style_url('x633-540', $pole['field_cs_b1_img']['#items'][0]['uri']) ?>)">
                            <a href="">
                                <img src="<?= image_style_url('x633-540', $pole['field_cs_b1_img']['#items'][0]['uri']) ?>" alt="" />
                            </a>
                        </div>

                        <div class="m-item--summary">
                            <h1 class="m-item--hed">
                                <a href=""><?= $pole['field_cs_b1_nadpis']['#items'][0]['value'] ?></a></h1>

                            <div class="m-item--description"><?= $pole['field_cs_b1_text']['#items'][0]['value'] ?></div>

                            <div class="m-card--more bg-8">
                                <a href="<?= $pole['field_cs_b1_odkaz']['#items'][0]['url'] ?>" title="<?= $pole['field_cs_b1_odkaz']['#items'][0]['title'] ?>"><?= $pole['field_cs_b1_odkaz']['#items'][0]['title'] ?></a>
                            </div>
                        </div>
                    </header>
                </article>

            </div>
        </div>


        <div class="row">
            <footer class="m-section--footer">
                <div class="l-half">
                    <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
                </div>
                <div class="l-half">
                    <div class="m-section--more"><a href="">WHOLE ARCHIVES &rarr;</a></div>
                </div>
            </footer>
        </div>

    </div>
<?php } ?>

