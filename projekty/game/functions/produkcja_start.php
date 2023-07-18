<?php
include 'conn.php';
if (isset($_POST['wybor'])) {
    session_start();
    if ($_SESSION['pracownicy'] >= 1) {
        $id_user = $_SESSION['id_user'];

        $magazyn_wynik = mysqli_query($conn, "SELECT * FROM `magazyn` WHERE `id_user` = $id_user");
        $magazyn = mysqli_fetch_array($magazyn_wynik);
        $wykalaczki = $magazyn['wykalaczki'];
        $dlugopisy = $magazyn['dlugopisy'];
        $kubki = $magazyn['kubki'];
        $telefony = $magazyn['telefony'];
        $rowery = $magazyn['rowery'];
        $samochody = $magazyn['samochody'];

        switch ($_POST['wybor']) {
            case 1:
                if ($_SESSION['towar'] > 250) {
                    $wykalaczki_new = $wykalaczki + 100 + 2 * $_SESSION['lvl_fabryka'] + $_SESSION['pracownicy'];
                    $towar = $_SESSION['towar'] = $_SESSION['towar'] - 250;
                    mysqli_query($conn, "UPDATE `magazyn` SET `wykalaczki` = $wykalaczki_new WHERE `id_user` = $id_user");
                    $_SESSION['wykalaczki'] = $wykalaczki_new;
                } else {
                    $_SESSION['alert'] = "Zbyt mało towaru!";
                }

                break;
            case 2:
                if ($_SESSION['towar'] > 600) {
                    $dlugopisy_new = $dlugopisy + 100 + 2 * $_SESSION['lvl_fabryka'] + $_SESSION['pracownicy'];
                    $towar = $_SESSION['towar'] = $_SESSION['towar'] - 600;
                    mysqli_query($conn, "UPDATE `magazyn` SET `dlugopisy` = $dlugopisy_new WHERE `id_user` = $id_user");
                    $_SESSION['dlugopisy'] = $dlugopisy_new;
                } else {
                    $_SESSION['alert'] = "Zbyt mało towaru!";
                }
                break;
            case 3:
                if ($_SESSION['towar'] > 1000) {
                    $kubki_new = $kubki + 100 + 2 * $_SESSION['lvl_fabryka'] + $_SESSION['pracownicy'];
                    $towar =  $_SESSION['towar'] = $_SESSION['towar'] - 1000;
                    mysqli_query($conn, "UPDATE `magazyn` SET `kubki` = $kubki_new WHERE `id_user` = $id_user");
                    $_SESSION['kubki'] = $kubki_new;
                } else {
                    $_SESSION['alert'] = "Zbyt mało towaru!";
                }
                break;
            case 4:
                if ($_SESSION['towar'] > 2500) {
                    $telefony_new = $telefony + 100 + 2 * $_SESSION['lvl_fabryka'] + $_SESSION['pracownicy'];
                    $towar = $_SESSION['towar'] = $_SESSION['towar'] - 2500;
                    mysqli_query($conn, "UPDATE `magazyn` SET `telefony` = $telefony_new WHERE `id_user` = $id_user");
                    $_SESSION['telefony'] = $telefony_new;
                } else {
                    $_SESSION['alert'] = "Zbyt mało towaru!";
                }
                break;
            case 5:
                if ($_SESSION['towar'] > 8000) {
                    $rowery_new = $rowery + 100 + 2 * $_SESSION['lvl_fabryka'] + $_SESSION['pracownicy'];
                    $towar =  $_SESSION['towar'] = $_SESSION['towar'] - 8000;
                    mysqli_query($conn, "UPDATE `magazyn` SET `rowery` = $rowery_new WHERE `id_user` = $id_user");
                    $_SESSION['rowery'] = $rowery_new;
                } else {
                    $_SESSION['alert'] = "Zbyt mało towaru!";
                }
                break;
            case 6:
                if ($_SESSION['towar'] > 50000) {
                    $samochody_new = $samochody + 100 + 2 * $_SESSION['lvl_fabryka'] + $_SESSION['pracownicy'];
                    $towar = $_SESSION['towar'] = $_SESSION['towar'] - 50000;
                    mysqli_query($conn, "UPDATE `magazyn` SET `samochody` = $samochody_new WHERE `id_user` = $id_user");
                    $_SESSION['samochody'] = $samochody_new;
                } else {
                    $_SESSION['alert'] = "Zbyt mało towaru!";
                }
                break;
        }
        if (isset($towar)) {
            mysqli_query($conn, "UPDATE `zasoby` SET `towar` = $towar WHERE `id_user` = $id_user");
        }
        $_SESSION['monety'] = $monety_update = $_SESSION['monety'] - ($_SESSION['pracownicy'] * 400);
        mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety_update WHERE `id_user` = $id_user");
    } else {
        $_SESSION['alert'] = 'Nie możesz nic wyprodukować masz 0 pracowników';
    }
}
mysqli_close($conn);
