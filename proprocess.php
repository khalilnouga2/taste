<?php session_start();
$n = $_POST['dish_name'];
$p = $_POST['dish_price'];
$g = $_POST['ingredients'];

$jr = file_get_contents('restprof.json');
$j = json_decode($jr, true);


if (count($j) == 0){
	$objectCount = 1;
} else {
	$objectCount = count($j) + 1;
}

$k = "object".$objectCount;

$i = end($j)["id"];
$i = ++$i;

$t = $_FILES['photo']['tmp_name'];
$f = "img/$objectCount.jpg";
move_uploaded_file( $t, $f);


$add = array(
	"id" => $_SESSION['id'],
    "img" => $f,
	"dish_name" => $n,
	"dish_price" => $p,
	"ingredients" => $g
);

$j[$k] = $add;

$ju = json_encode($j);
file_put_contents('restprof.json', $ju);

?>