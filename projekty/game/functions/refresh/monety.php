<?php

include "../conn.php";
$id_user = $_SESSION['id_user'];

$monety_wynik = mysqli_query($conn, "SELECT `monety` FROM `zasoby` WHERE `id_user`=$id_user");
$monety = mysqli_fetch_array($monety_wynik);
$_SESSION['monety'] = $monety['monety'];
mysqli_close($conn);
