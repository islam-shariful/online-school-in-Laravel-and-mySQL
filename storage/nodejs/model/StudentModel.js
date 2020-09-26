var db = require('./db');

module.exports = {
 
	lostfoundsearch: function(user,callback){
		var sql = "select * from lostfound WHERE lostname LIKE '%"+user+"%' OR lostdescription LIKE '%"+user+"%'";
		db.getResults(sql, user, function(result){

				callback(result);
		})
	},
	teachersearch: function(user,callback){
		var sql = "select * from teacher WHERE teachername LIKE '%"+user+"%' OR teacheremail LIKE '%"+user+"%' OR teacherdepartment LIKE '%"+user+"%'";
		db.getResults(sql, user, function(result){

				callback(result);
		})
	},
}