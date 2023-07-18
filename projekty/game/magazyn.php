<div class="magazyn-blok" id="magazyn-blok">
    <div class="sklep-blok-wew">
        <div class="s1">
            <div class="s2" style="font-size: 50px;font-weight: 700; cursor:default; color: black;">Sprzedaż</div>
            <div class="s2" style="font-size: 50px;font-weight: 700; cursor:pointer; color: rgba(113, 113, 113, 0.471);" onclick="sklep_on()">Sklep</div>

        </div>
        <div class="t1_sklep"></div>
        <div class="t1_sklep"></div>
        <?php
        echo '<div class="t1_sklep" style="cursor:pointer;" id="wykalaczki">
           Wykałaczki: ' . $_SESSION['wykalaczki'] . '    <input type="button" value="sprzedaj" style=" margin-left:20px;" id="sell_wykalaczki">
        </div>

        <div class="t1_sklep" style="cursor:pointer;" id="dlugopisy">
           Długopisy: ' . $_SESSION['dlugopisy'] . '  <input type="button" value="sprzedaj" style=" margin-left:20px;" id="sell_dlugopisy">
        </div>

        <div class="t1_sklep" style="cursor:pointer;" id="kubki">
           Kubki: ' . $_SESSION['kubki'] . '  <input type="button" value="sprzedaj" style=" margin-left:20px;" id="sell_kubki">
        </div>

        <div class="t1_sklep" style="cursor:pointer;" id="telefony">
           Telefony: ' . $_SESSION['telefony'] . '  <input type="button" value="sprzedaj" style=" margin-left:20px;" id="sell_telefony">
        </div>

        <div class="t1_sklep" style="cursor:pointer;" id="rowery">
            Rowery: ' . $_SESSION['rowery'] . '  <input type="button" value="sprzedaj" style=" margin-left:20px;" id="sell_rowery">
        </div>

        <div class="t1_sklep" style="cursor:pointer;" id="samochody">
           Samochody: ' . $_SESSION['samochody'] . '  <input type="button" value="sprzedaj" style=" margin-left:20px;" id="sell_samochody">
        </div>'; ?>
        <br>



    </div>
</div>