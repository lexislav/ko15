<div class="">
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

            .field-content a {
                color: #C20E1A;
            }
            .field-content a:hover {
                color: black;
            }

            .m-contact-tab--content .m-contact-tab--address .m-address--name span {
                width: 100%;
            }

            .m-right--kontaktlink {
                float: right;
                font-size: 16px;
                font-weight: 300;
                
            }
            .m-right--kontaktlink a {
                text-decoration: none;
                color: #B5BBB4;
            }
            .m-right--kontaktlink a:hover {
                color: #C20E1A;
            }
        </style>

        <div class="l-full">

            <?php if (!empty($title)): ?>
                <h3 class="m-section--hed mm-small color-secondary"><?php print $title; ?><span class="m-right--kontaktlink">|&nbsp;<a href="/kontakt">Zpět na Kontakt</a></span></h3>
                <hr style="border: 0; height: 0; border-top: 1px solid #B5BBB4;">
            <?php endif; ?>

            <div class="m-contact-tab--content "> 
                <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
