<?php
// Include the database config file
include('inc/pdo.php');

if(!empty($_POST['crecheID']) && !empty($_POST['ratingNum'])){
	// Get posted data
    $crecheID = $_POST['crecheID'];
    $ratingNum = $_POST['ratingNum'];

	// Current IP address
	$userID = $_SERVER['REMOTE_ADDR'];

	// Check whether the user already submitted the rating for the same post
	$query = "SELECT rating_number FROM notes WHERE creche_id = $crecheID AND user_id = '".$userID."'";
	$result = $pdo->query($query);

    if($result->num_rows > 0){
		// Status
		$status = 2;
	}else{
		// Insert rating data in the database
		$query = "INSERT INTO notes (creche_id,rating_number,user_id) VALUES ('".$crecheID."', '".$ratingNum."', '".$userID."')";
		$insert = $pdo->query($query);

		// Status
		$status = 1;
	}

	// Fetch rating details from the database
	$query = "SELECT COUNT(rating_number) as rating_num, FORMAT((SUM(rating_number) / COUNT(rating_number)),1) as average_rating FROM notes WHERE creche_id = $crecheID GROUP BY (creche_id)";
	$result = $pdo->query($query);
	$ratingData = $result->fetch_assoc();

    $response = array(
		'data' => $ratingData,
		'status' => $status
	);

    // Return response in JSON format
    echo json_encode($response);
}
?>
