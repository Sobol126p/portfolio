<?php
session_start();

if (isset($_SESSION['login_'])) {

    if (isset($_GET['tzw'])) {
        $tzw = $_GET['tzw'];
    } else {
        $tzw = '';
    }

    echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_main.css">
    <link rel="stylesheet" href="style/style_profil.css">
    <link rel="stylesheet" href="style/style_szablony.css">
    <link rel="stylesheet" href="style/style_topnav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Doyebane.mc - profil</title>
</head>

<body onload="wejscie_profil()">';

    if ($_SESSION['admin_'] == 1) {

        echo '<nav_bar class="nav_bar">
        <div class="nav_bar_panel">
            <div></div>
            <div class="topnav" id="myTopnav" style="justify-content: center; position: relative;">
                <a href="index.php">Strona główna</a>
                <a href="sklep.php">Sklep</a>
                <a href="profil.php" class="active">Profil</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="https://discord.com/invite/ayzQWsUgfV" id="ostatni_div" class="discord"><i class="bi bi-discord"></i></a>
                <a href="javascript:void(0);" class="icon" onclick="Function_topnav()">
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
                <a href="profil.php" class="active">Profil</a>
                <a href="kontakt.php">Kontakt</a>
                <a href="admin.php" id="ostatni_div">Admin</a>
                <a href="javascript:void(0);" class="icon" onclick="Function_topnav()">
                    <i class="fa fa-bars"></i>
                </a>
                <a class="text_6" href="functions/logout.php">Wyloguj się</a>
            </div>
            <div></div>
        </div>
    </nav_bar>';
    }

    echo '<img src="images/profil_zdj.png" class="tapeta"></img>


    <container_kontakt class="profil_pr" id="profil_pr">';

?>

    <div class="grid_profil_statystyki" style="margin-top: 15%;">
        <div class="profil_statystyki_box text_2 prof_hover" id="profil">PROFIL</div>
        <div class="profil_statystyki_box text_2 prof_hover" id="statystyki">RANKING</div>
        <div class="profil_statystyki_box" id="statystyki"><form method="post"><input type="text" class="szukaj_gracza" placeholder="SZUKAJ GRACZY" style="display: inline;"><button type="submit" id="szukaj_gracza_click" style="display: inline; border:none; background:transparent;"><i class="bi bi-search" style="color:rgba(44, 44, 44, 0.5); font-size:20px;"></i></button></form></div>
    </div>
    <hr style="width: 98%; border:3px solid white;">
    <div id="profil_body" style="display:block;">
        <?php
        echo "<div style='margin-top:20px;'><div style='color:red;' class='text_2'>$tzw</div></div>";

        echo '<div style="position: relative; top: 50px;">
            <pow_nick class="grid_pow_nick_pr">
                <div></div>
                <div class="left text_10">
                    <div style="display: inline;">Witaj, </div>
                    <div style="font-weight: 900; display: inline;">' . $_SESSION['login_'] . '</div>
                    <div style="display: inline;">!</div>
                    <div class="ustawienia_button_pr" id="spanEdit"><i class="bi bi-gear"></i></div>
                </div>
                <div></div>
            </pow_nick>

            <statystyki class="grid_statystyki_pr">
                <div></div>
                <div class="left text_2">
                    <div style="display: inline;">Poziom: </div>
                    <div style="font-weight: 700; display: inline;">27</div>
                </div>
                <div></div>
                <div></div>
                <div class="left text_2">
                    <div style="display: inline;">Ranga: </div>
                    <div style="font-weight: 700; display: inline; margin-bottom: 100px;">Strzelec</div>
                </div>
                <div></div>
                <div></div>
                <div class="left text_2">
                    <div style="display: inline;">Premium: </div>
                    <div style="font-weight: 700; display: inline; margin-bottom: 100px; color: rgb(255, 238, 0);">Ranga
                        VIP</div>
                </div>
                <div></div>
                <div></div>
                <div class="left text_2">
                    <div style="display: inline;">Data dołaczenia: </div>
                    <div style="font-weight: 700; display: inline; margin-bottom: 100px;">24.12.2022</div>
                </div>
                <div></div>
                <div></div>
                <div class="left text_2">
                    <div style="display: inline;">Wygrane areny: </div>
                    <div style="font-weight: 700; display: inline; margin-bottom: 100px;">9</div>
                </div>
                <div></div>
                <div></div>
                <div class="left text_2">
                    <div style="display: inline;">Trofea: </div><img src="images/vw_logo.png"
                        style="display: inline; width: 80px; height: 80px; margin-left: 10px;"></img><img
                        src="images/vw_logo.png"
                        style="display: inline; width: 80px; height: 80px; margin-left: 10px;"></img><img
                        src="images/vw_logo.png"
                        style="display: inline; width: 80px; height: 80px; margin-left: 10px;"></img>
                </div>
                <div></div>
            </statystyki>'; ?>

    </div>
    </div>
    <div id="statystyki_body" style="display:none;">

        <div class="grid_profil_statystyki" style="margin-top: 1%;">
            <div class="profil_statystyki_box text_3 prof_hover" id="stt_elo">ELO</div>
            <div class="profil_statystyki_box text_3 prof_hover" id="stt_wygrane_areny">WYGRANE ARENY</div>
            <div class="profil_statystyki_box text_3 prof_hover" id="stt_liczba_zabitych">LICZBA ZABITYCH</div>
        </div>

        <div style="display: none;" id="stt_elo_body">
            <div class="top15_tytul" style="margin-top: 50px; margin-bottom:80px;">
                <div class="text_2"> TOP 15 - ELO </div>
            </div>
            <div class="top15_tabelka" class="text_4">
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
            </div>
        </div>

        <div style="display: none;" id="stt_wygrane_areny_body">
            <div class="top15_tytul">
                <div class="text_2" style="margin-top: 50px; margin-bottom:80px;"> TOP 15 - WYGRANE ARENY </div>
            </div>
            <div class="top15_tabelka" class="text_4">
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
            </div>
        </div>

        <div style="display:none;" id="stt_liczba_zabitych_body">
            <div class="top15_tytul" style="margin-top: 50px; margin-bottom:80px;">
                <div class="text_2"> TOP 15 - LICZBA ZABITYCH </div>
            </div>
            <div class="top15_tabelka" class="text_4">
                <div class="text_4">dfffdfd</div>
                <div class="text_4">dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
                <div>dfffdfd</div>
            </div>
        </div>
        <?php
        include 'functions/conn.php';
        $stats_user_list = mysqli_query($conn, "SELECT login_ FROM users;");

        $stats_users_count = 1;

        while ($u_stats = mysqli_fetch_array($stats_user_list)) {
            if ($u_stats['login_'] == $_SESSION['login_']) {
                echo '<div class="text_4" style="color:green;">' . $stats_users_count . '</div>';
                echo '<div class="text_4" style="color:green;">' . $u_stats['login_'] . '</div>';
                echo '<div class="text_4" style="color:green;">1000 pkt</div>';
                echo '<div class="text_4" style="color:green;">ELO: 2333232</div>';
            } else {
                echo '<div class="text_4">' . $stats_users_count . '</div>';
                echo '<div class="text_4">' . $u_stats['login_'] . '</div>';
                echo '<div class="text_4">fdsddsdsd</div>';
                echo '<div class="text_4">dsdsdsd</div>';
            }
            //echo '<hr style="border:2px dashed white;">';
            $stats_users_count++;
        }
        ?>

    </div>

    <div id="szukaj_profilu_body" style="display:none;">

    </div>
    </container_kontakt>


    <div id="update_sett" class="modal_sett">
        <div class="modal-sett-content" id="modal-sett-content">
            <div class="modal-header-pr">
                <h2 class="text_2" style="display: inline;">Ustawienia Profilu</h2>
                <span class="close" style="display: inline;" id="close_pr">&times;</span>
            </div>

            <div class="modal-body-pr">
                <?php
                $email = $_SESSION['email_'];
                if ($_SESSION['email_']) {
                    echo $email;
                    echo '<form action="functions/podlacz_email.php" method="post">
    <div class="text_5" style="padding-bottom: 10px;">Podłącz e-mail od konta:</div>' .
                        "<input name='email_p' type='email' style='padding-bottom: 5px;' class='input_pr' value=$email>" .
                        '<button type="submit" name="submit_e" class="button_pr"
        style="padding-bottom: 5px; margin-top: 5px; margin-left:4px;">ZMIEŃ</button>
    </form>';
                } else {
                    echo $email;
                    echo '<form action="functions/podlacz_email.php" method="post">
                    <div class="text_5" style="padding-bottom: 10px;">Podłącz e-mail od konta:</div>
                    <input name="email_p" type="email" style="padding-bottom: 5px;" class="input_pr">
                    <button type="submit" name="submit_e" class="button_pr"
                        style="padding-bottom: 5px; margin-top: 5px;">PODŁĄCZ</button>
                </form>';
                }


                echo '<form style="margin-top:50px;"  action="functions/zmien_haslo.php" method="post">
                    <div class="text_5" style="padding-bottom: 20px;">Zmień hasło:</div>
                    <div class="text_4">Obecne hasło:</div>
                    <input type="text" name="oh" style="padding-bottom: 5px;" class="input_pr">
                    <div class="text_4" style="padding-top: 15px;">Nowe hasło:</div>
                    <input type="password" name="nh" style="padding-bottom: 5px;" class="input_pr">
                    <div class="text_4" style="padding-top: 15px;">Powtórz nowe hasło:</div>
                    <input type="password" name="nhp" style="padding-bottom: 5px;" class="input_pr">
                    <button type="submit" name="submit_h" class="button_pr" id="sett_profil_button" style="padding-bottom: 5px;">ZMIEŃ
                        HASŁO</button>
                </form>';

                if ($_SESSION['admin_'] == 3) {
                    echo '<form method="post" enctype="multipart/form-data" action="functions/podlacz_img_admin.php" style="margin-top:50px;">
    <div class="text_5"> Wybierz avatar: </div><input type="file" name="img_profil_admin" style="margin-top:20px; color:white;">
    <button type="submit" name="submit_img" class="button_pr" id="sett-profil-button" style="padding-bottom: 5px;">WYŚLIJ</button>
    </form>';
                }

                ?>

            </div>
            <div class="modal-footer-pr"></div>
        </div>
    </div>

    <footer class="footer">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script>
        var update_modal = document.getElementById("update_sett");
        var spanEdit = document.getElementById("spanEdit");
        spanEdit.onclick = function() {
            update_modal.style.display = "block";
            console.log("otwórz");
        };
        window.onclick = function(event) {
            if (event.target == update_modal) {
                update_modal.style.display = "none";
                console.log("zamknij");
            };
        };

        document.getElementById("close_pr").onclick = function() {
            update_modal.style.display = "none";
            console.log("zamknij");
        };
    </script>
    <script src="script/script_profil.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location: login.php');
}
?>