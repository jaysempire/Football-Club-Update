<?php 
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email: ezra00100@gmail.com
	#   Date created: 26/12/2024 
	#   Date modified: 28/12/2024  

	
	include_once('admin_auth.php');
	include_once('models/Player.php');	

	$player = new Player();

	$count_player = $player->getCount([]);

	//dashboard interface
	include_once( 'views/dashboard.php' );
?>