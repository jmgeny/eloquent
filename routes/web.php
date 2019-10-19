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

Route::get('/', function () {

	$users = App\User::get();

	// $users = User::all();
    return view('welcome', ['users' => $users]);

});

Route::get('/profile/{id}', function ($id) {

	$user = App\User::find($id);

	$posts = $user->posts()
				->with('category','image','tags')
				->withCount('comments')->get();
			//utilizamos el metodo post y que vengan con los comentarios. get() traeme toda esta consulta

	$videos = $user->videos()
				->with('category','image','tags')
				->withCount('comments')->get();

	return view('profile', [
		'user' => $user,
		'posts' => $posts,
		'videos' => $videos
	]);

})->name('profile');
