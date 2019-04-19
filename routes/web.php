<?php

Route::get('/', function()  {
    return "Holanda que Talca?"; // ya no rendetea una vista
});

Route::get('/users', function()  {
    return "[the users list]";
});
Route::get('/users/{id}', function($id)  {
    return "Info user $id.";
})->where('id','[0-9]+');// para que entre solo si parametro es numerico, no si xej. es "add"

Route::get('/users/add', function()  {
    return "Adding new user...";
});
