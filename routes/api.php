<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// [{“letter.txt”:”Richard”},{“paper.pdf”:”jack”},{“test.py”:”Johnny”},{“numbers.docx”:”jack”}]

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/toRoman', 'MainController@toRoman');
    Route::get('/toNumber', 'MainController@toNumber');
    Route::get('/sum', 'MainController@sum');
    Route::get('/multiply', 'MainController@multiply');
});
