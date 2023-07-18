<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_main.css">
    <link rel="stylesheet" href="style/style_szablony.css">
    <link rel="stylesheet" href="style/style_topnav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script/jquery.js"></script>
    <title>Doyebane.mc - kontakt</title>
</head>

<body onload="wejscie_kontakt()">

<?php

session_start();

if(isset($_SESSION['login_']))
{

    if ($_SESSION['admin_'] == 1) {

        echo '<nav_bar class="nav_bar">
    <div class="nav_bar_panel">
        <div></div>
        <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
            <a href="index.php">Strona główna</a>
            <a href="sklep.php">Sklep</a>
            <a href="profil.php">Profil</a>
            <a href="kontakt.php" class="active">Kontakt</a>
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
            <a href="sklep.php">Sklep</a>
            <a href="profil.php">Profil</a>
            <a href="kontakt.php" class="active">Kontakt</a>
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

}
else{
    echo '<nav_bar class="nav_bar">
    <div class="nav_bar_panel">
        <div></div>
        <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
            <a href="index.php">Strona główna</a>
            <a href="kontakt.php" class="active">Kontakt</a>
            <a href="login.php">Zaloguj się</a>
            <a href="register.php">Zarejestruj się</a>
            <a href="https://discord.gg/JyyEW3jz" id="ostatni_div" class="discord"><i class="bi bi-discord"></i></a>
            <a href="javascript:void(0);" class="icon" onclick="Function_topnav()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div></div>
    </div>
</nav_bar>';
}
?>
    <img src="images/noc5.png" class="tapeta">

    <container_kontakt class="kontakt_pr" id="kontakt_pr">
        <div style="position: relative; top: 200px;">
            <kontakt class="grid_kontakt_pr">
                <div></div>
                <div>
                    <div class="left text_1">Potrzebujesz pomocy?</div>
                </div>
                <div></div>
                <div></div>
                <div>
                    <div class="left text_3 pytanie">Jak zmienić hasło?</div>
                </div>
                <div></div>
                <div></div>
                <div>
                    <div class="left text_3 pytanie">Jak podpiąć e-mail?</div>
                </div>
                <div></div>
                <div></div>
                <div>
                    <div class="left text_3 pytanie">Jak być bogatym?</div>
                </div>
                <div></div>
                <div></div>
                <div>
                    <div class="left text_3 pytanie">Jak nie być?</div>
                </div>
                <div></div>
                <div></div>
                <div>
                    <div class="left text_2">Jeśli nie znajdziesz rozwiazania na swój problem to skontaktuj sie z
                        naszymi adminami przez <div id="mail" class="mail_pr">maila</div> lub wejdź na serwer <div
                            class="discord_pr" id="discord_link_pr">Discord</div> !
                    </div>
                </div>
                <div></div>
            </kontakt>
        </div>
        <div style="position: relative; top: 200px;">
            xDDD
        </div>
    </container_kontakt>

    <footer class="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script>
        document.getElementById('discord_link_pr').onclick = function () {
            window.open("https://discord.gg/JyyEW3jz", "_self");
        };
    </script>
</body>

</html>