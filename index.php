<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?> 
  

   <div id="main-container" class="container" style="background-image: url('images/pp.png');">
      
      <div id="searching">
          <form action="search.php" method="get" autocomplete="off">                
              <div class="input-group">
                  <input type="text" name="breed" id="search" class="form-control" placeholder="Unesite rasu psa">
                  <button class="btn btn-info" type="submit">Pretraga</button>
              </div>
              <div id="livesearch" style="background-color: white;"></div>
        </form>
          
      </div>
      
      <?php include "includes/sortingnavmain.php"; ?>
       
    <div class="row">
      
       <?php
    
        if(isset($_GET['sort'])){
            $source = $_GET['sort'];
        }else{
            $source ="";    
        }
        
        $query = "SELECT * FROM dogs";
        $select = mysqli_query($connection,$query);
        
        $count = mysqli_num_rows($select);
        
        $count = ceil($count/8);

        switch($source){
                
            case 'high': //ovo
                include "includes/price_down.php";
                break;
                
            case 'low':
                include "includes/price_up.php";
                break; //ovo
                
            default:
                include "includes/view_all_dogs.php";
                break;
        } ?>
      
     
    </div> 


         <ul class="pagination justify-content-center mb-4" style="margin-top: 10px; margin-bottom: 10px;">

           <?php
           for($i=1; $i <= $count; $i++){
               
              if($i == $source){
                  echo "<li class='page-item active'>
              <a class='page-link' href='index.php?page=$i'>$i</a>
            </li>";
                  
              } else {
                  echo "<li class='page-item'>
              <a class='page-link' href='index.php?page=$i'>$i</a>
            </li>";
                  
              }
               
               
           }
           
           ?>
   
          </ul>  
          
 </div> <!-- container-->
   






<?php include "includes/footer.php"; ?>