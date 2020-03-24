<?php
/**
 * Created by PhpStorm.
 * User: appen
 * Date: 2020/3/24
 * Time: 7:47
 */
Route::get('/','OceanusunitController@index');
Route::post('/','OceanusunitController@store')->name('ocunit.store');





