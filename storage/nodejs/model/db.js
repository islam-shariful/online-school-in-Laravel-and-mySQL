var mysql = require('mysql');

var config = {
	host: 'localhost',
	user: 'root',
	password: '',
    database: 'test1'
};


function getConnection(callback){
	var con = mysql.createConnection(config);
	con.connect(function(err){
		if(err){
			console.log('connection error: '+err.stack);
		}else{
			console.log('connection id: '+con.threadId);
		}
	});	

	callback(con);
}


module.exports = {
	getResults: function(sql, params, callback){
		getConnection(function(connection){

			if(params == ""){
				connection.query(sql, function(err, result){

					if(err){
						callback([]);
					}else{
						callback(result);
					}
				});

			}else{
				connection.query(sql, params, function(err, result){
					if(err){
						console.log('errro db.js')
						callback([]);
					}else{
						console.log('db.js')
						callback(result);
					}
				});
			}

			connection.end(function(err){
				console.log('end connection');
			});
		});
	},
	execute: function(sql, params, callback){

		if(params == ''){
			getConnection(function(connection){
			connection.query(sql, function(err, status){
				if(err){
					callback(status);
				}else{
					callback(status);
				}
			});

			connection.end(function(err){
					console.log('end connection');
				});
			});
		}else{
			getConnection(function(connection){
			connection.query(sql, params, function(err, status){
				if(err){
					console.log('error execute ');
					callback(status);
				}else{
					console.log('db execute');
					callback(status);
				}
			});

			connection.end(function(err){
					console.log('end connection');
				});
			});
		}

	}
};
