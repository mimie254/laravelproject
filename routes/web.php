<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NaivashaController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\NakuruController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\ArrayController;
/*
GET- Request a resource
Post- Create a resource
Put- Update a resource
Patch- Modify a resource
Delete- Delete a resource
Option - Ask the server which verbs are allowed[rarely used]
*/

Route::get('/', function () {
    return redirect('form');
});

//Route::get('/naivasha', [NaivashaController::class, 'display']);
Route::get('rentals/{id}' , [RentalController::class, 'show']);
//GET
Route::get('nakuru' , [NakuruController::class, 'index']);
Route::get('nakuru/{id}' , [NakuruController::class, 'show']);
Route::get('nakuru/{id}/{name}' , [NakuruController::class, 'show_again'])
->whereAlpha('name')
->whereNumber('id')
;
Route::get('form',[NakuruController::class,'create'])->name('form.create');
Route::post('form',[NakuruController::class,'store'])->name('form.store');
Route::get('array',[ArrayController::class,'create']);
//Route::get('form',[NakuruController::class,'redirect']);
//POST
//Route::get('nakuru/create' , [NakuruController::class, 'create']);
//Route::post('nakuru' , [NakuruController::class, 'store']);
//PUT OR PATCH
//Route::get('nakuru/edit/{id}' , [NakuruController::class, 'edit']);
//Route::patch('nakuru/{id}' , [NakuruController::class, 'update']);
//Delete
//Route::delete('nakuru/{id}' , [NakuruController::class, 'destroy']);
//Multiple Http verbs
//Route::match(['GET', 'POST'], '/nakuru', [NakuruController::class, 'index']);
//Route::any('nakuru', [NakuruController::class, 'index']);
//Return view
//Route::view('nakuru','nakuru.nakuru',['name'=>'mimie','age'=>31]);
//Route::resource('nakuru' , NakuruController::class);


//Route for invoke method
Route::get('/naivasha', NaivashaController::class);


Route::fallback(FallbackController::class);
