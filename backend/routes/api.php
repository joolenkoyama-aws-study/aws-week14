<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/dummy-data', function () {
    Log::info('ログ出力テスト /dummy-data v2');
    $data = [
        [
//            'name' => 'John Doe',
            'name' => 'Michael Andrew Fox16-2',
            'email' => 'john.doe@example.com',
            'age' => 30,
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'age' => 25,
        ],
        [
            'name' => 'Bob Johnson',
            'email' => 'bob.johnson@example.com',
            'age' => 35,
        ],
    ];
    return response()->json($data);
});

// 16週で追加
Route::get('/users', function() {
    Log::info('ログ出力テスト');
    return User::all();
});
