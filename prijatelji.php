<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?> 

<html>
  <head>
    <!--Ucitava AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
    
    // Ucitava biblioteku za vizuelizaciju i paket sa "pita" graficima
    google.load('visualization', '1.0', {'packages':['corechart']});
      
    google.setOnLoadCallback(crtajGrafik);

    function crtajGrafik() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Grad');
      data.addColumn('number', 'Komada');
      data.addRows([
        ['Beograd', 6],
        ['Novi Sad', 3],
        ['Subotica', 2],
        ['Kragujevac', 1],
        ['Sombor', 1]
      ]);

      var options = {'title':'Broj prodajnih mesta po gradovima',
      'is3D':true,
      'width':600,
      'height':400};

      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      
      chart.draw(data, options);
    }
    </script>
  </head>

  <body>
<!--Div koji ce drzati pitu-->

    <div id="chart_div" style=" width: 100%; height: 100%;"></div>
  

  </body>




</html>

<?php include "includes/footer.php"; ?>
