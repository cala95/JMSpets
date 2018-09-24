<h2 class="my-4" style="margin-left: 20px; padding-top: 20px; font-size: 18pt;">
       
          Izmene unosi: <small><p style="font-size: 28pt; color: blue;"> <?php echo $ime . " " . $prezime; ?>  </p></small>
           
      </h2>   
      
       
    <div class="row">
    
    <?php
      
        
        if(isset($_GET['id'])){
            
           $id = $_GET['id'];
            
            $query = "SELECT * FROM dogs WHERE dog_id = {$id}";
            
            $sellect_dog = mysqli_query($connection,$query);
            
            while($row = mysqli_fetch_assoc($sellect_dog))
            {
                  $dog_id = $row['dog_id'];
                  $dog_breed_id = $row['dog_breed_id'];
                  $dog_name = $row['dog_name'];
                  $dog_description = $row['dog_description'];
                  $dog_image = $row['dog_image'];
                  $dog_price = $row['dog_price'];
                  $dog_adress = $row['dog_adress'];   
                
            }
                    
            
            
        }
        
        if(isset($_POST['update']))
        {
            
                $dog_name = $_POST['dog_name'];
                $dog_description = $_POST['dog_description'];
                $dog_description = mysqli_real_escape_string($connection,$dog_description);
                $dog_adress = $_POST['dog_adress'];
                $dog_breed_id = $_POST['dog_breed_id'];
                $dog_price = $_POST['dog_price'];
                
                $image_name = $_FILES['dog_image']['name'];
      
                $image_name_tmp =$_FILES['dog_image']['tmp_name'];
                
                move_uploaded_file($image_name_tmp,"images/$image_name");    
            
                if(empty($image_name)){
            
                    $query = "SELECT * FROM dogs where dog_id = {$id}";
            
                    $select_image = mysqli_query($connection,$query);
            
                    while($row = mysqli_fetch_assoc($select_image)){
                
                $image_name = $row['dog_image'];
                
                        }
                    } 
            
                   $query = "UPDATE dogs SET ";     
                   $query.="dog_name = '{$dog_name}', ";
                   $query.="dog_description = '{$dog_description}', ";
                    $query.="dog_adress = '{$dog_adress}', ";
                    $query.="dog_breed_id = {$dog_breed_id}, ";
                    $query.="dog_price = '{$dog_price}', ";
                    $query.="dog_image = '$image_name' ";
                    $query.="WHERE dog_id = {$id}";    

                $update_query = mysqli_query($connection,$query);
                header("Location: insert.php");
            
            
        }
       
     
    ?>   
     
     <div class="card card-register mx-auto mt-5" style="width: 498pt; background-image: url('images/original1.jpg');">
      <div class="card-header" ><b>Unesite novog psa:</b></div>
      <div class="card-body">
     
     <div id="formadiv">
      <form  action="" method="post" enctype="multipart/form-data" style="text-align: center;">
          
          <div class="form-group">
              <label for="dog_name"><b>Ime:</b></label>
              <input type="text" class="form-control" value="<?php echo $dog_name;?>" name="dog_name">
          </div>
          
          <div class="form-group">
              <label for="dog_description"><b>Opis:</b></label><br>
              <textarea name="dog_description" id="" cols="83" rows="3"><?php echo $dog_description;?></textarea>
          </div>
          
          <div class="form-group">
              <label for="dog_adress"><b>Adresa:</b></label>
              <input type="text" class="form-control" value="<?php echo $dog_adress;?>" name="dog_adress">
          </div>
          
          <div class="form-group">
              <label for="dog_adress"><b>Cena:</b></label>
              <input type="text" class="form-control" value="<?php echo $dog_price;?>" name="dog_price">
          </div>
          
          
          <div class="form-group">
              <select name="dog_breed_id" id="">
                 <option value="<?php echo $dog_breed_id; ?>">
                   <?php  
                $query = "SELECT * FROM breeds WHERE breed_id = $dog_breed_id";
                $select_breed = mysqli_query($connection,$query);
              
               while($row = mysqli_fetch_assoc($select_breed)){
                 $breed_title = $row['breed_name'];
                  
                  echo $breed_title;
                }
                     
                     
               ?>      
                     
                     
                 </option>
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
              <label for="dog_adress"><b>Slika:</b></label><br>
              <img width="100" height="60" src="images/<?php echo $dog_image; ?>" >
              <input type="file" class="form-control" name="dog_image">
          </div>
          
          
          <button class="btn btn-info" type="submit" name="update"><b>Izmeni psa</b></button>
          
      </form>

    </div>
  </div>
</div>
      
       </div>