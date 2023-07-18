<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_main.css">
    <link rel="stylesheet" href="style/style_topnav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doyebane.mc - strona główna</title>
</head>

<body onload="wejscie_main()">

    <?php
    session_start();
    if (isset($_SESSION['login_'])) {

        if ($_SESSION['admin_'] == 1) {

            echo '<nav_bar class="nav_bar">
        <div class="nav_bar_panel">
            <div></div>
            <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
                <a href="index.php" class="active">Strona główna</a>
                <a href="sklep.php">Sklep</a>
                <a href="profil.php">Profil</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="https://discord.gg/JyyEW3jz" id="ostatni_div" class="discord"><i class="bi bi-discord"></i></a>
                <a class="text_6" href="functions/logout.php">Wyloguj się</a>
                <a href="javascript:void(0);" class="icon"  onclick="Function_topnav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div></div>
        </div>
    </nav_bar>';
        } else if ($_SESSION['admin_'] == 3) {

            echo '<nav_bar class="nav_bar">
        <div class="nav_bar_panel">
            <div></div>
            <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
                <a href="index.php" class="active">Strona główna</a>
                <a href="sklep.php">Sklep</a>
                <a href="profil.php">Profil</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="admin.php">Admin</a>d
                <a class="text_6"  id="ostatni_div" href="functions/logout.php">Wyloguj się</a>
                <a href="javascript:void(0);" class="icon"  onclick="Function_topnav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div></div>
        </div>
    </nav_bar>';
        }
    } else {

        echo '<nav_bar class="nav_bar">
<div class="nav_bar_panel">
    <div></div>
    <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
        <a href="index.php" class="active">Strona główna</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="login.php">Zaloguj się</a>
        <a href="register.php">Zarejestruj się</a>
        <a href="https://discord.com/invite/ayzQWsUgfV" id="ostatni_div" class="discord"><i class="bi bi-discord"></i></a>
        <a href="javascript:void(0);" class="icon" onclick="Function_topnav()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div></div>
</div>
</nav_bar>';
    }

    include 'functions/conn.php';
    $img_info = mysqli_query($conn, "SELECT name_img FROM strona WHERE publikacja = '1' AND typ = 'img_info'");
    $img_arr = mysqli_fetch_row($img_info);
    $imgi = $img_arr[0];

    echo "<img src='images/noc3.png' class='tapeta'>";


    echo "<container class='container_pr' id='str_glowna'>
        <div style='position: relative;'' id='info_index_pr'>
            <news class='news_pr'>
                <div></div>
                <div class='text_1'>Informacje:</div>
                <div></div>
                <div></div>
                <div><img src='images/$imgi' style='width: 100%; height: auto; border-radius: 10px;'></div>
                <div></div>
            </news>
        </div>";
    ?>
    <div style="margin-bottom: 100px;">


        <?php

        $tryb_gry = mysqli_query($conn, "SELECT name_img, name_, opis_ FROM strona WHERE publikacja = '1' AND typ = 'tryb_gry'");

        echo '<div class="grid_tryb_gry" style="margin-bottom: 50px;">
            <div></div>
            <div class="text_1 left">Tryby gry:</div>
            <div></div>
        </div>';
        echo '<games class="games_cardss">';
        if ((mysqli_num_rows($tryb_gry) == 0)) {
            echo '<div class="games_cardd"><div class="text_2">Nic tu nie ma, przepraszamy :-/</div></div>';
        }
        while ($tryb_gry_arr = mysqli_fetch_array($tryb_gry)) {

            $img_tryb = $tryb_gry_arr['name_img'];
            echo '<div class="games_cardd">';
            echo "<div class='news_pr_srodek' style='padding: 5px;'><img src='images/$img_tryb' style='width:100%; height:200px;'></div>";
            echo '<div class="text_2 srodek" style="margin-top: 18px;">' . $tryb_gry_arr['name_'] . '</div>
                  </div>';
        }
        echo '</games>';
        ?>

    </div>

    <div style="margin-bottom: 200px;">
        <div class="grid_tryb_gry" style="margin-bottom: 50px;">
            <div></div>
            <div class="text_1 left">Oferujemy:</div>
            <div></div>
        </div>

        <oferty class="grid_oferty_pr">
            <div class="oferty_cardd_pr">
                <div class="srodek"><i class="bi bi-controller oferty_icon"></i></div>
                <div class="text_3 srodek">Miła atmosfera</div>
            </div>
            <div class="oferty_cardd_pr">
                <div class="srodek"><i class="bi bi-controller oferty_icon"></i></div>
                <div class="text_3 srodek">Społeczność graczy z całej polski</div>
            </div>
            <div class="oferty_cardd_pr">
                <div class="srodek"><i class="bi bi-controller oferty_icon"></i></div>
                <div class="text_3 srodek">Brak pay2win</div>
            </div>
        </oferty>
    </div>

    <div style="margin-bottom: 200px;">
        <div class="grid_tryb_gry" style="margin-bottom: 50px;">
            <div></div>
            <div class="text_1 left">Administracja:</div>
            <div></div>
        </div>

        <?php

        $administracja = mysqli_query($conn, "SELECT name_img, name_user FROM strona WHERE publikacja='1' AND typ='avatar_admin'");

        echo '<admin class="grid_admin_pr" id="admin_grid_gap">';

        while ($admin = mysqli_fetch_array($administracja)) {
            $avatar = $admin['name_img'];
            $admin_name = $admin['name_user'];

            echo '<div class="admin_cardd_pr" style="position: relative;">';
            echo "<div class='srodek'><img src='images/$avatar' style='border-radius: 25px; width: 150px; height: 150px;'></div>";
            echo '<div class="text_2 srodek" style="margin-top:15px;">' . $admin_name . '</div>
                  </div>';
        }
        echo '</admin>';
        ?>
 
    </div>


    <div style="margin-bottom: 30px;">
        <div class="grid_tryb_gry" style="margin-bottom: 50px;">
            <div></div>
            <div class="text_1 left">Sociale:</div>
            <div></div>
        </div>

        <odnosniki class="grid_sociale_pr">
            <div><i class="bi bi-tiktok tiktok_icon_link"></i></div>
            <div class="sociale_cardd_pr"></div>
            <div class="sociale_cardd_pr"></div>
        </odnosniki>
    </div>


    </container>


    <footer class="footer">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>

</html>