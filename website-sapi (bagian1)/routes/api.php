<?php
use App\Http\Controllers\SapiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public Routes
Route::get('/sapis', [SapiController::class, 'index']); // routing untuk menampilkan list sapi (all)

Route::post('/sapis', [SapiController::class, 'store']); // routing untuk menambahkan instance sapi

Route::get('/sapis/search/{name}', [SapiController::class, 'search']); // routing untuk mencari sapi berdasarkan nama

Route::get('/sapis/{id}', [SapiController::class, 'show']); // routing untuk mencari sapi berdasarkan id

Route::put('/sapis/{id}', [SapiController::class, 'update']); // routing untuk mengubah data sapi berdasarkan id

Route::delete('/sapis/{id}', [SapiController::class, 'destroy']); // routing untuk meghapus sapi berdasarkan id





// Protected Routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
