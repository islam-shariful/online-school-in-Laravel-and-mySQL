const express = require("express");
const app = express();

const teacher = require("./controller/teacher");

app.use("/teacher", teacher.routes);

app.use((req, res, next) => {
  res.status(404).send("<h1>404</h1>");
});

app.listen(process.env.PORT || 3000);
