<?php
// Include the database config file
include('inc/pdo.php');

$crecheID = 1; // It will be changed with dynamic value

// Fetch the post and rating info from database
$query = "SELECT c.*, COUNT(n.rating_number) as rating_num, FORMAT((SUM(n.rating_number) / COUNT(n.rating_number)),1) as average_rating FROM creche_list as c LEFT JOIN notes as n ON n.creche_id = c.id WHERE c.id = $crecheID GROUP BY (n.creche_id)";
$result = $pdo->query($query);
$crecheData = $result->fetch_assoc();
?>


<title>Star Rating System by CodexWorld</title>
<meta charset="utf-8">

<!-- Stylesheet file -->
<link rel="stylesheet" href="css/style.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<script>
$(function() {
	$('.rate input').on('click', function(){
		var crecheID = <?php echo $crecheData['id']; ?>;
		var ratingNum = $(this).val();

		$.ajax({
			type: 'POST',
			url: 'notation.php',
			data: 'crecheID='+crecheID+'&ratingNum='+ratingNum,
			dataType: 'json',
			success : function(resp) {
				if(resp.status == 1){
					$('#avgrat').text(resp.data.average_rating);
					$('#totalrat').text(resp.data.rating_num);

					alert('Merci ! Vous avez voté '+ratingNum+' à "<?php echo $crecheData['nom']; ?>"');
				}else if(resp.status == 2){
					alert('Vous avez déjà voté pour "<?php echo $crecheData['nom']; ?>"');
				}

				$( ".rate input" ).each(function() {
					if($(this).val() <= parseInt(resp.data.average_rating)){
						$(this).attr('checked', 'checked');
					}else{
						$(this).prop( "checked", false );
					}
				});
			}
		});
	});
});
</script>
</head>
<body>
<div class="container">
	<h1><?php echo $crecheData['nom']; ?></h1>
	<div class="rate">
		<input type="radio" id="star5" name="rating" value="5" <?php echo ($crecheData['average_rating'] >= 5)?'checked="checked"':''; ?>>
		<label for="star5"></label>
		<input type="radio" id="star4" name="rating" value="4" <?php echo ($crecheData['average_rating'] >= 4)?'checked="checked"':''; ?>>
		<label for="star4"></label>
		<input type="radio" id="star3" name="rating" value="3" <?php echo ($crecheData['average_rating'] >= 3)?'checked="checked"':''; ?>>
		<label for="star3"></label>
		<input type="radio" id="star2" name="rating" value="2" <?php echo ($crecheData['average_rating'] >= 2)?'checked="checked"':''; ?>>
		<label for="star2"></label>
		<input type="radio" id="star1" name="rating" value="1" <?php echo ($crecheData['average_rating'] >= 1)?'checked="checked"':''; ?>>
		<label for="star1"></label>
	</div>
	<div class="overall-rating">
		(Note moyenne <span id="avgrat"><?php echo !empty($crecheData['average_rating'])?$crecheData['average_rating']:0; ?></span>
		Basée sur <span id="totalrat"><?php echo $crecheData['rating_num']; ?></span> Notes)</span>
	</div>

</div>
</body>
</html>
