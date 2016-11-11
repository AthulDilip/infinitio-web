var express = require('express');
var router = express.Router();
var auth = require('../auth');

//Open requests
router.use(function(req, res, next){
    next();
});

router.use('/', auth.keyCheck);

router.get('/', function (req, res) {
    res.send('api key verified!');
});

module.exports = router;