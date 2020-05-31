var ny = [45.7578137, 4.8320114];
var IO = [45.7578137, 3.8320234];

// création de la map
var map = L.map('map').setView(ny, 7);

// création du calque images
L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
}).addTo(map);

// ajout d'un markeur
var marker = L.marker(ny).addTo(map);
var marker1 = L.marker(IO).addTo(map);
// ajout d'un popup
marker.bindPopup('<div class="col lg-4"><div class="card border-success" style="width: 15rem;"><div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators1" data-slide-to="1"></li><li data-target="#carouselExampleIndicators1" data-slide-to="2"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="..."> </div> <div class="carousel-item"><img src="./images/apple-2788638__480[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div> <div class="carousel-item"><img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="card-body "><h5 class="card-title">Distance</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p><a href="uneannonce.php" class="btn  btn-outline-success float-right">Voir</a> </div></div></div>');
marker1.bindPopup('<div class="col lg-4"><div class="card border-success" style="width: 15rem;"><div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel"><ol class="carousel-indicators"><li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators1" data-slide-to="1"></li><li data-target="#carouselExampleIndicators1" data-slide-to="2"></li></ol><div class="carousel-inner"><div class="carousel-item active"><img src="./images/1200px-Lobo.2008-12-17[1].jpg" width="100" height="160" class="d-block w-100" alt="..."> </div> <div class="carousel-item"><img src="./images/apple-2788638__480[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div> <div class="carousel-item"><img src="./images/Malus-Boskoop_organic[1].jpg" width="100" height="160" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="card-body "><h5 class="card-title">Distance</h5><p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p><a href="uneannonce.php" class="btn  btn-outline-success float-right">Voir</a> </div></div></div>');


//fonction localisation
function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
		.bindPopup("Tu es ici " ).openPopup();
		L.circle(e.latlng, radius).addTo(map);

  
}
map.locate({setView: true, maxZoom: 7});
map.on('locationfound', onLocationFound);
function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);