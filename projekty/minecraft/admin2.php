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

        <div style="position: relative; top:200px;">
            <admin_obraz class="grid_admin_obraz_info"  style="position: relative; width:100%; height:200px; background-color:aliceblue;">
                <divv style="position: relative; background-color:aliceblue;">
                    <div class="text_1" style="display:inline;">Obraz Info </div>
                    <div class="text_5" style="display:inline;"> (format ~1:2)</div>

                    <form enctype="multipart/form-data" action="functions/img_info.php" method="post" style="background-color:aliceblue;">
                        <input type="file" name="img_file" style="width: 300px; height: 40px; color: white; cursor:pointer;" />
                        <input type="submit" value="wyślij" name="submit_addimg" />
                    </form>

                    <?php
                    include 'functions/conn.php';

                    $images = mysqli_query($conn, "SELECT * FROM images");

                    $img_count = 1;

                    while ($images_tab = mysqli_fetch_array($images)) {
                        $id = $images_tab['id'];
                        $img_name = $images_tab['name_'];
                        if ($images_tab['publikacja'] == 0) {
                            echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">OBRAZ ' . $img_count . ": --- <a href='images/$img_name' style='text-decoration: none;'>" . $images_tab['name_'] . "</a> --- " . $images_tab['name_user'] . " | <a href='functions/img_info.php?delid=$id'>USUN</a> | <a href='functions/img_info.php?publikuj=$id'>PUBLIKUJ</a></div>";
                            echo '<hr style="width: 550px; color:white;">';
                            $img_count++;
                        }
                        if ($images_tab['publikacja'] == 1) {
                            echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">OBRAZ ' . $img_count . ": --- <a href='images/$img_name' style='text-decoration: none;'>" . $images_tab['name_'] . "</a> --- " . $images_tab['name_user'] . " | <a href='functions/img_info.php?delid=$id'>USUN</a> | <a href='functions/img_info.php?publikuj=$id'>PUBLIKUJ</a></div>";
                            echo '<hr style="width: 550px; color:white;">';
                            $img_count++;
                        }
                    }
                    ?>
                </divv>
                <divv style="position: relative; background-color:aliceblue;">
                    <div class="text_1" style="display:inline;">Obraz Info </div>
                    <div class="text_5" style="display:inline;"> (format ~1:2)</div>

                    <form enctype="multipart/form-data" action="functions/img_info.php" method="post">
                        <input type="file" name="img_file" style="width: 300px; height: 40px; color: white; cursor:pointer;" />
                        <input type="submit" value="wyślij" name="submit_addimg" />
                    </form>

                    <?php
                    include 'functions/conn.php';

                    $images = mysqli_query($conn, "SELECT * FROM images");

                    $img_count = 1;

                    while ($images_tab = mysqli_fetch_array($images)) {
                        $id = $images_tab['id'];
                        $img_name = $images_tab['name_'];
                        if ($images_tab['publikacja'] == 0) {
                            echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">OBRAZ ' . $img_count . ": --- <a href='images/$img_name' style='text-decoration: none;'>" . $images_tab['name_'] . "</a> --- " . $images_tab['name_user'] . " | <a href='functions/img_info.php?delid=$id'>USUN</a> | <a href='functions/img_info.php?publikuj=$id'>PUBLIKUJ</a></div>";
                            echo '<hr style="width: 550px; color:white;">';
                            $img_count++;
                        }
                        if ($images_tab['publikacja'] == 1) {
                            echo '<div style="font-size:20px; color: white; margin: 10px 20px 10px 0px;">OBRAZ ' . $img_count . ": --- <a href='images/$img_name' style='text-decoration: none;'>" . $images_tab['name_'] . "</a> --- " . $images_tab['name_user'] . " | <a href='functions/img_info.php?delid=$id'>USUN</a> | <a href='functions/img_info.php?publikuj=$id'>PUBLIKUJ</a></div>";
                            echo '<hr style="width: 550px; color:white;">';
                            $img_count++;
                        }
                    }
                    ?>
                </divv>
                <divv style="position: relative;">
                <div class="text_1"> co to?</div>
                </divv>
            </admin_obraz>
        </div>










    </conteiner_admin>

    <footer class="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script>
    </script>
</body>

</html>