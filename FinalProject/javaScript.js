/*SlideShow*/
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
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


/*API Map*/
var mymap = L.map('mapid').setView([34.359415, -83.857269], 9);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiY2Ryb2RyOTYxMCIsImEiOiJjazN0YjZybG4wMTJuM2xxbGlubWNtbnFyIn0.DpHdzX1a1B4m7SUWdxZXBg', {
    maxZoom: 16,

    id: 'mapbox.streets'
}).addTo(mymap);
L.marker([34.528625, -83.985951]).addTo(mymap)
    .bindPopup("University of North Georgia- Dahlonega");
L.marker([34.235119, -83.867097]).addTo(mymap)
    .bindPopup("University of North Georgia- Gainesville");


L.circle([34.359415, -83.857269], 40000, {
    color: 'blue',
    fillColor: 'rgb(77, 121, 255)',
    fillOpacity: 0.5
}).addTo(mymap).bindPopup("I am a circle.");

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);