<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/welcome', function () {
    return ['foo' => 'sdsd'];
});
Route::get('/test1', function () {
    return "test1";
});
//Route Parameters
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return $postId ." " .$commentId;
});
//Requer
Route::get('/test2/{id}', function ($id) {
    return $id;
});

//not Requer
Route::get('/test3/{id?}', function () {
    return 'welcome';
});
//Route name
Route::get('/show-number', function () {
    return 'welcome';
})->name('a');
Route::get('/show-string', function () {
    return 'welcome';
})->name('b');



// Route::group(['prefix' => 'users','middleware' => 'auth'],function()
// {
//     Route::get('/', function () {
//         return 'work';
//     });
    
//     // Route::get('show', function () {
//     //     return 'show';
//     // });
//     Route::delete('delete', 'UsersController@showAdminName');
//     Route::get('show', 'UsersController@showAdminName');
//     Route::get('edit', 'UsersController@showAdminName');
//     Route::put('update', 'UsersController@showAdminName');
// });

// Route::prefix('users')->group(function () {
//     Route::get('/', function () {
//                 return 'work';
//             });
// });

Route::get('check', function () {
    return 'middleware';
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::match(['get', 'post'], '/', function () {
//     //
// });

// Route::any('/', function () {
//     //
// });

// Regular Expression Constraints
// Route::get('user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     return $name." ". $id;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);