
var click = document.getElementById('click');
var click1 = document.getElementById('click1');
var click2 = document.getElementById('click2');
var click3 = document.getElementById('click3');
var click4 = document.getElementById('click4');
var click5 = document.getElementById('click5');
var napisP = document.getElementById('napisP');
var r;
var g;
var b;
var y;
var i = 10;
var point = 0;
var lk = 1;
var l1;
var l2;
var l3;
var l4;
var liczbaLosowa;
var tab_top = [];
var tab_left = [];
var tab_top_direction = [];
var tab_left_direction = [];
var kolory = 0;
var kolor = 1;
var sound;
var start = 0;
var start1 = document.getElementById("start");
var update = document.getElementById("update");
//var muz1 = new Audio("audio/anastasia.mp3");
//var muz2 = new Audio("audio/chiński rap.mp3");
//var muz3 = new Audio("audio/flume.mp3");
//var muz4 = new Audio("audio/hardbass.mp3");
//var muz5 = new Audio("audio/niewiem.mp3");
var muz_kp;
var event_sound;
var event_time = 0;
var e2 = 2;
var oc = 0;
var sec = 0;
var wpzk = 0;
var speed_game = 2;
var speed_game_save;
var speed_game_point = 0;
var pt = document.getElementById("pt");
var szerokosc = 0;
var wysokosc = 0;
var los = 0;
var ebs = -1;
var ebp = -1;
var bonus_alert = 0;
document.getElementById("pt").innerHTML = "Statystyki - strzałka w góre";

console.log(window.innerWidth);

function go() {
     start = start + 1;
     start1.style.display = "none";
     pt.style.display = "block";
     losuj_kolor();
     name_color();
     speed_add();
}

setInterval(function () {
     if (szerokosc != (window.innerWidth - 100) || wysokosc != (window.innerHeight - 100)) {
          szerokosc = (window.innerWidth - 100);
          wysokosc = (window.innerHeight - 100);
     }
}, 50);

function losuj_kolor() {
     szer1 = szerokosc = (window.innerWidth - 100);
     wys1 = wysokosc = (window.innerHeight - 100);
     if (i > 0) {
          tab_left[0] = Math.random() * (szerokosc - 100) + 2;
          tab_top[0] = Math.random() * (wysokosc - 100) + 2;
          console.log(tab_left[0]);
          console.log(tab_top[0]);
          tab_left[1] = Math.random() * (szerokosc - 100) + 2;
          tab_top[1] = Math.random() * (wysokosc - 100) + 2;
          tab_left[2] = Math.random() * (szerokosc - 100) + 2;
          tab_top[2] = Math.random() * (wysokosc - 100) + 2;
          tab_left[3] = Math.random() * (szerokosc - 100) + 2;
          tab_top[3] = Math.random() * (wysokosc - 100) + 2;

          click.style.left = tab_left[0] + 'px';
          click.style.top = tab_top[0] + 'px';
          click1.style.left = tab_left[1] + 'px';
          click1.style.top = tab_top[1] + 'px';
          click2.style.left = tab_left[2] + 'px';
          click2.style.top = tab_top[2] + 'px';
          click3.style.left = tab_left[3] + 'px';
          click3.style.top = tab_top[3] + 'px';

          liczbaLosowa = (Math.floor(Math.random() * 100 + 1));

          r = 1;
          g = 2;
          b = 3;
          y = 4;

          if (liczbaLosowa % 10 == 0) {
               r = 3;
               g = 1;
               b = 4;
               y = 2;
          }
          else if (liczbaLosowa % 3 == 0) {
               r = 4;
               g = 3;
               b = 2;
               y = 1;
          }
          else if (liczbaLosowa % 2 == 0) {
               r = 2;
               g = 4;
               b = 1;
               y = 3;
          }

          click.style.display = "block";
          click1.style.display = "block";
          click2.style.display = "block";
          click3.style.display = "block";
          i = i * (-1);
     }
}
setInterval(ruch_kolorów, 15);
function ruch_kolorów() {
     //tab 0  ---------------------------------------
     if (tab_left[0] >= (szerokosc - 20) || tab_left[0] <= 0) {
          tab_left_direction[0] = tab_left_direction[0] * (-1);
     }
     if (tab_top[0] >= (wysokosc - 20) || tab_top[0] <= 0) {
          tab_top_direction[0] = tab_top_direction[0] * (-1);
     }
     //tab 1  ---------------------------------------
     if (tab_left[1] >= (szerokosc - 20) || tab_left[1] <= 0) {
          tab_left_direction[1] = tab_left_direction[1] * (-1);
     }
     if (tab_top[1] >= (wysokosc - 20) || tab_top[1] <= 0) {
          tab_top_direction[1] = tab_top_direction[1] * (-1);
     }
     //tab 2  ---------------------------------------
     if (tab_left[2] >= (szerokosc - 20) || tab_left[2] <= 0) {
          tab_left_direction[2] = tab_left_direction[2] * (-1);
     }
     if (tab_top[2] >= (wysokosc - 20) || tab_top[2] <= 0) {
          tab_top_direction[2] = tab_top_direction[2] * (-1);
     }
     //tab 3  ---------------------------------------
     if (tab_left[3] >= (szerokosc - 20) || tab_left[3] <= 0) {
          tab_left_direction[3] = tab_left_direction[3] * (-1);
     }
     if (tab_top[3] >= (wysokosc - 20) || tab_top[3] <= 0) {
          tab_top_direction[3] = tab_top_direction[3] * (-1);
     }

     tab_left[0] = tab_left[0] + tab_left_direction[0];
     tab_top[0] = tab_top[0] + tab_top_direction[0];
     click.style.left = tab_left[0] + 'px';
     click.style.top = tab_top[0] + 'px';
     tab_left[1] = tab_left[1] + tab_left_direction[1];
     tab_top[1] = tab_top[1] + tab_top_direction[1];
     click1.style.left = tab_left[1] + 'px';
     click1.style.top = tab_top[1] + 'px';
     tab_left[2] = tab_left[2] + tab_left_direction[2];
     tab_top[2] = tab_top[2] + tab_top_direction[2];
     click2.style.left = tab_left[2] + 'px';
     click2.style.top = tab_top[2] + 'px';
     tab_left[3] = tab_left[3] + tab_left_direction[3];
     tab_top[3] = tab_top[3] + tab_top_direction[3];
     click3.style.left = tab_left[3] + 'px';
     click3.style.top = tab_top[3] + 'px';
}

