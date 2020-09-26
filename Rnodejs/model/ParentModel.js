var db = require('./db');

module.exports = {
 
	lostfound: function(user,callback){
		var sql = "select * from lostfound";
		db.getResults(sql, user, function(result){

				callback(result);
		})
	},   
	lostfoundsearch: function(user,callback){
		var sql = "select * from lostfound WHERE lostname LIKE '%"+user+"%' OR lostdescription LIKE '%"+user+"%'";
		db.getResults(sql, user, function(result){

				callback(result);
		})
	},
	
	subject: function(user,callback){
		var sql = "select * from subject,teacher WHERE subject.subject_id=teacher.subject_id AND subject.class_id=?";
		db.getResults(sql, user, function(result){

				callback(result);
		})
	},
	 
}