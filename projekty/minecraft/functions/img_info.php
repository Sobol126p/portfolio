<?php

session_start();
$user_name = $_SESSION['login_'];

if ($_SESSION['admin_'] == 3) {
    if (isset($_POST['submit_addimg'])) {
        if ($_FILES['img_file']['error'] != 0) {
            echo 'bład przesyłu';
        }

        $i_up_f = 1;
        $upload_dir = '../images/';
        $uploadFile = basename($_FILES['img_file']['name']);
        $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
        $validFormats = ['jpg', 'png', 'jpeg', 'gif'];

        if (is_uploaded_file($_FILES['img_file']['tmp_name'])) {

            $check = getimagesize($_FILES['img_file']['tmp_name']);
            list($width, $height) = $check;
            //echo $width . '/' . $height;
            //echo ' ! ' . $width / $height . ' ! ';
            //echo ' ! ' . $height / $width . ' ! ';
            if ($check !== false) {
                echo '-------------Plik jest obrazkiem - ' . $check['mime'] . '.-----------';
                $uploadOk = true;
            } else {
                echo 'Plik nie jest obrazkiem!';
                $uploadOk = false;
            }
        } else {
            echo 'Pliku nie wysłano!';
            exit;
        }


        echo 'r' . $upload_dir . $uploadFile;
        if (file_exists($upload_dir . $uploadFile)) {
            while (file_exists($upload_dir . $uploadFile)) {
                $uploadFile = substr(basename($_FILES['img_file']['name']), 0, strpos(basename($_FILES['img_file']['name']), '.')) . '(' . $i_up_f . ').' . $imageFileType;
                echo 'działa czy nie?';
                $i_up_f++;
            }
        }

        if ($_FILES['img_file']['size'] > 100000000) {
            echo 'Plik jest zbyt duży!';
            $uploadOk = false;
        }

        if (!in_array($imageFileType, $validFormats)) {
            echo 'Dozwolone formaty to JPG, PNG, JPEG, GIF!';
            $uploadOk = false;
        }

        if ($uploadOk == false) {
            echo 'Coś nie pykło byczq! uploda = false';
        } else {
            if (($height / $width) >= 0.45 && ($height / $width) <= 0.65) {
                if (move_uploaded_file($_FILES['img_file']['tmp_name'], $upload_dir . $uploadFile)) {
                    include 'conn.php';
                    mysqli_query($conn, "INSERT INTO `strona`(id,typ,name_,name_user,publikacja) VALUES ('','img_info','$uploadFile','$user_name','0')");
                    echo 'Zapisano plik ' . $upload_dir . $uploadFile . '!';
                    header('Location: ../admin.php');
                } else {
                    echo 'coś nie pykło! zapis';
                }
            } else {
                echo 'obraz nie ma odpowiedznich proporcji';
            }
        }
    }

    if (isset($_GET['delid'])) {
        include 'conn.php';
        $delid = $_GET['delid'];
        mysqli_query($conn, "DELETE FROM strona WHERE id='$delid' AND typ='img_info'");
        header('Location: ../admin.php');
    }

    if (isset($_GET['publikuj'])) {
        include 'conn.php';
        $publikuj = $_GET['publikuj'];
        mysqli_query($conn, "UPDATE strona SET publikacja='0' WHERE publikacja='1' AND typ='img_info'");
        mysqli_query($conn, "UPDATE strona SET publikacja='1' WHERE id='$publikuj' AND typ='img_info'");
        header('Location: ../admin.php');
    }
}
// wyświetlanie typu pliku
//echo $_FILES['nazwa_pliku']['type'];

// wyświetlanie rozmiaru
//echo $_FILES['nazwa_pliku']['size'];

// wyświetlanie nazwy pliku
//echo $_FILES['nazwa_pliku']['name'];

// wyświetlanie nazwy tymczasowej
//echo $_FILES['nazwa_pliku']['tmp_name'];

// wyświetlanie ewentualnych błędów
//echo $_FILES['nazwa_pliku']['error'];
