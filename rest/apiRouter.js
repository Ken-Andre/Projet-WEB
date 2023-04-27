const usersCtrl = require ('./routes/usersCtrl ');
const express = require('express');


// router
exports.router =(function (){
    const apiRouter = express.Router();
 //    users route

    apiRouter.route('/users/register/').post(usersCtrl.register);
    apiRouter.route('/users/login/').post(usersCtrl.login);
    return apiRouter;
})();