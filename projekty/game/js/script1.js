var sklep_blok = document.getElementById('sklep-blok');
var fabryki_blok = document.getElementById('fabryki-blok');
var produkcja_blok = document.getElementById('produkcja-blok');
var magazyn_blok = document.getElementById('magazyn-blok');
var sklep_blok = document.getElementById('sklep-blok');
var produkcja_cena = document.getElementById('produkcja-cena');
var produkcja_koszt = document.getElementById('produkcja-koszt');
var koszt_fabr = document.getElementById('koszt_fabr');


function reg_link() {
    window.open('../game/reg.php', '_self', 'locationbar=yes,menubar=yes,personalbar=yes,scrollbars=yes,statusbar=yes,toolbar=yes');
    window.focus();
}

function log_link() {
    window.open('../game/index.php', '_self', 'locationbar=yes,menubar=yes,personalbar=yes,scrollbars=yes,statusbar=yes,toolbar=yes');
    window.focus();
}



function fabryki_on() {
    fabryki_blok.style.display = 'block';
    produkcja_blok.style.display = "none";

}

function produkcja_on() {
    produkcja_blok.style.display = 'block';
    fabryki_blok.style.display = "none";

}

function sprzedaz_on() {
    magazyn_blok.style.display = 'block';
    sklep_blok.style.display = 'none';

}

function sklep_on() {
    sklep_blok.style.display = 'block';
    magazyn_blok.style.display = 'none';

}



var lvl_fabryka = 0;
var pracownik = 0;
var pracownik_zwolniony = 0;
var pracownik_akcja = 0;
var f3 = 0;
var koszt = document.getElementById('cena-baner');
var pracownicy = document.getElementById('pracownicy');
var koszt_fabr = document.getElementById('koszt_fabr');
var koszt_pracownik = document.getElementById('koszt_pracownik');


$(document).on("click", "#lvl-fabryka", function () {
    lvl_fabryka++;
    koszt_fabr.style.display = 'block';
    document.getElementById('koszt_fabr').innerHTML = '+' + lvl_fabryka * 2 + '% ilości produkowanych towarów, Cena: ' + lvl_fabryka * 100000 + '<input type="button" style="margin-top:10px;" value="ulepsz" id="ulepsz"><input style="margin-left:10px;" type="button" value="anuluj" id="anuluj-fabryka">';
    document.getElementById('f1').innerHTML = '+' + lvl_fabryka;
}); +

    $(document).on("click", "#pracownicy", function () {
        pracownik++;
        pracownik_akcja = 1;
        koszt_pracownik.style.display = 'block';
        document.getElementById('koszt_pracownik').innerHTML = '+' + 1 * pracownik + '% ilości produkowanych towarów i -' + (400 * pracownik) +
            ' dodatkowej wypłaty dla pracowników na 1 produkcje <input type="button" style="margin-top:10px;" value="zatrudnij" id="zatrudnij"><input style="margin-left:10px;" type="button" value="anuluj" id="anuluj-pracownicy">';
        document.getElementById('pracownik').innerHTML = '+' + pracownik;
    });

$(document).on("click", "#pracownicy_zwolnij", function () {
    pracownik_zwolniony++;
    pracownik_akcja = 2;
    koszt_pracownik.style.display = 'block';
    if (pracownik_zwolniony == 1) {
        document.getElementById('koszt_pracownik').innerHTML = 'Zwolnić ' + pracownik_zwolniony + ' pracownika? <br><input type="button" style="margin-top:10px;" value="zwolnij" id="zwolnij"><input style="margin-left:10px;" type="button" value="anuluj" id="anuluj-pracownicy">';
    } else { document.getElementById('koszt_pracownik').innerHTML = 'Zwolnić ' + pracownik_zwolniony + ' pracowników? <br><input type="button" style="margin-top:10px;" value="zwolnij" id="zwolnij"><input style="margin-left:10px;" type="button" value="anuluj" id="anuluj-pracownicy">'; }
    document.getElementById('pracownik').innerHTML = '-' + pracownik_zwolniony;
});

$(document).on("click", "#anuluj-pracownicy", function () {
    pracownik = 0;
    pracownik_zwolniony = 0;
    pracownik_akcja = 0;
    koszt_pracownik.style.display = 'none';
    document.getElementById('pracownik').innerHTML = '';
});

$(document).on("click", "#anuluj-fabryka", function () {
    lvl_fabryka = 0;
    koszt_fabr.style.display = 'none';
    document.getElementById('f1').innerHTML = '';
});



$(document).on("click", "#ulepsz", function () {
    $.ajax({
        url: "functions/fabryki_add.php",
        method: "POST",
        data: {
            pracownik_akcja: pracownik_akcja,
            lvl_add: lvl_fabryka
        },
        success: function () {
            location.reload();
        },

    });
});

