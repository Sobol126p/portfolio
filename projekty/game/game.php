<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gra</title>
    <link rel="stylesheet" href="style/game.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="body">
    <?php session_start();
    if (isset($_SESSION['alert'])) {
        echo '<script> alert("' . $_SESSION['alert'] . '");</script>';
    }
    $_SESSION['alert'] = NULL;
    ?>
    <div class="top">
        <div class="top1">
            <?php echo '<div class="monety-top"><div style="top: 3px; px; position:relative;" value=' . $_SESSION['monety'] . ' id="monety">Monety:  ' . $_SESSION['monety'] . '</div></div>'; ?>
        </div>
        <div class="top1">
            <?php echo '<div class="monety-top"><div style="top: 3px; px; position:relative;" id="">Towar:  ' . $_SESSION['towar'] . '</div></div>'; ?>
        </div>
        <div class="top1"></div>
        <div class="top1"></div>
        <div class="top1"></div>
    </div>
    <div class="d1">
        <div class="d2">
            <?php include 'magazyn.php'; ?>
            <?php include 'sklep.php'; ?>
        </div>
        <div class="d2">
            <div class="blok">
                <div class="blok_wew">
                    <?php
                    echo '<br><br>
                    <div style="font-weight:800; font-size: 25px;"> Witaj ' . $_SESSION['login'] . '</div><br><br>
                    <div style="font-weight:800; font-size: 25px;"> Firma: ' . $_SESSION['nazwa_firmy'] . '</div><br><br>';
                    echo '<a href="functions/logout.php">Wyloguj się</a><br><br>';
                    echo '<div style="margin-top:80px; font-size:30px; font-weight:700;">TOP 5</div>';
                    echo '<div style="margin-left: auto; margin-right: auto; width: 452px; margin-top:10px;">
                        <div id="top5_monety" style="width:150px; height:45px; float:left; text-align: center; color: rgb(37, 37, 37); font-weight:600; font-size:25px; cursor:pointer;">Monety</div>
                        <div id="top5_fabryka" style="width:150px; height:45px; float:left; text-align: center; color: rgb(37, 37, 37); font-weight:400; font-size:25px; cursor:pointer;cursor:pointer;">LVL Fabryki</div>
                        <div id="top5_pracownicy" style="width:150px; height:45px; float:left; text-align: center; color: rgb(37, 37, 37); font-weight:400; font-size:25px; cursor:pointer;">Pracownicy</div>
                    </div><br><br><br>';
                    include 'functions/top5.php';
                    ?>

                </div>
            </div>
        </div>
        <div class="d2">
            <?php include 'fabryki.php'; ?>
            <?php include 'produkcja.php'; ?>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>