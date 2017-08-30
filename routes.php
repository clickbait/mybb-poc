<?php

$router->get( '/', function() {
	chdir( '../includes/mybb/' );
	require_once 'includes/mybb/index.php';
});
