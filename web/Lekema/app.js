const express = require("express")
const pug = require("pug")
var bodyParser = require("body-parser")

const app = express()
app.set("view engine", "pug")
app.use(bodyParser.urlencoded({ extended: true }))
app.use(express.static('public'));

app.get("/", function (req, res) {
    value = ""
    res.setHeader("Server", "Node-Pug");
    res.render("index", {value: value})
})

app.get("/error", function (req, res) {
  res.setHeader("Server", "Node-Pug");
  res.render("error")
})
app.post("/render", function (req, res) {
  template = req.body.q || "h5 No template provided"

  value = pug.render(template)
  res.render("index", { value: value })
})

app.listen(1337, ()=>{
  console.log(`Serving on Port 1337`)
})