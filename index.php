<?php

require_once('vendor/autoload.php');

$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

$f3->route('GET /index.phpgit a', function() {
    echo '<h1>Pet Home</h1>';
}
);

//$view = new $View;
//echo $view->render
//('views/home.html');

$f3->run();


?>