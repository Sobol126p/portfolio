<?php

$login = $_POST['login'];
$firma = $_POST['firma'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

$pass_popr = preg_replace('/[\W_]/', '', $pass);
$login_popr = preg_replace('/[\W_]/', '', $login);
$firma_popr = preg_replace('/[\W_]/', '', $firma);
$tekst_zwortny;
    

if ($login == $login_popr) {
    if ($firma == $firma_popr) {
        if ($pass == $pass_popr) {
            if ($pass == $pass2) {
                if (strlen($pass) >= 6 && strlen($pass) <= 20) {
                    if (strlen($login) >= 1 && strlen($login) <= 25) {
                        include 'conn.php';
                        $spr_login = mysqli_query($conn, "SELECT `id` FROM `users` WHERE `login_`='$login'");
                        $spr_login1 = mysqli_fetch_row($spr_login);
                        if ($spr_login1 == NULL) {


                            $liczba_id = mysqli_query($conn, "SELECT `id_user` FROM `users` ORDER BY `id_user` DESC LIMIT 1;");
                            $liczba_idd = mysqli_fetch_row($liczba_id);
                            $id_user = $liczba_idd[0] + 1;


                            mysqli_query($conn, "INSERT INTO `users`(id,id_user,login_,password_) VALUES ('','$id_user','$login','$pass')");
                            mysqli_query($conn, "INSERT INTO `zasoby`(id,id_user,nazwa_firmy,monety,pracownicy,towar,lvl_fabryka) VALUES ('','$id_user','$firma','20000','1','10000','1')");
                            mysqli_query($conn, "INSERT INTO `magazyn`(id,id_user,wykalaczki,dlugopisy,kubki,telefony,rowery,samochody) VALUES ('','$id_user','0','0','0','0','0','0')");
                            header('Location: ../index.php');
                        } else {
                            $tekst_zwortny = 'Ten login jest już zajęty';
                            header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
                        }
                    } else {
                        $tekst_zwortny = 'Login powinno mieć od 1 do 25 znaków';
                        header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
                    }
                } else {
                    $tekst_zwortny = 'Hasło powinno mieć od 6 do 20 znaków';
                    header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
                }
            } else {
                $tekst_zwortny = 'Hasła nie są takie same!';
                header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
            }
        } else {
            $tekst_zwortny = "Niedozwolone znaki hasło! ('',/,\)";
            header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
        }
    } else {
        $tekst_zwrotny = "Niedozwolone znaki firma('',/,\)";
        header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
    }
} else {
    $tekst_zwortny = "Niedozwolone znaki login! ('',/,\)";
    header('Location: ../reg.php?tekst_zwrotny=' . $tekst_zwortny);
}

mysqli_close($conn);
