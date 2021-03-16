<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Services</title>
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

	<style>
		.column {
			float: left;
			width: 33.33%;
			padding: 10px;
			height: 300px;
		}
		.row:after {
			content: "";
			display: table;
			clear: both;
		}
		@media only screen and (max-width: 1024px) {
			.column{
				width: 50%;
			}
		}

		@media only screen and (max-width: 399px) {
			.columns .column {
				width: 100%;
			}
		}
	</style>

	<section>
		<h2>Services we provide:</h2>
		<div class="row">
			<div class="column">
				<h4>Concrete Work</h4>
			<ul>
				<li>Driveways</li>
				<li>Patios</li>
				<li>Retaining Walls</li>
				<li>Sidewalks</li>
			</ul>
			 </div>
			<div class="column">
				<h4>Paver Work</h4>
				<ul>
					<li>Driveways</li>
					<li>Patios</li>
				</ul>
			</div>
			<div class="column">
				<h4>Masonry</h4>
				<ul>
					<li>Stone Firepits</li>
					<li>Stone Facing</li>
					<li>Retaining Walls</li>
				</ul>
			</div>
			<div class="column">
				<h4>Tree Services</h4>
				<ul>
					<li>Bruch Clearing</li>
					<li>Chipping</li>
					<li>Stump Grinding</li>
					<li>Trimming</li>
				</ul>
			</div>
			<div class="column">
				<h4>Drainage Control</h4>
				<ul>
					<li>Catch Basins</li>
					<li>Drainage Pipes</li>
					<li>French Draining</li>
				</ul>
			</div>
			<div class="column">
				<h4>Lawn Care & Planting</h4>
				<ul>
					<li>Grading</li>
					<li>Mowing</li>
					<li>Planting</li>
					<li>Seeding</li>
				</ul>
			</div>
		</div>
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
