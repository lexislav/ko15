<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>
<?php
// Print out the progress bar at the top of the page
// print drupal_render($form['progressbar']);

// Print out the preview message if on the preview page.
if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
}


// Print out the main part of the form.
// Feel free to break this up and move the pieces within the array.
//print drupal_render($form['submitted']);

// Always print out the entire $form. This renders the remaining pieces of the
// form that haven't yet been rendered above (buttons, hidden elements, etc).
//print drupal_render_children($form);
?>



<form class="webform-client-form webform-client-form-1442" enctype="multipart/form-data" action="/" method="post"
      id="webform-client-form-1442" accept-charset="UTF-8">
    <div class="input-group">

        <input class="email form-text form-email required" placeholder="<?php print t('Enter your e-mail address') ?>" type="email"
               id="edit-submitted-email-e-mail" name="submitted[email_e_mail]" size="60">

        <input type="hidden" name="details[sid]">
        <input type="hidden" name="details[page_num]" value="1">
        <input type="hidden" name="details[page_count]" value="1">
        <input type="hidden" name="details[finished]" value="0">
        <input type="hidden" name="form_build_id" value="<?= $form['#build_id'] ?>">
        <input type="hidden" name="form_token" value="<?= $form['form_token']['#default_value'] ?>">
        <input type="hidden" name="form_id" value="webform_client_form_1442">

        <button class="button postfix" type="submit" name="op" value="Odeslat"><i class="fa fa-envelope"></i>
        </button>


        <input class="zmiz" type="submit" name="op"
               value="Submit">


    </div>
</form>




