<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/coordinates', function (Request $request) { 
$data = [
'long'=>$request->long,
'lati'=>$request->lati
];
$jsonData = json_encode($data);
// dd($jsonData);
$storeData = Storage::disk('custom')->append('coordinates.json', $jsonData);
dd($storeData);
});
