<?php

use App\Http\Controllers;
use App\Http\Controllers\back\AdminController;
use App\Http\Controllers\back\UserController as UserController;
//use App\Http\Controllers\back\CategoryController as CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\RouteRegistrar;
use UniSharp\LaravelFilemanager\Lfm;
use App\Http\Controllers\front\ArticleController;
use App\Http\Controllers\back\PortfolioController;
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
/*Route::get('/', function () {
    return view('front.main');
})->name('home'); 1400/05/02 */

/*Route::get('/home', function () {
    return view('front.main');
})->name('home_verified-user');*/
Route::prefix('biography')->group(function () {
    Route::get('/', 'App\Http\Controllers\BiographyController@index')->name('biography');
});
Route::get('/', 'App\Http\Controllers\front\HomeController@index')->name('home'); // 1400/05/02
/*URLShortener-1400/06/27******************************************************************************************************/
Route::get('/URLShortener', 'App\Http\Controllers\UrlShortenerController@index')->name('URLShortener'); //->middleware('CheckRole') 

/*project-1******************************************************************************************************/
// database
Route::prefix('project-1')->group(function () {
    Route::get('/', 'App\Http\Controllers\DatabaseController@index')->name('project-1'); //->middleware('CheckRole') 
    Route::get('/create', 'App\Http\Controllers\DatabaseController@create')->name('databases.create'); //->middleware('CheckRole')
    Route::post('/store_database', 'App\Http\Controllers\DatabaseController@store')->name('databases.store');
    Route::get('/select/{database}', 'App\Http\Controllers\DatabaseController@select')->name('databases.select');
    Route::post('/query/{database}', 'App\Http\Controllers\DatabaseController@storequery')->name('databases.storequery'); //QueryController
    Route::get('/edit/{database}', 'App\Http\Controllers\DatabaseController@edit')->name('databases.edit');
    Route::post('/update/{database}', 'App\Http\Controllers\DatabaseController@update')->name('databases.update');
    Route::get('/destroy/{database}', 'App\Http\Controllers\DatabaseController@destroy')->name('databases.destroy');
});

// query
Route::get('/project-1/queries/create', 'App\Http\Controllers\QueryController@create')->name('queries.create');
Route::post('/project-1/queries/store', 'App\Http\Controllers\QueryController@store')->name('queries.store');
Route::get('/project-1/queries/run', 'App\Http\Controllers\QueryController@run')->name('queries.run');

// forms
Route::get('/project-1/forms', 'App\Http\Controllers\FormController@index')->name('forms');
Route::get('/project-1/forms/create', 'App\Http\Controllers\FormController@create')->name('forms.create');
Route::post('/project-1/forms/store', 'App\Http\Controllers\FormController@store')->name('forms.store');

//register-query-form
Route::get('/project-1/register-query-form', 'App\Http\Controllers\Project1Controller@create')->name('project1.create');
Route::post('/project-1/store-query-form', 'App\Http\Controllers\Project1Controller@store')->name('project1.store');

/* newsletter *****************************************************************************************************/

Route::get('/newsletter', 'App\Http\Controllers\front\NewsletterController@create')->name('newsletter.create');
Route::post('/newsletter', 'App\Http\Controllers\front\NewsletterController@store')->name('newsletter.store'); //->middleware(['verified'])

/* Send us a message ارتباط با مهرداد محمدی *****************************************************************************************************/
Route::post('/sendmessage', 'App\Http\Controllers\front\SendmessageController@index')->name('sendmessage');
/******************************************************************************************************/

Auth::routes(['verify' => true]);
/*
Route::get('/register',\App\Http\Controllers\Auth\RegisterController@showRegistrationForm)->name('register');
Route::get('/login',\App\Http\Controllers\Auth\LoginController@showLoginForm)->name('login');
Route::get('/password/reset',\App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm)->name('password.request');
password.request
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

/******************************************************************************************************/

