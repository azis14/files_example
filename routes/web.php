<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
    return view('home', ['urls' => [], 'types' => [], 'names' => []]);
});

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/', function (Request $request) {
    $urls = [];
    $types = [];
    $names = [];
    $files = $request->file('files');
    $destinationPath = storage_path() . '/app/public/';

    foreach ($files as $file) {
        $fileName = $file->getClientOriginalName();
        $type = $file->getClientMimeType();

        $file->move($destinationPath, $fileName);


        array_push($urls, Storage::url($fileName));
        array_push($types, $type);
        array_push($names, $fileName);
    }

    return view('home', ['urls' => $urls, 'types' => $types, 'names' => $names]);
});


