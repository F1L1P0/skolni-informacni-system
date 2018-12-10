<?php
require "connect.php";

// remove all session variables
session_unset();



// destroy the session
session_destroy();

redirect("index.php");
?>