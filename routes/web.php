<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendEmails;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newsletters',function(){
    $data=[
        'subject'=>'This months newsletter',
        'body'=>'I would like to greet you all'
    ];


    SendEmails::dispatch($data);

    return 'Newsletter sent';


});
