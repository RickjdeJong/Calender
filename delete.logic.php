<?php 
	include 'common/lib.php';

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		if(isset($_GET['id'])){
			$db = new mysqli('localhost','root','','calendar');

			$id = $db->escape_string($_GET['id']);

			$query = "select * from birthdays where id='$id'";
			$result = $db->query($query);

			$birthday = $result->fetch_assoc();
		}else{
			http_response_code(404);
			include("common/not_found.php");
			exit();
		}
	}else if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST['confirmed'])){
			$db = new mysqli('localhost','root','','calendar');

			$id = $db->escape_string($_POST['id']);

			$query = "delete from birthdays where id=$id";
			$result = $db->query($query);
		}
		header("Location: ./");
		exit();
	}

?>