function event_ball_pkt_position() {
     tab_left[4] = Math.random() * (szerokosc - 100) + 2;
     tab_top[4] = Math.random() * (wysokosc - 100) + 2;

     click4.style.left = tab_left[4] + 'px';
     click4.style.top = tab_top[4] + 'px';

     click4.style.display = "block";
     event_sound = new Audio("audio/magic.mp4");
     event_sound.play();

}

function event_ball_slow_position() {
     tab_left[5] = Math.random() * (szerokosc - 100) + 2;
     tab_top[5] = Math.random() * (wysokosc - 100) + 2;

     click5.style.left = tab_left[5] + 'px';
     click5.style.top = tab_top[5] + 'px';

     click5.style.display = "block";
     event_sound = new Audio("audio/magic.mp4");
     event_sound.play();
}

setInterval(event_ruch, 15);
function event_ruch() {
     if (tab_left[4] >= (szerokosc - 65) || tab_left[4] <= 0) {
          tab_left_direction[4] = tab_left_direction[4] * (-1);
     }
     if (tab_top[4] >= (wysokosc - 65) || tab_top[4] <= 0) {
          tab_top_direction[4] = tab_top_direction[4] * (-1);
     }
     tab_left[4] = tab_left[4] + tab_left_direction[4];
     tab_top[4] = tab_top[4] + tab_top_direction[4];
     click4.style.left = tab_left[4] + 'px';
     click4.style.top = tab_top[4] + 'px';

     if (tab_left[5] >= (szerokosc - 65) || tab_left[5] <= 0) {
          tab_left_direction[5] = tab_left_direction[5] * (-1);
     }
     if (tab_top[5] >= (wysokosc - 65) || tab_top[5] <= 0) {
          tab_top_direction[5] = tab_top_direction[5] * (-1);
     }
     tab_left[5] = tab_left[5] + tab_left_direction[5];
     tab_top[5] = tab_top[5] + tab_top_direction[5];
     click5.style.left = tab_left[5] + 'px';
     click5.style.top = tab_top[5] + 'px';
}


