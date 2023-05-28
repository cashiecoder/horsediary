<!DOCTYPE html>
<html>

<head>
	<title>Insert</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost:3306
		// username => thavel
		// password => HiggsKitten
		// database name => horse_diary
		$conn = mysqli_connect("localhost:3306", "root", "", "horse_diary");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        $horse = $_REQUEST['horse'];
		$dates = $_REQUEST['dates'];
		$whatwedid = $_REQUEST['whatwedid'];
		$notes = $_REQUEST['notes'];
		$mucking = $_REQUEST['mucking'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO horse_diary (horse, dates, whatwedid, notes, mucking) VALUES ('$horse','$dates','$whatwedid','$notes','$mucking')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in a database successfully."
				. " Please use the link below to view entries.</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
    <center>
        <a href="entries.php">Entries</a>
    </center>
</body>

</html>
