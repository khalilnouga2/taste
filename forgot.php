
<?php session_start();?>

<!doctype html>
<html>
<head>
    
  <title> Reset Password </title>
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
    
    
    <div class="row panel panel-primary text-left" style="width:80%;margin:15% auto; margin-bottom:25%;">
                              <div class="panel-heading">
                    <h4 class="text-center"><img src="image/dinner.svg" style="width:10%;" > &nbsp;Reset Password<span style="color:red;"> &nbsp; * </span></h4>
                    </div>
                          <div class="panel-body" id="">
    
      <form method="post" action="forgot.php" >
                  <div id="forget" class="form-signin login" style="padding-top:40px;">
                        <label for="userId" class="sr-only">Email Address:</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="E-mail address" required autofocus autocomplete="off"><br>
                 </div>
          
                    <input  type="submit" class="btn btn-lg btn-primary btn-block" id="sign" name="submit" value="submit" />
    </form> 
                              
    </div>
    </div>
<?php
include 'db.php';
// Check if form submitted with method="post"
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{   
    $email =($_POST['email']);
    
    $qry = "select * from CHIEF where email='$email'";
    
    $forget = mysqli_query($cnt, $qry);

		$row = $forget->num_rows;

    if ( $row->num_rows == 0 ) // User doesn't exist
    { 
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: error.php");
    }
    else { // User exists (num_rows != 0)

        $user = $row->fetch_assoc(); // $user becomes array with user data
        
        $email = $user['email'];
        $username = $user['username'];
        $first_name = $user['first_name'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
        . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to      = $email;
        $subject = 'Password Reset Link ( localhost.com )';
        $message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/RESTAURANTE_ADMIN/reset.php?email='.$email.'&username='.$username;  

        mail($to, $subject, $message_body);

        header("location: success.php");
  }
}
?>

</body>

</html>
