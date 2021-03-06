<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

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

// Route::get('/', function() {
//     return 'Website ini berdiri sejak Kamu pergi meninggalkanku.</br>
//     Sabar belum waktunya release.</br>
//     </br>message from developer beta7x';
// });

if (App::environment('production')) {
    URL::forceScheme('https');
};

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/achievements', [HomeController::class, 'achievements']);
Route::get('/news', [PostsController::class, 'posts']);
Route::get('/news/{slug}', [PostsController::class, 'post']);

Route::post('/register', [RegisterController::class, 'store']);