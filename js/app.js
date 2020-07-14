/*  initialisation des coordonné*/
var ny = [45.7578137, 4.8320114];
var IO = [45.7578137, 3.8320234];

// création de la map
/* création de la map avec l'id de ou on veut la placer avec coordonnées et niveua de zoom*/
var map = L.map('map').setView(ny, 6);

// création du calque images
L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012',
    minZoom: 2,
    maxZoom: 20
}).addTo(map);



// Notre cluster
var markers = L.markerClusterGroup();
// Nos marqueurs
var marker2 = L.marker([46.6935956, -0.4237665]);
var marker3 = L.marker([46.6835956, -0.4237665]);
var marker4 = L.marker([46.6935956, -0.4137665]);
var marker5 = L.marker([46.6885956, -0.4187665]);
var marker = L.marker(ny)

//on remplace tout ça part un echo 

var marker1 = L.marker(IO)
markers.addLayer(marker1);
marker1.bindPopup('<div class="col lg-4">\
<div class="card" style="width: 15rem;"><div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators1" data-slide-to="1"></li><li data-target="#carouselExampleIndicators1" data-slide-to="2"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="..."> </div> <div class="carousel-item"><img src="./images/apple-2788638__480[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div> <div class="carousel-item"><img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="card-body "><h5 class="card-title">Distance</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p><a href="uneannonce.php" class="btn  btn-outline-dark float-right">Voir</a> </div></div></div>');


// On ajoute les marqueurs au cluster

markers.addLayer(marker2);
markers.addLayer(marker3);
markers.addLayer(marker4);
markers.addLayer(marker5);
markers.addLayer(marker);

// On affiche le cluster
map.addLayer(markers);
// ajout d'un markeur

// ajout d'un popup
marker.bindPopup('<div class="col lg-4"><div class="card " style="width: 15rem;"><div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators1" data-slide-to="1"></li><li data-target="#carouselExampleIndicators1" data-slide-to="2"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="..."> </div> <div class="carousel-item"><img src="./images/apple-2788638__480[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div> <div class="carousel-item"><img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="card-body "><h5 class="card-title">Distance</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p><a href="uneannonce.php" class="btn  btn-outline-dark float-right">Voir</a> </div></div></div>');

/*fonction localisation mettre cette fonction en 
function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
		.bindPopup("Tu es ici " ).openPopup();
		L.circle(e.latlng, radius).addTo(map);

  
}
/* fonction de localisation*/
function localistaion(){
    map.locate({setView: true, maxZoom: 7});
    map.on('locationfound', onLocationFound);
    function onLocationError(e) {
        alert(e.message);
    }
    
    map.on('locationerror', onLocationError);
}
document.querySelector('#find-me').addEventListener('click', localistaion);