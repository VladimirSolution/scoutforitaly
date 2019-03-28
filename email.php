<?php
if(isset($_POST['submit'])) {
	$to = "scoutforitaly@gmail.com";
	$subject = "Form ScoutForItaly WebSite";
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$subject_field = $_POST['subject'];
	$message = $_POST['message'];
	$body = "From: $name_field\n E-Mail: $email_field\n Subject: $subject_field\n Message:\n $message";
	mail($to, $subject, $body);
	header('Location: ./contact.php?message=success');

} else {
	echo "
		<script>
			alert('Грешка.');
			window.location.href = 'http://www.scoutforitaly.com/contact.php';
		</script>
	";
}
?>
