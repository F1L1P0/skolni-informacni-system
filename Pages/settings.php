<?php
	$header_title = "Nastavení";
	$file_prefix = "../";
	require "../header.php";
?>	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Password Change</title>
     </head>
    <body>
    <h1>Zadej své heslo.</h1>
   <form method="POST" action="password_change.php">
    <table>
    <tr>
   <td>Zadej své jméno</td>
    <td><input type="name" size="10" name="name"></td>
    </tr>
    <tr>
    <td>Zadej své aktuální heslo :</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Zadej nové heslo :</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Znovu zadej nové heslo :</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Uložit nové heslo.">
    </form>
   </body>
   
<?php
	require '../footer.php';
?> 