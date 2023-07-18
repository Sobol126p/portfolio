<?php

$login = $_POST['login'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$replace = ['"', "'", '!', '@', '&NBSP;', '#', '$', '%', '^', '&', '*', '(', ')', '=', '+', '/', "\"", '\'', '\ ', '{', '}', '[', ']', '?', '>', '<', ':', ';', '.', ',', '`', '~', '§', '©', '®', '™', '‰', '¦', '|', "/q", " "];

if ($login == str_replace($replace, '', $login) && $password == str_replace($replace, '', $password)) {
    if ($password == $password2) {
        if (strlen($login) <= 100 && strlen($login) >= 1) {
            if (strlen($password) <= 25 && strlen($password) >= 6) {
                include 'conn.php';

                $login_spr = mysqli_query($conn, "SELECT `id` FROM `users` WHERE `login_`='$login';");
                $login_spr2 = mysqli_fetch_row($login_spr);

                if ($login_spr2[0] == NULL) {

                    $liczba_id = mysqli_query($conn, "SELECT `id_user` FROM `users` ORDER BY `id_user` DESC LIMIT 1;");
                    $liczba_idd = mysqli_fetch_row($liczba_id);
                    $id_user = $liczba_idd[0] + 1;

                    $password_end = sha1($password);

                    mysqli_query($conn, "INSERT INTO `users`(id,id_user,login_,password_,email_,admin_) VALUES ('','$id_user','$login','$password_end','','1')");
                    //echo 'udalo się?';
                    header('Location: ../login.php');
                } else {
                    $tekst_zwortny = 'Ten login jest już zajęty!';
                    header('Location: ../register.php?tekst_zwrotny=Ten login jest już zajęty!');
                }
            } else {
                $tekst_zwortny = 'Hasło powinno mieć o 6 do 25 znaków!';
                header('Location: ../register.php?tekst_zwrotny=Hasło powinno mieć o 6 do 25 znaków!');
            }
        } else {
            $tekst_zwortny = 'Login powinien mieć o 2 do 25 znaków!';
            header('Location: ../register.php?tekst_zwrotny=Login powinien mieć o 2 do 25 znaków!');
        }
    } else {
        $tekst_zwortny = 'Hasła nie identyczne!';
        header('Location: ../register.php?tekst_zwrotny=Hasła nie identyczne!');
    }
} else {
    $tekst_zwortny = 'Nie dozwolone znaki w loginie lub haśle!';
    header('Location: ../register.php?tekst_zwrotny=Nie dozwolone znaki w loginie lub haśle!');
}