<?php
list($_, $controller, $method) = explode('/', $_SERVER['REQUEST_URI']);

echo $controller.' '.$method;