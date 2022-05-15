<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//on va créer une fonction index dans le homeController
Route::get("/", [HomeController::class, "index"]);


//route pour la liste des users
Route::get("/users", [AdminController::class, "user"]);

//admin : supprimer un produit
Route::get("/deletemenu/{id}", [AdminController::class, "deletemenu"]);


//product menu fonction:productmenu
Route::get("/productmenu", [AdminController::class, "productmenu"]);

//ajouter un produit
Route::post("/uploadproduct", [AdminController::class, "upload"]);


//route pour suppression user //fonction:deleteuser
Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);

//admin : get update product 
Route::get("/updateview/{id}", [AdminController::class, "updateview"]);

//admin :post update product
Route::post("/update/{id}", [AdminController::class, "update"]);

//we need to create redirects function in homeController
Route::get("/redirects", [HomeController::class, "redirects"]);


//user : make reservation
Route::post("/reservation", [AdminController::class, "reservation"]);


//admin:reservation view
Route::get("/viewreservation", [AdminController::class, "viewreservation"]);

//Admin:events view
Route::get("/viewevent", [AdminController::class, "viewevent"]);

//admin : upload event 
Route::post("/uploadevent", [AdminController::class, "uploadevent"]);

//admin update event
Route::get("/updateevent/{id}", [AdminController::class, "updateevent"]);

//admin post : admin event
Route::post("/updatexevent/{id}", [AdminController::class, "updatexevent"]);

Route::get("/deleteevent/{id}", [AdminController::class, "deleteevent"]);


Route::post("/don", [AdminController::class, "don"]);

Route::get("/viewdon", [AdminController::class, "viewdon"]);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
