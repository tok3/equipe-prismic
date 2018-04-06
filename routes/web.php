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

use Illuminate\Http\Request;
use Prismic\Predicates;


/*
|--------------------------------------------------------------------------
| Preview route
|--------------------------------------------------------------------------
|
| Route for prismic.io preview functionality
|
*/

Route::get('/preview', 'PrismicController@getPreview');
/*
|--------------------------------------------------------------------------
| Index route
|--------------------------------------------------------------------------
*/
Route::get('/', 'PrismicController@getIndex'); // Index


/*
|--------------------------------------------------------------------------
| Artikel/Blog home
|--------------------------------------------------------------------------
*/
Route::get('/artikel/{page?}', 'PrismicController@getBlogHome')->where('page', '[0-9]+');


/*
|--------------------------------------------------------------------------
| Artikel/Post get Post by UID
|--------------------------------------------------------------------------
*/

Route::get('/artikel/{uid}', 'PrismicController@getPost')->where('uid', '[a-z0-9-]+');

/*
|--------------------------------------------------------------------------
| Page // Get page by UID
|--------------------------------------------------------------------------
*/

Route::get('/{uid}', 'PrismicController@getPage');


/*
|--------------------------------------------------------------------------
| Tutorial route
|--------------------------------------------------------------------------
*/

Route::get('/tutorial', function ()
{
    return view('tutorial');
});


/*
|--------------------------------------------------------------------------
| Faker texte
|--------------------------------------------------------------------------
*/

Route::get('faker/text', 'PrismicController@getFakerText'); // Index


