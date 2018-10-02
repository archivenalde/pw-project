<?php
if (isset($data['dateajoutcomp']))
{
?>

	<form method="post" action="rollback.php">

		<input type="hidden" name="rollback-date" id="rollback-date" value=<?php
		echo "\"".$data['dateajoutcomp']."\"/>";
	?>
	<button class="btn btn-primary" type="submit">Rollbacker a partir de cette modification</button>


	</form>
<?php
}
else if (isset($data['dateajout']))
{
?>
	<form method="post" action="rollback.php">

		<input type="hidden" name="rollback-date" id="rollback-date" value=<?php
		echo "\"".$data['dateajout']."\"/>";
	?>
	<button class="btn btn-primary" type="submit">Rollbacker a partir de cette modification</button>
	</form>

<?php	
}
else
{
	echo "PRRRRRRRRRRRRRRRRRRRRRRRRRROOOOOOOOOOO";
}
?>