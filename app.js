/**
 * Created by ss on 28/5/16.
 */
// call the packages we need
//https://$infinitio:uAbMozwnzs9fyGQpRciBetuaTrCEka93455KMmfdyrLqkR5Yk4ZM4RPonBm9@infinitio.scm.azurewebsites.net/deploy
var express = require('express');
var bodyParser = require('body-parser');

var app = express();

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

var port = process.env.PORT || 3040;
//var port = process.env.PORT || 80;

app.get('/', function (req, res) {
    res.send('Moyanth')
});

app.listen(port);
console.log('Server started on port : ' + port);