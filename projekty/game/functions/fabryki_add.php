<?php
include "conn.php";
session_start();
if (isset($_POST['lvl_add'])) {
    $id_user = $_SESSION['id_user'];
    $suma = $_POST['lvl_add'] * 100000;
    if ($_SESSION['monety'] >= $suma) {
        $update_monety = $_SESSION['monety'] - $suma;
        mysqli_query($conn, "UPDATE `zasoby` SET `monety` = $update_monety WHERE  `id_user`=$id_user");
        $lvl_fabryka_update = $_SESSION['lvl_fabryka'] + $_POST['lvl_add'];
        mysqli_query($conn, "UPDATE `zasoby` SET `lvl_fabryka` = $lvl_fabryka_update WHERE `id_user`=$id_user");
        $_SESSION['lvl_fabryka'] = $lvl_fabryka_update;
        $_SESSION['monety'] = $update_monety;
    }
}
mysqli_close($conn);
