<?php 

		 if($_SERVER['REQUEST_METHOD'] == "POST") {
			
			if(empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['gender']) && empty($_POST['email']) && empty($_POST['uname']) && empty($_POST['passw']) && empty($_POST['recemail'])) {
				echo "Please fill up the form properly";
			} 
			else {
				$firstName = $_POST['fname'];
				$lastName = $_POST['lname'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$username = $_POST['uname'];
				$password = $_POST['passw'];
				$recemail = $_POST['recemail'];
				$filePath = "temp.txt";
				$f1 = fopen($filePath, "a");
				fwrite($f1, $firstName."\n". $lastName. "\n". $gender."\n". $email."\n". $username."\n". $password."\n". $recemail);
				fclose($f1);

				?>
				
				<!DOCTYPE html>
				<html>
				<head>
					<title></title>
				</head>
				<body>
				      <a href="login.php">Log In</a>
				</body>
				</html>
				<?php


			}
		}
?>