window.addEventListener('keydown', function (event) {
     switch (event.keyCode) {
          case 38:
               if (oc == 0) {
                    update.style.display = "block";
                    oc = 1;
                    stats();
               }
               else if (oc == 1) {
                    update.style.display = "none";
                    oc = 0;
                    stats();
               }
               break;
     }
}, false);

setInterval(function () {
     if (start >= 1) {
          sec = sec + 1;
     }
     if (oc == 1) {
          stats();
     }
     if (e2 <= 1) {
          event_time++;
          if (event_time == 10) {
               speed_game = speed_game_save;
               speed_add();
               e2 = e2 * (-1);
          }
     }
}, 1000);

function stats() {
     document.getElementById("statp").innerHTML = "Punkty: " + point;
     document.getElementById("statpc").innerHTML = "Zdobyte punkty na 1 sekundę: " + Math.round((point / sec) * 100) / 100;
     document.getElementById("statc").innerHTML = "Czas gry: " + sec + " sec.";
     document.getElementById("statkc").innerHTML = "Zdobyte kolory na 1 sekendę: " + Math.round((wpzk / sec) * 100) / 100;
     document.getElementById("statk").innerHTML = "Kolory: " + wpzk;
}

function name_color() {

     if (kolor == 1) {
          document.getElementById("napisP").innerHTML = "Czerwony";
          napisP.style.color = "rgba(255, 0, 0, 0.5)";
     }
     else if (kolor == 2) {
          document.getElementById("napisP").innerHTML = "Zielony";
          napisP.style.color = "rgba(0, 128, 0, 0.479)";
     }
     else if (kolor == 3) {
          document.getElementById("napisP").innerHTML = "Niebieski";
          napisP.style.color = "rgba(0, 0, 255, 0.493)";
     }
     else if (kolor == 4) {
          document.getElementById("napisP").innerHTML = "Żółty";
          napisP.style.color = "rgba(255, 255, 0, 0.521)";
     }
     if (liczbaLosowa % 10 == 0) {
          if (kolor == 3) {
               document.getElementById("napisP").innerHTML = "Czerwony";
               napisP.style.color = "rgba(255, 0, 0, 0.5)";
          }
          else if (kolor == 1) {
               document.getElementById("napisP").innerHTML = "Zielony";
               napisP.style.color = "rgba(0, 128, 0, 0.479)";
          }
          else if (kolor == 4) {
               document.getElementById("napisP").innerHTML = "Niebieski";
               napisP.style.color = "rgba(0, 0, 255, 0.493)";
          }
          else if (kolor == 2) {
               document.getElementById("napisP").innerHTML = "Żółty";
               napisP.style.color = "rgba(255, 255, 0, 0.521)";
          }
     }
     else if (liczbaLosowa % 3 == 0) {
          if (kolor == 4) {
               document.getElementById("napisP").innerHTML = "Czerwony";
               napisP.style.color = "rgba(255, 0, 0, 0.5)";
          }
          else if (kolor == 3) {
               document.getElementById("napisP").innerHTML = "Zielony";
               napisP.style.color = "rgba(0, 128, 0, 0.479)";
          }
          else if (kolor == 2) {
               document.getElementById("napisP").innerHTML = "Niebieski";
               napisP.style.color = "rgba(0, 0, 255, 0.493)";
          }
          else if (kolor == 1) {
               document.getElementById("napisP").innerHTML = "Żółty";
               napisP.style.color = "rgba(255, 255, 0, 0.521)";
          }
     }
     else if (liczbaLosowa % 2 == 0) {
          if (kolor == 2) {
               document.getElementById("napisP").innerHTML = "Czerwony";
               napisP.style.color = "rgba(255, 0, 0, 0.5)";
          }
          else if (kolor == 4) {
               document.getElementById("napisP").innerHTML = "Zielony";
               napisP.style.color = "rgba(0, 128, 0, 0.479)";
          }
          else if (kolor == 1) {
               document.getElementById("napisP").innerHTML = "Niebieski";
               napisP.style.color = "rgba(0, 0, 255, 0.493)";
          }
          else if (kolor == 3) {
               document.getElementById("napisP").innerHTML = "Żółty";
               napisP.style.color = "rgba(255, 255, 0, 0.521)";
          }
     }

}


function red() {
     if (r == lk) {
          click.style.display = "none";
          kolory = kolory + 1;
          lk = lk + 1;
          muz_kp = new Audio("audio/plop.mp4");
          muz_kp.play();
          kolor++;
          wpzk++;
          add_point();
          name_color();
     }

}

