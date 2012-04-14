<?php

require_once 'lib/base.php';

F3::route ('GET /','home');

function home () {
	echo 'Hello world';
}

F3::run ();

?>