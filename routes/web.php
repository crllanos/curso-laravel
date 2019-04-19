<?php

Route::get('/', "UserController@index");

Route::get('/users', "UserController@list");

Route::get('/users/add', "UserController@insert");

Route::get('/users/{id}', "UserController@find")
     ->where('id','[0-9]+');// para que entre solo si parametro es numerico, no si xej. es "add"
?>