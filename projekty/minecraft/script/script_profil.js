/*var update_modal = document.getElementById("update_sett");
var spanEdit = document.getElementById("spanEdit");
spanEdit.onclick = function () {
  update_modal.style.display = "block";
};
window.onclick = function (event) {
  if (event.target == update_modal) {
    update_modal.style.display = "none";
  };
};

document.getElementById('close_pr').onclick = function ()
{
  update_modal.style.display = "none";
};
*/



var profil_body = document.getElementById('profil_body');
var statystyki_body = document.getElementById('statystyki_body');
//var szukaj_profilu_body = document.getElementById('szukaj_profilu_body');

var profil = document.getElementById('profil');
var statystyki = document.getElementById('statystyki');
//var szukaj_profilu = document.getElementById('szukaj_profilu');

profil.onclick = function()
{

  profil_body.style.display = "block";
  statystyki_body.style.display = "none";
  //szukaj_profilu_body.style.display = "none";
};

statystyki.onclick = function()
{

  profil_body.style.display = "none";
  statystyki_body.style.display = "block";
  //szukaj_profilu_body.style.display = "none";
};

/*szukaj_profilu.onclick = function()
{
  alert('szukaj');
  profil_body.style.display = "none";
  statystyki_body.style.display = "none";
  szukaj_profilu_body.style.display = "block";
};

  
*/

var stt_elo = document.getElementById('stt_elo');
var stt_wygrane_areny = document.getElementById('stt_wygrane_areny');
var stt_liczba_zabitych = document.getElementById('stt_liczba_zabitych');

var Elo_body = document.getElementById('stt_elo_body');
var Wareny_body = document.getElementById('stt_wygrane_areny_body');
var Lzabitych_body = document.getElementById('stt_liczba_zabitych_body');

stt_elo.onclick = function()
{
  Elo_body.style.display = "block";
  Wareny_body.style.display = "none";
  Lzabitych_body.style.display = "none";
  console.log('klik1');
}


stt_wygrane_areny.onclick = function()
{
  Wareny_body.style.display = "block";
  Lzabitych_body.style.display = "none";
  Elo_body.style.display = "none";
  console.log('klik2');
}


stt_liczba_zabitych.onclick = function()
{
  Lzabitych_body.style.display = "block";
  Elo_body.style.display = "none";
  Wareny_body.style.display = "none";
  console.log('klik3');
}
