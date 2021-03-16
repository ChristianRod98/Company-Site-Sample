<?
	$dbHost="198.71.227.96:3306";
	$dbUsername="cdrodr9610";
	$dbPassword="Habersham800!";
	$dbName="mySQLdb";

	$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$pNumber = mysqli_real_escape_string($conn, $_POST['pNumber']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$work = mysqli_real_escape_string($conn, $_POST['work']);

	if (!empty($first) || !empty($last) || !empty($pNumber) || !empty($email) || !empty($work)) {
		
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
		} else {
			$sql = ("INSERT INTO contactUs (first, last, pNumber, email, work)
				values ('$first','$last', '$pNumber', '$email', '$work')");
			if ($conn->query($sql)){
				echo "New record is inserted sucessfully";
			} else {
				echo "Error: ". $sql ."
				". $conn->error;
			}
			$conn->close();
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="finalStyles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="javaScript.js"></script>
</head>

<body>
    <header>
        <h1>Rodriguez Landscaping</h1>
        <nav>
            <ul>
                <li><a href="index.php">About Us</a></li>
				<li><a href="serviceArea.php">Service Areas</a></li>
				<li class="dropdown">
					<a href="ourService.php">Our Services</a>
					<div class="dropdown-content">
						<a href="">Concrete Work</a>
						<a href="">Paver Work</a>
						<a href="">Retaining Walls</a>
						<a href="">Tree Service</a>
						<a href="">Drainage Control</a>
						<a href="">Lawn Care & Planting</a>
					</div>
				</li>
				<li><a href="pastProjects.php">Past Projects</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="pastProjectsReviews.php">Reviews</a></li>
            </ul>
        </nav>
    </header>

    <section>
		<h2>Let us know how we can help.</h2>

		<form method="post" action="contact.php">
			First Name: <input type="text" name="first" required>
				<br><br>

			Last Name: <input type="text" name="last" required>
				<br><br>

			Phone Number: <input type="text" name="pNumber" required>
				<br><br>

			Email: <input type="text" name="email"required>
				<br><br>
		
			Work needing to be done: <br><textarea type="text" name="work" rows="10" cols="40" required></textarea>
				<br><br>
			
			<input type="submit" value="Submit" name="submit"><br><br>
		</form>

		<table class="output">
		<tr>
		<th>Id</th>
		<th>first</th>
		<th>last</th>
		<th>pNumber</th>
		<th>email</th>
		</tr>
		<?php
			$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT id, first, last, pNumber, email comment FROM contactUs";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first"]. "</td><td>"
					. $row["last"]. "</td><td>" . $row["pNumber"]. "</td><td>" . $row["email"]. "</td></tr>";
				}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
		?>
	</table>

	</section>

    <footer>
        <div>
            <ol>
               <li><a href="pastProjects.php">Past Projects</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ol>
        </div>
    </footer>
	<div class="copyright">
			©2019 <a href="index.php">Rodriguez Landscaping</a> (Example website. Content is not copyrighted.)
	</div>
</body>
</html>