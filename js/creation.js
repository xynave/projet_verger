
let mymap, marqueur// Variable qui permettra de stocker la carte et le marqueur

// On attend que le DOM soit chargé
window.onload = () => {
    // Nous initialisons la carte et nous la centrons sur Paris
    mymap = L.map('detailsMap').setView([45.7578137, 4.8320114], 5)
    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012',
        minZoom: 2,
        maxZoom: 20
    }).addTo(mymap);
    mymap.on("click", mapClickListen)
    document.querySelector('#ville').addEventListener("blur",getCity)
}
function mapClickListen(e){
    //on récupère les coordonnées du clic
    let pos =e.latlng

    //on ajoute le marqueur
    addMarker(pos)

    //on affiche les coordonnées dans le formulaire
    document.querySelector("#lat").value =pos.lat
    document.querySelector("#lon").value =pos.lng
}
function addMarker(pos){
    
    //on vérifie si un marqueur existe
    if(marqueur != undefined){
        mymap.removeLayer(marqueur)
    }
    marqueur =L.marker(pos,{
            //on rend le marqueur déplaçable
            draggable: true
        })
    marqueur.on("dragend",function(e){
        pos=e.target.getLatLng()
        document.querySelector("#lat").value =pos.lat
        document.querySelector("#lon").value =pos.lng
    })
    marqueur.addTo(mymap)
    
    
}
function getCity(){
//on fabrique l'adresse
let adresse = document.querySelector("#adresse").value + ", " + document.querySelector("#code_postal").value+ " " + document.querySelector("#ville").value

//on initialise ajax
const xmlhttp = new XMLHttpRequest

    // On détecte les changements d'état de la requête
    xmlhttp.onreadystatechange = () => {
        // Si la requête est terminée
        if(xmlhttp.readyState == 4){
            // Si nous avons une réponse
            if(xmlhttp.status == 200){
                // On récupère la réponse
                let response = JSON.parse(xmlhttp.response)

                // On récupère la latitude et la longitude
                let lat = response[0]['lat']
                let lon = response[0]['lon']

                // On écrit les valeurs dans le formulaire
                document.querySelector("#lat").value= lat;
                document.querySelector("#lon").value= lon;

                // On crée le marqueur
                pos = [lat, lon];
                addMarker(pos);

                // On centre la carte sur l'adresse
                mymap.setView(pos, 11);
            }
        }
    }

    // On ouvre la requête
    xmlhttp.open('get', `https://nominatim.openstreetmap.org/search?q=${adresse}&format=json&addressdetails=1&limit=1&polygon_svg=1`)

    // On envoie la requête
    xmlhttp.send();
}

