
<!doctype html>
<html>
<head>
    
  <title> Contact Us </title>
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
    .pic{
    width:6%;
    transition: transform 1s;
}
   .pic:hover{
    transform: rotate(360deg);
}
    
    
    </style>

</head>

<body>  
    
    <div class="row panel panel-primary text-left">
                    <div
                         class="panel-heading">
                    <h4 class="text-center"><img class="pic" src="image/mails.svg"  > &nbsp;&nbsp;CONTACT US </h4>
                    </div>
                    <div style="padding:6%; margin:0%;" class="row well text-center">
                <p>Khalil Nougaoui</p>
                        <p>604 Onderdonk Av 2nd Flour </p><p> Ridgewood NY 11385</p>
            </div>
        <div class="panel-heading">
                    <h4 class="text-center"><img class="pic" src="image/email.png"  > &nbsp;&nbsp;Email us</h4>
                    </div>
            
                    <div style="padding:6%; margin:0%;" class="row well text-center">
                <p>Khalil Nougaoui</p>
                <p><a href="#" data-toggle="modal" data-target="#myEmail">khalilnouga2@gmail.com</a>
                    
                        <div id="myEmail" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
     
      <div class="modal-body">
        <div class="modal-content text-left">
                    <div class="modal-header">
                    <a href="#"><span class="glyphicon glyphicon-link"></span></a>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body text-left">
                        
                        

                           <?php
		require_once "send.php";
	?>
            
                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
      </div>
      
    </div>

  </div>
</div>
                    
                        
            </div>
        
            <div class="panel-heading">
                    <h4 class="text-center"><img class="pic" src="image/phone.png"  > &nbsp;&nbsp;Call us</h4>
                    </div>
                    <div style="padding:6%; margin:0%;" class="row well text-center">
                 <p>Khalil Nougaoui</p>
                 <p >Tell: <a href="#">(347) 488-1149</a></p> 
            </div>
    </div>   
    
</body>
</html>

