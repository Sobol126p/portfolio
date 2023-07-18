<?php

session_start();

if (!isset($_POST['login']) || !isset($_POST['pass'])) {
    header('../index.html');
    exit();
}

include 'conn.php';

if ($conn->connect_errno != 0) {
    mysqli_error($conn);
} else {
    $login_log = $_POST['login'];
    $pass_log = $_POST['pass'];
    $login_log_popr = preg_replace('/[\W_]/', '', $login_log);

    $wynik_users = mysqli_query($conn, "SELECT * FROM `users` WHERE `login_`='$login_log_popr'");
    $user = mysqli_fetch_array($wynik_users);

    if ($pass_log == $user['password_']) {
        $_SESSION['id_user'] =$user_id =  $user['id_user'];

        $wynik_zasoby = mysqli_query($conn, "SELECT * FROM `zasoby` WHERE `id_user`='$user_id'");
        $zasoby = mysqli_fetch_array($wynik_zasoby);
        $wynik_magazyn = mysqli_query($conn, "SELECT * FROM `magazyn` WHERE `id_user`=$user_id");
        $magazyn = mysqli_fetch_array($wynik_magazyn);
        

        $_SESSION['login'] =  $user['login_'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['nazwa_firmy'] =$user_id =  $zasoby['nazwa_firmy'];
        $_SESSION['pracownicy'] = $zasoby['pracownicy'];
        $_SESSION['monety'] = $zasoby['monety'];
        $_SESSION['towar'] = $zasoby['towar'];
        $_SESSION['lvl_fabryka'] = $zasoby['lvl_fabryka'];
        $_SESSION['wykalaczki'] = $magazyn['wykalaczki'];
        $_SESSION['dlugopisy'] = $magazyn['dlugopisy'];
        $_SESSION['kubki'] = $magazyn['kubki'];
        $_SESSION['telefony'] = $magazyn['telefony'];
        $_SESSION['rowery'] = $magazyn['rowery'];
        $_SESSION['samochody'] = $magazyn['samochody'];
        
        

    header('Location: ../game.php');
        
    } else {
        $tekst_zwortny = 'Niepoprawny login lub hasło';
        header('Location: ../index.php?tekst_zwrotny=' . $tekst_zwortny);
    }
}
mysqli_close($conn);
?>
