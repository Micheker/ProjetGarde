<?php
session_start();
include('inc/pdo.php');
include('function/function.php');
$errors = array();
$success = false;

$title = 'Home page';
$sql = "SELECT * FROM creche_list ORDER BY RAND() LIMIT 10";
$query = $pdo->prepare($sql);
$query->execute();
$creches = $query->fetchAll();

if (!empty($_GET['submitted'])) {
    $sql = "SELECT * FROM creche_list WHERE 1 = 1 ";
    }
    $query = $pdo->prepare($sql);
    $query->execute();
    $creches = $query->fetchAll();


include('inc/header.php'); ?>





<?php foreach ($creches as $creche) { ?>
    <div class="wrap">
        <h2><?php echo $creche['nom']; ?></h2>
        <a href="details.php?slug=<?php echo $creche['slug']; ?>"><img src="<?php $img = 'logocreches/' . $creche['id'] . '.jpg';
                                                                                        if (file_exists($img)) {
                                                                                            echo $img;
                                                                                        } else {
                                                                                            echo 'assets/img/trololo.jpg';
                                                                                        } ?>" alt="<?= $creche['nom'] ?>"> </a>
    </div>
<?php } ?>
    <button class="morecreches" type="button">
        <a href="listedescreches.php">Plus de crèches</a>
    </button>

<?php include('inc/footer.php');
