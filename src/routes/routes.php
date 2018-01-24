<?php

Route::group(['prefix' => 'rlhprovinsi', 'middleware' => 'web'], function() {
    Route::get('/', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getIndex');
    Route::get('/list', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getList');
    Route::get('/detail/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@detailRlhProvinsi');
    Route::post('/create', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@createRlhProvinsiSave');
    Route::get('/update/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@updateRlhProvinsi');
    Route::post('/update/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getIndex');
    Route::post('/delete/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getIndex');
    Route::post('/activate/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getIndex');
    Route::post('/unactivate/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getIndex');
    Route::get('/getKota/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getKota');
    Route::get('/json/{id}/{va}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@json');
    Route::get('/export/{id}', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@export');
    Route::get('/getColumns', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getColumns');
    Route::get('/getProvinsi', 'Satudata\Rlhprovinsi\Http\Controllers\RlhProvinsiController@getProvinsi');
});
