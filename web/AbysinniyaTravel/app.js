const express = require("express")
const jwt = require("jsonwebtoken")
const ejs = require("ejs")
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser');
const { decode } = require("punycode");

const SECRET = "Anacarmen"

const app = express();
app.set("view engine", "ejs")
app.use(express.json())
app.use(bodyParser.urlencoded({ extended: true }));

app.use(express.static(__dirname + "/public"));

// middleware function to set the JWT token as a cookie
const setCookieMiddleware = (req, res, next) => {
    const token = req.token;
    if (token) {
      // set the JWT token as a cookie with an expiration time
      res.cookie('jwt', token, { maxAge: 3600000, httpOnly: true });
    }
    next(); // continue to the next middleware or route
  };
  
// use the cookie-parser middleware
app.use(cookieParser());

// use the middleware to set the JWT token as a cookie
app.use(setCookieMiddleware);

function CreateJwt(usr,SECRET){
    const payload = { user : usr };
    const token = jwt.sign(payload, SECRET,  { expiresIn: '15m' });
    return token ; 
};

const users = {
    "admin" : "4dm1nIs4D0ct0r",
    "test" : "test"
};

app.get("/", (req, res) =>{
    res.render("index");
});

app.get("/login", (req, res)=>{
    res.render("login");
})
app.post("/login", (req, res) =>{
    var username = req.body.username ;
    const password = req.body.password ;
    
    //console.log(res.token,users[username], password);
    if(username === 'admin' && users[username] === password){
        //.log("Found Admin....");
        const token = CreateJwt(username);
        res.token = token;
        res.setHeader('Authorization', `Bearer ${token}`);
        res.render("admin-dashboard");
    }else{
        // if(users.username && username === "test" && users.username === password){
        const token = CreateJwt(username, SECRET);
        // const token = jwt.sign(, SECRET);
        res.setHeader('Authorization', `Bearer ${token}`);

        // console.log("token: ", res.headersSent);
        res.cookie("token",token,{httpOnly:true});
        res.redirect("/dashboard");
    }

    
});

app.get("/signup", (req, res)=>{
    res.render("signup", {msg : ""});
});

app.post("/signup", (req, res)=>{
    const usr = req.body.username ;
    const pwd = req.body.password ;
    var msg = "";
    //console.log(pwd, usr in users);
    if (usr in users ) {
        msg = "User Already Exists!!!";
    }else {
        msg = "Sucessfully Registered";
    }
    res.render("signup", {msg: msg});
});


// users dashboard
app.get("/dashboard", (req, res)=>{
    const token = req.cookies.token;
    if(!token){
        return res.status(401).send("Authorization Required!!");
    }
    try {
        const decode = jwt.verify(token, SECRET);
        // console.log(decode);
        req.user = decode; 
    } catch (e){
        res.status(400).send(e);
    }  
    // console.log(req.headers);  
    if( ["admin","Admin","administrator","Administrator"].includes(req.user.user)) {
        res.send("Account Not accessible here try /admin-dashboard")
    }else{
        // console.log(req.cookies.token, req.headers);
        res.render("dashboard",{user: req.user.user});
    }
});


app.get("/admin-dashboard", (req, res)=>{
    // console.log(req.cookies.token);
    const token = req.cookies.token;
    if(!token){
        return res.status(401).send("Authorization Required!!");
    }
    try {
        const decode = jwt.verify(token, SECRET);
        // console.log(decode);
        req.user = decode; 
    } catch (e){
        res.status(400).send(e);
    }
    // console.log(req.user.user)
    var usr = req.user.user ;
    if(usr === "admin") {
        usr = "Admin" 
    }else{
        usr = "Almost There... User Doesn't exist!!!";
    }
    res.render("admin-dashboard", {user: usr});
});

app.listen(1337, ()=>{
    console.log("Serving on http://localhost:1337");
});
