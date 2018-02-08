
<?php

//print '<pre>';
//print_r($variables['form']['#build_id']);
//print '</pre>';
?>


    <div class="m-section--container">

        <div class="row">

            <form action="/?q=user/login" id="user-login" accept-charset="UTF-8" >
                <div class="f-row">

                    <fieldset>
                        <legend>Login</legend>

                        <label>Uživatelské jméno
                            <input type="text" name="name" placeholder="Uživatelské jméno...">
                        </label>

                        <label>Heslo
                            <input type="password" name="pass" placeholder="Heslo...">
                        </label>
                        <input type="hidden" name="form_build_id" value="<?=$variables['form']['#build_id']?>">
                        <input type="hidden" name="form_id" value="user_login">
                        <div>
                            <div class="f-75"><a href="<?= $GLOBALS['base_url'] ?>/?q=user/password" title="">Zapomněli jste své heslo?</a></div>
                            <div class="f-25 f-right">

                                <input type="submit" id="edit-submit" name="op" value="Přihlásit se" class="button">
                            </div>
                        </div>
                    </fieldset>

                </div>
            </form>

        </div>

    </div>


