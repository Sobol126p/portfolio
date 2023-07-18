<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .reg {
            padding: 15px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 25px;
        }

        .form {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 5px;
        }
    </style>
</head>

<body class="body">
    <div class="top"></div>
    <div class="blok">
        <div class="blok_wew">
            <div class="reg">Zaloguj się</div>
            <br>
            <form action="functions/loginf.php" method="POST">
                <div class="form">Login:</div><input name="login"><br><br>
                <div class="form">Hasło:</div><input name="pass" type="password"><br><br>
                <input type="submit" value="Zaloguj się" style="cursor: pointer;"><br><br><br>
                <?php
                error_reporting(0);
                echo '<div style="color: red;">' . $_GET["tekst_zwrotny"] . '</div>'
                ?>
            </form>
            <br><br><br>
            <div style="font-size: 20px; color:green; font-weight:600; cursor:pointer;" onclick="reg_link()">Załóż Konto</div>
        </div>
    </div>

    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>