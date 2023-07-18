<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_main.css">
    <link rel="stylesheet" href="style/style_szablony.css">
    <link rel="stylesheet" href="style/style_topnav.css">
    <link rel="stylesheet" href="style/style_admin_modal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doyebane.mc - profil</title>
</head>

<body onload="wejscie_admin()">
    <nav_bar class="nav_bar">
        <div class="nav_bar_panel">
            <div></div>
            <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
                <a href="index.php">Strona główna</a>
                <a href="sklep.php">Sklep</a>
                <a href="profil.php">Profil</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="admin.php" class="active">Admin</a>
                <a class="text_6" id="ostatni_div" href="functions/logout.php">Wyloguj się</a>
                <a href="javascript:void(0);" class="icon" onclick="Function_topnav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div></div>
        </div>
    </nav_bar>
    <img src="images/profil_zdj.png" class="tapeta">

    <conteiner_admin class="admin_pr" id="admin_pr">


        <admin_hub class="admin_hub_grid" style="margin-top: 150px;">
            <div class="admin_hub_cards1">
                <div style="margin-bottom:5%;">
                    <div class="text_1" style="display:inline; cursor:pointer;" id="Click_ImgInfo">Obraz Info </div>
                    <div class="text_5" style="display:inline; margin-bottom:100px;"> (format ~1:2)</div>
                </div>
                <div style="margin-bottom:5%;">
                    <div class="text_1" style="display:inline; cursor:pointer;" id="Click_trybgry">Tryby Gry</div>
                    <div class="text_5" style="display:inline; margin-bottom:100px;"></div>
                </div>
                <div style="margin-bottom:5%;">
                    <div class="text_1" style="display:inline; cursor:pointer;" id="Click_admin">Admini</div>
                    <div class="text_5" style="display:inline; margin-bottom:100px;"></div>
                </div>


            </div>
            <div class="admin_hub_cards2">
                <div class="admin_userslist_grid">
                    <div class="text_4" style="padding-left:5px;">#</div>
                    <div class="text_4">LOGIN</div>
                    <div class="text_4">EMAIL</div>
                    <div class="text_4">HIERARCHIA</div>
                    <?php
                    include 'functions/conn.php';
                    if (isset($conn)) {
                        $users_list = mysqli_query($conn, "SELECT id,login_,email_,admin_ FROM users;");

                        $user_count = 1;
                        while ($users = mysqli_fetch_array($users_list)) {
                            if ($users['admin_'] == 1) {
                                $admin = '<div class="text_4" style="color:green; margin-bottom:10px;">GRACZ</div>';
                            } else if ($users['admin_'] == 3) {
                                $admin = '<div class="text_4" style="color:red;">ADMIN</div>';
                            }
                            echo "<div class='text_4' style='margin-bottom:10px; padding-right:4px; padding-left:5px;'>" . $user_count . "</div>";
                            echo "<div class='text_4' style='margin-bottom:10px; padding-right:4px;'>" . $users['login_'] . "</div>";
                            echo "<div class='text_4' style='margin-bottom:10px; padding-right:4px;'>" . $users['email_'] . "</div>";
                            echo $admin;
                            $user_count++;
                        }
                    }
                    ?>
                </div>
            </div>

        </admin_hub>

    </conteiner_admin>

    <div class="imgInfo_sett" id="imgInfo_sett">
        <div class="ImgInfo-sett-content" id="">
            <form enctype="multipart/form-data" action="functions/img_info.php" method="post">
                <input type="file" name="img_file" style="width: 300px; height: 40px; color: white; cursor:pointer;" />
                <input type="submit" value="wyślij" name="submit_addimg" />
                <div class="close" id="close_ImgInfo">&times;</div>
            </form>
            <?php

            $images = mysqli_query($conn, "SELECT id,name_img,name_user,publikacja FROM strona WHERE typ='img_info'");

            $img_count = 1;
            while ($images_tab = mysqli_fetch_array($images)) {
                $id = $images_tab['id'];
                $img_name = $images_tab['name_img'];
                if ($images_tab['publikacja'] == 0) {
                    echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">OBRAZ ' . $img_count . ": --- <a href='images/$img_name'><img style='width:200px; height:100px;' src='images/$img_name'></img></a> --- " . $images_tab['name_user'] . " | <a href='functions/img_info.php?delid=$id'>USUN</a> | <a href='functions/img_info.php?publikuj=$id'>PUBLIKUJ</a></div>";
                    echo '<hr style="width: 100%; color:white;">';
                    $img_count++;
                }
                if ($images_tab['publikacja'] == 1) {
                    echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">OBRAZ ' . $img_count . ": --- <a href='images/$img_name'><img style='width:200px; height:100px;' src='images/$img_name'></img></a> --- " . $images_tab['name_user'] . " |  - - - opublikowany</div>";
                    echo '<hr style="width: 100%; color:white;">';
                    $img_count++;
                }
            }
            echo '<div style="margin-bottom: 125px;"></div>'
            ?>
        </div>
    </div>


    <div class="imgInfo_sett" id="trybgry_sett">
        <div class="ImgInfo-sett-content" id="">
            <div class="close" id="close_trybgry">&times;</div>
            <form action="functions/add_trybgry.php" method="post" enctype="multipart/form-data" style="margin-left: 5%;">
                <div class="text_3">Nazwa trybu:</div><input type="text" name="nazwa_trybu" maxlength="40" style="width: 300px; height: 40px; color: black;" />
                <div class="text_3">Opis trybu:</div><textarea name="opis_trybu" maxlength="250" style="width: 300px; height: 100px; color: black;" placeholder="Opis trybu gry"></textarea>
                <div class="text_3">Obraz trybu: (format ~2:3)</div><input type="file" name="tb_img_file" style="width: 270px; height: 40px; color: white; cursor:pointer;" />
                <input type="submit" value="wyślij" name="submit_tg" />
            </form>
            <?php

            $tryby_gry = mysqli_query($conn, "SELECT * FROM strona WHERE typ='tryb_gry'");

            $tryb_gry_count = 1;
            while ($tb_tab = mysqli_fetch_array($tryby_gry)) {
                $id_tb = $tb_tab['id'];
                $nazwa_tb = $tb_tab['name_'];
                $opis_tb = $tb_tab['opis_'];
                $img_name_tb = $tb_tab['name_img'];
                if ($tb_tab['publikacja'] == 0) {
                    echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">TRYB GRY ' . $tryb_gry_count . ": - " . $nazwa_tb . " --- Opis: " . $opis_tb . " --- <a href='images/$img_name_tb'><img src='images/$img_name_tb' style='height:80px; width:120px;'></img></a> --- " . $tb_tab['name_user'] . " | <a href='functions/add_trybgry.php?delid_tb=$id_tb'>USUN</a> | <a href='functions/add_trybgry.php?publikuj_tb=$id_tb'>PUBLIKUJ</a></div>";
                    echo '<hr style="width: 100%; color:white;">';
                }
                if ($tb_tab['publikacja'] == 1) {
                    echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">TRYB GRY ' . $tryb_gry_count . ": - " . $nazwa_tb . " --- Opis: " . $opis_tb . " --- <a href='images/$img_name_tb'><img src='images/$img_name_tb' style='height:80px; width:120px;'></img></a> --- " . $tb_tab['name_user'] . " | <a href='functions/add_trybgry.php?un_publikuj_tb=$id_tb'> ODPUBLIKUJ </a></div>";
                    echo '<hr style="width: 100%; color:white;">';
                }
                $tryb_gry_count++;
            }
            echo '<div style="margin-bottom: 125px;"></div>'
            ?>
        </div>
    </div>



    <div class="imgInfo_sett" id="admin_sett">
        <div class="ImgInfo-sett-content" id="">
            <div class='text_1' style='margin-bottom:50px; margin-left:5%;'>ADMINI</div>
            <div class='close' id='close_admin'>&times;</div>
            <br>
            <?php

            $tryby_gry = mysqli_query($conn, "SELECT id, name_img, name_user, publikacja FROM strona WHERE typ='avatar_admin'");

            $admin_count = 0;
            echo '<form action="functions/show_admin.php" method="post" style="margin-left: 5%;">';
            while ($admin_tab = mysqli_fetch_array($tryby_gry)) {
                $id_admin = $admin_tab['id'];
                $nazwa_avatar = $admin_tab['name_img'];
                $name_user = $admin_tab['name_user'];

                $admin_count++;

                if ($admin_tab['publikacja'] == 0) {
                    echo '<input type="checkbox" name="admin' . $admin_count . '" value="' . $id_admin . '" style="display:inline; margin-right:20px; cursor: pointer;"><div style="font-size:20px; color: white; margin: 10px 20px 10px 0px; display:inline;">ADMIN ' . $admin_count . ": - " . $name_user . " ---   <a href='images_admin/$nazwa_avatar' style='text-decoration: none;'><img style='width:50px; height:50px;' src='images_admin/$nazwa_avatar'></img></a></div>";
                    echo '<hr style="width: 100%; color:white;">';
                }
                if ($admin_tab['publikacja'] == 1) {
                    echo '<input type="checkbox" checked name="admin' . $admin_count . '" value="' . $id_admin . '" style="display:inline; margin-right:20px; cursor: pointer;"><div style="font-size:20px; color: white; margin: 10px 20px 10px 0px; display:inline;">ADMIN ' . $admin_count . ": - " . $name_user . " ---   <a href='images_admin/$nazwa_avatar' style='text-decoration: none;'><img style='width:50px; height:50px;' src='images_admin/$nazwa_avatar'></img></a></div>";
                    echo '<hr style="width: 100%; color:white;">';
                }
            }
            echo "<input type='text' value='$admin_count' name='ilosc' hidden/>";
            echo "<input type='submit' value='Zapisz' name='submit_avatar_admin' />
            </form>";
            echo '<div style="margin-bottom: 125px;"></div>'
            ?>
        </div>
    </div>

    <footer class="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script src="script/script_admin.js"></script>
    <script>
    </script>
</body>

</html>