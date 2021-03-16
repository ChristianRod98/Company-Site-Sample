<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Areas</title>
    <link rel="stylesheet" href="finalStyles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="javaScript.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
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
		<h3>We opperate within and are proud to serve a large majority of the North-East Georgia region.</h3>
		<h4>Are you within our area? (form not complete.)</h4>
		<div class="latlongConvert">
			<form method="post">
				<label for="lat">Latitude:</label><input type="text" name="lat" id="lat" value="<? echo htmlentities($_POST['lat']); ?>">
				<br>
				<label for="long">Longitude:</label><input type="text" name="long" id="long" value="<? echo htmlentities($_POST['long']); ?>">
				<br>
				<input type="submit" value="Submit" name="submit">
				<br><br>
			</form>	
		</div>

		<div id="mapid" style="width: 100%; height: 400px;"></div>
	
	<script>
	var mymap = L.map('mapid').setView([34.359415, -83.857269], 9);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiY2Ryb2RyOTYxMCIsImEiOiJjazN0YjZybG4wMTJuM2xxbGlubWNtbnFyIn0.DpHdzX1a1B4m7SUWdxZXBg', {
		maxZoom: 16,
		
		id: 'mapbox.streets'
	}).addTo(mymap);
	L.marker([34.5261, -83.9844]).addTo(mymap)
		.bindPopup("Dahlonega");
	L.marker([34.2979, -83.8241]).addTo(mymap)
		.bindPopup("Gainesville");
	L.marker([34.5970, -83.7632]).addTo(mymap)
		.bindPopup("Cleveland");
	L.marker([34.2073, -84.1402]).addTo(mymap)
		.bindPopup("Cumming");
	L.marker([34.4212, -84.1191]).addTo(mymap)
		.bindPopup("Dawsonville");
	L.marker([34.2040, -83.4571]).addTo(mymap)
		.bindPopup("Commerce");
	
	
	L.circle([34.359415, -83.857269], 40000, {
		color: 'blue',
		fillColor: 'rgb(77, 121, 255)',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("We are happy to serve you within our radius.");

	var popup = L.popup();
	
	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);
</script>
		
	</section>
	<br>

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
