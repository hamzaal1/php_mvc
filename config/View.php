<?php
function View($path, $data = [])
{
    $path = "./views/" . $path .".php";
    if (!file_exists($path)) {
        throw new \InvalidArgumentException("View not found: {$path}");
    }

    // Extract the data so it's accessible in the view
    extract($data);

    // Capture the output of the view
    ob_start();
    include $path;
    $content = ob_get_clean();

    return $content;
}

?>