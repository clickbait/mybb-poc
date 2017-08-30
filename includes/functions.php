<?php

// include 'functions/example.php';

function get_page( $name ) {
	chdir( '../includes/mybb/' );
	require_once "mybb/{$name}.php";
}