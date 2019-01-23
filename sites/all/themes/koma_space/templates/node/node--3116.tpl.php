<?php
$body_field = field_get_items('node', $node, 'body');
$body = field_view_value('node', $node, 'body', $body_field[0]);
$img_path = image_style_url('x618-480', $node->field_jeden_obrazek['und'][0]['uri'])
?>
<div class="m-section" <?php koma_theme_wrapper(__FILE__) ?>>
    

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
    $nid = 3117;
    $wnode = node_load($nid);
    $form = drupal_get_form('webform_client_form_' . $nid, $wnode, []);
    hide($form['submitted']['jmeno_a_prijmeni']);
    hide($form['submitted']['e_mail']);
    hide($form['submitted']['email_pro_komu']);
    hide($form['submitted']['text_sdeleni_nebo_vaseho_dotazu']);
    hide($form['submitted']['text']);
    hide($form['submitted']['souhlasim']);
    hide($form['submitted']['pripojit_soubor']);
//    hide($form['actions']['submit']);
    $form['actions']['submit']['#attributes']['class'][] = 'button';
    ?>

    <div class="m-section" id="formSection" <?php koma_theme_wrapper(__FILE__) ?>>

        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center">Interessiert?
                        <span class="color-primary"> Schreiben Sie uns!</span>
                    </h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form">
                <header>
                    <i class="fa fa-paper-plane-o"></i> Formular wird weitergeleitet an:
                    <span id="targetMailInfo"> <?= $content['kontakt_email']['#items'][0]['value'] ?></span>
                </header>

                <div class="m-contact-form--content">
                    <form class="webform-client-form webform-client-form-1602" enctype="multipart/form-data" action="<?= $form['#action'] ?>" method="post" id="webform-client-form-1602" accept-charset="UTF-8">


                        <!-- patch -->
                        <style>
                            .webform-confirm-question {
                                padding-top: 30px;
                                padding-bottom: 30px;
                                display: flex;
                            }

                            .webform-confirm-question p {
                                margin: 0;
                                padding: 0;
                            }

                            .webform-confirm-question-check {
                                margin-top: 3px !important;
                            }

                            .upload-description {
                                font-size: 13px;
                            }
                        </style>

                        <div>
                            <input disabled="disabled" type="hidden" id="edit-submitted-email-pro-komu" name="submitted[email_pro_komu]" value="<?= $content['kontakt_email']['#items'][0]['value'] ?>" size="60" maxlength="128" class="form-text">
                            <input required="required" placeholder="<?php print t('Your first and surname') ?>" type="text" id="edit-submitted-jmeno-a-prijmeni" name="submitted[jmeno_a_prijmeni]" value="<?= $form['submitted']['jmeno_a_prijmeni']['#value'] ?>" size="60" maxlength="128" required>
                            <input required="required" placeholder="<?php print t('Your e-mail address') ?>" type="email" id="edit-submitted-e-mail" name="submitted[e_mail]" value="<?= $form['submitted']['e_mail']['#value'] ?>" size="60" required>
                            <textarea placeholder="<?php print t('The text of your question') ?>" style="height: 200px" id="edit-submitted-text-sdeleni-nebo-vaseho-dotazu" name="submitted[text_sdeleni_nebo_vaseho_dotazu]" required></textarea>

                            <div id="edit-submitted-pripojit-soubor-ajax-wrapper">
                                <div class="form-item webform-component webform-component-file webform-component--pripojit-soubor webform-container-inline">

                                    <label for="edit-submitted-pripojit-soubor-upload">Hängen Sie die Datei an</label>

                                    <div class="form-managed-file">
                                        <input type="file" id="edit-submitted-pripojit-soubor-upload" name="files[submitted_pripojit_soubor]" size="22" class="form-file">
<!--                                        <input type="submit" id="edit-submitted-pripojit-soubor-upload-button" name="submitted_pripojit_soubor_upload_button" value="Nahrát" class="form-submit ajax-processed">-->
                                        <input type="hidden" name="submitted[pripojit_soubor][fid]" value="0">
                                    </div>

                                    <div class="upload-description description">Dokumente (PDF, JPG, DOC, DOCX - max. 5 MB)
                                    </div>

                                </div>
                            </div>

                            <div class="webform-confirm-question">
                                <input class="webform-confirm-question-check" required="required" type="checkbox" id="edit-submitted-souhlasim-1" name="submitted[souhlasim][souhlasim]" value="souhlasim" class="form-checkbox" required>
                                <label class="webform-confirm-question-option option" for="edit-submitted-souhlasim-1">Ja, ich stimme der Verarbeitung personenbezogener Daten zum Zwecke des Stellenangebots gemäß den Verarbeitungs- und Datenschutzrichtlinien der Firma KOMA MODULAR s.r.o.</label>
                            </div>

                            <?php
                            print drupal_render($form['submitted']);
                            print drupal_render_children($form);
                            ?>
<!--                            <input class="button" type="submit" name="op" value="Nachricht senden ">-->
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>


    <div class="row"><footer class="m-section--footer"></footer></div>
</div>


<div class="row">
    <footer class="m-section--footer">
        <div class="l-half">
            <div class="m-section--top"><a href=""><?php print t('UP') ?> &uarr;</a></div>
        </div>
        <div class="l-half">
            <div class="m-section--more">
                <a href="<?= test_basic_url() ?>firma-a-lide/kariera"><?php print t('WHOLE ARCHIVES') ?> &rarr;</a>
            </div>
        </div>
    </footer>
</div></div>



