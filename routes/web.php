<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Roles;

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

Route::get('/users1', function () {

		$role = App\Role::find(1);
		return (string)$role->can('create.user');
		

});


Route::get('/users', function () {
	for($i = 0; $i < 100; $i++)
	{
		DB::table('users')->insert([
		'name' => 'test'.$i,
		'email' => 'test'.$i.'@test.com',
		'password' => bcrypt('123456'),
		'uses_two_factor_auth' => 0,
		'created_at' => Carbon\Carbon::now()->subDays($i),
		'updated_at' => Carbon\Carbon::now()->subDays($i),
		]);
	}
});
