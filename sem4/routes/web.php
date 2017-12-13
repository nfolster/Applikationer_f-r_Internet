<?php
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
Route::get('meatballs', function () {
	$recipe = 1;
	$comments = DB::table('comments')->get()->where('recipe_id', $recipe);
    return view('meatballs', compact('recipe', 'comments'));
});
Route::get('pancakes', function () {
	$recipe = 2;
	$comments = DB::table('comments')->get()->where('recipe_id', $recipe);
    return view('pancakes', compact('recipe', 'comments'));
});
Route::get('calendar', function () {
    return view('calendar');
});
Route::get('signupsucess', function () {
	if (Auth::check()) {
		return view('signupsucess');
	}else{
		return view('home');
	}
});
Route::get('/', function () {
		return view('home');
});
Route::get('home', function () {
		return view('home');
});
Route::get('test', function () {
		return view('test');
});
Route::get('logout', function () {
		Auth::logout();
		return view('home');
});

if (Request::secure()) {
	Route::post('delete', 'CommentController@delete')->name('delete');
	Route::post('write', 'CommentController@write');
	Auth::routes();
}





