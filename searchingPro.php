<?php  
include 'db.php'; 

 if(isset($_POST["id"]))  
 {  
      $output = '';  
        
      $query = "SELECT * FROM CHIEF WHERE id='".$_POST["id"]."'";  
      $result = mysqli_query($cnt, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = '   
   <div class="col md-4 ">
    <h5><a href="lookup.php?'.$row['id'].'">'.$row["restaurante_name"].'</a></h5>
    <p> <b>Address :</b><br/>'.$row["address"].'</p>
    <p> <b>Phone number :</b><br>'.$row["phone"].'</p>
   </div></div>';  
      }  
      echo $output;  
 }  
 ?>  