Route::prefix('admin')->middleware('CheckRole')->group(function () {
    /*HTTP request is => /admin------------------------------------------------------------*/
    Route::get('/', '\App\Http\Controllers\back\AdminController@index')->name('admin.index'); //->middleware('CheckRole')
    /*HTTP request is =>/admin/users------------------------------------------------------------*/
    Route::get('/users', '\App\Http\Controllers\back\UserController@index')->name('admin.users'); //->middleware('CheckRole')
    /*HTTP request is =>/admin/profile/{user} ویرایش-------------------------------------------------------------*/
    Route::get('/profile/{user}', '\App\Http\Controllers\back\UserController@edit')->name('admin.profile');
    /*HTTP request is => /admin/profileupdate/{user}--------------------------------------------------------------------*/
    Route::post('/profileupdate/{user}', '\App\Http\Controllers\back\UserController@update')->name('admin.profileupdate');
    /*HTTP request is =>/admin/users/delete/{user}--------------------------------------------------------------------*/
    Route::get('/users/delete/{user}', '\App\Http\Controllers\back\UserController@destroy')->name('admin.user.delete');
    /*HTTP request is =>/admin/users/status/{user}-------------------------------------------------------------------------*/
    Route::get('/users/status/{user}', '\App\Http\Controllers\back\UserController@updatestatus')->name('admin.user.status');
});
/******************************************************************************************************/

//Route::get('ckeditor', 'App\Http\Controllers\CkeditorController@index');
//Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

/******************************************************************************************************/

Route::prefix('admin/categories')->middleware('CheckRole')->group(function () {
    /*HTTP request is => /admin/categories------------------------------------------------------------*/
    Route::get('/', '\App\Http\Controllers\back\CategoryController@index')->name('admin.categories'); //->middleware('CheckRole')
    /*HTTP request is =>/admin/categories/create------------------------------------------------------------*/
    Route::get('/create', '\App\Http\Controllers\back\CategoryController@create')->name('admin.categories.create'); //->middleware('CheckRole')
    /*HTTP request is =>/admin/categories{user}-------------------------------------------------------------*/
    Route::post('/store', '\App\Http\Controllers\back\CategoryController@store')->name('admin.categories.store');
    /*HTTP request is => /admin/profileupdate/{user}--------------------------------------------------------------------*/
    Route::get('/edit/{category}', '\App\Http\Controllers\back\CategoryController@edit')->name('admin.categories.edit');
    /*HTTP request is =>/admin/users/delete/{user}--------------------------------------------------------------------*/
    Route::post('/update/{category}', '\App\Http\Controllers\back\CategoryController@update')->name('admin.categories.update');
    /*HTTP request is =>/admin/users/status/{user}-------------------------------------------------------------------------*/
    Route::get('/destroy/{category}', '\App\Http\Controllers\back\CategoryController@destroy')->name('admin.categories.destroy');
});

/******************************************************************************************************/

Route::prefix('admin/articles')->middleware('CheckRole')->group(function () {
    /*HTTP request is => /admin/articles------------------------------------------------------------*/
    Route::get('/', '\App\Http\Controllers\back\ArticleController@index')->name('admin.articles'); //->middleware('CheckRole')
    /*HTTP request is =>/admin/articles/create------------------------------------------------------------*/
    Route::get('/create', '\App\Http\Controllers\back\ArticleController@create')->name('admin.articles.create'); //->middleware('CheckRole')
    /*HTTP request is =>/admin/articles/store/{article}-------------------------------------------------------------*/
    Route::post('/store', '\App\Http\Controllers\back\ArticleController@store')->name('admin.articles.store');
    /*HTTP request is => /admin//edit/{article}--------------------------------------------------------------------*/
    Route::get('/edit/{article}', '\App\Http\Controllers\back\ArticleController@edit')->name('admin.articles.edit');
    /*HTTP request is =>/admin/articles/update/{article}--------------------------------------------------------------------*/
    Route::post('/update/{article}', '\App\Http\Controllers\back\ArticleController@update')->name('admin.articles.update');
    /*HTTP request is =>/admin/articles/destroy/{article}-------------------------------------------------------------------------*/
    Route::get('/destroy/{article}', '\App\Http\Controllers\back\ArticleController@destroy')->name('admin.articles.destroy');
    /*HTTP request is =>/admin/articles/status/{article}-------------------------------------------------------------------------*/
    Route::get('/status/{article}', '\App\Http\Controllers\back\ArticleController@updatestatus')->name('admin.articles.status');
});

/******************************************************************************************************/
/*-------------------------------------------------------------------------------------------------------------*/

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');

