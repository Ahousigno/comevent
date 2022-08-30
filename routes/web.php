<?php

use App\Http\Controllers\ApresController;
use App\Http\Controllers\AvantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OrganisateurController;
use App\Http\Controllers\SecretariatController;
use App\Http\Controllers\TableController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('infos');
})->middleware(['auth'])->name('infos.store');

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/dashboard', function () {
//         return 'Vous êtes un admin';
//     });
// });

require __DIR__ . '/auth.php';

Route::get("/infos", [InfosController::class, "index"])->name("infos");
Route::post("/infos.store", [InfosController::class, "store"])->name("infos.store");


Route::get("/media", [AvantController::class, "indes"])->name("media");
Route::post("/media.store1", [AvantController::class, "store1"])->name("media.store1");


Route::get("/avant", [AvantController::class, "inde"])->name("avant");
Route::post("/avant.store2", [AvantController::class, "store2"])->name("avant.store2");


Route::get("/apres", [ApresController::class, "index"])->name("apres");
Route::post("/apres.store", [ApresController::class, "store"])->name("apres.store");


Route::get("/admin.index", [AdminController::class, "index"])->name('admin.index');
Route::get("/admin.table", [TableController::class, "index"])->name('admin.table');
// Route::get("/organisateur", [OrganisateurController::class, "create"])->name('organisateur');
// Route::post("/organisateur.ajouter", [OrganisateurController::class, "store"])->name('organisateur.ajouter');
Route::delete("/avant.supprimer/{avant}", [TableController::class, "delete"])->name('avant.supprimer');
Route::get("/infos.edit/{avant}", [TableController::class, "edit"])->name('infos.edit');
Route::put("/infos.update/{avant}", [TableController::class, "update"])->name('infos.update');
Route::get("/infos.valider/{avant}", [TableController::class, "valider"])->name('infos.valider');

Route::get("/secretariat", [SecretariatController::class, "index"])->name("secretariat");
Route::post("/secretariat.store", [SecretariatController::class, "store"])->name("secretariat.store");
Route::get("/secretariat/create", [SecretariatController::class, "create"])->name("secretariat.create");
Route::post("/secretariat/create", [SecretariatController::class, "store"])->name("secretariat.ajouter");
Route::get("/admin.secretariat", [SecretariatController::class, "inde"])->name('admin.secretariat');
Route::delete("/courrier.supprimer/{courrier}", [SecretariatController::class, "delete"])->name('courrier.supprimer');
Route::get("/secretariat.edit/{courrier}", [SecretariatController::class, "edit"])->name('secretariat.edit');
Route::put("/secretariat.update/{courrier}", [SecretariatController::class, "update"])->name('secretariat.update');
Route::get("/secretariat.valider/{courrier}", [SecretariatController::class, "valider"])->name('secretariat.valider');

Route::get("/admin.media", [MediaController::class, "index"])->name('admin.media');