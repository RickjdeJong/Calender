<?php
	include 'common/lib.php';

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$db = new mysqli('localhost','root','','calendar');
		
		$person = $db->escape_string($_POST["name"]);
		$day = $db->escape_string($_POST["day"]);
		$month = $db->escape_string($_POST["month"]);
		$year = $db->escape_string($_POST["year"]);
		
		$query = "insert into birthdays (person, day, month, year) values ('$person', '$day', '$month', '$year')";
		$result = $db->query($query);

		header("Location: ./");
		exit();
	}
?>