function green() {
     if (g == lk) {
          click3.style.display = "none";
          kolory = kolory + 1;
          lk = lk + 1;
          muz_kp = new Audio("audio/plop.mp4");
          muz_kp.play();
          kolor++;
          wpzk++;
          add_point();
          name_color();
     }
}

function blue() {
     if (b == lk) {
          click2.style.display = "none";
          kolory = kolory + 1;
          lk = lk + 1;
          muz_kp = new Audio("audio/plop.mp4");
          muz_kp.play();
          kolor++;
          wpzk++;
          add_point();
          name_color();
     }
}

function yellow() {
     if (y == lk) {
          click1.style.display = "none";
          kolory = kolory + 1;
          lk = lk + 1;
          muz_kp = new Audio("audio/plop.mp4");
          muz_kp.play();
          kolor++;
          wpzk++;
          add_point();
          name_color();
     }

}

function event_ball_pkt() {
     click4.style.display = "none";
     muz_kp = new Audio("audio/kropka-punkt.mp4");
     muz_kp.play();
     point = point + 10;
     speed_game = speed_game + 1;
     speed_add();
     document.getElementById("point").innerHTML = point;
     ebp = ebp * (-1);
}

function event_ball_slow() {
     click5.style.display = "none";
     muz_kp = new Audio("audio/kropka-punkt.mp4");
     muz_kp.play();
     speed_game_save = speed_game;
     speed_game = 1;
     speed_add();
     e2 = e2 * (-1);
     event_time = 0;
     document.getElementById("point").innerHTML = point;
     ebs = ebs * (-1);
     if (bonus_alert == 1) {
          alert("BONUS: Spowolnienie na 10 sekund!");
     }
}

function add_point() {

     if (kolory >= 4) {
          kolor = 1;
          i = i * (-1);
          kolory = 0;
          lk = 1;
          point = point + 1;
          document.getElementById("point").innerHTML = point;
          speed_game_point++;
          losuj_kolor();
          speed_game = speed_game + 0.1;
          speed_add();
          event_los();
     }
}

function event_los() {
     los = Math.random() * 100 + 2;
     los = Math.round(los);
     if (los == 23 || los == 56 || los == 72 || los == 94 || los == 36 || los == 37 || los == 84 || los == 27) {
          if (ebp == -1) {
               event_ball_pkt_position();
               ebp = ebp * (-1);
          }
     }
     if (los == 25 || los == 63 || los == 41 || los == 89) {
          if (ebs == -1) {
               event_ball_slow_position();
               ebs = ebs * (-1);
               bonus_alert++;
          }
     }
     console.log("WYLOSOWANA LICZBA: " + los);
}

function speed_add() {
     tab_top_direction[0] = speed_game;
     tab_top_direction[1] = speed_game;
     tab_top_direction[2] = speed_game;
     tab_top_direction[3] = speed_game;
     tab_top_direction[4] = 1;
     tab_top_direction[5] = 1;
     tab_left_direction[0] = speed_game;
     tab_left_direction[1] = speed_game;
     tab_left_direction[2] = speed_game;
     tab_left_direction[3] = speed_game;
     tab_left_direction[4] = 1;
     tab_left_direction[5] = 1;
}

/*function m1() {
     document.getElementById("pt").innerHTML = "Slash - Anastasia";
     muz1.play();
     muz2.pause();
     muz3.pause();
     muz4.pause();
     muz5.pause();
}

function m2() {
     document.getElementById("pt").innerHTML = "Jakis chiński rap";
     muz2.play();
     muz1.pause();
     muz3.pause();
     muz4.pause();
     muz5.pause();
}

function m3() {
     document.getElementById("pt").innerHTML = "Flume - Never Be Like You feat. Kai";
     muz3.play();
     muz1.pause();
     muz2.pause();
     muz4.pause();
     muz5.pause();
}

function m4() {
     document.getElementById("pt").innerHTML = "HARDBASS";
     muz4.play();
     muz1.pause();
     muz2.pause();
     muz3.pause();
     muz5.pause();
}

function m5() {
          document.getElementById("pt").innerHTML = "Pull The Wire - Nie Wiem";
          muz5.play();
          muz1.pause();
          muz2.pause();
          muz3.pause();
          muz4.pause();
     }
*/






