<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EntrepotController;
use App\Http\Controllers\InstanceController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MouvementController;
use App\Http\Controllers\EntiteAdminController;
use App\Http\Controllers\TypeMouvementController;
use App\Http\Controllers\LigneMouvementController;
use App\Http\Controllers\TypeEntiteAdminController;

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

/*Route::get('/', function () {
    return view('sanru.entrepot.index');
});

*/
//{{ route('entrepot.index') }}
Route::resource('type_entite_admin', TypeEntiteAdminController::class);
Route::resource('entite_admin', EntiteAdminController::class);
Route::resource('entrepot', EntrepotController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('article', ArticleController::class);
Route::resource('instance', InstanceController::class);
Route::resource('type_mouvement', TypeMouvementController::class);
Route::resource('mouvement', MouvementController::class);
Route::resource('ligne_mouvement', LigneMouvementController::class);

Auth::routes();

Route::get('/deconnecter', [testController::class, 'logout']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/tables', [testController::class, 'index']);//Test du template


Route::get('/home', [dashboardController::class, 'dashboard'])->name('entrepot.dashboard');//Affichage du dashboard
Route::get('/dash-articles', [dashboardController::class, 'articles'])->name('article.dashboard');

Route::get('/mvt', [MouvementController::class, 'index']);//Réalisation d'un mouvement


Route::get('/detail/{mouvement}', [dashboardController::class, 'showDetail'])->name('dash.consulte.mouvement.show');

