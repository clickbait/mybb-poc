<?php

$router->get( '/', function() {
	get_page( 'index' );
});

$router->get( '/members', function() {
	get_page( 'memberlist' );
});
