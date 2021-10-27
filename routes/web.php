

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/about", [TaskController::class, 'show_name']);

Route::post('/about', [TaskController::class, 'send_name']);

Route::get("/contact", [TaskController::class, 'index']);
