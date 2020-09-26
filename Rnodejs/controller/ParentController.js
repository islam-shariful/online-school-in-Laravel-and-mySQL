var express = require('express');
const { body, validationResult } = require('express-validator');
var ParentModel = require.main.require('./model/ParentModel');
var router = express.Router();

var user={};

router.get('/lostfound', function(req, res){
	ParentModel.lostfound(user,function(result){
		res.send({result})
	})
});

router.get('/lostfoundsearch/(:value)', function(req, res){
    user= req.params.value;
	ParentModel.lostfoundsearch(user,function(result){
		res.send({result})
	})	
});

router.get('/subject/(:id)', function(req, res){
    user= req.params.id;
	ParentModel.subject(user,function(result){
		res.send({result})
	})
});

module.exports = router;