<?php
include "conn.php";
if (isset($_POST['pracownik_akcja'])) {
    session_start();
    $id_user = $_SESSION['id_user'];
    switch ($_POST['pracownik_akcja']) {
        case 1:
            $pracownik_update = $_SESSION['pracownicy'] + $_POST['pracownik_add'];
            mysqli_query($conn, "UPDATE `zasoby` SET `pracownicy` = $pracownik_update WHERE  `id_user`=$id_user");
            $_SESSION['pracownicy'] = $pracownik_update;
            break;
        case 2:
            if ($_SESSION['pracownicy'] >= $_POST['pracownik_zwolniony']) {
                $pracownik_update = $_SESSION['pracownicy'] - $_POST['pracownik_zwolniony'];
                mysqli_query($conn, "UPDATE `zasoby` SET `pracownicy` = $pracownik_update WHERE  `id_user`=$id_user");
                $_SESSION['pracownicy'] = $pracownik_update;
            } else {
                $_SESSION['alert'] = 'Nie możesz zwolnić tylu pracowników';
            }
            break;
    }
}
mysqli_close($conn);
