<?php

	use phpmailer\PHPMailer\PHPMailer;
	use phpmailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	include("connection.php");
	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
		$address1 = mysqli_real_escape_string($conn, $_POST['address1']);
		$address2 = mysqli_real_escape_string($conn, $_POST['address2']);
		$city = mysqli_real_escape_string($conn, $_POST['city']);
		$province = mysqli_real_escape_string($conn, $_POST['province']);
		$zip = mysqli_real_escape_string($conn, $_POST['zip']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

		$sql = "select * from signup where username='$username'";
		$result = mysqli_query($conn, $sql);
		$count_username = mysqli_num_rows($result);

		$sql = "select * from signup where email='$email'";
		$result = mysqli_query($conn, $sql);
		$count_email = mysqli_num_rows($result);


		if($count_username == 0 && $count_email==0){
			if ($password==$cpassword) {
				$hash = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO signup(name,email,telephone,address1,address2,city,province,zip,username,password) VALUES('$name', '$email', '$telephone', '$address1', '$address2', '$city', '$province', '$zip', '$username', '$hash')";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					$subject = "Good day.";
					$body = "Thank you for registering on our website.";
					
					$mail = new PHPMailer(true);
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->Username = 'angelasanchez199x@gmail.com';
					$mail->Password = 'jsvbstmoaezwhiif';
					$mail->SMTPSecure = 'ssl';
					$mail->Port = 465;

					$mail->setFrom('angelasanchez199x@gmail.com');
					$mail->addAddress($_POST["email"]);
					$mail->isHTML(true);

					$mail->Subject = $subject;
					$mail->Body = $body;

					$mail->send();

					echo '
						<script>
							alert("Message sent");
							window.location.href = "index.php";
						</script>
					';
					header("Location: welcome.php?data=$name");
				}
			}
			else{
				echo '<script>
					alert("Passwords do not match.")
					window.location.href = "index.php";
				</script>';
			}
		}
		else{
			if ($count_username>0) {
				echo '<script>
					alert("The username you have entered has already been registered with our system.  Please enter a different username.")
					window.location.href="index.php";
				</script>';
			}
			if ($count_email>0) {
				echo '<script>
					alert("The email you have entered has already been registered with our system.  Please enter a different email.")
					window.location.href="index.php";
				</script>';
			}
		}
	}

?>