/*User-------------------------------------------------------------------------------------------------------------*/

Route::get('/profile/{user}', '\App\Http\Controllers\UserController@edit')->name('profile')->middleware(['auth', 'verified']);/*'auth'=>کاربر لاگین باشد ,'verified'کاربر روی ایمیل فعالسازی کلیک کره باشد */
Route::post('/update/{user}', '\App\Http\Controllers\UserController@update')->name('profileupdate');

/*/articles ******************************************************************************************************/

Route::get('/articles', '\App\Http\Controllers\front\ArticleController@index')->name('articles');
Route::get('/mehrdadarticles', '\App\Http\Controllers\front\ArticleController@indexmehrdad')->name('mehrdadarticles');
Route::get('/article/{article}', '\App\Http\Controllers\front\ArticleController@show')->name('article');

/* commnet.store ******************************************************************************************************/

Route::post('/commnet/{article}', '\App\Http\Controllers\front\CommentController@store')->name('commnet.store');
//Route::post('/news', '\App\Http\Controllers\front\NewsletterController@store')->name('newsletter');

/******************************************************************************************************/
Route::prefix('admin/comments')->middleware('CheckRole')->group(function () {
    /*HTTP request is => /admin/articles------------------------------------------------------------*/
    Route::get('/', '\App\Http\Controllers\back\CommentController@index')->name('admin.comments'); //->middleware('CheckRole')
    /*HTTP request is => /admin//edit/{article}--------------------------------------------------------------------*/
    Route::get('/edit/{comment}', '\App\Http\Controllers\back\CommentController@edit')->name('admin.comments.edit');
    /*HTTP request is =>/admin/articles/update/{article}--------------------------------------------------------------------*/
    Route::post('/update/{comment}', '\App\Http\Controllers\back\CommentController@update')->name('admin.comments.update');
    /*HTTP request is =>/admin/articles/destroy/{article}-------------------------------------------------------------------------*/
    Route::get('/destroy/{comment}', '\App\Http\Controllers\back\CommentController@destroy')->name('admin.comments.destroy');
    /*HTTP request is =>/admin/articles/status/{article}-------------------------------------------------------------------------*/
    Route::get('/status/{comment}', '\App\Http\Controllers\back\CommentController@updatestatus')->name('admin.comments.status');
});
/******************************************************************************************************/

Route::prefix('admin/portfolios')->middleware('CheckRole')->group(function () {
    Route::get('/', '\App\Http\Controllers\back\PortfolioController@index')->name('admin.portfolios');
    Route::get('/create', '\App\Http\Controllers\back\PortfolioController@create')->name('admin.portfolios.create');
    Route::post('/store', '\App\Http\Controllers\back\PortfolioController@store')->name('admin.portfolios.store');
    Route::get('/edit/{portfolio}', '\App\Http\Controllers\back\PortfolioController@edit')->name('admin.portfolios.edit');
    Route::post('/update/{portfolio}', '\App\Http\Controllers\back\PortfolioController@update')->name('admin.portfolios.update');
    Route::get('/destroy/{portfolio}', '\App\Http\Controllers\back\PortfolioController@destroy')->name('admin.portfolios.destroy');
    Route::get('/status/{portfolio}', '\App\Http\Controllers\back\PortfolioController@updatestatus')->name('admin.portfolios.status');
});
/******************************************************************************************************/

Route::prefix('admin/services')->middleware('CheckRole')->group(function () {
    Route::get('/', '\App\Http\Controllers\back\ServiceController@index')->name('admin.services');
    Route::get('/create', '\App\Http\Controllers\back\ServiceController@create')->name('admin.services.create');
    Route::post('/store', '\App\Http\Controllers\back\ServiceController@store')->name('admin.services.store');
    Route::get('/edit/{service}', '\App\Http\Controllers\back\ServiceController@edit')->name('admin.services.edit');
    Route::post('/update/{service}', '\App\Http\Controllers\back\ServiceController@update')->name('admin.services.update');
    Route::get('/destroy/{service}', '\App\Http\Controllers\back\ServiceController@destroy')->name('admin.services.destroy');
    Route::get('/status/{service}', '\App\Http\Controllers\back\ServiceController@updatestatus')->name('admin.services.status');
});
