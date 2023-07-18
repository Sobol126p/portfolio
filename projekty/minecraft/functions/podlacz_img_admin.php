<?php
session_start();

if ($_SESSION['admin_'] == 3) {
if(isset($_POST['submit_img']) && isset($_FILES['img_profil_admin']) && isset($_SESSION['login_']))
{

$img_admin_OK = true;
$user_name = $_SESSION['login_'];


    $i_up_f = 1;
    $upload_dir = '../images_admin/';
    $uploadFile = basename($_FILES['img_profil_admin']['name']);
    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $validFormats = ['jpg', 'png', 'jpeg', 'gif'];

    if (is_uploaded_file($_FILES['img_profil_admin']['tmp_name'])) {

        $check = getimagesize($_FILES['img_profil_admin']['tmp_name']);
        list($width, $height) = $check;
        //echo $width . '/' . $height;
        //echo ' ! ' . $width / $height . ' ! ';
        //echo ' ! ' . $height / $width . ' ! ';
        if ($check !== false) {
            echo '-------------Plik jest obrazkiem - ' . $check['mime'] . '.-----------';
            $tryb_gry_OK = true;
        } else {
            echo 'Plik nie jest obrazkiem!';
            $tryb_gry_OK = false;
        }
    } else {
        echo 'Pliku nie wysłano!';
        exit;
    }


    //echo 'r' . $upload_dir . $uploadFile;
    if (file_exists($upload_dir . $uploadFile)) {
        while (file_exists($upload_dir . $uploadFile)) {
            $uploadFile = substr(basename($_FILES['img_profil_admin']['name']), 0, strpos(basename($_FILES['img_profil_admin']['name']), '.')). $i_up_f . '.' . $imageFileType;
            echo 'działa czy nie?';
            $i_up_f++;
        }
    }

    if ($_FILES['img_profil_admin']['size'] > 10000000) {
        echo 'Plik jest zbyt duży!';
        $tryb_gry_OK = false;
    }

    if (!in_array($imageFileType, $validFormats)) {
        echo 'Dozwolone formaty to JPG, PNG, JPEG, GIF!';
        $tryb_gry_OK = false;
    }

    if ($tryb_gry_OK == false) {
        echo 'Coś nie pykło byczq! uploda = false';
    } else {
        if ($height == $width) {
            if (move_uploaded_file($_FILES['img_profil_admin']['tmp_name'], $upload_dir . $uploadFile)) {
                include 'conn.php';
                mysqli_query($conn, "INSERT INTO `strona`(id,typ,name_img,name_,opis_,name_user,publikacja) VALUES ('','avatar_admin','$uploadFile','','','$user_name','0')");
                echo 'Zapisano plik ' . $upload_dir . $uploadFile . '!';
                //header('Location: ../admin.php');
            } else {
                echo 'coś nie pykło! zapis';
            }
        } else {
            echo 'Obraz nie ma odpowiedznich proporcji. Odpowiednie to 1:1';
        }
    }
}


/*

if (isset($_GET['delid_tb'])) {
    include 'conn.php';
    $delid_tb = $_GET['delid_tb'];
    mysqli_query($conn, "DELETE FROM strona WHERE id='$delid_tb' AND typ='tryb_gry'");
    header('Location: ../admin.php');
}

if (isset($_GET['publikuj_tb'])) {
    include 'conn.php';
    $publikuj_tb = $_GET['publikuj_tb'];
    mysqli_query($conn, "UPDATE strona SET publikacja='1' WHERE id='$publikuj_tb' AND typ='tryb_gry'");
    header('Location: ../admin.php');
}

if (isset($_GET['un_publikuj_tb'])) {
    include 'conn.php';
    $un_publikuj_tb = $_GET['un_publikuj_tb'];
    mysqli_query($conn, "UPDATE strona SET publikacja='0' WHERE id='$un_publikuj_tb' AND typ='tryb_gry'");
    header('Location: ../admin.php');
}
*/
}


?>