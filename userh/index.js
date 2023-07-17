if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        // Envoi des coordonnées à un serveur avec Ajax
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "/url-du-serveur");
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.send(JSON.stringify({ latitude: latitude, longitude: longitude }));
    });
} else {
    console.log("La géolocalisation n'est pas prise en charge par votre navigateur.");
}