<?php
include 'conn.php';


$login_l = $_POST['login_l'];
$password_l = $_POST['password_l'];
$replace = ['"', "'", '!', '@', '&NBSP;', '#', '$', '%', '^', '&', '*', '(', ')', '=', '+', '/', "\"", '\'', '\ ', '{', '}', '[', ']', '?', '>', '<', ':', ';', '.', ',', '`', '~', '§', '©', '®', '™', '‰', '¦', '|', "/q", " "];

if ($login_l == str_replace($replace, '', $login_l) && $password_l == str_replace($replace, '', $password_l)) {

    if (strlen($login_l) > 0 || strlen($password_l) > 0) {

        $pass_spr = mysqli_query($conn, "SELECT password_ FROM users WHERE login_='$login_l'");
        $pass_spr1 = mysqli_fetch_row($pass_spr);

        if ($pass_spr1['0'] == sha1($password_l)) {
            
            $user_data1 = mysqli_query($conn, "SELECT * FROM users WHERE login_='$login_l'");
            $user_data = mysqli_fetch_array($user_data1);

            session_start();
            $_SESSION['id_user'] = $user_data['id_user'];
            $_SESSION['login_'] = $user_data['login_'];
            $_SESSION['password_'] = $user_data['password_'];
            $_SESSION['email_'] = $user_data['email_'];
            $_SESSION['admin_'] = $user_data['admin_'];

            header('Location: ../index.php');
        } else {
            //$tekst_zwrotny = 'Zly%20login%20lub%20haslo';
            header("Location: ../login.php?tekst_zwrotny=Zly%20login%20lub%20haslo");
        }
    } else {
        //$tekst_zwrotny = 'Za%20krotkie';
        header("Location: ../login.php?tekst_zwrotny=Za%20krotkie");
    }
} else {
    //$tekst_zwrotny = 'Zly%20login%20lub%20haslo';
    header("Location: ../login.php?tekst_zwrotny=Zly%20login%20lub%20haslo");
}
