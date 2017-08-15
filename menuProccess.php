<?php 
//fetch.php
include 'db.php';
if(isset($_POST["id"]))
{
 
 $query = "SELECT * FROM CHIEF WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($cnt, $query);
 $output = '';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <h1>'.$row["restaurante_name"].'</h1>
  <p>Address:&nbsp;'.$row["address"].'</p>
  <p>Phone:&nbsp;'.$row["phone"].'</p>
  ';
 }
 echo $output;
}


?>