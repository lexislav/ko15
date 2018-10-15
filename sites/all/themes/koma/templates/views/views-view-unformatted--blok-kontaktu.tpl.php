<div class="row">
    <header class="m-section--header">
        <div class="l-full">

        </div>
    </header>
</div>
<div class="row">
    <div class="m-contact-list">
        <style type="text/css">
            .field-content, .field-content span {
                display: inline-block;
                width: auto;
            }

            .m-contact-tab--content .m-contact-tab--address .m-address--name span {
                width: 100%;
            }
        </style>

        <div class="row">

            <?php if (!empty($title)): ?>
                <h3><?php print $title; ?></h3>
                <hr>
            <?php endif; ?>

            <div class="m-contact-tab--content "> 
                <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
