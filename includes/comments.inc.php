<?php

function setComments($conn){
	if (isset($_POST['commentSubmit'])) {
		$uid = $_SESSION["usersId"] ?? null;
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO users (usersId, date , message) VALUES ('$uid' , '$date', '$message')";
		$result = $conn->query($sql);

	
	}
}

function getComments($conn){
	$sql = "SELECT * FROM users";
	if ($result = $conn->query($sql)) {
		while ($row = $result->fetch_assoc())  {
		echo $row['date'];
		echo $row['message'];
	}
	
	}
	
	
	
}