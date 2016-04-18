<?php
	require_once "delete.logic.php";
	include "common/header.html";
?>
	<h1>Verjaardag verwijderen</h1>
	<form method="post">
		<input type="hidden" name="id" value="<?=$birthday['id']?>">
		<p>Weet je zeker dat je de verjaardag van <?=$birthday['person']?> op <?=$birthday['day']?> <?=$months[$birthday['month']-1]?> <?=$birthday['year']?> wilt verwijderen?</p>
		<input type="submit" name="confirmed" value="Ja">
		<input type="submit" name="canceled" value="Nee">
	</form>
<?php 
	include "common/footer.html";
?>