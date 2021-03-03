<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\controllers\ApplicationController;
use App\Http\controllers\PagesController;

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


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/pizzas', function () {
     //get data from db
     $pizzas= [
        ['type' => 'hawaiin', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' =>'garlic crust'],
        ['type' => 'veg supreme', 'base'=>'thin & crispy']
    ];

   return view('pizzas' ,[
   'pizzas' => $pizzas,
   'name'=> request('name'),
   'age'=>   request('age')
   
   ]);
 
});


//Route::get('/login', function () {
  // return view('login');
 //});


 Route::get('/app', function () {
 return view('layouts/app');
 });

//Route::get('/Home', function () {
   // return view('Home');

//});

//Route::get('/form', function () {
    //return view('/form');

//});

Route::get('/layout', function () {
    return view('/layout/layout');

});

 Route::get('/', function () {
    return view('/mainhome/mainhome'); 

 });





  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');

//   Route::get('/csc', 'CscController@index')->name('csc');

//   Route::get('/dcso', 'DcsoController@index')->name('dcso');
//   Auth::routes();

//Route::get('mainhome/mainhome', function () {
   // return view('/mainhome/mainhome');

//});

Route::get('/hh', function () {
    return view('/mainhome/hh');

});

Route::get('/layouts/app','TestController@index');


route::get('/users',[UserController::class,'index']);

Route::get('/form', 'PagesController@form');
Route::get('/dcsoform', 'PagesController@dcsoform');
Route::get('/', 'PagesController@mainhome');
Route::get('/contact', 'PagesController@contact');

Route::get('/footer', 'PagesController@footer');
Route::get('/login/test', 'PagesController@test');




Route::post('/upload', 'UploadController@uploadfile')->name('uploadfile');
Route::get('/upload', 'UploadController@uploadform');

Route::post('/contact-us', 'ContactController@contactSubmit')->name('contact.submit');
Route::get('/contact-us', 'ContactController@contact');

Route::get('/getzip','ZipController@zipCreateAndDownload');

Route::get('/acknowledge/{id}', 'PagesController@act');


 Route::get('/dcsoform', 'PagesController@dcsoform')->middleware('auth');

Route::get('/appform/{id}', 'PagesController@show')->middleware('auth');

Route::get('/forwarderview', 'PagesController@forwarderview')->middleware('auth');

Route::post('/appform/{id}/update', 'PagesController@retrieveSubmit')->middleware('auth');



Route::get('/applicantsform', 'PagesController@cscstatus');
Route::get('/Rationissue/{id}', 'PagesController@Rationissue');

Route::get('/Formstatus', 'PagesController@Formstatus');



// download file///////
Route::get('/download3/{support_document_file}', 'PagesController@download3');

Route::get('/download2/{surrrender_file}', 'PagesController@download2');

Route::get('/download1/{house_tax_file}', 'PagesController@download1');
// ////////////////////////////////////////



Route::get('/appform', 'PagesController@appform')->middleware('auth');


Route::get('/reject', 'PagesController@rejectform');

// search page////////////////////////
Route::get('/search', 'PagesController@search');
// search page////////////////////////

Route::post('/rejects/{id}/check', 'PagesController@rejectform');

Route::get('/submitsucess', 'PagesController@submitsucess');

Route::post('/post', 'StudentController@store');

Route::post('/action', 'ApplicationController@store');

Route::get('/{id}', 'ApplicationController@show');



// Route::get('/Formstatus', 'ApplicationController@Formstatus');

//  Route:get('/student', 'StudentController@create');







