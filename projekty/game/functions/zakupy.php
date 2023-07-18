<?php
include 'conn.php';
if (isset($_POST['ilosc_towaru'])) {
    $ilosc_towaru = $_POST['ilosc_towaru'];
    if (filter_var(filter_var($ilosc_towaru, FILTER_VALIDATE_INT))) {
        session_start();
        if ($_SESSION['monety'] >= $ilosc_towaru) {
            $id_user = $_SESSION['id_user'];
            $update_ilosc_towaru = $_SESSION['towar'] + $ilosc_towaru;
            mysqli_query($conn, "UPDATE `zasoby` SET `towar` = $update_ilosc_towaru WHERE  `id_user`=$id_user");
            $update_monety = $_SESSION['monety'] - $ilosc_towaru;
            mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $update_monety WHERE  `id_user`=$id_user");
            $_SESSION['monety'] = $update_monety;
            $_SESSION['towar'] = $update_ilosc_towaru;
        } else {
            $_SESSION['alert'] = "Zbyt drogie!";
        }
    }
}
