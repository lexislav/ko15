<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 5 rows high; the top
 * middle and bottom rows contain 1 column, while the second
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left_above']: Content in the left column in row 2.
 *   - $content['right_above']: Content in the right column in row 2.
 *   - $content['middle']: Content in the middle row.
 *   - $content['left_below']: Content in the left column in row 4.
 *   - $content['right_below']: Content in the right column in row 4.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="m-section l-detail-page bg-white">
    <header class="m-section--header bg-secondary-light">
        <div class="row ">
            <div class="l-full">
                <nav class="breadcrumbs">
                    <?php




                    if(count(drupal_get_breadcrumb())>1){
                        foreach (drupal_get_breadcrumb() AS $drobek) {
                            echo $drobek;
                        }
                    }

                    ?>
                </nav>
            </div>
        </div>
    </header>
    <article class="m-basic-page">
        <header class="m-basic-page--header">
            <div class="row">
                <div class="<?= (strlen($content['right_above']) > 0) ? 'l-third' : 'l-half'; ?> ">
                    <h1 class="m-basic-page--hed"><?php echo str_replace('< class="">', '', $content['left_above']); ?></h1>
                </div>
                <div class="l-two-thirds">
                    <?php print $content['right_above']; ?>
                </div>
                <div class="l-full">
                    <?php print $content['middle']; ?>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="m-basic-page--content">


                <div class="m-body--content">


                    <!--                    <div class="m-layout-object mm-small mm-left">-->
                    <!--                        <figure>-->
                    <!--                            <img src="http://lorempixel.com/300/300" alt="" />-->
                    <!--                            <figcaption>m-layout-object pro vkladani objektu mezi content</figcaption>-->
                    <!--                        </figure>-->
                    <!--                    </div>-->

                    <?php print $content['left_below']; ?>

                </div>


                <?php print $content['right_below']; ?>

            </div>
        </div>

    </article>


</div>

<div class="panel-panel panel-col-bottom">
    <?php


    print $content['bottom']; ?>
</div>

