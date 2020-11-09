<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('upload', function(Request $request){

	$path = Storage::disk('local')->put('images/originals', $request->file);

	// $exists = Storage::disk('s3')->exists('images/originals/D6KeWorzlylcAt51Y0tq43kqRPPYhTdgqjAaL9IF.txt');

	return response()->json($path);
});
