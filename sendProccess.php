<?PHP
require_once 'nav.php';

$from="khalilnouga2@msn.com";
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$header = 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'X-Mailer: PHP/'.phpversion();
mail($email, $subject, $message, $header);
 if(empty($email) || empty( $subject) || empty($message) || empty($header)) {
     print "<div class='container'><p style='color:red'>Error! must fill out the form.</p></div>";
 }else{
print "<div class='container'><p style='color:green'>Your message has been sent.  Someone would contact you soon:</p></br>$email</br> $subject</br> $message<p/></div>";
 }
?>