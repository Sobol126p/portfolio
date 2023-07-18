<?php

///////////////////////////////////////////////////////////////---- MONETY ----///////////////////////////////////////////////////////////////////////

include 'conn.php';

$liczba_wynik = mysqli_query($conn, "SELECT `id_user`,`monety` FROM `zasoby` ORDER BY `monety` DESC LIMIT 5");

for ($i = 0; $i < 5; $i++) {
    $liczba = mysqli_fetch_array($liczba_wynik);
    $id_user[$i] = $liczba['id_user'];
    $monety[$i] = $liczba['monety'];
}
echo '<div style="display:block;" id="monety_top" >';
for ($i = 0; $i < 5; $i++) {
    $login_wynik = mysqli_query($conn, "SELECT `login_` FROM `users` WHERE `id_user` = $id_user[$i]");
    $login = mysqli_fetch_array($login_wynik);
    echo ($i + 1) . ' - ' . $login['login_'] . ' - ' . $monety[$i] . ' monet<br>';
}
echo '</div>';
////////////////////////////////////////////////---- LVL FABRYKI ----//////////////////////////////////////////////////////////////////////////////////

$lvl_fabryka_wynik = mysqli_query($conn, "SELECT `id_user`,`lvl_fabryka` FROM `zasoby` ORDER BY `lvl_fabryka` DESC LIMIT 5");

for ($f = 0; $f < 5; $f++) {
    $lvl_fabryka = mysqli_fetch_array($lvl_fabryka_wynik);
    $id_user_fabr[$f] = $lvl_fabryka['id_user'];
    $fabryka[$f] = $lvl_fabryka['lvl_fabryka'];
}
echo '<div style="display:none;" id="fabryki_top" >';
for ($f = 0; $f < 5; $f++) {
    $login_wynik = mysqli_query($conn, "SELECT `login_` FROM `users` WHERE `id_user` = $id_user_fabr[$f]");
    $login = mysqli_fetch_array($login_wynik);
    echo ($f + 1) . ' - ' . $login['login_'] . ' - ' . $fabryka[$f] . ' LVL Fabryki<br>';
}
echo '</div>';
//////////////////////////////////////////////////////////////////////////---- PRACOWNICY ----////////////////////////////////////////////////////////////////////////////

$pracownicy_wynik = mysqli_query($conn, "SELECT `id_user`,`pracownicy` FROM `zasoby` ORDER BY `pracownicy` DESC LIMIT 5");

for ($p = 0; $p < 5; $p++) {
    $pracownicy = mysqli_fetch_array($pracownicy_wynik);
    $id_user_prac[$p] = $pracownicy['id_user'];
    $prac[$p] = $pracownicy['pracownicy'];
}
echo '<div style="display:none;" id="pracownicy_top" >';
for ($p = 0; $p < 5; $p++) {
    $login_wynik = mysqli_query($conn, "SELECT `login_` FROM `users` WHERE `id_user` = $id_user_prac[$p]");
    $login = mysqli_fetch_array($login_wynik);
    if ($prac[$p] == 1) {
        echo ($p + 1) . ' - ' . $login['login_'] . ' - ' . $prac[$p] . ' pracownik<br>';
    } else {
        echo ($p + 1) . ' - ' . $login['login_'] . ' - ' . $prac[$p] . ' pracowników<br>';
    }
}
echo '</div>';
