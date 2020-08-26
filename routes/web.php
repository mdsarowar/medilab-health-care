<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});



// =======================================Calculator=======================

Route::get('/calculator','ControllerNew@calculator')->name('cal');
Route::post('/ibwcalculator','ControllerNew@ibwcalculator')->name('ibwcalcu');
Route::post('/bmicalculator','ControllerNew@bmicalculator')->name('bmicalu');

// =======================================end Calculator=======================


// =======================================symptoms=======================

Route::get('symptoms','ControllerNew@sympt')->name('smp');
Route::get('/children','ControllerNew@childrensympt');
Route::get('/head','ControllerNew@headsympt');
Route::get('/eye','ControllerNew@eyesympt');
Route::get('/tooth','ControllerNew@toothsympt');
Route::get('ear','ControllerNew@nosesympt');
Route::get('/skin','ControllerNew@skinsympt');
Route::get('/chest','ControllerNew@chestsympt');
Route::get('/hand','ControllerNew@handsympt');

// =======================================end symptoms=======================


Route::post('/submitsam','ControllerNew@samsubmit')->name('submitsam');

Route::post('problems','ControllerNew@subproblems');

Route::get('/sampledata','ControllerNew@sampledata');

// =======================================Doctor=======================
Route::get('doctors','ControllerNew@doctorpage');
Route::post('submit/doctor','ControllerNew@doctorlist');
Route::post('showdoctor ','ControllerNew@showdoctor');
Route::get('showdoctorlist{d} ','ControllerNew@showdoctorli');

// =======================================Doctor=======================
