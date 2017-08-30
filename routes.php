<?php

$router->get( '/', function() {
	get_page( 'index' );
});

$router->get( '/members', function() {
	get_page( 'memberlist' );
});

$router->get( '/latest', function() {
	$_GET['action'] = 'getdaily';
	get_page( 'search' );
});

$router->get( '/category/(\d+)', function($id) {
	$_GET['fid'] = $id;
	get_page( 'forumdisplay' );
});

$router->get( '/topic/(\d+)', function($id) {
	$_GET['tid'] = $id;
	get_page( 'showthread' );
});

$router->get( '/user/(\d+)', function($id) {
	$_GET['action'] = 'profile';
	$_GET['uid'] = $id;
	get_page( 'member' );
});

