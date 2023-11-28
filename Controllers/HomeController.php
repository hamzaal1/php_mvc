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
        echo View("create");

    }

    public function store()
    {
        User::create([
            "name" => $_POST['name'],
            "email" => $_POST['email'],
        ]);
        header("Location:/php_mvc/");

    }

    public function edit()
    {
        $id = $_GET['id'];
        $user = User::find($id);
        echo View("edit", $user);

    }

    public function update()
    {
        $id = $_GET['id'];
        $user = User::find($id);

        $result = $user->update([
            'name' => $_POST['name'],
            'email' => $_POST['email'],

        ]);
        if ($result) {
            header("Location:/php_mvc/");
        }

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