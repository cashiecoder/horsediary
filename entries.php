<!-- PHP code to establish connection with the localserver -->
<?php
$user = 'thavel';
$password = 'HiggsKitten';
$database = 'horse_diary';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM horse_diary ORDER BY id ASC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Entries</title>
	
</head>

<body>
	
	<section>
		<center>
		<h1>Entries</h1>
		<!-- TABLE CONSTRUCTION -->
		<table border=1>
			<tr>
				<th>Horse</th>
				<th>Date</th>
				<th>What We Did</th>
				<th>Notes</th>
				<th>Mucking</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['horse'];?></td>
				<td><?php echo $rows['dates'];?></td>
				<td><?php echo $rows['whatwedid'];?></td>
				<td><?php echo $rows['notes'];?></td>
				<td><?php echo $rows['mucking'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
			</center>
	</section>
	 <center>
        <a href="index.php">Add Entry</a>
    	</center>
		
</body>

</html>
