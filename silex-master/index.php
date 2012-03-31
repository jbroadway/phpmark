<?php

require_once __DIR__.'/silex.phar'; 

$app = new Silex\Application(); 

$app->get('/hello/world', function() use($app) { 
    return 'Hello world'; 
}); 

$app->run();

?>