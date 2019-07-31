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

Route::get('/', 'WellcomeConroller@view')->name('welcome');
Route::get('viewschools', 'SchoolController@view')->name('schools.viewschools');
Route::get('view', 'CourseController@view')->name('courses.view');


Auth::routes();

Route::group(['middleware' => 'Dashboard'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::middleware(['auth', 'Dashboard'])->group(function () {
	//FrontEnd
	Route::get('mycourse/{course}', 'CourseController@mycourse')->name('courses.mycourse');
	//Route::get('groups/{id}', 'GroupController@schools')->name('groups.schools');
	// Route::get('coursedetails', 'CourseController@coursedetails')->name('courses.coursedetails');
	
	// HomePage
    Route::post('homepage/store', 'PageController@store')->name('homepage.store')
        ->middleware('permission:homepage.create');

	Route::get('homepage', 'PageController@index')->name('homepage.index')
        ->middleware('permission:homepage.index');

    Route::get('homepage/create', 'PageController@create')->name('homepage.create')
		->middleware('permission:homepage.create');

	Route::put('homepage/{page}', 'PageController@update')->name('homepage.update')
		->middleware('permission:homepage.edit');

	Route::get('homepage/{page}', 'PageController@show')->name('homepage.show')
		->middleware('permission:homepage.show');

	Route::delete('homepage/{page}', 'PageController@destroy')->name('homepage.destroy')
		->middleware('permission:homepage.destroy');

	Route::get('homepage/{page}/edit', 'PageController@edit')->name('homepage.edit')
        ->middleware('permission:homepage.edit');

	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

    //Users
    Route::post('users/store', 'UserController@store')->name('users.store')
        ->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    Route::get('users/create', 'UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');

    //Permisos
    Route::post('permissions/store', 'PermissionController@store')->name('permissions.store')
        ->middleware('permission:permissions.create');

	Route::get('permissions', 'PermissionController@index')->name('permissions.index')
        ->middleware('permission:permissions.index');

    Route::get('permissions/create', 'PermissionController@create')->name('permissions.create')
		->middleware('permission:permissions.create');

	Route::put('permissions/{permission}', 'PermissionController@update')->name('permissions.update')
		->middleware('permission:permissions.edit');

	Route::get('permissions/{permission}', 'PermissionController@show')->name('permissions.show')
		->middleware('permission:permissions.show');

	Route::delete('permissions/{permission}', 'PermissionController@destroy')->name('permissions.destroy')
		->middleware('permission:permissions.destroy');

	Route::get('permissions/{permission}/edit', 'PermissionController@edit')->name('permissions.edit')
        ->middleware('permission:permissions.edit');


    //Niveles
    Route::post('levels/store', 'LevelController@store')->name('levels.store')
        ->middleware('permission:levels.create');

	Route::get('levels', 'LevelController@index')->name('levels.index')
        ->middleware('permission:levels.index');

    Route::get('levels/create', 'LevelController@create')->name('levels.create')
		->middleware('permission:levels.create');

	Route::put('levels/{level}', 'LevelController@update')->name('levels.update')
		->middleware('permission:levels.edit');

	Route::get('levels/{level}', 'LevelController@show')->name('levels.show')
		->middleware('permission:levels.show');

	Route::delete('levels/{level}', 'LevelController@destroy')->name('levels.destroy')
		->middleware('permission:levels.destroy');

	Route::get('levels/{level}/edit', 'LevelController@edit')->name('levels.edit')
        ->middleware('permission:levels.edit');

    //Categorías
    Route::post('categories/store', 'CategoryController@store')->name('categories.store')
        ->middleware('permission:categories.create');

	Route::get('categories', 'CategoryController@index')->name('categories.index')
        ->middleware('permission:categories.index');

    Route::get('categories/create', 'CategoryController@create')->name('categories.create')
		->middleware('permission:categories.create');

	Route::put('categories/{category}', 'CategoryController@update')->name('categories.update')
		->middleware('permission:categories.edit');

	Route::get('categories/{category}', 'CategoryController@show')->name('categories.show')
		->middleware('permission:categories.show');

	Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy')
		->middleware('permission:categories.destroy');

	Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit')
        ->middleware('permission:categories.edit');

    //Profesores
    Route::post('teachers/store', 'TeacherController@store')->name('teachers.store')
        ->middleware('permission:teachers.create');

	Route::get('teachers', 'TeacherController@index')->name('teachers.index')
        ->middleware('permission:teachers.index');

    Route::get('teachers/create', 'TeacherController@create')->name('teachers.create')
		->middleware('permission:teachers.create');

	Route::put('teachers/{teacher}', 'TeacherController@update')->name('teachers.update')
		->middleware('permission:teachers.edit');

	Route::get('teachers/{teacher}', 'TeacherController@show')->name('teachers.show')
		->middleware('permission:teachers.show');

	Route::delete('teachers/{teacher}', 'TeacherController@destroy')->name('teachers.destroy')
		->middleware('permission:teachers.destroy');

	Route::get('teachers/{teacher}/edit', 'TeacherController@edit')->name('teachers.edit')
        ->middleware('permission:teachers.edit');

    //Cursos
    Route::post('courses/store', 'CourseController@store')->name('courses.store')
        ->middleware('permission:courses.create');

	Route::get('courses', 'CourseController@index')->name('courses.index')
        ->middleware('permission:courses.index');

    Route::get('courses/create', 'CourseController@create')->name('courses.create')
		->middleware('permission:courses.create');

	Route::put('courses/{course}', 'CourseController@update')->name('courses.update')
		->middleware('permission:courses.edit');

	Route::get('courses/{course}', 'CourseController@show')->name('courses.show')
		->middleware('permission:courses.show');

	Route::delete('courses/{course}', 'CourseController@destroy')->name('courses.destroy')
		->middleware('permission:courses.destroy');

	Route::get('courses/{course}/edit', 'CourseController@edit')->name('courses.edit')
        ->middleware('permission:courses.edit');

    //Grupos
    Route::post('groups/store', 'GroupController@store')->name('groups.store')
        ->middleware('permission:groups.create');

    Route::get('groups', 'GroupController@index')->name('groups.index')
        ->middleware('permission:groups.index');

    Route::get('groups/create', 'GroupController@create')->name('groups.create')
        ->middleware('permission:groups.create');

    Route::put('groups/{course}', 'GroupController@update')->name('groups.update')
        ->middleware('permission:groups.edit');

    Route::get('groups/{course}', 'GroupController@show')->name('groups.show')
        ->middleware('permission:groups.show');

    Route::delete('groups/{course}', 'GroupController@destroy')->name('groups.destroy')
        ->middleware('permission:groups.destroy');

    Route::get('groups/{course}/edit', 'GroupController@edit')->name('groups.edit')
        ->middleware('permission:groups.edit');

    //Escuelas
    Route::post('schools/store', 'SchoolController@store')->name('schools.store')
        ->middleware('permission:schools.create');

	Route::get('schools', 'SchoolController@index')->name('schools.index')
        ->middleware('permission:schools.index');

    Route::get('schools/create', 'SchoolController@create')->name('schools.create')
		->middleware('permission:schools.create');

	Route::put('schools/{school}', 'SchoolController@update')->name('schools.update')
		->middleware('permission:schools.edit');

	Route::get('schools/{school}', 'SchoolController@show')->name('schools.show')
		->middleware('permission:schools.show');

	Route::delete('schools/{school}', 'SchoolController@destroy')->name('schools.destroy')
		->middleware('permission:schools.destroy');

	Route::get('schools/{school}/edit', 'SchoolController@edit')->name('schools.edit')
		->middleware('permission:schools.edit');
});
