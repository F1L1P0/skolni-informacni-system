<?php
	require "header.php";

	if (isset($_GET["name"]))
	{

		$name = $_GET["name"];
		$pohlavi = $_GET["pohlavi"];
   		

		$databaze->query("INSERT INTO radeks (name, pohlavi) VALUES ('$name', '$pohlavi')"); // vykoná SQL kód
		redirect("index.php");

	}

	
?> 
			
			<form id="form" action="index.php" method="GET">
				<input type="text" name="name" placeholder="Napiš svoje jméno">
				<i class="fas fa-radeks"></i>
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
						$radky = $databaze->query("SELECT * FROM users");
						
						$radky = mysqli_fetch_all($radky, MYSQLI_ASSOC);

						foreach ($radky as $radek)
						{ ?>
							
							<tr>
								<td><?= $radek["id"] ?></td>
								<td><?= $radek["name"] ?></td>
								<td><?= $radek["pohlavi"] ?></td>
								<td> <a href="delete.php?id=<?= $radek["id"] ?>">Smazat</a> </td>
							</tr>

						  <?php	
						}

						$databaze->close();				
					?>
				</tbody>

			</table>
<?php

require 'footer.php';