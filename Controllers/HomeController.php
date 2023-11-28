<?php
namespace App\Controllers\HomeController;

include './Controllers/Controller.php';
include './config/View.php';
include './Models/Model.php';
include './Models/User.php';
use App\Controllers\Controller;
use App\Models\Users\User;

class HomeController extends Controller
{

    public function index()
    {

        $users = User::get();
        echo View("home", $users);
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {
        $id = $_GET['id'];
        $user = User::find($id);
        $user->delete();
        header("Location:/php_mvc/");
    }

    // Additional common methods or properties can be added as needed
}



// $instance = new HomeController();

// $instance->index();


?>