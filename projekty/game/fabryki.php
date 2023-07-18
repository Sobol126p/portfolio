<div class="fabryki-blok" id="fabryki-blok">
    <div class="sklep-blok-wew">
        <div class="s1">
            <div class="s2" style="font-size: 50px;font-weight: 700; cursor:pointer; color: rgba(113, 113, 113, 0.471);" onclick="produkcja_on()">Produkcja</div>
            <div class="s2" style="font-size: 50px;font-weight: 700; cursor:default; color: black;">Fabryka</div>
        </div>
        <div class="t1_sklep"></div>
        <div class="t1_sklep"></div>

        <div class="t1_sklep">
            <?php echo '<div style="float: left; cursor:default;" class="sklep_text1"> LVL Fabryki - ' . $_SESSION['lvl_fabryka'] . '</div>'; ?>
            <div style="float: left; cursor:default; left:60px; position:relative;" class="sklep_text1" id="f1"></div>
        </div>

        <div class="t1_sklep">
            <input class="button-zbuduj" type="button" value="ulepsz" id="lvl-fabryka">
        </div>
        <br>
        <div class="t1_sklep">
            <?php echo '<div style="float: left; cursor:default;" class="sklep_text1"> Pracownicy - ' . $_SESSION['pracownicy'] . '</div>'; ?>
            <div style="float: left; cursor:default; left:60px; position:relative;" class="sklep_text1" id="pracownik"></div>
        </div>

        <div class="t1_sklep">
            <input class="button-zbuduj" type="button" value="zatrudnij" id="pracownicy">
            <input class="button-zbuduj" type="button" value="zwolnij" id="pracownicy_zwolnij">
        </div>
        <div style="display:none; height:80px; width:80%; background-color:white;
          border:1px dashed black; margin-left:auto; margin-right:auto; border-radius:15px;" id="koszt_fabr">
            <input type="button" value="ulepsz" id="ulepsz">
        </div>
        <div style="display:none; height:100px; width:80%; background-color:white;
          border:1px dashed black; margin-left:auto; margin-right:auto; border-radius:15px;" id="koszt_pracownik">
            <input type="button" value="zatrudnij" id="zatrudnij">
        </div>
    </div>
</div>