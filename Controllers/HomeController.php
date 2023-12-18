<?php
namespace App\Controllers\HomeController;

include './Controllers/Controller.php';
// include './config/Request.php';
include './Models/Model.php';
include './Models/User.php';
use App\Requests\Request;
use App\Controllers\Controller;
use App\Models\Users\User;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $users = User::get();
        echo $this->view("home", $users);
    }

    public function show(Request $request)
    {

    }

    public function create(Request $request)
    {
        echo $this->view("create");

    }

    public function store(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" =>  $request->email,
        ]);
        header("Location:/php_mvc/");

    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        echo $this->view("edit", $user);

    }

    public function update(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);

        $result = $user->update([
            "name" => $request->name,
            "email" =>  $request->email,
        ]);
        if ($result) {
            header("Location:/php_mvc/");
        }

    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->delete();
        header("Location:/php_mvc/");
    }

    // Additional common methods or properties can be added as needed
}



// $instance = new HomeController();

// $instance->index();


?>