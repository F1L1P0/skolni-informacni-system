<?php
	$header_title = "Nastavení";
	$file_prefix = "../";
	require "../header.php";
?>	
<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
 -->


<form>
  <ul style="margin: 50px" class="list-group">
    <li class="list-group-item active"><h1 style="text-align: center;">Změna hesla.</h1></li>
    <li class="list-group-item">Zadej své aktuální heslo: <input style="margin: 6px" type="password" name="name"></li>
    <li class="list-group-item">Zadej své nové heslo: <input style="margin: 6px" type="password" name="name"></li>
    <li class="list-group-item">Potvrdit nové heslo: <input style="margin: 6px" type="password" name="name"></li>
    <li class="list-group-item"><button type="button" class="btn btn-primary">Primary</button></li>

  </ul>
</form>

   </body>
   
<?php
	require '../footer.php';
?> 