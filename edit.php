<?php
	require_once "edit.logic.php";
	include "common/header.html";
?>
	<h1><?=$birthday['person']?></h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$birthday['id']?>">
			<label for="name"><p>Persoon:</p></label>
			<input type="text" id="name" name="name" value="<?=$birthday['person']?>">
		</div>
		<div>
			<label for="name"><p>Datum:</p></label>
			<select name="day">
<?php
	for($i=1; $i < 32; $i++):
?>
				<option value="<?=$i?>" <?php if($i == $birthday['day']){?>selected<?php }?>><?=$i?></option>
<?php
	endfor;
?>
			</select>
			<select name="month">
<?php
	for($i=1;$i < 13; $i++):
?>
				<option value="<?=$i?>" <?php if($i == $birthday['month']){?>selected<?php }?>><?=$months[$i-1]?></option>
<?php
	endfor;
?>
			</select>
			<select name="year">
<?php
	for($i=date("Y"); $i >= 1900; $i--):
?>
				<option value="<?=$i?>" <?php if($i == $birthday['year']){?>selected<?php }?>><?=$i?></option>
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