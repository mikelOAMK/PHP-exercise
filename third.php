<?php include "menu.php"; ?>
<h1>Forms</h1>
<h2>POST-method</h2>
<form class="" action="test1.php" method="post">
	<label for="fn">Firstname</label><br>
	<input type="text" name="fname" id="fn" value=""><br>
	<label for="ln">Lastname</label><br>
	<input type="text" name="lname" id="ln" value=""><br>
	<input type="submit" name="" value="Send"><br>
</form>

<h2>GET-method</h2>
<form class="" action="test2.php" method="get">
	<label for="fn">Firstname</label><br>
	<input type="text" name="fname" id="fn" value=""><br>
	<label for="ln">Lastname</label><br>
	<input type="text" name="lname" id="ln" value=""><br>
	<input type="submit" name="" value="Send"><br>
</form>

<?php include "footer.php"; ?>