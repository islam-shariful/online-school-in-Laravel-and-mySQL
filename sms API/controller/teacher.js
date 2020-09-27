const apiResponse = require("express-api-response");
const express = require("express");
const app = express();
const router = express.Router();

const db = require("../models/db");
const teacher = require("../models/teacher");

router.get(
  "/index",
  (req, res, next) => {
    teacher.getAll("notice", function (results) {
      // var jsonString = JSON.stringify(results);
      // var jsonArray = JSON.parse(JSON.stringify({ results }));
      // console.log(results[0]["notice_id"]);
      //#########################################################
      //res.data = { data: results };
      res.data = { results };
      next();
    });
  },
  apiResponse
);

// //test start
// // class-routine 'GET'
// router.get("/class-routine", function (req, res) {
//   console.log("class routine");
//   res.send("<h1>Welcome To Teacher Controller DB</h1>");
// });
// // class-routine 'GET'=>'param'
// router.get("/class-routine/:teacher_id", function (req, res) {
//   console.log(req.params.teacher_id);
//   var routineInfo = {
//     userName: "routine",
//     idName: "teacher_id",
//     id: "20-8101-03",
//     //id: req.body.teacher_id,
//   };
//   // teacher.get(routineInfo, function (results) {
//   //   console.log(results);
//   //   res.send("<h1>Welcome To Teacher Controller DB</h1>");
//   // });
// });
// //test end

//export
exports.routes = router;
