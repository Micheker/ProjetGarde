<?php
session_start();
require('inc/pdo.php');
require('function/function.php');

if (isLogged()) {
  $user_id = $_SESSION['login']['id'];

  if(!empty($_GET['id'])) {
    $creche_id = $_GET['id'];

    // la creche existe en bdd ????
    $sql = "SELECT * FROM creche_list WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id',$creche_id);
    $query->execute();
    $creche = $query->fetch();
    if(!empty($creche)) {
      // si il exist
        // insertion en bdd creche_user
        $sql = "INSERT INTO creche_user VALUES (null,$user_id,$creche_id,null,NOW(),null)";
        $query = $pdo->prepare($sql);
        //$query->bindValue(':id',$creche_id);
        $query->execute();

        header('Location: crechefavorites.php');

    } else {
      die('404');
    }

  } else {
    die('404');
  }
} else {
  header('Location: listedescreches.php');
}
//die('no logged');
