<?php session_start(); 
include 'db.php';
 if(isset($_POST['submit'])){

	if (empty($_POST['email']) || empty($_POST['password'])) {
//		echo "<div style='width:80%;text-align:center;margin:auto auto; background:orange;'>Username or Password is invalid</div>";
        header("Location: login.php?login=empty");
					exit();
       
	} else {
		$email = $_POST['email'];
		$password = $_POST['password'];

		

		$qry = "select * from CHIEF where password='$password' AND email='$email'";

		$login = mysqli_query($cnt, $qry);

		$row = $login->num_rows;
         

		if ($row == 1) {
			$a = mysqli_fetch_assoc($login);
			$_SESSION['id'] = $a["id"];
			$_SESSION['time'] = $a["time"];
			$_SESSION['username'] = $a["username"];
			$_SESSION['restaurante_name'] = $a["restaurante_name"];
			$_SESSION['email'] = $a["email"];
			$_SESSION['password'] = $a["password"];
             $_SESSION['first_name'] = $a['first_name'];
            $_SESSION['last_name'] = $a['last_name']; 
            $_SESSION['username'] = $a['username'];  
            $_SESSION['street'] = $a['street']; 
            $_SESSION['city'] = $a['city'];  
            $_SESSION['zip'] = $a['zip'];  
            $_SESSION['state'] = $a['state']; 
            $_SESSION['country'] = $a['country']; 
            $_SESSION['phone'] = $a['phone'];  
            $_SESSION['payment_method'] = $a['payment_method'];  
            $_SESSION['currency'] = $a['currency'];
            $_SESSION['card_year'] = $a['card_year']; 
            $_SESSION['card_month'] = $a['card_month']; $_SESSION['card_verification'] = $a['card_verification'];
//            echo "<p class='text-center' style='color:green;'>Successful Login Please Choice One to Procced!</p>";
//			echo "<div class='row text-center' ><p class='col md-6 btn btn-primary '><a style='text-decoration:none;color:#fff;' href=\"profile.php\">proceed to profile info</a></p>
//            <p class='col md-6 btn btn-primary '><a style='text-decoration:none;color:#fff;' href=\"createProfile.php\">proceed to create profile</a></p></div>";
              header("Location:createProfile.php");
            exit();
					 
		} else {
//			echo "<div style='width:80%;text-align:center;margin:auto auto; background:orange;'>Please Try Again</div>";//
            header("Location: login.php?login=invalid");
					exit();
		}
		mysqli_close($cnt);
	}

}
?>
          