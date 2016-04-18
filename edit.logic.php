<?php
	include 'common/lib.php';
	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		if(isset($_GET['id'])){
			$db = new mysqli('localhost','root','','calendar');
			$id = $db->escape_string($_GET['id']);

			$query = "select * from birthdays where id=$id";
			$result = $db->query($query);

			$birthday = $result->fetch_assoc();
		}else{
			http_response_code(404);
			include 'common/not_found.php';
			exit();
		}
	}else if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$db = new mysqli('localhost','root','','calendar');

		$id = $db->escape_string($_POST['id']);
		$person = $db->escape_string($_POST['name']);
		$day = $db->escape_string($_POST['day']);
		$month = $db->escape_string($_POST['month']);
		$year = $db->escape_string($_POST['year']);

		$query = "update birthdays set person='$person', day='$day', month='$month', year='$year' where id='$id'";
		$result= $db->query($query);

		header("Location: ./");
    	exit();
	}
?>