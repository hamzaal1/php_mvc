<?php
include('./Routes/Route.php');
USE App\Routes\Route;


Route::get("/php_mvc/",'HomeController','index');
Route::get("/php_mvc/delete/user/{id}",'HomeController','destroy');

?>

