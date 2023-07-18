<?php

session_start();

if ($_SESSION['admin_'] == 3) {
    if (isset($_POST['submit_avatar_admin']) && isset($_POST['ilosc'])) {
        include 'conn.php';

        mysqli_query($conn, "UPDATE strona SET publikacja='0' WHERE typ='avatar_admin'");
        $r = 0;
        while ($r < 2) {
            $r++;
            $liczba_ad = 'admin' . $r;
            if (isset($_POST[$liczba_ad])) {
                $zapis =  $_POST[$liczba_ad];
                mysqli_query($conn, "UPDATE strona SET publikacja='1' WHERE id='$zapis' AND typ='avatar_admin'");
            }
        }
        header('Location: ../admin.php');
    }
}
