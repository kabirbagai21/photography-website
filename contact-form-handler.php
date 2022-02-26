<?php
	if (isset($_POST['submit'])){
		$name = $_POST['name'];
		$subject = "New Form Submission";
		$mailFrom = $_POST['email'];
		$message = $_POST['message']; 


	
		$mailTo = "kabir@kabirbagaiphotography.com"; 
		$headers = "From: ".$mailFrom;
		$email_body = "You have recieved an email from ".$name.".\n\n".$message; 

		mail($mailTo, $subject, $email_body, $headers);
}
	header("Location: contactform.html"); 


?>