<?php
	require 'creche.php';
	$creche = new creche;
	$creche->setId($_REQUEST['id']);
	$creche->setLat($_REQUEST['latitude']);
	$creche->setLng($_REQUEST['longitude']);
	$status = $creche->updateCrechesWithLatLng();
	if($status == true) {
		echo "Updated...";
	} else {
		echo "Failed...";
	}
 ?>
