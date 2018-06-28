<div class="m-section l-detail-page" <?php koma_theme_wrapper(__FILE__) ?>>
    <div class="row">
        <header class="m-section--header">
            <div class="l-full">
                <nav class="breadcrumbs">
                    <?php
                    foreach (drupal_get_breadcrumb() AS $drobek) {
                        echo $drobek;
                    }
                    ?>
                </nav>

            </div>
        </header>
    </div>

    <article class="m-story">
        <header>
            <div class="m-story--summary">
                <h1 class="m-story--hed"><a href=""><?php print $title; ?></a></h1>
                <div class="m-story--description"><p></p></div>
                <div class="m-story--meta"></div>
            </div>
        </header>

        <div class="m-story--content">
            <div class="m-body--content">
                <?= $content['field_kariera_text']['#items'][0]['value'] ?>
            </div>
        </div>

    </article>


    <?php
    $nid = 1602;
    $wnode = node_load($nid);
    $form = drupal_get_form('webform_client_form_' . $nid, $wnode, []);
    hide($form['submitted']['jmeno_a_prijmeni']);
    hide($form['submitted']['e_mail']);
    hide($form['submitted']['email_pro_komu']);
    hide($form['submitted']['text_sdeleni_nebo_vaseho_dotazu']);
    hide($form['submitted']['text']);
    hide($form['submitted']['souhlasim']);
    hide($form['submitted']['pripojit_soubor']);
    hide($form['actions']['submit']);
    ?>

    <div class="m-section" id="formSection" <?php koma_theme_wrapper(__FILE__) ?>>

        <div class="row">
            <header class="m-section--header">
                <div class="l-full">
                    <h2 class="m-section--hed mm-tiny mm-medium mm-center">Máte zájem o tuto pozici?
                        <span class="color-primary"> Napište nám!</span>
                    </h2>
                </div>
            </header>
        </div>

        <div class="row">
            <div class="m-contact-form">
                <header>
                    <i class="fa fa-paper-plane-o"></i> Formulář bude odeslán na adresu:
                                                        :
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
                                padding-top: 20px;
                            }
                        </style>

                        <div>
                            <input disabled="disabled" type="hidden" id="edit-submitted-email-pro-komu" name="submitted[email_pro_komu]" value="<?= $content['kontakt_email']['#items'][0]['value'] ?>" size="60" maxlength="128" class="form-text">
                            <input required="required" placeholder="<?php print t('Your first and surname') ?>" type="text" id="edit-submitted-jmeno-a-prijmeni" name="submitted[jmeno_a_prijmeni]" value="<?= $form['submitted']['jmeno_a_prijmeni']['#value'] ?>" size="60" maxlength="128" required>
                            <input required="required" placeholder="<?php print t('Your e-mail address') ?>" type="email" id="edit-submitted-e-mail" name="submitted[e_mail]" value="<?= $form['submitted']['e_mail']['#value'] ?>" size="60" required>
                            <textarea placeholder="<?php print t('The text of your question') ?>" style="height: 200px" id="edit-submitted-text-sdeleni-nebo-vaseho-dotazu" name="submitted[text_sdeleni_nebo_vaseho_dotazu]" required></textarea>

                            <div id="edit-submitted-pripojit-soubor-ajax-wrapper">
                                <div class="form-item webform-component webform-component-file webform-component--pripojit-soubor webform-container-inline">

                                    <label for="edit-submitted-pripojit-soubor-upload">Připojit soubor</label>

                                    <div class="form-managed-file">
                                        <input type="file" id="edit-submitted-pripojit-soubor-upload" name="files[submitted_pripojit_soubor]" size="22" class="form-file">
<!--                                        <input type="submit" id="edit-submitted-pripojit-soubor-upload-button" name="submitted_pripojit_soubor_upload_button" value="Nahrát" class="form-submit ajax-processed">-->
                                        <input type="hidden" name="submitted[pripojit_soubor][fid]" value="0">
                                    </div>

                                    <div class="upload-description description">Soubory musí být menší než
                                        <strong>5 MB</strong>.<br>Povolené typy souborů:
                                        <strong>jpg pdf doc docx</strong>.
                                    </div>

                                </div>
                            </div>

                            <div class="webform-confirm-question">
                                <input class="webform-confirm-question-check" required="required" type="checkbox" id="edit-submitted-souhlasim-1" name="submitted[souhlasim][souhlasim]" value="souhlasim" class="form-checkbox" required>
                                <label class="webform-confirm-question-option option" for="edit-submitted-souhlasim-1"><?= $form['submitted']['text']['#markup'] ?></label>
                            </div>

                            <?php
                            print drupal_render($form['submitted']);
                            print drupal_render_children($form);
                            ?>
                            <input class="button" type="submit" name="op" value="Odeslat">
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



