<?php include "includes/header.php" ?> <!-- headera.php -->
<?php include "includes/navigation.php" ?> 
  
  <?php if(isset($_SESSION['username'])){
        
          if($_SESSION['role'] == 'admin'){
            $ime =  $_SESSION['firstname'];
            $prezime =  $_SESSION['lastname'];
          } else {
            header("Location: index.php");  
          }
        }
   ?>
   
   <div id="adminContainer" class="container">
              
      
      <?php
          
            if(isset($_POST['insert'])){
                
                
                $dog_name = $_POST['dog_name'];
                $dog_description = $_POST['dog_description'];
                $dog_description = mysqli_real_escape_string($connection,$dog_description);
                $dog_adress = $_POST['dog_adress'];
                $dog_breed_id = $_POST['dog_breed_id'];
                $dog_price = $_POST['dog_price'];
                
                $image_name = $_FILES['dog_image']['name'];
      
                $image_name_tmp =$_FILES['dog_image']['tmp_name'];
                
                move_uploaded_file($image_name_tmp,"images/$image_name");
                
                
                
                $query ="INSERT INTO dogs(dog_name, dog_description, dog_adress, dog_breed_id, dog_image, dog_price, dog_adding_date) VALUES('$dog_name','$dog_description','$dog_adress',$dog_breed_id,'$image_name', $dog_price, now())";
                
                $insert_dog = mysqli_query($connection,$query);
                
                if(!$insert_dog){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                
                
            }
        
        
        
        
            if(isset($_GET['source'])){
                $source = $_GET['source'];
            }else{
                $source = "";
            }
      
            switch($source)
            {
                case "edit":        
                    include "includes/edit.php";
                    break;
                default:
                    include "includes/insert_form.php";
                    break;
            }
      
      
      ?>
      
        
        <table id="list" class="table table-bordered table-striped table-hover">
             <thead>
                 <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Dog Description</th>
                     <th>Image</th>
                     <th>Price</th>
                     <th>Edit</th>
                     <th>Delete</th>
                     <th>Date</th>
                     <th>Status</th>
                     
                     
                 </tr>
             </thead>
             <tbody>
                 <?php
                     $query = "SELECT * FROM dogs ORDER BY dog_id DESC";
              $select_dog_admin = mysqli_query($connection, $query);
              
              while($row = mysqli_fetch_assoc($select_dog_admin)){
              
                  $dog_id = $row['dog_id'];
                  $dog_breed_id = $row['dog_breed_id'];
                  $dog_name = $row['dog_name'];
                  $dog_description = $row['dog_description'];
                  $dog_image = $row['dog_image'];
                  $dog_price = $row['dog_price'];
                  $dog_adress = $row['dog_adress'];
                  $dog_status = $row['status'];
                  $dog_adding_date = $row['dog_adding_date'];
                  $dog_owner = $row['owner'];
                  $owner_phone = $row['phone'];
                  $owner_email = $row['email'];
                  
                  
                  echo "<tr><td>{$dog_id}</td>";
                  echo "<td>{$dog_name}</td>";
                  
                  
                   $query = "SELECT * FROM breeds WHERE breed_id = $dog_breed_id ";
                   $select_breed = mysqli_query($connection,$query);
              
              while($row = mysqli_fetch_assoc($select_breed)){
                 $breed_name = $row['breed_name'];
                  
                  echo "<td>{$breed_name}<br>$dog_adress<br>$dog_owner<br>$owner_phone<br>$owner_email</td>";
              }
            
                  
                  echo "<td><img width='100' height='50' src='images/{$dog_image}'></td>";
                  echo "<td>{$dog_price}&euro;</td>";
                  echo "<td><a href='insert.php?source=edit&id={$dog_id}'>Edit</a></td>";
                  echo "<td><a href='insert.php?delete={$dog_id}'>Delete</a></td>";
                  echo "<td>{$dog_adding_date}</td>";
                  echo "<td>{$dog_status}</td>";
                  echo "<td><a href='insert.php?statusp={$dog_id}'>Publish</a></td>";
                  echo "<td><a href='insert.php?statusd={$dog_id}'>Draft</a></td>";
                  echo "</tr>";
                  
                    
              }
                    
                    ?>
                 
             </tbody>
         </table>
        
      
      
        <?php  
          
          if(isset($_GET['delete'])){
              
              $the_id = $_GET['delete'];
              
              $query ="DELETE FROM dogs WHERE dog_id = {$the_id}";
              $delete = mysqli_query($connection,$query);
              
              header("Location: insert.php");
              
          }
       
       
            if(isset($_GET['statusp'])){
              
              $the_id = $_GET['statusp'];
              
              $query ="UPDATE dogs SET status = 'published' WHERE dog_id = {$the_id}";
              $update_status = mysqli_query($connection,$query);
              
              header("Location: insert.php");
              
          }
       
            if(isset($_GET['statusd'])){
              
              $the_id = $_GET['statusd'];
              
              $query ="UPDATE dogs SET status = 'draft' WHERE dog_id = {$the_id}";
              $update_status = mysqli_query($connection,$query);
              
              header("Location: insert.php");
              
          }           
        ?>
      

     </div>                  
          
 </div> <!-- container-->
   
<?php include "includes/footer.php"; ?>