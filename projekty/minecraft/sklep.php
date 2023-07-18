<?php

session_start();

if(isset($_SESSION['login_']))
{
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_main.css">
    <link rel="stylesheet" href="style/style_sklep.css">
    <link rel="stylesheet" href="style/style_topnav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script/jquery.js"></script>
    <title>Doyebane.mc - sklep</title>
</head>

<body onload="wejscie_sklep()">';
   
if ($_SESSION['admin_'] == 1) {

    echo '<nav_bar class="nav_bar">
<div class="nav_bar_panel">
    <div></div>
    <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
        <a href="index.php">Strona główna</a>
        <a href="sklep.php" class="active">Sklep</a>
        <a href="profil.php">Profil</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="https://discord.com/invite/ayzQWsUgfV" id="ostatni_div" class="discord"><i class="bi bi-discord"></i></a>
        <a href="javascript:void(0);" class="icon"  onclick="Function_topnav()">
            <i class="fa fa-bars"></i>
        </a>
        <a class="text_6" href="functions/logout.php">Wyloguj się</a>
    </div>
    <div></div>
</div>
</nav_bar>';
} else if ($_SESSION['admin_'] == 3) {

    echo '<nav_bar class="nav_bar">
<div class="nav_bar_panel">
    <div></div>
    <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
        <a href="index.php">Strona główna</a>
        <a href="sklep.php" class="active">Sklep</a>
        <a href="profil.php">Profil</a>
        <a href="kontakt.php">Kontakt</a>
        <a href="admin.php" id="ostatni_div">Admin</a>
        <a href="javascript:void(0);" class="icon"  onclick="Function_topnav()">
            <i class="fa fa-bars"></i>
        </a>
        <a class="text_6" href="functions/logout.php">Wyloguj się</a>
    </div>
    <div></div>
</div>
</nav_bar>';
}
    
echo '<img src="images/sklep1.png" class="tapeta">


    <container_sklep class="sklep_pr" id="sklep_pr">
        <div style="position: relative; top: 200px;">
            <div class="grid_tytul">
                <div></div>
                <div class="text_1 left">Sklep:</div>
                <div></div>
            </div>

            <sklep class="sklep_menu_pr" id="sklep_menu_pr" style=" margin-top: 30px;">
                <div class="galeria_zakupy1"></div>
                <div class="galeria_zakupy2"></div>
                <div class="galeria_zakupy3"></div>
            </sklep>

            <sklep class="sklep_menu_pr" id="sklep_menu_pr" style="margin-top: 80px;">
                <div class="galeria_zakupy4"></div>
                <div class="galeria_zakupy5"></div>
                <div class="galeria_zakupy6"></div>
            </sklep>

            <div style="margin-top: 200px;">
elo bolo
            </div>
        </div>
    </container_sklep>

    <footer class="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>

</html>';
} 
else{
    header('Location: login.php');
}
?>