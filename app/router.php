<?php

$router = new AltoRouter();

// Define the route using URL paths
$router->map('GET', '/', '../app/controller/home.php', 'home');
$match = $router->match();

if ($match) {
    include $match['target'];
} else {
    echo 'Controller not Found';
}
