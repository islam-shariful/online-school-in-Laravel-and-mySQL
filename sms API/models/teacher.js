const express = require("express");

const db = require("./db");

module.exports = {
  //select
  getAll: function (user, callback) {
    const sql = "SELECT * FROM " + user;
    db.getResult(sql, function (results) {
      if (results.length > 0) {
        callback(results);
      } else {
        callback([]);
      }
    });
  },
  // select* ,user is an object with three properties
  get: function (user, callback) {
    //console.log(user);
    const sql =
      "SELECT * FROM `" +
      user.userName +
      "` WHERE `" +
      user.idName +
      "` LiKE " +
      "'" +
      "%" +
      user.id +
      "%" +
      "'";
    db.getResult(sql, function (results) {
      if (results.length > 0) {
        callback(results);
      } else {
        callback([]);
      }
    });
  },
};
