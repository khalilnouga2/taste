<?php

include 'db.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($cnt, $_POST["query"]);
 $query = "
  SELECT * FROM CHIEF 
  WHERE restaurante_name LIKE '%".$search."%'
  OR id LIKE '%".$search."%' 
  OR address LIKE '%".$search."%' 
  OR city LIKE '%".$search."%' 
  OR zip LIKE '%".$search."%' 
  OR country LIKE '%".$search."%'
  OR phone LIKE '%".$search."%'
 ";
$result = mysqli_query($cnt, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
 <div class="container" >
  <div class="row" >
     <div class="col md-4" >
     <h5></h5>
     <p></p></div>
    </div></div>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <div class="container">
  <div class="row">
   <div class="col md-4" style="background:#fff; padding:2%;margin:1%;">
    <h5><a href="lookup.php?'.$row['id'].'">'.$row["restaurante_name"].'</a></h5>
    <p> <b>Address :</b><br/>'.$row["address"].'</p>
    <p> <b>Phone number :</b><br>'.$row["phone"].'</p>
   </div>
   </div></div>
  ';
 }
 echo $output;
}
else
{
 echo '<div style="width:30%;margin:auto auto; background:orange;"><p style="text-align:center; ">Data Not Found</p></div>';
}

}
else
{
 $query = "
  SELECT * FROM RESTAURANTE_ADMIN ORDER BY restaurante_name
 ";
}

?>