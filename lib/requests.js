var request = require("request");

/**
 * getJSON:  REST get request returning JSON object(s)
 * @param options: http options object
 * @param callback: callback to pass the results JSON object(s) back
 */
exports.get = function(options, onResult)
{
    var url = options.url;
    var data = options.data;

    var con = "?";
    data.forEach( function(d){
        if(con != "?") con += "&";
        con += d.name + "=" + d.value;
    });

    var conString = "";
    if(con != "?") conString = con;

    console.log(conString);

    var body = "";
    var respond = {};

    var r = request
        .get(url + conString)
        .on('response', function(response) {
            respond.code = (response.statusCode); // 200
            console.log(response.headers['content-type']);
        });

    r.on('data', function (chunk) {
        body += chunk;
    });
    r.on('end', function (re) {
        respond.responseText = body;
        onResult(respond);
    });
};