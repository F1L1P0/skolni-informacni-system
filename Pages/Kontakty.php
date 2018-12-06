<?php
	$header_title = "Kontakty";
	$file_prefix = "../";

	require "../header.php";


?> 
	<h1 class="nadpis">Kontakty</h1>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody class="pozice_kontakty">
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

		
<?php
	require '../footer.php';
?> 