<?php
global $user;
if($user->uid > 0){
if (isset($_POST['odeslano'])) {

    $body = variable_get('nastaveni_bulletin', $default = NULL);
    $body_txt1 = variable_get('nastaveni_bulletin_txt1', $default = NULL);
    $body_txt2 = variable_get('nastaveni_bulletin_txt2', $default = NULL);
    $text_clanku = '';


    foreach ($content['field_bulletin_reference']['#items'] AS $poradi => $cast) {

        $tmp_text = '';
        if (($poradi) % 2 == 0) {
            $body_txt = $body_txt1;
        } else {
            $body_txt = $body_txt2;
        }

        $img_src = '';
        if ($cast['entity']->type == 'reference') {
            if (isset($cast['entity']->field_reference_main_img['und'][0])) {
                $img_src = $cast['entity']->field_reference_main_img['und'][0]['uri'];
            } else {

                $img_src = (node_load($cast['entity']->field_reference_fotogalerie['cs'][0]['target_id'])->field_fotogalerie_main_img['und'][0]['uri']);
            }
        } else {
            if (isset($cast['entity']->field_zpravodaj_main_img['und'][0])) {
                $img_src = $cast['entity']->field_zpravodaj_main_img['und'][0]['uri'];
            } else {
                $img_src = (node_load($cast['entity']->field_zpravodaj_foogalerie['und'][0]['target_id'])->field_fotogalerie_main_img['und'][0]['uri']);
            }
        }
        $vice = array('cs' => 'Více', 'en' => 'More', 'de' => 'Mehr', 'sk' => 'Viac informácií');

        if($node->language=='cs'){
            $domena = '';
        }else{
            $domena = $node->language.'/';
        }


        $domena = "http://www.koma-modular.cz/$domena";
        $tmp_text = strtr($body_txt, array(
            '{nadpis_clanku}' => $cast['entity']->title,
            '{domena}' => $domena,
            '{vice}' => $vice[$node->language],
            '{nid_clanku}' => $cast['entity']->nid,
            '{text_clanku}' => $_POST['area' . $poradi],
            '{img_clanku}' => image_style_url('x303', $img_src),
        ));
        $text_clanku .= $tmp_text;
    }

    $nezobrazuje1 = array('cs' => 'Nezobrazuje se Vám e-bulletin správně?', 'en' => 'If the e-bulletin does not display correctly,', 'de' => 'Bildet sich Ihnen das Bulletin richtig ab?', 'sk' => 'Nezobrazuje sa Vám e-bulletin správne? ');
    $nezobrazuje2 = array('cs' => 'Zobrazit e-bulletin v prohlížeči', 'en' => 'View the e-bulletin in your browser', 'de' => 'Das e-Bulletin im Browser abbilden', 'sk' => '');
    $nezobrazuje3 = array('cs' => 'Otevřete si ho v prohlížeči', 'en' => 'view it in web browser.', 'de' => 'Öffnen Sie das im Browser.', 'sk' => 'Otvorte si ho v prehliadači. ');
    $nechcete1 = array('cs' => 'Nechcete-li již dostávat tento newsletter, klikněte na', 'en' => 'If you do not wish to receive further emails,', 'de' => 'Falls Sie sich kein E-bulletin zu bekommen mehr wünschen,', 'sk' => 'Nechcete už dostávať tento newsletter, kliknite na');
    $nechcete2 = array('cs' => 'Odhlášení e-bulletinu', 'en' => 'Click here to unsubscribe.', 'de' => 'Das e-Bulletin abmelden ', 'sk' => '');
    $nechcete3 = array('cs' => 'odkaz pro odhlášení ze seznamu příjemců', 'en' => 'clik here.', 'de' => 'teilen Sie es uns bitte mit.', 'sk' => 'odkaz pre odhlásenie sa zo zoznamu príjemcou.');
    $fb1 = array('cs' => 'Modulární architektuře můžete fandit také na:', 'en' => 'You can support modular architecture at', 'de' => 'Für die Fans der modularen Architektur gibt es die Seiten', 'sk' => 'Modulárnu architektúru môžete podporiť aj na:');
    $fb2 = array('cs' => 'Facebook pro fanoušky Modulární architektury', 'en' => 'Facebook for fans of Modular architecture', 'de' => 'Facebook für Fans der Modulararchitektur', 'sk' => '');


    $hlavni_img = image_style_url('x607-0', $content['field_basic_img']['#items'][0]['uri']);
    $body = strtr($body, array(
        '{datum}' => $_POST['datum'],
        '{hlavni_nadpis}' => $_POST['nadpis'],
        '{hlavni_img}' => $hlavni_img,
        '{hlavni_text}' => $_POST['area'],
        '{clanky}' => $text_clanku,
        '{nezobrazuje1}' => $nezobrazuje1[$node->language],
        '{nezobrazuje2}' => $nezobrazuje2[$node->language],
        '{nezobrazuje3}' => $nezobrazuje3[$node->language],
        '{nechcete1}' => $nechcete1[$node->language],
        '{nechcete2}' => $nechcete2[$node->language],
        '{nechcete3}' => $nechcete3[$node->language],
        '{fb1}' => $fb1[$node->language],
        '{fb2}' => $fb2[$node->language],
    ));


    echo '<div style="height:150px"></div>' . $body . '<br />';

    echo '<textarea style="height: 400px; width: 70%; margin: auto">' . $body . '</textarea>';

} else {
//    dpm($content);
//    dpm($node);
    ?>
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

    <style>
        .textarea {
            height: 150px;
        }
    </style>
    <div class="m-section l-detail-page">
        <div class="row">
            <article class="m-reference">
                <br/>
                <br/>

                <form method="post" action="">
                    <label for="nadpis">Nadpis</label><input name="nadpis" id="nadpis" value="<?= $title ?>">
                    <br/>
                    <br/>
                    <label for="nadpis">Datum</label><input name="datum" id="datum"
                                                            value="<?= $content['field_basic_popis']['#items'][0]['value'] ?>">
                    <br/>
                    <br/>
                    <label for="area">Hlavní text</label> <textarea class="textarea" name="area" id="area">
         <?= $content['field_ebulletin_text']['#items'][0]['value'] ?>
     </textarea>

                    <?php
                    foreach ($content['field_bulletin_reference']['#items'] AS $poradi => $cast) {
                        $clanek = $cast['entity'];

                        if ($clanek->type == 'reference') {
                            $text = $clanek->field_reference_text[$node->language][0]['value'];
                        } else {
                            $text = $clanek->field_zpravodaj_text[$node->language][0]['value'];
                        }
                        ?>
                        <br/>
                        <br/>
                        <label for="area<?= $poradi ?>"><?= $clanek->type ?> - <?= $clanek->title ?></label><textarea
                            class="textarea" name="area<?= $poradi ?>" id="area<?= $poradi ?>">
<?= $text ?>
     </textarea>
                        <script>
                            CKEDITOR.replace('area<?=$poradi?>');
                        </script>
                    <?php
                    }
                    ?>
                    <input type="hidden" name="odeslano"
                           value="<?= count($content['field_bulletin_reference']['#items']) ?>"/>
                    <button type="submit" value="vytvořit html">vytvořit htmls</button>

                </form>
            </article>
        </div>
    </div>
    <script>
        CKEDITOR.replace('area');
    </script>
<?php
}
}
?>
