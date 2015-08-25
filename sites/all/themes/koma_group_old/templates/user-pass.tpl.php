<div class="m-section--container">
    <div class="row">
        <form action="/?q=user/password" method="post" id="user-pass" accept-charset="UTF-8">
            <div class="f-row">
                <fieldset>
                    <legend>Žádost o nové heslo</legend>
                    <label>Uživatelské jméno nebo e-mailová adresa</label>
                        <input type="text" name="name" placeholder="Uživatelské jméno nebo e-mailová adresa...">
                    <input type="hidden" name="form_build_id" value="<?= $variables['form']['#build_id'] ?>">
                    <input type="hidden" name="form_id" value="user_pass">
                    <div>
                                 <div class="f-25 f-right">

                            <input type="submit" id="edit-submit" name="op" value="Poslat nové heslo" class="button">
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
</div>


