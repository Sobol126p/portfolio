<?php

session_start();

if (isset($_SESSION['login_']) && isset($_SESSION['password_'])) {

    if (isset($_POST['submit_h']) && isset($_POST['nhp']) && isset($_POST['oh']) && isset($_POST['nh'])) {
        $obecnehaslo = $_POST['oh'];
        $nowehaslo = $_POST['nh'];
        $nowehaslop = $_POST['nhp'];
        $hasloOk = true;
        $login = $_SESSION['login_'];

        $replace = ['"', "'", '!', '@', '&NBSP;', '#', '$', '%', '^', '&', '*', '(', ')', '=', '+', '/', "\"", '\'', '\ ', '{', '}', '[', ']', '?', '>', '<', ':', ';', '.', ',', '`', '~', '§', '©', '®', '™', '‰', '¦', '|', "/q", " "];

        if ($nowehaslo != str_replace($replace, '', $nowehaslo)) {
            $hasloOk = false;
            header('Location: ../profil.php?tzw=Niedozwolone znaki w haśle!');
        }

        if ($nowehaslo != $nowehaslop) {
            $hasloOk = false;
            header('Location: ../profil.php?tzw=Hasła nie są identyczne!');
        }

        if(strlen($nowehaslo) >= 25 || strlen($nowehaslo) <= 6)
        {
            $hasloOk = false;
            header('Location: ../profil.php?tzw=Hasło powinno mieć od 6 do 25 znaków!');
        }

        if ($_SESSION['password_'] != sha1($obecnehaslo)) {
            $hasloOk = false;
            header('Location: ../profil.php?tzw=Złe obecne hasło!');
        }

   if($hasloOk == true)
   {
    $haslo_end = sha1($nowehaslo);
    include 'conn.php';
    mysqli_query($conn, "UPDATE users SET password_='$haslo_end' WHERE login_='$login'");
    echo'zmieniono haslo';
    header('Location: logout.php');
   }

    }
}
