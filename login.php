<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
    
  <title> Login </title>
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

<body style="background-image: url('image/back3.jpeg'); background-repeat:no-repeat; background-size:cover;" > 
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>


                      <div class="row panel panel-primary text-left" style="width:50%;margin:15% auto; margin-bottom:25%;">
                              <div class="panel-heading">
                    <h4 class="text-center"><img src="image/dinner.svg" style="width:10%;" > &nbsp;SIGN IN <span style="color:red;"> &nbsp; * </span></h4>
                    </div>
                          <div class="panel-body" id="">
    
      <form method="post" action="loginProccess.php" >
          
          
                  <div id="login" class="form-signin login" style="padding-top:40px;">
                        <label for="userId" class="sr-only">Email Address:</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail address" required autofocus autocomplete="off"><br>

                        <label for="password" class="sr-only">Password:</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autocomplete="off"><br>
                 </div>
          
          <p class="control-label"><a href="forgot.php">Forgot Password?</a></p>
                    <input  type="submit" class="btn btn-lg btn-primary btn-block" id="sign" name="submit" value="submit" onclick="check(form)" />
    </form> 
                              
    </div>
    </div>
    


<div style="padding-bottom:2%;">   
    <?php
		require_once "footer.php";
	?>
</div>   
</body>
</html>