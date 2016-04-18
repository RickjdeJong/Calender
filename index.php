<?php
	require_once "index.logic.php";
	include "common/header.html";
?>
<?php for($i=0;$i<count($showMonths);$i++): $prevDay="";?>
	<h1><?=$months[$showMonths[$i]-1]?></h1>
<?php foreach($birthdays as $birthday): if($birthday['month'] == $showMonths[$i]):?>
<?php if($prevDay != $birthday['day']):?>
	<h2><?=$birthday['day']?></h2>
<?php endif;?>
	<p><a href="edit.php?id=<?=$birthday['id']?>"><?=$birthday['person']?> (<?=$birthday['year']?>)</a> <a href="delete.php?id=<?=$birthday['id']?>">x</a></p>
<?php $prevDay=$birthday['day'];$prevMonth=$birthday['month']; endif;endforeach;?>
<?php endfor;?>
	<p><a href="create.php">+ Toevoegen</a></p>
<?php 
include "common/footer.html";
?>