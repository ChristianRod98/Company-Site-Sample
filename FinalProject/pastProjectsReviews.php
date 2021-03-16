<?
	$dbHost="198.71.227.96:3306";
	$dbUsername="cdrodr9610";
	$dbPassword="Habersham800!";
	$dbName="mySQLdb";
	
	$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	$query = "SELECT star, count(*) as number FROM Reviews GROUP BY star";
	$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebAPI Survey Results</title>
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

	<?php
		$dbHost="198.71.227.96:3306";
		$dbUsername="cdrodr9610";
		$dbPassword="Habersham800!";
		$dbName="mySQLdb";
			
		$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$star = mysqli_real_escape_string($conn, $_POST['star']);
		$comment = mysqli_real_escape_string($conn, $_POST['comment']);

		if (!empty($first) || !empty($last) || !empty($star) || !empty($comment)) {
			
			if (mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '
					. mysqli_connect_error());
			} else {
				$sql = ("INSERT INTO Reviews (first, last, star, comment)
					values ('$first','$last', '$star', '$comment')");
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

	<br><br>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() 
	  {
		var data = google.visualization.arrayToDataTable([
          ['star', 'Number'],
		  <?php
		  while($row = mysqli_fetch_array($result))
		  {
		  	  echo "['".$row["star"]."', ".$row["number"]."],";
		  }
		  ?>
        ]);

        var options = {
          title: 'Star Review Averages'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

	<div id="piechart" style="width: 100%; height: 500px;"></div>


	<table class="output">
		<tr>
		<th>Id</th>
		<th>first</th>
		<th>last</th>
		<th>star</th>
		<th>comment</th>
		</tr>
		<?php
			$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT id, first, last, star, comment FROM Reviews";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first"]. "</td><td>"
					. $row["last"]. "</td><td>" . $row["star"]. "</td><td>" . $row["comment"]. "</td></tr>";
				}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
		?>
	</table>

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
