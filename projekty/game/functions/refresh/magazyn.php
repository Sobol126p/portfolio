<?php
include '../conn.php';
session_start();
$id_user = $_SESSION['id_user'];

$magazyn_wynik = mysqli_query($conn, "SELECT * FROM `magazyn` WHERE `id_user`= $id_user");
$magazyn = mysqli_fetch_array($magazyn_wynik);
$_SESSION['wykalaczki'] = $magazyn['wykalaczki'];
$_SESSION['dlugopisy'] =  $magazyn['dlugopisy'];
$_SESSION['kubki'] = $magazyn['kubki'] ;
$_SESSION['telefony'] = $magazyn['telefony'] ;
$_SESSION['rowery'] = $magazyn['rowery'] ;
$_SESSION['samochody'] = $magazyn['samochody'] ;
mysqli_close($conn);