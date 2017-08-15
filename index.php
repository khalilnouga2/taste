<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>
 <body style="background-image: url('image/back.jpeg'); background-repeat:no-repeat; background-size:cover;" >
     <?php
		require_once "nav.php";
	?>
  <div class="container">
   <br />
   <h2 align="center" style="color:#fff;">Search Your Favorite Restaurante</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon ">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Enter a Restaurante Name" class="form-control" />
    </div>
   </div>
   
  </div>
     <div class="container">
   <h2 align="center" style="color:#fff;">Search Your Favorite Dish</h2>
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon ">Search</span>
     <input type="text" name="search_text" id="search" placeholder="Enter a Dish Name" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
   <br />
  </div>
     <div style="padding-bottom:2%;">   
    <?php
		require_once "footer.php";
	?>
</div>    
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"searchProccess.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
    
     $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  var searchField = $('#search').val();
     console.log(searchField);
  var expression = new RegExp(searchField, "i");
  $.getJSON('restprof.json', function(data) {
   $.each(data, function(key, value){
    //if (value.dish_name.search(expression) != -1 || value.dish_price(expression) != -1 || value.ingredients(expression) != -1 )
    if (value.dish_name.search(expression) != -1 || value.dish_price.search(expression) != -1 || value.ingredients.search(expression) != -1 )
    {
     $('#result').append('<div class="col-sm-4 col-lg-4 col-sm-4" style="margin-top:2%;"><div class="thumbnail"><img src="'+value.img+'"><div class="caption"><h4><a href="#" class="hover" id= "'+value.id+'">'+value.dish_name+'</a> </h4><h5> '+value.dish_price+'</h5><p>'+value.ingredients+'</p></div></div></div>');
        $('.hover').popover({  
                title:fetchData,  
                html:true,  
                placement:'right'  
           });  
           function fetchData(){  
                var fetch_data = '';  
                var element = $(this);  
                var id = element.attr("id");  
                $.ajax({  
                     url:"searchingPro.php",  
                     method:"POST",  
                     async:false,  
                     data:{id:id},  
                     success:function(data){  
                          fetch_data = data;  
                     }  
                });  
                return fetch_data;  
           }  
    }
       console.log(value.dish_name.search(expression) +"||" +value.dish_price.search(expression) + "||" + value.ingredients.search(expression));
   });   
  });
 });
 
 $('#result').on('click', '<div class="col-sm-4 col-lg-4 col-sm-4">', function() {
  var click_text = $(this).text();
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
     
 });
    
});
</script>