
var tablica = [];
var kolory = ['red', 'orange', 'yellow', 'rgb(42, 236, 100)', 'green', 'rgb(42, 187, 236)', 'blue', 'violet', 'black', 'grey', 'white'];

var idm;

function dwu_wym_tab() {

    var i;
    var j;

    for (i = 0; i <= 10; i++) {
        tablica[i] = [];
        for (j = 0; j <= 10; j++) {
            var id = +i + '' + j;
            idm = id;
            //var id1 = i+j;
            tablica[i][j] = "<div id=" + id + " onmousemove='kwadrat_id(" + i + ',' + j + ")' class='kwadrat'>" + "</div>";
            document.getElementById('tab_kwa').innerHTML += tablica[i][j];
console.log(id);

        }
        document.getElementById('tab_kwa').innerHTML += "<br>";
    }

    koloryTabela();
}

var wybrany_kolor = 'yellow';

var click;

//id.addEventListener("click", () => { document.getElementById(id).style.backgroundColor = wybrany_kolor;});
//document.getElementById('tab_kwa').addEventListener("mousedown", () => { click = true; console.log('kliknieto')});
  //  document.getElementById('tab_kwa').addEventListener("mouseup", () => { click = false; console.log('puść') });

function kwadrat_id(i, j) {
    //console.log('klik')
    id = +i + '' + j;
    if(!click){
    document.getElementById('tab_kwa').addEventListener("mousedown", () => { click = true;});
    document.getElementById('tab_kwa').addEventListener("mouseup", () => { click = false;});
    }
    document.getElementById('tab_kwa').addEventListener("click", () => { document.getElementById(id).style.backgroundColor = wybrany_kolor;});

    if (click) {
        document.getElementById(id).style.backgroundColor = wybrany_kolor;
    }
    console.log('błąd '+id);
    //document.getElementById('tab_kwa').addEventListener("mousedown", () => { click = true; console.log('kliknieto')});
   // document.getElementById('tab_kwa').addEventListener("mouseup", () => { click = false; console.log('puść') });

    /*if (x <= 10 || x) {
        id = '0' + x;
    }
    else {
        id = x;
    }*/

    //console.log(id.toString());
    // console.log('Kliknię to: ' + id);
    //console.log('Kliknię to: ' + x);
    //console.log('Klik');
    //console.log

    //console.log('Kliknię to: '.x);


}



function koloryTabela() {
    var k = 0;

    for (k = 0; k <= 10; k++) {
        document.getElementById('kolory').innerHTML += "<div class='kwadrat' style='background-color:" + kolory[k] + ";' onclick='wyborKoloru(" + k + ")'></div>";
    }
}

function wyborKoloru(k) {
    wybrany_kolor = kolory[k];
}


