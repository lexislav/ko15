<div class="m-contact-tab--address">
  <div class="m-address">
    <div class="m-address--name"><?php print $fields['nothing']->content; //name ?></div>
    <div class="m-address--job">
      <div class="field-content"><?php print $fields['field_kontakt_pozice']->content; ?></div>
    </div>

    <div class="m-address--phone"><span>T</span> <?php print $fields['field_kontakt_pevna']->content; ?></div>
    <div class="m-address--phone"><span>M</span> <?php print $fields['kontakt_telefon']->content; ?></div>
    <?php if (!empty($fields['kontakt_fax']->content)): ?><div class="m-address--fax"><span>F</span> <?php print $fields['kontakt_fax']->content; ?></div><?php endif ?>
    <div class="m-address--mail"><span>E</span> <a href='mailto:<?php print $fields['kontakt_email']->content; ?>'><?php print $fields['kontakt_email']->content; ?></a></div>
  </div>
</div>