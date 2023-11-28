<?php
namespace App\Controllers\HomeController;

include './Controllers/Controller.php';
include './config/View.php';
include './Models/Model.php';
include './Models/User.php';
use App\Controllers\Controller;
USE App\Models\Users\User;

class HomeController extends Controller
{

    public function index(){

        $users = User::get();
        echo View("home",$users);
    }

    public function show($id){

    }

    public function create(){

    }

    public function store(array $data){

    }

    public function edit($id){

    }

    public function update($id, array $data){

    }

    public function destroy($id){

    }

    // Additional common methods or properties can be added as needed
}



// $instance = new HomeController();

// $instance->index();


?>