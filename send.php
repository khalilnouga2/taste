<!DOCTYPE html>
<html>
   <head>
    
  <title> Look Up </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body >
     <div class="row panel panel-primary" >
                    <div class="panel-heading">
                    <h2 class="text-center"> Confirmation </h2>
                    </div>
<form action="sendProccess.php" method="post" style="padding:4%;width:100%;">
    <div class="row">
<p>Email Address:<span class="starstar" style="color:#cc0000"> *</span><br><input type="text" name="email" size="80" required></p>
    </div>
        <div class="row">
<p> Subject:<span class="starstar" style="color:#cc0000"> *</span><br><input type="text" name="subject" size="80" required></p>
    </div>
        <div class="row">
<p>Message:<span class="starstar" style="color:#cc0000"> *</span></p>
<p><textarea rows="10" cols="80" name="message" required></textarea></p>
<input class="btn btn-md btn-success" type="submit" name="submit" value="Submit">
    </div>
</form>
    </div>
</body>
</html>