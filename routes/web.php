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
use App\Movie;

Route::get('/404', function () {
    return view('404');
});
Route::middleware('mode')->group(function () {
    Route::get('/', 'HomeController@inIndex')->name('/');
    
    // Users
    Route::get('/account', function () {
        return view('account');
    })->name('account');
        Route::get('account/watch-later', 'watchController@show')->name('watchlater');
        Route::get('account/favorite', 'favoriteController@show')->name('favorite');
        Route::put('account/edit/settings', 'UserController@editsettings');
        Route::put('account/edit/password', 'UserController@editpassword');
        Route::post('account/edit/image', 'UserController@imageCropPost');
        
    //  Movies
    Route::get('/movies', 'MovieController@inMovies')->name('movies');
        Route::get('movie/{slug}', 'MovieController@show')->name('moviePage');
        Route::post('movie/{slug}/addtowatch', 'watchController@addToWatchLater');
        Route::post('movie/{slug}/addtofavorite', 'favoriteController@addToFavorite');
        Route::delete('movie/{slug}/soIwatchIt', 'watchController@destroy');
        Route::delete('movie/{slug}/deleteThisFav', 'favoriteController@destroy');
        Route::get('account', 'watchController@show')->name('account');
        Route::get('search', 'MovieController@search');

    Route::post('movie/{slug}', 'reportController@store');


    //  Blog
    Route::get('/blog', 'NewController@inBlog')->name('blog');
        Route::get('blog/{slug}', 'NewController@show');

    //  Page
    Route::get('/p/{slug}', 'PageController@show');

    //  Auth
    Auth::routes();
});    

//  ADMIN ROUTES
Route::middleware('admin')->prefix('admin')->group(function () {
    VisitStats::routes();
});

Route::middleware('admin')->group(function () {
        //  Dashboard
    Route::get('/admin/dashboard', 'SettingController@index')->name('admin');
    Route::post('admin/dashboard/changemode', 'SettingController@changeMode');
    Route::put('admin/dashboard', 'SettingController@update');

        //  Movies
    Route::get('admin/movie', 'MovieController@index');
    Route::get('admin/movie/create', 'MovieController@create');
    Route::post('admin/movie', 'MovieController@store');
    Route::get('admin/movie/{id}/edit', 'MovieController@edit');
    Route::put('admin/movie/{id}', 'MovieController@update');
    Route::delete('admin/movie/{id}/delete', 'MovieController@destroy');

        //  Users
    Route::get('admin/users', 'UserController@index');
    Route::delete('admin/users/{id}/delete', 'userController@destroy');

        //  Genres
    Route::get('admin/genres', 'GenreController@index');
    Route::post('admin/genres', 'GenreController@store');
    Route::delete('admin/genres/{id}/delete', 'GenreController@destroy');
    Route::put('admin/genres/{id}', 'GenreController@update');

        //   Blogs
    Route::get('admin/blog', 'NewController@index');
    Route::get('admin/blog/create', 'NewController@create');
    Route::post('admin/blog', 'NewController@store');
    Route::get('admin/blog/{id}/edit', 'NewController@edit');
    Route::put('admin/blog/{id}', 'NewController@update');
    Route::delete('admin/blog/{id}/delete', 'NewController@destroy');
    
        //  Reports
    Route::get('admin/reports', 'reportController@index');
    Route::get('admin/reports/{id}', 'reportController@update');

        //  Pages
    Route::get('admin/pages', 'PageController@index');
    Route::post('admin/pages', 'PageController@store');
    Route::put('admin/pages/{id}', 'PageController@update');
    Route::delete('admin/pages/{id}/delete', 'PageController@destroy');
});




Route::get('/home', 'HomeController@index')->name('home');










