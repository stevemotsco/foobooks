<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# Homepage
Route::get('/', function()
{
	return View::make ("index.php");
	//return View::make('hello');
});


Route::get('/books', function() {

	return "Here are all the books...";

});

Route::get('/books/{category}', function($category) {

	return "Here are the books in the category: ".$category;

});


Route::get('/new', function() {

    $view  = '<form method="POST" action="/new">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});


Route::get('/data', function() {

    //get the file, convert to array, return the file as an array
    $books = File::get(app()_path.'/databse/books.json');
    $books = json_decode($books, true);
    return $books;

});


