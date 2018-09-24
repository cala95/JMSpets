<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?> 
   
<!DOCTYPE html>
   
   <div class="container" id="userAdd">
       
           <?php
         if(isset($_SESSION['username']))
         {
             
         }else{
             header("Location: index.php");
         }           
                    
                
       // pretraga po rasi psa
                
        if(isset($_POST['insert'])){
                
                    $dog_breed = $_POST['dog_breed'];
                    $dog_breed = mysqli_real_escape_string($connection,$dog_breed);
                    $dog_breed = strtolower($dog_breed);
                if(!empty($dog_breed)){
                    
                    $query = "SELECT * FROM breeds WHERE breed_name = '$dog_breed'";
                    $find_breed = mysqli_query($connection,$query);
                    $count = mysqli_num_rows($find_breed);
                    
                    if($count == 0){
                       
                        $query = "INSERT INTO breeds(breed_name) VALUES('$dog_breed')";
                        $insert_breed = mysqli_query($connection,$query);
                    
                        if(!$insert_breed){
                        die("QUERY FAILED" . mysqli_error($connection));
                        }
                        
                        
                    }
                }
                            
                
                $dog_name = $_POST['dog_name'];
                $dog_description = $_POST['dog_description'];
                $dog_description = mysqli_real_escape_string($connection,$dog_description);
                $dog_adress = $_POST['dog_adress'];
                
                $dog_price = $_POST['dog_price'];
                    
                    
                if(!empty($dog_name) && !empty($dog_description) && !empty($dog_adress) && !empty($dog_price) && !empty($dog_breed)){
                
                $query = "SELECT * FROM breeds WHERE breed_name = '$dog_breed'";
                $find_breed = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($find_breed))
                {
                    $id = $row['breed_id'];
                }    
                    
                    
                $dog_breed_id = $id;
                $image_name = $_FILES['dog_image']['name'];
      
                $image_name_tmp =$_FILES['dog_image']['tmp_name'];
                
                move_uploaded_file($image_name_tmp,"images/$image_name");
                
                $owner = $_SESSION['firstname'] . " " . $_SESSION['lastname']; 
                $phone = $_SESSION['phone'];
                $email = $_SESSION['email'];    
                $query ="INSERT INTO dogs(dog_name, dog_description, dog_adress, dog_breed_id, dog_image, dog_price, dog_adding_date, owner, email, phone) VALUES('$dog_name','$dog_description','$dog_adress',$dog_breed_id,'$image_name', $dog_price, now(),'$owner','$email','$phone')";
                
                $insert_dog = mysqli_query($connection,$query);
                
                if(!$insert_dog){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                    
                $poruka = "Dodali ste psa.";
                }
            } else {
                  $poruka = "";  
                }
       
       
       
            ?>
        
          <div class="card card-register mx-auto mt-5 col-md-10" style="margin-bottom: 30px;">  
          <div class="card-header" ><strong>Dodaj psa</strong></div>
           <div class="card-body">

           <form  action="" method="post" role="form" enctype="multipart/form-data" autocomplete="off">
              <h6 class="text-center"><?php echo $poruka; ?></h6>    
         <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label for="dog_name">Ime psa:</label>
                        <input class="form-control" name="dog_name" type="text" aria-describedby="nameHelp" placeholder="Ime psa" required>
                      </div>
                      <div class="col-md-6">
                        <label for="dog_adress">Adresa:</label>
                        <input class="form-control" name="dog_adress" type="text" aria-describedby="nameHelp" placeholder="Adresa" required>
                      </div>
                    </div>
          </div>  
            
           <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6">
                        <label for="dog_breed">Rasa:</label>
                        <input class="form-control" name="dog_breed" type="text" aria-describedby="nameHelp" placeholder="Rasa" required>
                      </div>
                      <div class="col-md-6">
                        <label for="dog_price">Cena u &euro;:</label>
                        <input class="form-control" name="dog_price" type="text" aria-describedby="nameHelp" placeholder="Cena" required>
                      </div>
                    </div>
          </div> 
          
                          
          <div class="form-group">
                    <div class="form-row">
                       <div class="col-md-6">
                        <label for="dog_description">Opis:</label><br>
                        <textarea name="dog_description" rows="5" cols="50"></textarea>
                        </div>
                        <div class="col-md-6">
                        <label for="dog_adress">Slika:</label>
                        <input type="file" class="form-control" name="dog_image" required>
                      </div>
                        
                    </div>
          </div>                                                      
          
          
          
          <div class="form-group">
              
          </div>
          
          
          <button class="btn btn-success btn-lg btn-block" type="submit" name="insert">Dodaj psa</button>
          
      </form> 
           
           
       </div>   
           
        </div>   
        
   </div>
   
    </html>

<?php include "includes/footer.php"; ?>