<?php
namespace App\Controllers;


abstract class Controller
{

    public function __construct()
    {
    }

    abstract public function index();

    abstract public function show();

    abstract public function create();

    abstract public function store();

    abstract public function edit();

    abstract public function update();

    abstract public function destroy();

    // Additional common methods or properties can be added as needed
}


?>