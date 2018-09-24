 <?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>  


		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- za srpska slova -->

		<script src="sugerisi.js" type="text/javascript"></script> 
		<script src="pronadjinaziv.js" type="text/javascript"></script> 
		<script type="text/javascript">
			function place(ele){
    			document.getElementById('txt').value = ele.innerHTML;
				document.getElementById("livesearch").style.display = "none";
			}
		</script>
		
		<style type="text/css"> 
			#livesearch{ 
				text-align: center;
  				width: 800px;
  				display: none;
  				color: black;
  				font-size: 20px;
  				margin-left: 240px;
  				padding-top: 38px;
  				background-color:  #ffe6ff;
  			}
			#txt{
				text-align: center;
  				border: solid #A5ACB2;
 		 		margin:5px;
 		 		width: 400px;
 		 		font-size: 20px;
 		 		border-radius: 12px; 
 		 		background-color:  #ffe6ff; 
  			} 
  			#sub {
  				text-align: center;
  				width: 200px;
  				height: 48px;
  				background-color:  #ffe6ff;
  				border-radius: 12px;
  				font-size: 27px;
  			}
  			
		</style>

	</head>

	<body onload="document.getElementById('txt').focus()">

		

	

	<h1 align="center" style="text-align:center; margin-top: 80px; background-color: #e0e0d1;">Unesite rasu o kojoj želite da saznate više:  </h1>
	
	<form style="text-align:center; margin-top: 60px;">
		<input type="text"  id="txt" size="32" onkeyup="sugestija(this.value)"> 
		<input type="button" id="sub" name="unos" value="Pronađi" onclick="PrikaziRec(document.getElementById('txt').value)" >
		<div id="livesearch"></div>
	</form>
	

<br><br><br><br><br><br>

<b><p style="text-align:center; margin-top: 80px; background-color: #e0e0d1;">Preuzmite podatke o rasama u JSON formatu: </p> </b> 
<p style="text-align:center;"> <a href="podaci.php"> <img style="width: 7%; height: 7%;" src="images/json.png"> </a> </p>
<?php include "includes/footer.php" ?>


