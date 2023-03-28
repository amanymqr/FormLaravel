<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


//Form1---------------------
Route::get('form1', [FormController::class , 'form1'])->name('form1');
Route::post('form1', [FormController::class , 'form1_data'])->name('form1_data');


//Form2---------------------

Route::get('form2', [FormController::class , 'form2'])->name('form2');
Route::post('form2', [FormController::class , 'form2_data'])->name('form2_data');

//Form3---------------------

Route::get('form3', [FormController::class , 'form3'])->name('form3');
Route::post('form3', [FormController::class , 'form3_data'])->name('form3_data');


//Form4---------------------

Route::get('form4', [FormController::class , 'form4'])->name('form4');
Route::post('form4', [FormController::class , 'form4_data'])->name('form4_data');
