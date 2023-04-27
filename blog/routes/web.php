<?php

use App\Http\Controllers\BucketController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IdeasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('test', function () {
    return view('test_connexion_db');
});


// Route pour la page d'accueil

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route pour la page de contact
Route::get('/contact', [ContactController::class,'index'])->name('contact');
//Route pour les evenements
Route::get('/events', [EventsController::class,'index'])->name('events');
//Route pour les produits
Route::get('/shop', [ProductsController::class,'index'])->name('products');
//Route pour les produits(article)
Route::get('/article', [ProductsController::class,'shop_single'])->name('shop_single');
//Route pour connexion a la page admin
Route::get('/admin', [UserController::class,'admin'])->name('admin');
//Route pour connexion a la page login
Route::get('/login', [UserController::class,'login'])->name('login');
//Route pour connexion a la page signin
Route::get('/sign_in', [UserController::class,'signin'])->name('sign_in');

//Route pour la boite a suggestions
Route::get('/suggestions box', [IdeasController::class,'index'])->name('suggestions_box');

// route pour les categories
Route::get('/category/{category}',[ProductsController::class,'viewByCategory'])->name('category_products');


// route pour le panier
Route::get('/cart',[cartController::class,'index'])->name('cart');


// route pour moyen de paiement
Route::get('/bucket',[BucketController::class,'index'])->name('bucket');


// Route pour faq

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Route pour confidentialite

Route::get('/conf', function () {
    return view('confidentialites');
})->name('conf');

// Route pour conditions d'utilisations

Route::get('/cond_util', function () {
    return view('conditions_utilisations');
})->name('conditions');

// Route pour partner footer

Route::get('/partner', function () {
    return view('partner');
})->name('partner');



