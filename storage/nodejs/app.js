
const express = require('express');
const app = express();

var bodyParser = require('body-parser');
var StudentController= require('./controller/StudentController');

app.use(bodyParser.urlencoded({extended:false}));

app.use('/student', StudentController);

app.get('/', function(req, res){
	res.send("starting page");
});
app.listen(3333, function(){
    console.log('express http server started at 3333....')
});