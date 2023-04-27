const express = require('express');
const users = require("../sevices/users");
const router = express.Router();
const bodyParser = require ('body-parser');
const bcrypt =require('bcrypt');
const jwt = require ('jsonwebtoken');
const {addUser, updateUser,remove} = require("../sevices/users");

const app = express();


// Route de login
app.post('/views/user', (req, res) => {
  // Vérifier les identifiants de l'utilisateur
  const { username, password } = req.body;
  if (username !== 'username' || password !== 'password') {
    return res.status(401).json({ message: 'Identifiants invalides' });
  }

  // Si les identifiants sont valides, créer un token d'une heure

  const token = jwt.sign({ username }, 'ma_cle_secrete', { expiresIn: '1h' });

  // Renvoyer le token au client
  res.json({ token });
});
// testons

app.get('/mon_endpoint_protégé', (req, res) => {
  // Extraire le token de la requête
  const authHeader = req.headers.authorization;
  const token = authHeader && authHeader.split(' ')[1];
  if (!token) {
    return res.status(401).json({ message: 'Token manquant' });
  }

  // Vérifier le token et extraire les données d'utilisateur
  try {
    const decoded = jwt.verify(token,'ma_cle_secrete');
    const username = decoded.username;
    // Utiliser les données d'utilisateur pour traiter la requête
    // ...
  } catch (err) {
    return res.status(401).json({ message: 'Token invalide' });
  }
});


/* GET users listing. */
router.get('/', async function(req, res, next) {
  try {
    res.json(await users.getUsers());
  } catch (err) {
    console.error(`Error while getting programming languages `, err.message);
    next(err);
  }
});
router.get('/:email', async function(req, res, next) {
  try {
    res.json(await users.getUsersByEmail(req.params.email));
  } catch (err) {
    console.error(`Error while getting programming languages `, err.message);
    next(err);
  }
});
router.post('/', async function(req, res, next) {
  try {
    res.json(await users.createProduct(req.body));
  } catch (err) {
    console.error(`Error while getting programming languages `, err.message);
    next(err);
  }
});



// post pour ajouter le nouvel user
router.post('/users', async (req, res) => {
  const { username, email, password, role } = req.body;
  try {
    const result = await addUser(username, email, password, role);
    res.status(201).json({ success: true, message: 'User created successfully!' });
  } catch (error) {
    console.error(error);
    res.status(500).json({ success: false, message: 'Could not create user.' });
  }
});





// route update

router.put('/:id', async function(req, res, next) {
  try {
    res.json(await users.updateUser(req.body, req.params.id));
  } catch (err) {
    console.error(`Error while creating programming language`, err.message);
    next(err);
  }
});


// delete

/* DELETE programming language */
router.delete('/:id', async function(req, res, next) {
  try {
    res.json(await users.remove(req.params.id));
  } catch (err) {
    console.error(`Error while deleting users`, err.message);
    next(err);
  }
});


module.exports = router;



