 <h2 class="my-4" style="margin-left: 20px; padding-top: 20px; font-size: 18pt;">
       
          Izmene unosi: <small><p style="font-size: 28pt; color: blue;"> <?php echo $ime . " " . $prezime; ?>  </p></small>
          
      </h2>   
      
       
    <div class="row"> 
    

     
       
     
     <div class="card card-register mx-auto mt-5" style="width: 498pt; background-image: url('images/original1.jpg');">
      <div class="card-header" ><b>Unesite novog psa:</b></div>
      <div class="card-body">

     <div id="formadiv">
      <form  action="" method="post" enctype="multipart/form-data" style="text-align: center;">
          
          <div class="form-group">
              <label for="dog_name"><b>Ime:</b></label>
              <input type="text" class="form-control" name="dog_name">
          </div>
          
          <div class="form-group">
              <label for="dog_description"><b>Opis:</b></label><br>
              <textarea name="dog_description" id="" cols="83" rows="3"></textarea>
          </div>
          
          <div class="form-group">
              <label for="dog_adress"><b>Adresa:</b></label>
              <input type="text" class="form-control" name="dog_adress">
          </div>
          
          <div class="form-group">
              <label for="dog_adress"><b>Cena:</b></label>
              <input type="text" class="form-control" name="dog_price">
          </div>
          
          <br>
          <div class="form-group">
            <label for="dog_adress"><b>Rasa:</b></label><br>
              <select name="dog_breed_id" id="">
                  <?php 
                  $query = "SELECT * FROM breeds";
                  $select_breed = mysqli_query($connection,$query);
                  while($row = mysqli_fetch_assoc($select_breed)){
                      $name = $row['breed_name'];
                      $id = $row['breed_id'];
                      echo "<option value='{$id}'>$name</option> ";
                  }
                  ?>
                 
                  
              </select>
          </div>
          
          
          <div class="form-group">
              <label for="dog_adress"><b>Slika:</b></label>
              <input type="file" class="form-control" name="dog_image">
          </div>
          
          
          <button class="btn btn-primary" type="submit" name="insert"><b>Dodaj psa</b></button>
          
      </form>

    </div>
  </div>
</div>


      
       </div>