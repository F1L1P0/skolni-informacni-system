<?php
include 'connect.php';
redirectIfNotLoggenIn();

$userid = $_SESSION["id"];

$tel = $_POST['phone'];
$email = $_POST['email'];

    $sql = $databaze->query("UPDATE users SET tel='$tel' WHERE id='$userid'");
    $sql = $databaze->query("UPDATE users SET email='$email' WHERE id='$userid'");
    redirect("Pages/profil.php");
