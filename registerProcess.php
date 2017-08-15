<?php session_start();
 
include 'db.php';

if(isset($_POST['email'])) {
	$restaurante_name = $_POST['restaurante_name'];
	$email = $_POST['email'];
	$password =$_POST['password'];
//	$password =(password_hash($_POST['password'], PASSWORD_BCRYPT));
//    $hash =( md5( rand(0,1000) ) );
	$username = $_SESSION['username'] = $_POST['username'];
	$first_name = $_SESSION['first_name'] = $_POST['first_name'];
	$last_name = $_SESSION['last_name'] = $_POST['last_name'];
	$street = $_SESSION['street'] = $_POST['street'];
	$city = $_SESSION['city'] = $_POST['city'];
	$zip = $_SESSION['zip'] = $_POST['zip'];
	$state = $_SESSION['state'] = $_POST['state'];
	$country = $_SESSION['country'] = $_POST['country'];
	$phone = $_SESSION['phone'] = $_POST['phone'];
	$payment_method = $_SESSION['payment_method'] = $_POST['payment_method'];
	$currency = $_SESSION['currency'] = $_POST['currency'];
	$registration_pay = $_SESSION['registration_pay'] = $_POST['registration_pay'];
	$card_number = $_SESSION['card_number'] = $_POST['card_number'];
	$card_year = $_SESSION['card_year'] = $_POST['card_year'];
	$card_month = $_SESSION['card_month'] = $_POST['card_month'];
	$card_verification = $_SESSION['card_verification'] = $_POST['card_verification'];
    $address = $street.'\r\n'.$city.','.$state.'\r\n'.$zip.'\r\n'.$country;
    
    	//Error handlers
	//Check for empty fields
	if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password) || empty($payment_method) || empty($card_number) || empty($card_year) || empty($card_month) || empty($card_verification)) {
		header("Location: register.php?register=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {
			header("Location: register.php?register=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: register.php?register=email");
				exit();
			} else {
               
				$qry = "SELECT * FROM CHIEF WHERE username='$username'";
				$result = mysqli_query($cnt, $qry);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: register.php?register=usertaken");
					exit();
				} else {
    
    
        
    
		$qry = "INSERT INTO CHIEF (restaurante_name, email, username, first_name,last_name,address, street,city,zip,state,country,phone,  password, payment_method, currency, registration_pay ,card_number, card_year, card_month, card_verification) VALUES ('$restaurante_name', '$email', '$username','$first_name','$last_name','$address','$street','$city','$zip','$state','$country','$phone','$password','$payment_method','$currency','$registration_pay','$card_number','$card_year','$card_month','$card_verification');";
    

		mysqli_query($cnt, $qry);
    
      header("Location: login.php?register=success");
					exit();
				}
			}
		}
	}

} else {
	header("Location: register.php");
	exit();
}

?>