<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
// Route::get('contacts', function () {
//     dd('ok');
//     return view('contacts.index');
// });
Route::post('contacts/{id}/update', [ContactController::class,'update'])->name('contact.update');  
Route::post('contacts/store', [ContactController::class,'store'])->name('contact.store');  
Route::resource('contacts', ContactController::class);  


// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);


// Route::get('contacts/{id}', function ($id) {
//     return 'contacts '.$id;
// });

// http://127.0.0.1:8000/contacts/create