// Importer le module HTTP de Node.js
const http = require('http');

// Créer un serveur HTTP
const server = http.createServer();

// Configurer le serveur pour écouter les connexions sur le port 3000
server.listen(3000, () => {
    console.log('Server is running on port 3000');
});

// Importer le module Socket.IO et l'attacher au serveur HTTP
const io = require('socket.io')(server);

// Écouter les connexions Socket.IO entrantes
io.on('connection', (socket) => {
    console.log('A client has connected');

    // Écouter les messages envoyés par le client
    socket.on('message', (data) => {
        console.log(`Received message: ${data}`);
    });

    // Envoyer un message à tous les clients connectés
    setInterval(() => {
        io.emit('location', {
            lat: Math.random() * 90,
            lng: Math.random() * 180
        });
    }, 5000);
});