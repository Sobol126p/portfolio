<?php

include '../conn.php';
$id_user = $_SESSION['id_user'];

$wynik_fabryki = mysqli_query($conn, "SELECT * FROM `fabryki` WHERE `id_user`='$id_user'");
$fabryki = mysqli_fetch_array($wynik_fabryki);
$_SESSION['fabryka1'] = $fabryki['fabryka1'];

