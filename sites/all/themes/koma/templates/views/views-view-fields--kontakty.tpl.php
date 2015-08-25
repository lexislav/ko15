<div class="m-contact-tab--address">
    <div class="m-address">
        <div class="m-address--name"><?= $fields['title']->raw ?></div>
        <div class="m-address--job"><?= $fields['field_kontakt_pozice']->content ?></div>

        <?php
        $pevna = strip_tags($fields['field_kontakt_pevna']->content);
        if ($pevna != '') { ?>
            <div class="m-address--phone"><span>T</span> <?php echo $pevna; ?></div>
        <?php } ?>

        <?php
        $mobil = strip_tags($fields['kontakt_telefon']->content);
        if (($mobil != '')) { ?>
            <div class="m-address--phone"><span>M</span> <?= $mobil ?></div>
        <?php } ?>

        <?php
        $fax = strip_tags($fields['kontakt_fax']->content);
        if (($fax != '')) { ?>
            <div class="m-address--fax"><span>F</span> <?= $fax ?></div>
        <?php } ?>

        <?php
        $mail = strip_tags($fields['kontakt_email']->content);

        if (($mail != '')) { ?>
            <div class="m-address--mail"><span>E</span> <?= trim($mail) ?></div>
        <?php } ?>

                <div class="m-address--action">

                    <a href="" title="" fillform data-subject="Pro vedoucí útvaru" data-name="<?=$fields['title']->raw?>" data-email="<?=$mail ?>" >
                        <?php print t('Odeslat zprávu') ?>
                        <i class="fa fa-envelope"></i></a>
                </div>
    </div>

</div>

