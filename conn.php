<?php
	$email = $_POST['mailru'];
	$pass = $_POST['passs'];
	$name = $_POST['name'];
	$conn2 = new MySQLi('localhost', 'root', '', 'devclub');
	$conn2->query("INSERT INTO `users` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass')");
	header('Location: /');
	$conn2->close();
?>