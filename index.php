<?php
include('./Routes/Route.php');

USE App\Routes\Route;


Route::get("/php_mvc/",'HomeController','index');
Route::get("/php_mvc/delete/user/{id}",'HomeController','destroy');
Route::get("/php_mvc/edit/user/{id}",'HomeController','edit');
Route::post("/php_mvc/update/user/{id}",'HomeController','update');
Route::get("/php_mvc/create/user/",'HomeController','create');
Route::post("/php_mvc/store/user/",'HomeController','store');

?>