  <script>
      function changeTable(el) {
        window.location.href = "?rozvrh_id="+el.value;
      }
  </script>
  <?php
	$header_title = "Rozvrhy";
	$file_prefix = "../";
	require "../header.php";
  $rozvrhId_get = $_GET["rozvrh_id"] ?? 4;
  if (!empty($_POST)){
    $den = $_POST["den"];
    $hodina = $_POST["hodina"];
    $predmet = $_POST["predmet"];
    $rozvrhId_get = $_POST['trida'];
    $databaze->query("DELETE FROM predmet2rozvrh WHERE id_rozvrh=$rozvrhId_get AND den='$den' AND hodina='$hodina'");
    //mažou se pozice které jsou dále niže přepisovány když dochází ke změnám rozvrhu
    if ($predmet != "0")
      $databaze->query("INSERT INTO predmet2rozvrh (`id_rozvrh`, `den`, `hodina`, `id_predmet`) VALUES ('$rozvrhId_get','$den','$hodina','$predmet')");
  }


  $result = $databaze->query("SELECT predmety.nazev,predmety.ucitel,predmety.barva,predmet2rozvrh.den,predmet2rozvrh.hodina FROM predmety INNER JOIN predmet2rozvrh ON predmety.id=predmet2rozvrh.id_predmet INNER JOIN rozvrhy ON rozvrhy.id=predmet2rozvrh.id_rozvrh WHERE rozvrhy.id=$rozvrhId_get");
  $predmety = $result->fetch_all(MYSQLI_ASSOC);
 
  $result = $databaze->query("SELECT * FROM predmety");
  $select_predmety = $result->fetch_all(MYSQLI_ASSOC);

  $tyden = [1=>[],[],[],[],[]];

  foreach ($predmety as $predmet)
  {
    $tyden[intval($predmet['den'])][intval($predmet['hodina'])] = "<td onclick='add_button(".$predmet['den'].",".$predmet['hodina'].")' class='predmet cursor' ><div class='predmet_border' style='background-color:".$predmet["barva"]."; transition: 0.4s ease-in-out;'>".$predmet['nazev']."<br>"."<span class='d-none d-lg-inline'>".$predmet['ucitel']."</span></div></td>";
  }
  
  $tridy_vyber =  $databaze->query("SELECT trida,id FROM rozvrhy ORDER BY trida desc");
  $tridy = $tridy_vyber->fetch_all(MYSQLI_ASSOC);
?>
	<div class="content mt-3">
  
  <span class="table-head">Denní rozvrh
    <select class="select" name="slct" id="slct" onchange="changeTable(this);">
    <?php 
    foreach($tridy as $trida){
        
        echo "<option value='" . $trida['id'] . "'" . ($rozvrhId_get==$trida['id']? "selected" : "") . ">" . $trida['trida'] . "</option>";
    }
    ?>
    </select></span>  
    <table>
    <tr class="grey">
    <td></td>
						<td>1.<br><span>8:00-8:45</span></td>
						<td>2.<br><span>8:55-9:40</span></td>
						<td>3.<br><span>10:00-10:45</span></td>
						<td>4.<br><span>10:55-11:40</span></td>
						<td>5.<br><span>12:00-12:45</span></td>
						<td>6.<br><span>12:55-13:40</span></td>
						<td>7.<br><span>13:45-14:30</span></td>
						<td>8.<br><span>14:35-15:20</span></td>
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
