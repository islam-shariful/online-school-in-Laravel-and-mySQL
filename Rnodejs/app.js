
const express = require('express');
const app = express();

var bodyParser = require('body-parser');
var ParentController= require('./controller/ParentController');

app.use(bodyParser.urlencoded({extended:false}));

app.use('/parent', ParentController);

app.get('/', function(req, res){
	res.send("starting page");
});
app.listen(4444, function(){
    console.log('express http server started at 3333....')
});