var http = require('http');
var dt = require('./date')

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.end('Hello khushi!'+ dt.myTime());
}).listen(8090);