<?php require 'database.php'; ?>
     
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
	<section>
	<table>
		<thead>
			<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Age</th>
			<th>Phone Number</th>
		</tr>
		</thead>
	<tbody>
		<?php foreach ($friends as $friend): ?>
		<tr>
			<td> <?=$friend['firstname']?></td>
			<td> <?=$friend['lastname'] ?></td>
			<td> <?=$friend['age'] ?> </td>
			<td> <?=$friend['phoneNumber'] ?></td>
		</tr>
	<?php endforeach ?>

	<?php
		$data = new Database('Akirachix', 'akirachix', 'root', 'localhost');
		$sql = 'select * from friends';
		$results = $data->db_query($sql);


    foreach($results as $result)
    	{
			echo  $result->firstname;
			echo $result->lastname;
			echo $result->age;
			echo $result->phoneNumber;
		}
	?>
	</tbody>
	</table>
	</section>
</body>
</html>