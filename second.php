<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Associative Array</h1>
	<?php 
	$students = array(
		array("fn"=>'Michael', "ln"=> 'Castro'),
		array("fn"=>'Leonardo', "ln"=> 'Da Vinci'),
		array("fn"=>'Juan', "ln"=> 'Luna')
	) ?>
	<h3>print_r -function</h3>
	<?php print_r($students); ?>
	<h3>forEach-loop</h3>
	<ul>
		<?php 
		foreach($students as $row){
			echo '<li>'.$row['fn'].' '.$row['ln'].'</li>';
		}
		?>
	</ul>
	<h3>array to html-table</h3>
	<table border="1">
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
			</tr>
		</thead>
	<tbody>
		<?php 
			foreach ($students as $row) {
				echo '<tr>';
				echo '<td>'.$row['fn'].'</td>';
				echo '<td>'.$row['ln'].'</td>';
				echo '</tr>';
			}
		 ?>
	</tbody>
	</table>
</body>
</html>