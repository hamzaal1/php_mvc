<?php
function View($path, mixed $data = null)
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

?>