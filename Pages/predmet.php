<?php
	$header_title = "Rozvrhy";
	$file_prefix = "../";
	require "../header.php";
   
    if (!empty($_POST)){
    $den = $_POST["den"];
    $hodina = $_POST["hodina"];
    $predmet = $_POST["predmet"];
    $databaze->query("DELETE FROM predmet2rozvrh WHERE id_rozvrh=1 AND den='$den' AND hodina='$hodina'");
    if ($predmet != "0")
      $databaze->query("INSERT INTO predmet2rozvrh (`id_rozvrh`, `den`, `hodina`, `id_predmet`) VALUES (1,'$den','$hodina','$predmet')");
  }


  $result = $databaze->query("SELECT predmety.nazev,predmety.ucitel,predmety.barva,predmet2rozvrh.den,predmet2rozvrh.hodina FROM predmety INNER JOIN predmet2rozvrh ON predmety.id=predmet2rozvrh.id_predmet INNER JOIN rozvrhy ON rozvrhy.id=predmet2rozvrh.id_rozvrh");
  $predmety = $result->fetch_all(MYSQLI_ASSOC);
 
  $result = $databaze->query("SELECT * FROM predmety");
  $select_predmety = $result->fetch_all(MYSQLI_ASSOC);

  $tyden = [1=>[],[],[],[],[]];

  foreach ($predmety as $predmet)
  {
    $tyden[intval($predmet['den'])][intval($predmet['hodina'])] = "<td onclick='add_button(".$predmet['den'].",".$predmet['hodina'].")' class='predmet cursor' ><div class='predmet_border' style='background-color:".$predmet["barva"]."; transition: 0.4s ease-in-out;'>".$predmet['nazev']."<br>"."<span class='d-none d-lg-inline'>".$predmet['ucitel']."</span></div></td>";
  }
  
?>
	<div class="content mt-3">
  <span class="table-head">Denní rozvrh</span>
   <div class="rozvrh">
    <table>
    <tr class="grey">
    <td></td>
						<td>1.<br><span>8:00-9:00</span></td>
						<td>2.<br><span>9:05-10:00</span></td>
						<td>3.<br><span>10:10-11:00</span></td>
						<td>4.<br><span>11:20-12:00</span></td>
						<td>5.<br><span>12:30-13:10</span></td>
						<td>6.<br><span>13:20-14:00</span></td>
						<td>7.<br><span>14:05-14:40</span></td>
						<td>8.<br><span>14:50-15:30</span></td>
    </tr>
    <?php 
    $dny = [
      1=>"Pondělí",
      2=>"Úterý",
      3=>"Středa",
      4=>"Čtvrtek",
      5=>"Pátek"
    ];

    for ($i=1; $i < 6; $i++) { 
      echo "<tr class='grey'>";
      echo "<td>".$dny[$i]."</td>";

      for ($h=1; $h < 9; $h++) { 
        if (isset($tyden[$i][$h])){
          echo $tyden[$i][$h];
        }else if (isset($_SESSION["id"])) {
          echo '<td class="grey"><a class="add_button d-inline-block cursor" onclick="add_button('.$i.','.$h.')"><i class="fas fa-plus"></i></a></td>';
        } else {
          echo "<td class='grey'></td>";
        }
      }
      echo "</tr>";
    }

    ?>

  </table>
  </div>
  </div>
  <?php
  require 'rozvrh_popup.php';
  require '../footer.php';
  ?>
