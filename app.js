var express = require('express')
  , mongoskin = require('mongoskin')
  , bodyParser = require('body-parser')

var allowCrossDomain = function(req, res, next) {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type,      Accept");
  next();
};

var app = express()
app.use(bodyParser.json()); // for parsing application/json
app.use(bodyParser.urlencoded({ extended: true })); // for parsing application/x-www-form-urlencoded
app.use(allowCrossDomain);

var db = mongoskin.db('mongodb://@localhost:27017/tiket_online', {safe:true})

app.param('collectionName', function(req, res, next, collectionName){
  req.collection = db.collection(collectionName)
  return next()
})

app.get('/', function(req, res, next) {
  var str = "";
  str += "<h1>Overview</h1>";
  str += "Server Node.js yang melayani anda : <a href='http://habibiefaried.com:3000'>http://akbarisanto.com:3000</a><br>";
  str += "<h1>Penggunaan</h1>";
  str += "<h2>INSERT RECORD</h2>";
  str += "Lakukan POST kedalam /collections/{collectionName}. Sebagai contoh /collections/flight";
  str += "<h2>READ RECORD</h2>";
  str += "Lakukan GET kedalam /collections/{collectionName}. Sebagai contoh /collections/order<br>";
  str += "Atau lakukan GET method kedalam /collections/{collectionName}/{id} untuk melihat satu data saja. Sebagai contoh /collections/order/abcde<br>";
  res.send(str);
})

app.get('/collections/:collectionName', function(req, res, next) {
  req.collection.find({} ,{limit:10, sort: [['_id',-1]]}).toArray(function(e, results){
    if (e) return next(e)
    res.send(results)
  })
})

app.post('/collections/:collectionName', function(req, res, next) {
  console.log(req.body);
  req.collection.insert(req.body, {}, function(e, results){
    if (e) return next(e)
    res.send(results)
  })
})

app.get('/collections/:collectionName/:id', function(req, res, next) {
  req.collection.findById(req.params.id, function(e, result){
    if (e) return next(e)
    res.send(result)
  })
})

/*
app.put('/collections/:collectionName/:id', function(req, res, next) {
  req.collection.updateById(req.params.id, {$set:req.body}, {safe:true, multi:false}, function(e, result){
    if (e) return next(e)
    res.send((result===1)?{msg:'success'}:{msg:'error'})
  })
})

app.del('/collections/:collectionName/:id', function(req, res, next) {
  req.collection.removeById(req.params.id, function(e, result){
    if (e) return next(e)
    res.send((result===1)?{msg:'success'}:{msg:'error'})
  })
})
*/

app.listen(3000)
