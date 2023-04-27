const express = require('express');
const userRouter = require("./routes/users");
const userRoutes =  require("./routes/user");

const app = express();
app.use(express.json());
app.use(
    express.urlencoded({
        extended: true,
    })
);
app.use('/users', userRouter);


app.get('/' ,(req ,res) => {
    res.sendFile(__dirname+'/user.html');
} );

module.exports = app;