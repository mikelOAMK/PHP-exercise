<?php 	include "menu.php"; ?>
	<form class="" action="fifth.php" method="post">
			<label for="">Write two numbers</label><br>	
			<input type="number" name="a">	
			<input type="number" name="b">	
			<input type="submit" name="btn" value="sum">	
	</form>
	<?php 
		if(isset($_POST['btn'])) {
		 $result =$_POST['a'] + $_POST['b'];
		 echo 'The sum is ' .$result; 
		}
		
	?>
<?php 	include "footer.php"; ?>