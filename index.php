<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main Page</title>
</head>
<body>
	<center>
		<h1>Mama's horse diary</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="horse">Horse:</label>
			<input type="text" name="horse" id="horse">
			</p>

			
<p>
			<label for="dates">Date:</label>
			<input type="text" name="dates" id="dates">
			</p>

			
<p>
			<label for="whatwedid">What We Did:</label>
			<input type="text" name="whatwedid" id="whatwedid">
			</p>

			
<p>
			<label for="notes">Notes:</label>
			<input type="text" name="notes" id="notes">
			</p>

			
<p>
			<label for="mucking">Mucking:</label>
			<input type="text" name="mucking" id="mucking">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
 	<center>
        <a href="entries.php">Entries</a>
    </center>
</body>
</html>
