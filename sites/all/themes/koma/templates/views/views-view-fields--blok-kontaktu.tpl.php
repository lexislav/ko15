<div class="m-contact-tab--address">
  <div class="m-address">
    <div class="m-address--name"><?php print $fields['nothing']->content; //name ?></div>
    <div class="m-address--job">
      <div class="field-content">
        <?php print $fields['field_kontakt_pozice']->content; ?><br>
        <?php if ($fields['sitename']->content === '<span>koma-slovakia.sk</span>'): ?>KOMA SLOVAKIA<?php endif; ?>
        <?php if ($fields['sitename']->content === '<span>www.koma-modular.cz</span>'): ?>KOMA MODULAR<?php endif; ?>
        <?php if ($fields['sitename']->content === '<span>www.koma-facade.cz</span>'): ?>KOMA FACADE<?php endif; ?>
        <?php if ($fields['sitename']->content === '<span>www.koma-rent.cz</span>'): ?>KOMA RENT<?php endif; ?>
        <?php if ($fields['sitename']->content === '<span>www.koma-space.at</span>'): ?>KOMA SPACE<?php endif; ?>
      </div>
      
    </div>

    <?php if ($fields['field_kontakt_pevna']->content <> '<div class="field-content"></div>'): ?><div class="m-address--phone"><span>T</span> <?php print $fields['field_kontakt_pevna']->content; ?></div><?php endif ?>
    <?php if ($fields['kontakt_telefon']->content <> '<div class="field-content"></div>'): ?><div class="m-address--phone"><span>M</span> <?php print $fields['kontakt_telefon']->content; ?></div><?php endif ?>
    <?php if ($fields['kontakt_fax']->content <> '<div class="field-content"></div>'): ?><div class="m-address--fax"><span>F</span> <?php print $fields['kontakt_fax']->content; ?></div><?php endif ?>
    <?php if ($fields['kontakt_email']->content <> '<div class="field-content"></div>'): ?><div class="m-address--mail"><span>E</span> <a href='mailto:<?php print $fields['kontakt_email']->content; ?>'><?php print $fields['kontakt_email']->content; ?></a></div><?php endif ?>
  </div>
</div>