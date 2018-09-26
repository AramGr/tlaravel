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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', ['as'=>'home','middleware' => 'auth', 'uses'=>'Admin\IndexController@show']);

//Route::get('/article/{id}', ['as'=>'article', function ($id) {
//    echo $id;
//}]);







//Route::get('/page', function () {
//    echo '<pre>';
//    print_r($_ENV);
//    Config::set('app.locale', 'am');
//    echo Config::get('app.locale');
//    echo env('APP_ENV');
//
//});

//Route::post('/comments', function () {
//    print_r($_POST);
//});

//Route::match(['get', 'post'],'/comments', function () {
//    print_r($_POST);
//});

//any type of request
//Route::any('/comments', function () {
//    print_r($_POST);
//});

//Route::get('/page/{id}/{cat}', function ($var1, $var2) {
//    echo $var1.' || '.$var2;
//});

//Route::get('/page/{id?}', function ($var1 = 50) {
//    echo $var1;
//});

//Route::get('/page/{id}', function ($var1) {
//    echo $var1;
//})->where('id', '[0-9]+');

//Route::get('/page/{cat}/{id}', function ($var1, $var2) {
//    echo $var1.' | '.$var2;
//})->where(['id' => '[0-9]+', 'cat' => '[A-Za-z]+']);

//Route::group(['prefix'=>'admin/{id}'], function() {
//
//    Route::get('page/create/{var}', function ($var) {
//
//        $route = Route::current();
////        echo $route->getName();
////        echo $route->parameter('var', 50);
//        print_r($route->parameters());
//
////        return redirect()->route('article', ['id'=>25]);
//    })->name('createpage');
//
//    Route::get('page/edit', function () {
//        echo 'page/edit';
//    });
//});

Route::get('/', ['as'=>'home', 'uses'=>'Admin\IndexController@show']);

Route::get('/about', ['uses'=>'Admin\AboutController@show', 'as'=>'about']);

Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);

//Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article', 'middleware' => 'mymiddle']);
Route::get('/article/{id}',['middleware' => 'mymiddle:home', 'uses'=>'Admin\Core@getArticle', 'as'=>'article'])/*->middleware(['mymiddle'])*/;

Route::get('/contact', ['middleware'=>['auth'], 'uses'=>'Admin\ContactController@show', 'as'=>'contact']);
Route::post('/contact', ['middleware'=>['auth'], 'uses'=>'Admin\ContactController@store']);



Route::get('pages/add', 'Admin\CoreResource@add');
Route::resource('/pages', 'Admin\CoreResource', ['only'=>['index', 'show']]);
//Route::resource('/pages', 'Admin\CoreResource', ['except'=>['index', 'show']]);

//deprecated
//Route::controller('/pages', 'PagesController');






//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//admin/add/edit/post
Route::group(['prefix' => 'admin', 'middleware' => ['web','auth.basic']], function(){
    //admin/
    Route::get('/', ['uses' => 'Admin\AdminController@show', 'as' => 'admin_index']);

    Route::get('/add/post', ['uses' => 'Admin\AdminPostController@show', 'as' => 'admin_add_post']);
    Route::post('/add/post', ['uses' => 'Admin\AdminPostController@create', 'as' => 'admin_add_post_p']);

    Route::get('/update/post/{id}', ['uses' => 'Admin\AdminUpdatePostController@show', 'as' => 'admin_update_post']);
    Route::post('/update/post', ['uses' => 'Admin\AdminUpdatePostController@create', 'as' => 'admin_update_post_p']);

});

//Route::group(['middleware'=>'web'], function(){
//
//    Route::get('login', ['uses' => 'Auth\MyAuthController@showLogin', 'as' => 'login']);
//    Route::post('login', ['uses' => 'Auth\MyAuthController@authenticate']);
//
//});

