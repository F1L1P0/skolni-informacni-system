<?php
include 'connect.php';
redirectIfNotLoggenIn();

$username = $_SESSION["jmeno"];
$userid = $_SESSION["id"];

$password = $_POST['old_pw'];
$newpassword = $_POST['new_pw'];
$confirmnewpassword = $_POST['new_pw_check'];

$result = $databaze->query("SELECT password FROM users WHERE name='$username' AND password='$password'");

if ($newpassword != $password ) {
    redirect("Pages/settings.php?error");
}

if(!$result || $result->num_rows == 0)
{
    redirect("Pages/settings.php?error");
}else
{
    $sql = $databaze->query("UPDATE users SET password='$newpassword' WHERE id='$userid'");
    if($sql)
    {
        redirect("Pages/settings.php?success");
    }
}
