<?php
	require "header.php";

	if (isset($_GET["name"]))
	{

		$name = $_GET["name"];
		$pohlavi = $_GET["pohlavi"];
   		

		$databaze->query("INSERT INTO users (name, pohlavi) VALUES ('$name', '$pohlavi')"); // vykoná SQL kód
		redirect("index.php");

	}

	
?> 
			
			<form id="form" action="index.php" method="GET">
				<input type="text" name="name" placeholder="Napiš svoje jméno">
				<i class="fas fa-users"></i>
			  	<select name="pohlavi">
				    <option value="muž">Muž</option>
				    <option value="žena">Žena</option>
				    <option value="mutant">Mutant</option>
				   </select>
			    <input type="submit" name="submit" value="ZAREGISTROVAT">

			</form>
		
			<table border="2" width="300px" >
				<thead>
					<th>ID</th>
					<th>JMÉNO</th>
					<th>pohlaví</th>
				</thead>

				<tbody>
					<?php 
						$sql = "SELECT * FROM users";
						$result = $databaze->query($sql);
						
						$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

						foreach ($result as $user)
						{ ?>
							
							<tr>
								<td><?= $user["id"] ?></td>
								<td><?= $user["name"] ?></td>
								<td><?= $user["pohlavi"] ?></td>
								<td> <a href="delete.php?id=<?= $user["id"] ?>">Smazat</a> </td>
							</tr>

						  <?php	
						}

						$databaze->close();				
					?>
				</tbody>

			</table>
<?php

require 'footer.php';