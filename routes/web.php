<?php

use App\Task;

use App\Dish;

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
})->name('home');

Route::get('/test', function(){
    $tasks = DB::table('tasks')->get();

    // return $tasks;
    return view('test', compact('tasks'));
});

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/tasks', 'TasksController@index');

Route::get('/menu', 'DishesController@index');

Route::get('/menu/{dish}', 'DishesController@show');

Route::post('/dishes/{dish}/comments', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/order/{dish}', 'OrderController@store');

Route::get('/loggedinorder', function() {

  $dishes = Dish::all();

  return view('loggedinorder', compact('dishes'));

});

Route::get('/profile', 'OrderController@show');

Route::get('/about', function () {
    return view('index1');
});

Route::get('/order', function () {
    return view('index3');
});

Route::get('/contacts', function () {
    return view('index4');
});
