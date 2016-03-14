<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
{
	//send email
	$email = $_REQUEST['email'] ;
	$subject = 'Dude, Your Sister is so COOL' ;
	$message = "...like, she made this website so I could email you and let you know I was
	interested in your boats. I mean you should probably delete all of this and change the
	subject when you respond to me with more info but man your sister, though"  ;
	mail("bailey.drake@gmail.com", $subject, $message, "From:" . $email);
	echo "✔ Rock on Skippy";
}else{
	echo "You did not supply your email address, it's the most important (ok, well only) part";
}
?>