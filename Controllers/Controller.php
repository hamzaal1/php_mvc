<?php
namespace App\Controllers;
include './config/Request.php';
use App\Requests\Request;
abstract class Controller
{

    public function __construct()
    {
    }

    abstract public function index(Request $request);

    abstract public function show(Request $request);

    abstract public function create(Request $request);

    abstract public function store(Request $request);

    abstract public function edit(Request $request);

    abstract public function update(Request $request);

    abstract public function destroy(Request $request);
    function view($path, mixed $data = null)
    {
        $path = "./views/" . $path . ".php";
        if (!file_exists($path)) {
            throw new \InvalidArgumentException("View not found: {$path}");
        }
        // Extract the data so it's accessible in the view
        if ($data !== null) {
            if (!is_array($data) && !is_object($data)) {
                throw new \InvalidArgumentException("Invalid data type. Expected array or object.");
            }
            extract(['data' => $data]);
        }
        // Capture the output of the view
        ob_start();
        include $path;
        $content = ob_get_clean();
        return $content;
    }

    // Additional common methods or properties can be added as needed
}


?>