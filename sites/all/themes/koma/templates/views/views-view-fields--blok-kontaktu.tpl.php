<div class="m-contact-tab--address">
    <div class="m-address">
        <div class="m-address--name"><?php print $fields['nothing']->content; //name ?></div>
        <div class="m-address--job">
            <div class="field-content">
              <?php print $fields['field_kontakt_pozice']->content; ?><br>
              <?php $domain = strtoupper(str_replace(['<span>', '</span>', 'www.', '-', '.cz', '.sk', '.at'], ['', '', '', ' ', '', '', ''], $fields['sitename']->content)) ?>
              <?= $domain ?>
            </div>
        </div>
      <?php if (strlen($fields['field_kontakt_pevna']->content) != 33): ?>
          <div class="m-address--phone"><span>T</span> <?= $fields['field_kontakt_pevna']->content ?></div>
      <?php endif ?>
      <?php if (strlen($fields['kontakt_telefon']->content) != 33): ?>
          <div class="m-address--phone"><span>M</span> <?= $fields['kontakt_telefon']->content; ?></div>
      <?php endif ?>
      <?php if (strlen($fields['kontakt_fax']->content) != 33): ?>
          <div class="m-address--fax"><span>F</span> <?= $fields['kontakt_fax']->content; ?></div>
      <?php endif ?>
      <?php if (strlen($fields['kontakt_email']->content) != 33): ?>
          <div class="m-address--mail"><span>E</span> <a href='mailto:<?= $fields['kontakt_email']->content; ?>'><?= $fields['kontakt_email']->content; ?></a></div>
      <?php endif ?>
    </div>
</div>