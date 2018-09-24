<?php
          $query = "SELECT * FROM dogs WHERE status = 'published' ORDER BY dog_price DESC";
          
          $select_all = mysqli_query($connection,$query);
          
          
          while($row = mysqli_fetch_assoc($select_all)){
              
              $dog_id = $row['dog_id'];
              $dog_name = $row['dog_name'];
              $dog_adress = $row['dog_adress'];
              $dog_image = $row['dog_image'];
              $dog_description = substr($row['dog_description'],0,250);
              $dog_price = $row['dog_price'];
              $dog_status = $row['status'];
              $phone = $row['phone']; 
              
              
          ?>
        
            
       <div id = "item" class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="images/<?php echo $dog_image;  ?>" width="700" height="300" alt="">
            <div class="card-body">
              <h4 class="card-title">
                <?php echo $dog_name; ?>
              </h4>
                <p class="card-text"> <small><?php echo $dog_adress;?></small> <br> <strong> <?php echo "   ".$dog_price;?>&euro; </strong> <br> <p><b>Telefon:</b> <?php echo $phone;?></p>
               </p>

               

              <p class="card-text"><?php echo $dog_description; ?></p>
            </div>
          </div>
        </div>    
             
                 
                     
                                             
                                     
              
     <?php     }
            
      ?> 