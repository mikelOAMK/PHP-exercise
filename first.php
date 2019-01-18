<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>PHP Basics</h1>
	<?php 
	$myname = 'Michael';
	echo "Hi $myname";
	echo '<br>';
	echo 'Hello '.$myname;
	echo '<br>';
	echo 'Here is the link: <a href="https://www.nba.com" target="_blank">'.$myname.'</a>;'
	?>
	<h2>An array</h2>
	<?php 
	$students = array('Jon', 'Daenerys', 'Tyron');
	echo 'Second student is '.$students[1];
	?>
	<h3>print_r-function</h3>
	<ul>
		<?php print_r($students); ?>
	<h3>foreach -loop</h3>
	<?php 
		foreach($students as $row) {
			echo '<li>'.$row.'</li>';
		}
		?>
	</ul>
	<h3>Two-dimensional array</h3>
	<?php 
		$names=array(
			array('Kobe', 'Bryant'),
			array('Michael', 'Jordan'),
			array('Lebron', 'James')
		);
		echo'with print_r<br>';
		print_r($names);
		echo '<h3> with foreach-loop</h3>';
		echo '<ul>';
		foreach($names as $row) {
			echo '<li>'.$row[0].' '.$row[1].'</li>';
		}
		echo '</ul>';
	 ?>
</body>
</html>