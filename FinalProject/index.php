<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="finalStyles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="javaScript.js"></script>
</head>

<body>
    <header>
        <h1>Rodriguez Landscaping</h1>
        <nav>
            <ul
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
        <h2>About Us</h2>
		<p>
			Founded in 1992, Local Landscaping Company is a family owned
            business that strived to insure your home projects are 
            taken care of and lawn is looking its best. With over 20
            years of expreience with lawn maintanece, hardscape work, 
            fenceing, tree work, planting, and grading; we can get the 
            job done.
        </p>
        <br>

		<h3>Lets get your lawn looking its best.</h3>

		<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/image-slideshow1.jpg" style="width:100%">
  <div class="text">Retaining Walls</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/image-slideshow2.jpg" style="width:100%">
  <div class="text">Paver Driveways</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/image-slideshow3.jpg" style="width:100%">
  <div class="text">Lawn Care</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/image-slideshow4.jpg" style="width:100%">
  <div class="text">Concrete Work</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

		<h3>Starting your Project</h3>
        <p>
            Once you have reached out to us and scheduled an apointment, 
            one of our skilled consultents will come out to your property 
            to evaluate your plans for project. We will go over what work 
            is needing to be done, a step by step process of how we'll accomplish
            it, and the invoice, seen below, for your project.
        </p>
    
		<table class="invoice-table">
			<thead>
				<th>Invoice</th>
                    <tr>
                        <th>Work Needed</th>
                        <th>Price</th>
                    </tr>
            </thead>
            <tbody>
				<tr>
			        <td>Lawn mowing</td>
                    <td>$50</td>
                </tr>
                <tr>
					<td>Shrub Trimming</td>
                    <td>$125</td>
                <tr>
                    <td>Tree service/ Chipping</td>
                    <td>$250</td>
                </tr>
                <tr>
					<td>Construction of Retaining Wall</td>
                    <td>$1,300</td>
                </tr>
            </tbody>
            <thead>
				<tr>
					<th>Total</th>
                    <th>$1,725</th>
                </tr>
            </thead>
    </table>
    <br>

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