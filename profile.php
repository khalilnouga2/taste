<?php session_start();// Starting Session ?>

<!doctype html>
<html>
<head>
    
  <title> REGISTRATION FORM </title>
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

<body> 
<?php require_once "nav.php"; ?>
<div class="container">
    <div style="margin:auto auto;">
<h2>Login</h2>

<p>Your NAME is: <?php echo $_SESSION['restaurante_name']; ?> </p>
<p>Your RESTAURANTE is: <?php echo $_SESSION['username']; ?> </p>
<p>Your EMAIL is: <?php echo $_SESSION['email']; ?> </p>

<p>Your first Name is: <?php echo $_SESSION['first_name']; ?> </p>
<p>Your last Name is: <?php echo $_SESSION['last_name']; ?> </p>
<p>Your user Name is: <?php echo $_SESSION['username']; ?> </p>
<p>Your Street is: <?php echo $_SESSION['street']; ?> </p>
<p>Your City is: <?php echo $_SESSION['city']; ?> </p>
<p>Your Zip Code is: <?php echo $_SESSION['zip']; ?> </p>
<p>Your State is: <?php echo $_SESSION['state']; ?> </p>
<p>Your Country is: <?php echo $_SESSION['country']; ?> </p>
<p>Your Phone is: <?php echo $_SESSION['phone']; ?> </p>
    

<p><a class="btn btn-md btn-warning" type="button" href="logout.php">logout</a></p>
</div>
    </div>
</body>
</html>

