<div class="l-navbar">
    <div class="m-navbar mm-primary mm-admin">
        <div class="m-navbar--container">
            <a class="m-navbar--logo" href="/">
                <div class="mm-has-svg" style="background-image: url('<?= $GLOBALS['base_url'] ?>/sites/all/themes/koma/assets/images/logo-koma-administrace.svg');"></div>
            </a>
            <ul class="m-navbar--menu m-navbar--menu-secondary">


                <li class="m-navbar--menu-link">
                    <a target="" href="https://www.koma-slovakia.sk" title="www.koma-slovakia.sk"><em class="">Koma Slovakia</em></a>
                </li>

                <li class="m-navbar--menu-link">
                    <a target="" href="https://www.koma-rent.cz" title="www.koma-rent.cz"><em class="">Koma rent</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" href="https://www.koma-space.at/cs" title="www.koma-space.at/cs"><em class="">Koma Space</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" href="https://www.koma-modular.cz/" title="www.koma-modular.cz/"><em class="">Koma MODULAR</em></a>
                </li>
                <li class="m-navbar--menu-link">
                    <a target="" href="https://www.koma-group.cz" title="www.koma-group.cz"><em class="">Koma Group</em></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="m-section l-login">
    <?php print render($page['content']); ?>
    <?php print $messages; ?>
    <footer class="m-section--footer">
        <div class="row">
            <div class="l-half">
                <div class="m-section--top"><a href="">© KOMA MODULAR 2015</a></div>
            </div>
            <div class="l-half">
                <div class="m-section--more"><a href="http://www.odoka.cz">web design&code OdOka</a></div>
            </div>
        </div>
    </footer>

</div>
