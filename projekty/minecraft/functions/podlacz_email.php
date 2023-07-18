<?php
session_start();
if (isset($_POST['submit_e']) && isset($_POST['email_p']) && isset($_SESSION['login_'])) {
    $email = $_POST['email_p'];
    $login = $_SESSION['login_'];
    $replace = ['"', "'", '`', '~'];
    if ($email == str_replace($replace, '', $email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include 'conn.php';
            mysqli_query($conn, "UPDATE users SET email_='$email' WHERE login_='$login'");
            $e_upd = mysqli_query($conn, "SELECT email_ FROM users WHERE login_='$login'");
            $e_upd_row = mysqli_fetch_row($e_upd);
            $_SESSION['email_'] = $e_upd_row[0];
            header('Location: ../profil.php');
        } else {
            header('Location: ../profil.php?tzw=To nie jest email!');
        }
    }
    else{
        header('Location: ../profil.php?tzw=Niedozwolone znaki!');
    }
}
