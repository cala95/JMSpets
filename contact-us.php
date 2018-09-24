<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?> 

<br><br>

<div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/256x256/dog.png" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>JMS</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+381 555 678</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>jms@gmail.com</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Jurija Gagarina 64, Novi Beograd</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.jms.rs</p></a>
                          </ul>
                        </div>
                    </div>
                </div>
  </div>


 <div class="container" style="margin-top: 20px; text-align: center;">
    
     
     
     <div class="card card-register mx-auto mt-5" >
      <div class="card-header" ><b><h1>Kontaktirajte nas</h1></b></div>
      <div class="card-body">

       <form action="contact-us-send.php" method="post">
	
	
		
		
			<label for="name"><h4>Ime i prezime:<h4></label>
			<input required="true" type="text" id="name" name="name"/><br><br>
		
			<label for="email">Email adresa:</label><br>
			<input required="true" type="text" id="email" name="email"/><br><br>
		
			<label for="comment">Poruka:</label><br>
			<textarea required="true" type="comment" id="comment"></textarea><br><br>
		
			
		<button class="btn btn-success btn-lg btn-block" type="submit" name="submit">Pošalji</button>

	

</form> 
        
      </div>
    </div>
  <br>
  
  
  
  
  
  
  </div>

 <div class="container" style="margin-top: 20px; text-align: center;">
    
     
     
     <div class="card card-register mx-auto mt-5" >
 

<div id="map" style="width:100%;height:400px;"></div>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 44.8038102, lng: 20.3720016};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHn0iCDr52p_KJIf6CrgzjV6JHr7ltIog&callback=initMap">
    </script>
</div>
</div>

<br><br>


<?php include "includes/footer.php"; ?>


