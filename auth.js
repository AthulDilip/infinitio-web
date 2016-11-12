/**
 * Created by ss on 11/11/16.
 */
var config = require('./config');

var functions = {
    keyCheck : function (req, res, next) {
        if( req.headers.ikey == config.apiKey ) {
            console.log("IKEY verified");
            next();
        }
        else {
            res.status(401).end();
        }
    }
};

module.exports = functions;