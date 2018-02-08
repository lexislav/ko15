<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
    <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
    ?>
<?php endif; ?>

<div class="l-left">
    <ul class="m-filter--items chosen-yes">
        <li class="label">
            <div><?php print t('Display filter') ?></div>
        </li>
        <?php foreach ($widgets as $id => $widget):

          ?>

            <li>


                <?php

                if ($widget->id == 'edit-term-node-tid-depth') {


                    $widget->widget = str_replace('<div class="form-item form-type-select form-item-term-node-tid-depth">', '', $widget->widget);
                    $widget->widget = str_replace('</div>', '', $widget->widget);


                    $widget->widget = str_replace('">-', 'aaa', $widget->widget);


                    $widget->widget = str_replace('<select id="edit-term-node-tid-depth" name="term_node_tid_depth" class="form-select">', 'bbb', $widget->widget);


                    $widget->widget = str_replace('">', '" class="category">', $widget->widget);


                    $widget->widget = str_replace('aaa', '">', $widget->widget);


                    //    $widget->widget = str_replace('ccc','form-item-term-node-tid-depth">',$widget->widget);
                    $widget->widget = str_replace('bbb', '<select id="edit-term-node-tid-depth" name="term_node_tid_depth" class="form-select">', $widget->widget);


                }

                print $widget->widget;

                ?>


            </li>
        <?php endforeach; ?>

    </ul>


</div>
<div class="l-right">
    <ul class="m-filter--items">

        <?php if (!empty($sort_by)): ?>
            <li>
                <div class="views-exposed-widget views-widget-sort-by">
                    <?php print $sort_by; ?>
                </div>
            </li>
            <li>
                <div class="views-exposed-widget views-widget-sort-order">
                    <?php print $sort_order; ?>
                </div>
            </li>
        <?php endif; ?>


        <?php if (!empty($items_per_page)): ?>
            <li>
                <div class="views-exposed-widget views-widget-per-page">
                    <?php print $items_per_page; ?>
                </div>
            </li>
        <?php endif; ?>
        <?php if (!empty($offset)): ?>
            <li>
                <div class="views-exposed-widget views-widget-offset">
                    <?php print $offset; ?>
                </div>
            </li>
        <?php endif; ?>
        <li>
            <div class="views-exposed-widget views-submit-button">
                <?php print $button; ?>
            </div>
        </li>
        <?php if (!empty($reset_button)): ?>
            <li>
                <?php print $reset_button; ?>
            </li>
        <?php endif; ?>
    </ul>

</div>
