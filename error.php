<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
    
  <title> Error </title>
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
<div class="row panel panel-primary text-center" style="width:80%;margin:15% auto; margin-bottom:25%; background:orange">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location:login.php" );
    endif;
    ?>
    </p>     
    
</div>
</body>
</html>
