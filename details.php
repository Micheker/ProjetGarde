<?php
session_start();
include('inc/pdo.php');
include('function/function.php');


if (!empty($_GET['nom'])) {

    $nom = $_GET['nom'];

    $sql = "SELECT * FROM creche_list WHERE nom = :nom";
    $query = $pdo->prepare($sql);
    $query->bindValue(':nom', $nom);
    $query->execute();
    $creches = $query->fetch();

    if (!empty($creches)) {

    } else {
        die('404 Not Found');
    }
}

include('inc/header.php'); ?>


    <div class="wrap">
        <h1><?php echo $creches['nom']; ?></h1>
        <p>Description: <?php echo $creches['description'] ?></p>
        <p>Adresse: <?php echo $creches['adresse'] ?></p>
        <p>Numéro de téléphone: <?php echo $creches['telephone'] ?></p>
        <p>Notes: <?php echo $creches['note'] ?></p>


    <a href="ajouter-creche.php?id=<?php echo $creches['id']; ?>">Ajouter une crèche</a>
    </div>

<?php include('inc/footer.php');
