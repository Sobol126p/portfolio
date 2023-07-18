<!DOCTYPE html>
<html lang="en">

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

<body onload="wejscie_register()">
    <nav_bar class="nav_bar">
        <div class="nav_bar_panel">
            <div></div>
            <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
                <a href="index.php">Strona główna</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="login.php" class="active">Zaloguj się</a>
                <a href="register.php">Zarejestruj się</a>
                <a href="https://discord.com/invite/ayzQWsUgfV" id="ostatni_div" class="discord"><i class="bi bi-discord"></i></a>
                <a href="javascript:void(0);" class="icon" onclick="Function_topnav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div></div>
        </div>
    </nav_bar>
    <img src="images/profil_zdj.png" class="tapeta">

    <container_reg class="reg_pr" id="reg_pr">

        <div style="position: relative; top: 200px;">
            <form action="functions/log.php" method="post">
                <div class="grid_reg_form">
                    <div></div>
                    <div class="text_3" style="padding-top: 18px;">Login: </div>
                    <div></div>
                    <div></div>
                    <div><input type="text" name="login_l" class="input"></div>
                    <div></div>
                    <div></div>
                    <div class="text_3" style="padding-top: 18px;">Hasło: </div>
                    <div></div>
                    <div></div>
                    <div><input type="password" name="password_l" class="input"></div>
                    <div></div>
                    <div></div>
                    <div><button type="submit" class="log_button">ZALOGUJ SIĘ</button></div>
                    <div></div>
                </div>
            </form>
        </div>

        <div style="position: relative; top: 300px; left:17%;">
            <?php
            if(isset($_GET['tekst_zwrotny'])){
            echo "<info class='text_2' style='color: red;'>" . $_GET['tekst_zwrotny'];
            ".</info>";
            }
            ?>
        </div>

    </container_reg>

    <footer class="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
</body>

</html>