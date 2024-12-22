<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\c1;

Route::get('/', function () {
    return view('welcome2');
});

Route::middleware(['auth', 'verified'])->get('/home',function(){
    return view('home');
})->name('home');

Route::view('profile/edit','profile.edit')->name('profile.edit')->middleware(['auth','verified']);

Route::view('profile/password','profile.password')->name('profile.password')->middleware(['auth','verified']);



Route::post('',[c1::class,'store'])->name('contacts.store');
route::get('/list',[c1::class,'store1']);
route::get('/form',[c1::class,'form']);
Route::post('',[c1::class,'valider'])->name('valider.store');
route::get('/modifier/{id}',[c1::class,'modifier']);
route::put('/modifier/{id}',[c1::class,'update'])->name('modi.store');
route::get('/trush/{id}',[c1::class,'trush']);
route::get('/trushed',[c1::class,'trushed'])->name('trushed.store');
route::get('/restore/{id}',[c1::class,'restore']);

route::get('/delet/{id}',[c1::class,'delet']);
route::get('/show/{id}',[c1::class,'show']);