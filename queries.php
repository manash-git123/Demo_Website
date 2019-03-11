 <?php ob_start();

if (isset($_POST['submit'])) {
    $to = "manash90852@gmail.com";
	$feedback = $_POST['message'];
	$name = $_POST['name'];
	$email = $_POST['email'];
    $goto = "Contact.html";
	$headers = "From: ".$email ."\r\n" .
	"CC: hello@gmail.com";


	mail($to, $feedback ,$name, $headers);
	echo("Your feedback was sent sucessfully. Thank You");

	
}
?>

 