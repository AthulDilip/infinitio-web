var express = require('express');
var router = express.Router();
var auth = require('../auth');
var request = require('request');
var client = require('../lib/requests');

//Open requests
router.use(function(req, res, next){
    next();
});

router.use('/', auth.keyCheck);

router.post('/fblogin/:token', function (req, res) {
    //contact fb
    var token = req.params.token;

    console.log(req.data);

    client.get(
        {
            url : "https://graph.facebook.com/v2.7/me",
            data : [
                {
                    name : "access_token",
                    value : token
                },
                {
                    name : "fields",
                    value : "id,name"
                }
            ]
        },
        function (body) {
            var json = JSON.parse(body.responseText);
            res.json(json).end();
        }
    );

    /*var accessToken = "EAACEdEose0cBAHtAjIlTtJCUon8w4aIK0cPqYSiChn6h8xBPOSkukn8sjH28q0Dode8G7SAZC1tE3NqjrvlGFAF4d4uWuzNKsctMjGxJrQfSzHjnAbY4ZB3Rs9PAPPZCQCzWx4rr0dJJYZBbFZBWs4Fu3pT4NlAg4baFI386K6QZDZD";

    var body = "";
    var r = request
        .get('https://graph.facebook.com/v2.8/me?fields=id,name&access_token=' + accessToken)
        .on('response', function(response) {
            console.log(response.statusCode); // 200
            console.log(response.headers['content-type']); // 'image/png'
        });
    
    r.on('data', function (chunk) {
        body += chunk;
    });
    r.on('end', function (re) {
        var jsonObj = JSON.parse(body);
        console.log(jsonObj);

        res.json(jsonObj).end();
    });*/
});

module.exports = router;