var js = document.getElementById('js');
var mail = document.getElementById('mail');

var logo_pr = document.getElementById('logo_pr');



function wejscie_main() {

  var conteiner_pr = document.getElementById('str_glowna');
  var info_index_pr = document.getElementById('info_index_pr'); 
  var admin_grid_gap = document.getElementById('admin_grid_gap'); 


  if (window.innerHeight > window.innerWidth) {
    conteiner_pr.style.width = "100%";
    info_index_pr.style.marginBottom = "1px";
    info_index_pr.style.top = "130px";
    admin_grid_gap.style.gap = "30px";
  }
  else {
    conteiner_pr.style.right = "10%";
    //logo_pr.style.display = "block";
    info_index_pr.style.marginBottom = "400px";
    info_index_pr.style.top = "180px";
    admin_grid_gap.style.gap = "60px";
    /*document.getElementById('admin_card_1').style.top = "100px";
    document.getElementById('admin_card_2').style.top = "50px";
    document.getElementById('admin_card_3').style.top = "1px";
    document.getElementById('admin_card_4').style.top = "1px";
    document.getElementById('admin_card_5').style.top = "50px";
    document.getElementById('admin_card_6').style.top = "100px";*/
  }

}


function wejscie_sklep() {

  var sklep_pr = document.getElementById('sklep_pr');

  if (window.innerHeight > window.innerWidth) {
    sklep_pr.style.width = "100%";
  }
  else {
    sklep_pr.style.right = "10%";
    //logo_pr.style.display = "block";
  }

}

function wejscie_register() {

  var reg_pr = document.getElementById('reg_pr');

  if (window.innerHeight > window.innerWidth) {
    reg_pr.style.width = "100%";
  }
  else {
    reg_pr.style.right = "10%";
    //logo_pr.style.display = "block";
  }

}

function wejscie_admin() {

  var admin_pr = document.getElementById('admin_pr');

  if (window.innerHeight > window.innerWidth) {
    admin_pr.style.width = "100%";
  }
  else {
    admin_pr.style.right = "10%";
    //logo_pr.style.display = "block";
  }

}


function wejscie_profil() {

  var profil_pr = document.getElementById('profil_pr');
  var modal_s_c = document.getElementById('modal-sett-content');
  var s_p_button = document.getElementById('sett_profil_button');

  if (window.innerHeight > window.innerWidth) {
    profil_pr.style.width = "100%";
    modal_s_c.style.width = "95%";
    s_p_button.style.marginTop = "5px";
  }
  else {
    profil_pr.style.right = "10%";
    modal_s_c.style.width = "470px";
    //logo_pr.style.display = "block";
  }

}


function wejscie_kontakt() {

  var kontakt_pr = document.getElementById('kontakt_pr');

  if (window.innerHeight > window.innerWidth) {
    kontakt_pr.style.width = "100%";
  }
  else {
    kontakt_pr.style.right = "10%";
    //logo_pr.style.display = "block";
  }

}



/*mail.onclick = function () {
  let email = 'małpa@gmail.com';
  let copyText = email
  copyText.focus();
  copyText.select();
 
  try {
    document.execCommand(copyText);
  } catch (err) {
  }
  alert("Skopiowano adres email małpa@wp.pl do schowka!");
};*/

var sklep = document.getElementById('sklep');
var profil = document.getElementById('profil');
var forum = document.getElementById('forum');

var link_strona_glowna = document.getElementById('link_strona_glowna');
var link_sklep = document.getElementById('link_sklep');
var link_profil = document.getElementById('link_profil');
var link_forum = document.getElementById('link_forum');
var link_kontakt = document.getElementById('link_kontakt');



/*
link_sklep.onclick = function () {
  window.open("sklep.html", "_self");
};

link_profil.onclick = function () {
  window.open("profil.html", "_self");
};

link_kontakt.onclick = function () {
  window.open("kontakt.html", "_self");
};
*/

var ostatni_div = document.getElementById('ostatni_div');

function Function_topnav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    document.getElementById('ostatni_div').style.paddingBottom = "5px";
    x.className += " responsive";
  } else {
    x.className = "topnav";
    document.getElementById('ostatni_div').style.paddingBottom = "1px";
  }
}


/*var sklep_menu_pr = document.getElementById('sklep_menu_pr');

setInterval(function () { console.log(window.innerWidth + " px"); }, 1000);

console.log(window.innerWidth);

var news_pr = document.getElementById('news_pr');


setInterval(function () {

  if(window.innerWidth<=1685 && window.innerWidth>=1020)
  {
    news_pr.style.gridTemplateColumns = 0.66 * (window.innerWidth/3) + "px " + 0.30 * (window.innerWidth/3) + "px";
    news_pr.style.gridTemplateRows = 2/3 * (window.innerWidth/3) + "px " + 1/3 * (window.innerWidth/3) + "px";
    console.log(window.innerWidth/3 + " " + window.innerWidth/3);
    console.log("ide czy nie ide?");
  }
}, 10);



 <div class="nav_bar_panel_text" id="link_strona_glowna">Strona Główna</div>
            <div class="nav_bar_panel_text" id="link_sklep">Sklep</div>
            <div class="nav_bar_panel_text" id="link_profil">Profil</div>
            <div class="nav_bar_panel_text" id="link_kontakt">Kontakt</div>
            <a href="https://discord.gg/JyyEW3jz" class="nav_bar_panel_text"><i
                    class="bi bi-discord discord_icon_link"></i></a>



*/




/*
 <div class="grid_tytul">
                <div></div>
                <div class="text_1 left">Sklep:</div>
                <div></div>
            </div>


            <sklep class="sklep_menu_pr" id="sklep_menu_pr">
                <div class="galeria_zakupy1"></div>
                <div class="galeria_zakupy2"></div>
                <div class="galeria_zakupy3"></div>
                <div class="galeria_zakupy4"></div>
                <div class="galeria_zakupy5"></div>
                <div class="galeria_zakupy6"></div>
            </sklep>

            <div style="top: 580px; position: relative;">
                dupa
            </div>
            */

