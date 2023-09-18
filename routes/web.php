<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;

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

// 獲取所有留言
Route::get('/api/messages', [MessageController::class, 'index']);

// 創建新留言
Route::post('/api/messages', [MessageController::class, 'create']);

?>