<?php
	if (!isset ($_GET["breed_name"])){
		echo "Parametar REC nije prosleđen!";
	} else {
		$pomocna=$_GET["breed_name"];
		include "includes/db.php";

		$sql="SELECT * FROM breeds WHERE breed_name='".$pomocna."'";
		$rezultat = $connection->query($sql);

		/*echo "<table border='0'>
				  <tr>
					<td></td>
					<td></td>
				</tr>";*/

		while($red = $rezultat->fetch_object()){
 		//	echo "<tr>";
 				echo   $red->breed_name  ; 
 				echo "<br>";
 				echo "<br>";
 				echo   $red->opis  ;
 		//	echo "</tr>";
 }
echo "</table>";

$connection->close();
}
?>
