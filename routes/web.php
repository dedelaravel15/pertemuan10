<?php

use App\Http\Controllers\StudentController;
use App\Models\student;
use Illuminate\Support\Facades\Route;

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
    return view('contents.dashboard');
});
Route::get('/charts', function () {
    return view('contents.charts');
});
Route::get('/widget', function(){
    return view('contents.widgets');
});
Route::get('/tables', function(){
    return view('contents.tables', [
        'students' => student::all()
    ]);
});
Route::get('/grid', function(){
    return view('contents.grid');
});
Route::get('/form-basic', function(){
    return view('contents.form-basic');
});
Route::get('/form-wizard', function(){
    return view('contents.form-wizard');
});
Route::get('/page-button', function(){
    return view('contents.pages-buttons');
});
Route::get('/icon-fontawesome', function(){
    return view('contents.icon-fontawesome');
});Route::get('/icon-material', function(){
    return view('contents.icon-material');
});
Route::get('/page-element', function(){
    return view('contents.pages-elements');
});
Route::get('/index2', function(){
    return view('contents.index2');
});
Route::get('/pages-gallery', function(){
    return view('contents.pages-gallery');
});
Route::get('/pages-calendar', function(){
    return view('contents.pages-calendar');
});
Route::get('/pages-invoice', function(){
    return view('contents.pages-invoice');
});
Route::get('/pages-chat', function(){
    return view('contents.pages-chat');
});
Route::get('/login', function(){
    return view('contents.authentication-login');
});
Route::get('/register', function(){
    return view('contents.authentication-register');
});
Route::get('/403', function(){
    return view('contents.error-403');
});
Route::get('/404', function(){
    return view('contents.error-404');
});
Route::get('/405', function(){
    return view('contents.error-405');
});
Route::get('/500', function(){
    return view('contents.error-500');
});
Route::get('/create', [StudentController::class, 'create']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('/update/{id}', [StudentController::class, 'update']);
Route::delete('/delete/{id}', [StudentController::class, 'destroy']);

