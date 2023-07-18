<?php
if (isset($_POST['wybor'])) {
    session_start();
    include 'conn.php';
    $id_user = $_SESSION['id_user'];
    switch ($_POST['wybor']) {
        case 1:
            if ($_SESSION['wykalaczki'] > 0) {
                mysqli_query($conn, "UPDATE `magazyn` SET `wykalaczki` = 0 WHERE `id_user` = $id_user");
                $monety = $_SESSION['wykalaczki'] + $_SESSION['monety'];
                mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety WHERE `id_user` = $id_user");
                $_SESSION['monety'] = $monety;
            }
            break;
        case 2:
            if ($_SESSION['dlugopisy'] > 0) {
                mysqli_query($conn, "UPDATE `magazyn` SET `dlugopisy` = 0 WHERE `id_user` = $id_user");
                $monety = $_SESSION['dlugopisy']*2 + $_SESSION['monety'];
                mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety WHERE `id_user` = $id_user");
                $_SESSION['monety'] = $monety;
            }
            break;
        case 3:
            if ($_SESSION['kubki'] > 0) {
                mysqli_query($conn, "UPDATE `magazyn` SET `kubki` = 0 WHERE `id_user` = $id_user");
                $monety = $_SESSION['kubki']*5 + $_SESSION['monety'];
                mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety WHERE `id_user` = $id_user");
                $_SESSION['monety'] = $monety;
            }
            break;
        case 4:
            if ($_SESSION['telefony'] > 0) {
                mysqli_query($conn, "UPDATE `magazyn` SET `telefony` = 0 WHERE `id_user` = $id_user");
                $monety = $_SESSION['telefony']*200 + $_SESSION['monety'];
                mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety WHERE `id_user` = $id_user");
                $_SESSION['monety'] = $monety;
            }
            break;
        case 5:
            if ($_SESSION['rowery'] > 0) {
                mysqli_query($conn, "UPDATE `magazyn` SET `rowery` = 0 WHERE `id_user` = $id_user");
                $monety = $_SESSION['rowery']*300 + $_SESSION['monety'];
                mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety WHERE `id_user` = $id_user");
                $_SESSION['monety'] = $monety;
            }
            break;
        case 6:
            if ($_SESSION['samochody'] > 0) {
                mysqli_query($conn, "UPDATE `magazyn` SET `samochody` = 0 WHERE `id_user` = $id_user");
                $monety = $_SESSION['samochody']*1000 + $_SESSION['monety'];
                mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $monety WHERE `id_user` = $id_user");
                $_SESSION['monety'] = $monety;
            }
            break;
    }
    include 'refresh/magazyn.php';
    mysqli_close($conn);
}
