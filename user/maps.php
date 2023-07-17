<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menachem Tracking ways</title>
    <?php include 'includes/session.php'; ?>
    <!-- leaflet css  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        width: 100%;
        height: 100vh;
    }
    </style>
</head>

<body>
    <div id="map"></div>
</body>

</html>

<!-- leaflet js  -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
// Map initialization 
var map = L.map('map').setView([5.409278, -3.9966891], 6);

//osm layer. 
var osm = L.tileLayer('http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
osm.addTo(map);

if (!navigator.geolocation) {
    console.log("Your browser doesn't support geolocation feature!")
} else {
    setInterval(() => {
        navigator.geolocation.getCurrentPosition(getPosition)
    }, 10000); //temps d'actualisation 
}


var marker = L.icon({
    iconUrl: 'https://cdn.afrique-sur7.ci/768x512/articles/2019/06/27376871_C0T5i7FhX8byl1BBxYNc3chpBhp-tabvI07-LII-y4I.jpg',
    iconSize: [35, 40]
});


var marker, circle;

function getPosition(position) {
    // console.log(position)
    var lat = position.coords.latitude
    var long = position.coords.longitude
    var accuracy = position.coords.accuracy
    var marker = L.marker([lat, long]).addTo(map);
    var position = marker.getLatLng();
    var accuracy = "2"
    var id =
        var marker = L.marker([lat, long]).addTo(map);
    marker.bindPopup("<b>Hello world!</b><br>GLE 450.").openPopup();


    if (marker) {
        map.removeLayer(marker)
    }

    if (circle) {
        map.removeLayer(circle)
    }

    marker = L.marker([lat, long])
    circle = L.circle([lat, long], {
        radius: accuracy
    })

    var featureGroup = L.featureGroup([marker, circle]).addTo(map)

    map.fitBounds(featureGroup.getBounds())

    console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy)



    $.ajax({
        type: "POST",
        url: "affichage.php",
        data: {
            id: id,
            latitude: position.lat,
            longitude: position.lng,
            language: navigator.language,
            platform: navigator.platform,
            systeme: navigator.userAgent
        },
        success: function(data) {
            console.log("Position enregistrée avec succès !");
            console.log(data);
            console.log("User agent: " + navigator.userAgent);
            console.log("Version: " + navigator.appVersion);
            console.log("Platform: " + navigator.platform);
            console.log("Language: " + navigator.language);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log("Erreur lors de l'enregistrement de la position : " + errorThrown);


        }
    });
}
</script>