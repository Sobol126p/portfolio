var sklep_blok = document.getElementById('sklep-blok');
var fabryki_blok = document.getElementById('fabryki-blok');
var produkcja_blok = document.getElementById('produkcja-blok');
var magazyn_blok = document.getElementById('magazyn-blok');
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

function fabryki_off() {
    fabryki_blok.style.display = 'none';
}

function produkcja_on() {
    produkcja_blok.style.display = 'block';
    fabryki_blok.style.display = "none";

}

function produkcja_off() {
    produkcja_blok.style.display = 'none';
}

function sprzedaz_on() {
    magazyn_blok.style.display = 'block';

}

function sprzedaz_off() {
    magazyn_blok.style.display = 'none';
}


var lvl_fabryka = 0;
var pracownik = 0;
var f3 = 0;
var koszt = document.getElementById('cena-baner');
var pracownicy = document.getElementById('pracownicy');
var koszt_fabr = document.getElementById('koszt_fabr');
var koszt_pracownik = document.getElementById('koszt_pracownik');


$(document).on("click", "#lvl-fabryka", function () {
    lvl_fabryka++;
    koszt_fabr.style.display = 'block';
    document.getElementById('koszt_fabr').innerHTML = '+'+lvl_fabryka+'% ilości produkowanych towarów, Cena: '+lvl_fabryka*100000 +'<input type="button" style="margin-top:10px;" value="ulepsz" id="ulepsz">';
});

$(document).on("click", "#pracownicy", function () {
    pracownik++;
    koszt_pracownik.style.display = 'block';
    document.getElementById('koszt_pracownik').innerHTML = '+' + (0.1 * pracownik).toFixed(1) + '% ilości produkowanych towarów i -' + (400 * pracownik) + 
' dodatkowej wypłaty dla pracowników na 1 produkcje <input type="button" style="margin-top:10px;" value="zatrudnij" id="zatrudnij">';
    document.getElementById('pracownik').innerHTML = '+' + pracownik;
});


$(document).on("click", "#ulepsz", function () {
    $.ajax({
        url: "functions/fabryki_add.php",
        method: "POST",
        data: {
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
            pracownik_add: pracownik
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

    produkcja_koszt.innerHTML = "Do produkcji potrzeba 250 towarów,  przewidywany zysk - 1000";
    wybor_produkcji = 1;

});

$(document).on("click", "#dlugopisy", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba 600 towarów,  przewidywany zysk - 3000";
    wybor_produkcji = 2;

});

$(document).on("click", "#kubki", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba 1000 towarów,  przewidywany zysk - 4500";
    wybor_produkcji = 3;

});

$(document).on("click", "#telefony", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba 2500 towarów,  przewidywany zysk - 15000";

    wybor_produkcji = 4;
});

$(document).on("click", "#rowery", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba 8000 towarów,  przewidywany zysk - 40000";

    wybor_produkcji = 5;
});

$(document).on("click", "#samochody", function () {

    produkcja_cena.style.display = "block";

    produkcja_koszt.innerHTML = "Do produkcji potrzeba 50000 towarów,  przewidywany zysk - 200000";
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


///////////////////////////////////////////////////----SPRZEDAŻ----////////////////////////////////////////////////////////////

$(document).on("click", "#sell_wykalaczki", function () {

    $.ajax({
        url: "functions/sprzedaz.php",
        method: "POST",
        data: {
            wybor: 1
        },
        success: function () {
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
