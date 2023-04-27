
const db = require('./db');

async function getUsers(){
    const sql = `SELECT * FROM users`;
    const rows = await db.query(sql);

    return rows;
}

// POST fonctionnel pour ajouter un nouvel users


async function addUser(username, email, password, role) {
    const sql = 'INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)';
    const values = [username, email, password, role];
    const rows = await db.query(sql, values);
    return rows;
}


// end


// creation d'un update functionnel
async function updateUser(users, id) {
    const sql = `UPDATE users SET username=?, email=?, password=?, role=? WHERE matricule = ${id}`;
    const params = [users.username , users.email,users.password,users.role];
    const rows = db.query(sql, params);

    let message = 'succes';

    if (!rows) {
        message = 'Error in updating user';
    }

    return {message};
}


// test



// fonction pour le delete
async function remove(id){
    const sql = `DELETE FROM users WHERE matricule = ?`;
    const result = await db.query(sql, [id]);

    let message = 'users deleted successfully';

    if (!result) {
        message = 'Error in deleting users';
    }

    return {message};
}


// end




//
async function getLike()
{
    const sql = `SELECT like FROM commentaire`;
    const rows = await db.query(sql);

    return rows;
}

async function getUsersByEmail(mail){
    const sql = `SELECT * FROM users WHERE email = ?`;
    const rows = await db.query(sql, [mail]);
    return rows;

}
async function createProduct(product){
    const sql = `INSERT INTO produits(nom, description, prix) 
                 VALUES (?, ?, ?)`;
    params = [product.nom, product.description, product.prix];
    const rows = await db.query(sql, params);
    if(!rows){
        return "vide";
    }else {
        return "bien creer"
    }
}


module.exports = {
    getUsers,
    getLike,
    getUsersByEmail,
    createProduct,
    addUser,
    updateUser,
    remove
}
