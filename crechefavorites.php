<?php
session_start();
require('inc/pdo.php');
require('function/function.php');
$success = false;

//	$sql = "SELECT id FROM creche_list WHERE user_id FROM users = :creche_id";

if (isLogged()) {
    $idusers = $_SESSION['login']['id'];
    $sql = "SELECT cl.*,cu.id AS id,cl.id AS movieid, cl.nom AS nom,u.email AS emailuser FROM creche_user AS cu
            LEFT JOIN creche_list AS cl
            ON cu.creche_id = cl.id
            LEFT JOIN users AS u
            ON cu.user_id = u.id
            WHERE cu.user_id = $idusers
            AND note IS NULL";
    $query = $pdo->prepare($sql);
    $query->execute();
    $creches = $query->fetchAll();
    // debug($creches);
    // request pour aller chercher mes creches préférées +++
} else {
  // redirection
  die('403');
}


include('inc/header.php'); ?>
<!-- // foreach -->
<?php foreach ($creches as $creche) { ?>
  <!-- // +++++++++++++++++++++++++++++++++++++++ -->
  <!-- // html afficher les creches  +++++ -->
  <!-- // +++++++++++++++++++++++++++++++++++++++ -->
<div class="creche">
<h2><?php echo $creche['nom']; ?></h2>
<p>Numéro : <?= $creche['id']; ?></p>
</div>
<!-- // end foreach -->
<?php } ?>




<?php include('inc/footer.php'); ?>
