 <?php ob_start();

if (isset($_POST['submit'])) {
   
	$email = $_POST['email'];
	$message = "Congratulation!You have subscribed to the Newsletter sucessfully.";
	$thanks = "Thank You for subscribing. Latest updates will be sent to you in the future
	            From-Manash Pratim Das";
    $to = $email;
	$headers = "CC: manash90852@gmail.com";


	mail($to, $message, $thanks, $headers);
	echo("You have been subscribed");
	header("Location: register.html");
	
}


?>

 