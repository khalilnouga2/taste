<?php session_start();// Starting Session ?>
<!doctype html>
<html>
<head>
	  <title> Create Profile </title>
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
			margin: 0px auto;
			text-align: center;
            
		}

		.dish{
			width:300px;
			padding:5px 20px 20px 20px;
			display: inline-block;
			text-align: left;
			vertical-align: top;
			background-color: #131;
			color:#fff;
			border:1px #333 solid;
			border-radius:5px;
			margin:10px;
			min-height:400px;
            
		}

		.dish .profileImage{
			text-align: center;
            padding-bottom: 2%;
		}

		.dish img{
			width: 80%;
            height: 150px;
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

	<?php
		require_once "nav.php";
	?>
   <div class="container">
      
        
       
         
 <div class="row panel panel-primary text-left" style="width:60%;margin:auto auto;">
                    <div class="panel-heading">
                    <h4 class="text-center"><img src="image/dinner.svg" style="width:10%;" > &nbsp;DISH PROFILE </h4>
                    </div>
<form  method="post" enctype="multipart/form-data">
    
    <div  class="panel-body" id="">
                    <div class="container" style="margin:auto auto; width:100%;">
 <div class="row" style="margin:auto;">
    <label class="file-control">Dish Name: <span class="starstar" style="color:#cc0000"> *</span>
	<input class="form-control" type="text" name="dish_name" required>
</label>
                </div>
                        <div class="row" style="margin:auto;">
    <label class="file-control">Dish Price: <span class="starstar" style="color:#cc0000"> *</span>
	<input class="form-control" type="text" name="dish_price" required>
</label>
                </div>

            <div class="row" style="margin:auto;">
    <label class="label-control">Dish Ingredients: <span class="starstar" style="color:#cc0000"> *</span>
        <textarea class="form-control" type="text" name="ingredients" rows="5" required></textarea><br>
</label>
                </div>
         </div>
        <div class="container" >
<div class="row" style="margin:auto auto;">
<label >Dish Photo: <span class="starstar" style="color:#cc0000"> *</span>
	<input  type="file" name="photo" required>
</label>
    </div>
        </div>
	      <div class="row" style="margin:auto auto;">
            
              <input class="btn btn-primary btn-md" style="width:50%;" type="submit" name="submit" value="Submit" id="submit">
            
        </div>      
           
        </div>

</form>
    </div>

<div id="profile">
	<h2 class="text-center" style="color:#fff;">The Dish Of Today</h2>
</div>
            </div>
    
<div style="padding-bottom:2%;">   
    <?php
		require_once "footer.php";
	?>
</div> 
    <script>
    $('document').ready(function () {
	user = <?php echo $_SESSION['id']; ?>;
    function cardloading() {
		// is Ajax method to retrieve the Json file
        
        
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
					$('#' + index).append('<h3><button class="btn btn-danger btn-sm remove"> Delete </button></h3>');
					$('#' + index).append('<div class="profileImage"><img src="' + value.img + '"></div>');
					$('#' + index).append('<h4>Dish Name: ' + dish_name + '</h4><h4>' + dish_price + '</h4><h5>Ingredients: </h5><p>' + ingredients + '<br></p><br><p><button class="btn-group btn-warning btn-sm"> Edit </button><button class="btn-group hide btn-success btn-sm"> Save </button></button><button class="btn-group hide btn-danger btn-sm"> Cancel </button></p>');
                    }
				});
			}
		});
	}

	cardloading();

	$("form").submit(function (e) {
		$('.dish').remove();
		var formData = new FormData($(this)[0]);
		$.ajax({
			url: "proprocess.php",
			type: "POST",
			data: formData,
			success: function(){
				console.log('got here');
				cardloading();
			},
			cache: false,
			contentType: false,
			processData: false
		});
		e.preventDefault();
	});
        
            $('#profile').delegate('.remove', 'click', function(){
        $.ajax({
             url: 'proprocess.php',
			type: 'DELETE',
			dataType: 'JSON',
        success: function(){
            $li.fadeOut(300, function(){
                $(this).remove();
            });
        },
        error: function(){
            alert('error loading orders');
        }
    });
    });
        
        
        
});
</script>
</body>
</html>