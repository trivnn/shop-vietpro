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
    return view('home'); 
});

// Route::get("/test", function(){
//     return '<h1>xin chao viet nam</h1>';
// });

// Route::get("/form", function(){
//     return '<form  method="post">
//         <input type="text">
//         <button type="submit">Send</button>
//         '.csrf_field().'
//     </form>';
// });

// Route::post("/form", function(){
//     return 'form succsess';
// });

// Route::group(['prefix'=>'/admin'],function(){
//     Route::get('/', function () {
//     return 'admin';
//     });
//     Route::get('/product', function () {
//     return 'product';
//     });
//      Route::get('/user', function () {
//     return 'user';
//     });

// });

//Route Admin
// Route::group(['prefix'=>'/login'],function(){
//     Route::get('/', function(){
//          return 'login';
//      });
//     Route::post('/', function(){
//          return 'login';
//      });

// });


// Route::group(['prefix'=>'/admin'], function(){
//     Route::get("/", function(){
//      return 'admin';
//      });
//     Route::get('logout', function(){
//          return 'logout';
//      });

//     Route::group(['prefix'=>'/product'],function(){

//     })
//     Route::get('/', function(){
//          return 'index';
//      });
//     Route::get('/create', function(){
//          return 'create';
//      });
//     Route::post('/store', function(){
//          return 'store';
//      });
//     Route::get('/edit', function(){
//          return 'edit';
//      });
//     Route::post("/update", function(){
//          return 'update';
//      });

//     Route::get('/delete', function(){
//          return 'delete';
//      });
// });






