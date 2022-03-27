<?php
header("Access-Control-Allow-Origin: *");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$arrayOfHeroes = array(
			['id' => 11, 'name' => 'Dr Nice'],
			['id' => 12, 'name' => 'Narco'],
			['id' => 13, 'name' => 'Bombasto'],
			['id' => 14, 'name' => 'Celeritas'],
			['id' => 15, 'name' => 'Magneta'],
			['id' => 16, 'name' => 'RubberMan'],
			['id' => 17, 'name' => 'Dynama'],
			['id' => 18, 'name' => 'Dr IQ'],
			['id' => 19, 'name' => 'Magma'],
			['id' => 20, 'name' => 'Tornado']
		);

		
if(!empty($_GET['id'])) {
		$id = $_GET['id'];		
		foreach($arrayOfHeroes as $key => $hero) {	
			if ( $hero['id'] == $id ) {
				echo json_encode($hero);
			}
		}
	}
else {	
	echo json_encode( $arrayOfHeroes );
}
