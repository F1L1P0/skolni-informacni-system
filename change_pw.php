<?php
include 'connect.php';
redirectIfNotLoggenIn();

$username = $_SESSION["jmeno"];
$userid = $_SESSION["id"];

$password = $_POST['old_pw'];
$newpassword = $_POST['new_pw'];
$confirmnewpassword = $_POST['new_pw_check'];

$result = $databaze->query("SELECT password FROM users WHERE name='$username' AND password='$password'");

if ($newpassword == $password) {
    redirect("Pages/profil.php?error");
}

if(!$result || $result->num_rows == 0)
{
    redirect("Pages/profil.php?error");
}

if($newpassword == $confirmnewpassword)
{
    $sql = $databaze->query("UPDATE users SET password='$newpassword' WHERE id='$userid'");
    if($sql)
    {
        redirect("Pages/profil.php?success");
    }
}else{
    redirect("Pages/profil.php?error");
}
