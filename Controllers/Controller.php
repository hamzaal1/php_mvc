<?php
namespace App\Controllers;


abstract class Controller
{

    public function __construct()
    {
    }

    abstract public function index();

    abstract public function show($id);

    abstract public function create();

    abstract public function store(array $data);

    abstract public function edit($id);

    abstract public function update($id, array $data);

    abstract public function destroy($id);

    // Additional common methods or properties can be added as needed
}


?>