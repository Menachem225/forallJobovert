<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traceur de positionnement  CAR</title>

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
var map = L.map('map').setView([43.6186329, 5.108971], 2);

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
    }, 1000); //temps d'actualisation 
}


var marker = L.icon({
    iconUrl: 'https://cdn.afrique-sur7.ci/768x512/articles/2019/06/27376871_C0T5i7FhX8byl1BBxYNc3chpBhp-tabvI07-LII-y4I.jpg',
    iconSize: [35, 40]
});


var marker, circle;

function getPosition(position) {
    // console.log(position)

    var lat = <?php echo $user4['latitude'].''; ?>;
    var long = <?php echo $user4['longitude'].''; ?>;
    var accuracy = <?php echo $user4['accuracy'].''; ?>;
    var marker = L.marker([lat, long]).addTo(map)
    var position = marker.getLatLng();


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

    console.log("Your coordinate is: Lat: " + <?php echo $user4['latitude'].' '; ?> + " Long: " +
        <?php echo $user4['longitude'].' '; ?> + " Accuracy: " + accuracy)


}

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("la localisation est : " + e.latlng.toString())
        .openOn(map);
}

map.on('click', onMapClick);
</script>