$(document).on("click", "#zatrudnij", function () {
    $.ajax({
        url: "functions/pracownicy_add.php",
        method: "POST",
        data: {
            pracownik_akcja: pracownik_akcja,
            pracownik_add: pracownik
        },
        success: function () {
            location.reload();
        },

    });
});

$(document).on("click", "#zwolnij", function () {
    $.ajax({
        url: "functions/pracownicy_add.php",
        method: "POST",
        data: {
            pracownik_akcja: pracownik_akcja,
            pracownik_zwolniony: pracownik_zwolniony
        },
        success: function () {
            location.reload();
        },

    });
});


/////////////////////////////////////////////////----PRODUKCJA----/////////////////////////////////////////////////////////////////////

var wybor_produkcji = 0;

$(document).on("click", "#wykalaczki", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba <b>250 towarów</b>";
    wybor_produkcji = 1;

});

$(document).on("click", "#dlugopisy", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba <b>600 towarów</b>";
    wybor_produkcji = 2;

});

$(document).on("click", "#kubki", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba <b>1000 towarów</b>";
    wybor_produkcji = 3;

});

$(document).on("click", "#telefony", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba <b>2500 towarów</b>";

    wybor_produkcji = 4;
});

$(document).on("click", "#rowery", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba <b>8000 towarów</b>";

    wybor_produkcji = 5;
});

$(document).on("click", "#samochody", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba <b>50000 towarów</b>";
    wybor_produkcji = 6;

});

$(document).on("click", "#start-produkcji", function () {

    $.ajax({
        url: "functions/produkcja_start.php",
        method: "POST",
        data: {
            wybor: wybor_produkcji
        },
        success: function () {
            location.reload();
        },

    });

});


$(document).on("click", "#anuluj-produkcje", function () {

    produkcja_cena.style.display = "none";

    produkcja_koszt.innerHTML = "";
    wybor_produkcji = 0;

});



///////////////////////////////////////////////////----SPRZEDAŻ----////////////////////////////////////////////////////////////

$(document).on("click", "#sell_wykalaczki", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 1
        },
        success: function () {
            location.reload();
        },

    });

});

$(document).on("click", "#sell_dlugopisy", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 2
        },
        success: function () {
            location.reload();
        },

    });

});

$(document).on("click", "#sell_kubki", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 3
        },
        success: function () {
            location.reload();
        },

    });

});

$(document).on("click", "#sell_telefony", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 4
        },
        success: function () {
            location.reload();
        },

    });
});

$(document).on("click", "#sell_rowery", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 5
        },
        success: function () {
            location.reload();
        },

    });
});

$(document).on("click", "#sell_samochody", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 6
        },
        success: function () {
            location.reload();
        },

    });

});


////////////////////////////////////////////////////////////////----SKLEP----//////////////////////////////////////////////////////////////////////////////

$(document).on("click", "#kup-towar", function () {
    var ilosc_towaru = document.getElementById("ilosc-towar").value;

    $.ajax({
        url: "functions/zakupy.php",
        method: "POST",
        data: {
            ilosc_towaru: ilosc_towaru
        },
        success: function () {
            location.reload();
        }
    });

});

////////////////////////////////////////////////////////////////----TOP 5----////////////////////////////////////////////////////////////////////////////

var monety_top = document.getElementById('monety_top');
var fabryki_top = document.getElementById('fabryki_top');
var pracownicy_top = document.getElementById('pracownicy_top');
var top_monety_button = document.getElementById('top5_monety');
var top_fabryki_button = document.getElementById('top5_fabryka');
var top_pracownicy_button = document.getElementById('top5_pracownicy');

$(document).on("click", "#top5_monety", function () {

    monety_top.style.display = 'block';
    fabryki_top.style.display = 'none';
    pracownicy_top.style.display = 'none';

    top_monety_button.style.fontWeight = '600';
    top_fabryki_button.style.fontWeight = '400';
    top_pracownicy_button.style.fontWeight = '400';


});

$(document).on("click", "#top5_fabryka", function () {

    monety_top.style.display = 'none';
    fabryki_top.style.display = 'block';
    pracownicy_top.style.display = 'none';

    top_monety_button.style.fontWeight = '400';
    top_fabryki_button.style.fontWeight = '600';
    top_pracownicy_button.style.fontWeight = '400';
});


$(document).on("click", "#top5_pracownicy", function () {

    monety_top.style.display = 'none';
    fabryki_top.style.display = 'none';
    pracownicy_top.style.display = 'block';

    top_monety_button.style.fontWeight = '400';
    top_fabryki_button.style.fontWeight = '400';
    top_pracownicy_button.style.fontWeight = '600';
});

function none_fabr()
{
    fabryki_top.style.display = 'none';
}

