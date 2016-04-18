<?php
	include 'common/lib.php';

	$db = new mysqli('localhost','root','','calendar');

	$query = "select * from birthdays order by month,day,person";
	$result = $db->query($query);

	$birthdays = $result->fetch_all(MYSQLI_ASSOC);

	$showMonths = array();

	foreach($birthdays as $birthday){
		$month = $birthday['month'];
		if(!in_array($month, $showMonths)){ $showMonths[] = $month;}
	}
?>