<?php 
require_once './autoload.php';
use Domaci3\Renderable;
use Domaci3\MenuItem;
use Domaci3\Menu;
?>

<!doctype html>
<html lang="en">
<head>
    <style>
        ul { margin-left: 10px; padding: 0; }
        li { display: inline-block; padding: 10px; background-color: rgba(38, 135, 255, 0.41); }
        a { color: white; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; color: #045cae; }
        h1 { margin-left: 10px; }
    </style>
    <title>Home Page</title>
</head>
<body>
    <h1>Homepage</h1>
</body>
</html>

<?php
    $menu_3 = new Menu();
    $menu_3->render();
?>