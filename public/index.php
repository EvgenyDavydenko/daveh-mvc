<?php

//echo 'Requested URL = ' . $_SERVER['QUERY_STRING'];

require __DIR__ . '/../Core/Router.php';

$router = new Router();

echo get_class($router);