<?php
	if (!isset ($_GET["unos"])){
		echo "Parametar unos nije prosleđen!";
	} else {
		$pomocna=$_GET["unos"];
		include "includes/db.php";
		$sql="SELECT breed_id, breed_name, opis FROM breeds WHERE breed_name LIKE '$pomocna%'ORDER BY breed_name";
		$rezultat = $connection->query($sql);
		if ($rezultat->num_rows==0){
			echo "U bazi ne postoji reč koja počinje na " . $pomocna;
		} else {
			while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->breed_name;?></a>
<br/>
<?php
}
}
$connection->close();
}
?>
