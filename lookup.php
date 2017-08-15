<?php session_start();// Starting Session 
include 'db.php';
?>
<!doctype html>
<html>
<head>
    
  <title> Look Up </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <style>
		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}

		#profile{
            width: 100%; 
			margin: 0px auto;
			text-align: center;
            
		}

		.dish{
			width:300px;
			padding:5px 20px 20px 20px;
			display: inline-block;
			text-align: left;
			vertical-align: top;
			background-color: #fff;
			color:#000;
			border:1px #333 solid;
			border-radius:2px;
			margin:10px;
			min-height:400px;
            
		}

		.dish .profileImage{
			text-align: center;
            padding-bottom: 2%;
		}

		.dish img{
			width: 90%;
            height: 40%;
			border-radius:20%;
			border:thick #fff solid;
            
		}

		.dish h5{
            text-align: center;
			margin:auto auto;
		}

		.dish h5+p{
			margin:0px;
		}
        p,h4{
            text-align: center;
        }
        
        #follow {
            text-align: center;
        }
        
        h2{
            color: #fff;
        }
      

	</style>


</head>

<body style="background-image: url('image/back.jpeg'); background-repeat:no-repeat; background-size:cover;" >
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>
    
                 <?php
    
                     $url = $_SERVER['REQUEST_URI'];
                    $url= explode("?",$url)[1];
    
      
      $look = "
      SELECT * FROM CHIEF  WHERE id = $url ";
      $result = mysqli_query($cnt, $look);
       $row = $result->num_rows;

        if($row > 0)
        {
			$a = mysqli_fetch_assoc($result);
            $r = $a["restaurante_name"];
             $ad = $a["address"];
             $ph = $a["phone"];   

       }
      mysqli_close($cnt);
    
   echo ' <div class="container">
  <div class="row">
   <div class="col md-4 text-center" style="background:#fff; padding:2%;margin:1%;">
    <h2 style="">'.$r.'</h2>
    <p> <b><h4>Address :</h4></b><br/>'.$ad.'</p>
    <p> <b><h4>Phone number :</h4></b><br>'.$ph.'</p>
   </div>
   </div></div>';
       ?>
   
                   
    
<div class="container">
    	<h2 class="text-center" style="color:#fff;">The Dish Of Today</h2>
    <div class="row">
        <div id="profile"  class="col-sm-3">
        
        </div>
        </div>
    </div>    
    
<div style="padding-bottom:2%;">   
    <?php
		require_once "footer.php";
	?>
</div> 
    <script>
    $(function () {
	user = <?php echo $url; ?>;
        
        
		$.ajax({
			url: 'restprof.json',
			type: 'get',
			dataType: 'JSON',
			cache: false,
			error: function (data) {
				console.log(data);
			},
			success: function (data) {
				
				$.each(data, function (index, value) {
					

					var id = value.id;
					var dish_name = value.dish_name;
					var dish_price = value.dish_price;
					var ingredients = value.ingredients;
                    if (user == id){
                    $('#profile').append('<div class="dish" id="' + index + '"></div>');
					$('#' + index).append('<h3></h3>');
					$('#' + index).append('<div class="profileImage"><img src="' + value.img + '"></div>');
					$('#' + index).append('<h4>' + dish_name + '&nbsp;&nbsp;&nbsp;' + dish_price + '</h4><h5>Ingredients: </h5><p>' + ingredients + '<br></p>');    
                        
					
                    }
				});
			}
		});

});
</script>
</body>
    
</html>