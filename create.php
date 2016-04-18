<?php
	require_once "create.logic.php";
	include "common/header.html";
?>
	<h1>Nieuwe verjaardag</h1>
	<form method="post">
		<div>
			<label for="name"><p>Persoon:</p></label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name"><p>Datum:</p></label>
			<select name="day">
<?php
	for($i=1; $i < 32; $i++):
?>
				<option value="<?=$i?>"><?=$i?></option>
<?php
	endfor;
?>
			</select>
			<select name="month">
<?php
	for($i=1;$i < 13; $i++):
?>
				<option value="<?=$i?>"><?=$months[$i-1]?></option>
<?php
	endfor;
?>
			</select>
			<select name="year">
<?php
	for($i=date("Y"); $i >= 1900; $i--):
?>
				<option value="<?=$i?>"><?=$i?></option>
<?php
	endfor;
?>
			</select>
		</div>
		<div>
			<input type="submit" value="Opslaan">
		</div>
	</form>
<?php 
	include "common/footer.html";
?>