<?php
session_start();
require('inc/pdo.php');
require('function/function.php');
$title = 'Inscriptions';
// traitement form et creat°
$errors = array();
$succes = false;
if (!empty($_POST['submitted'])) {
    //faille xss
    $pseudo = clean($_POST['pseudo']);
    $email = trim(strip_tags($_POST['email']));
    $adresse = clean($_POST['adresse']);
    $password1 = clean($_POST['password1']);
    $password2 = clean($_POST['password2']);

    ////////////
    //validation
    ////////////
    //pseudo
    if (empty($pseudo)) {
        $errors['pseudo'] = 'Veuillez renseigner ce champ';
    } elseif (mb_strlen($pseudo) > 120) {
        $errors['pseudo'] = 'Max 120 caractères';
    } elseif (mb_strlen($pseudo) < 2) {
        $errors['pseudo'] = 'Min 2 caractères';
    } else {
        $sql = "SELECT id FROM users WHERE pseudo = :pseudo";
        $query = $pdo->prepare($sql);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->execute();
        $verifpseudo = $query->fetch();
        if (!empty($verifpseudo)) {
            $errors['pseudo'] = 'Ce pseudo existe déjà !';
        }
    }
//email
    if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $errors['email'] = 'Veuillez renseigner un email valide';
    } else {
        //no errors
        $sql = "SELECT id FROM users WHERE email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $verifmail = $query->fetch();
        if (!empty($verifmail)) {
            $errors['email'] = "Cette email existe déjà !";
        }
    }
    //psw
    if (!empty($password1)) {
        if ($password1 != $password2) {
            $errors['password'] = 'Les deux mot de passe doivent être identique';
        } elseif (mb_strlen($password1) <= 5) {
            $errors['password'] = 'Min 6 caractères';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner ce champ';
    }
    if (count($errors) == 0) {
        //psw hash
        $hashpsw = password_hash($password1, PASSWORD_BCRYPT);
        $token = generateRandomString(200);


        //insert



        $sql = "INSERT INTO users (id,email,role,password,created_at,token,pseudo,adresse) VALUES (null,:email,'users',:password,NOW(),:token,:pseudo,:adresse)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':password', $hashpsw, PDO::PARAM_STR);
        $query->bindValue(':token', $token, PDO::PARAM_STR);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->bindValue(':adresse',$adresse, PDO::PARAM_STR);

        $query->execute();
        $succes = true;
        // redirection vers la page connexion
        header('Location: login.php');
    }
}
// debug($_POST);
// debug($errors);
include('inc/header.php');
?>
    <div id="balise"></div>
<div class="wrap">
    <h1 class="formulaire">Inscriptions</h1>
    <div class="backform">
    <form class="inscri" action="register.php" method="post">
        <label for="pseudo" class="login">Pseudo *</label>
        <input type="text" id="pseudo" name="pseudo" value="<?php if (!empty($_POST['pseudo'])) {
            echo $_POST['pseudo'];
        } ?>">
        <p class="error"><?php if (!empty($errors['pseudo'])) {
                echo $errors['pseudo'];
            } ?></p>

        <label for="email">Email *</label>
        <input type="email" id="email" name="email" value="<?php if (!empty($_POST['email'])) {
            echo $_POST['email'];
        } ?>">
        <p class="error"><?php if (!empty($errors['email'])) {
                echo $errors['email'];
            } ?></p>
        <label for="adresse">Adresse *</label>
        <input type="text" id="adresse" name="adresse" value="<?php if (!empty($_POST['adresse'])) {
            echo $_POST['adresse'];
        } ?>">
        <p class="error"><?php if (!empty($errors['adresse'])) {
                echo $errors['adresse'];
            } ?></p>

        <label for="password1">Mot de passe *</label>
        <input type="password" id="password1" name="password1" value="">
        <p class="error"><?php if (!empty($errors['password'])) {
                echo $errors['password'];
            } ?></p>


        <label for="password2">Confirmez votre MDP *</label>
        <input type="password" id="password2" name="password2" value="">
        <p></p>

        <input type="submit" name="submitted" value="Inscrivez-vous" class="submite">
        <div class="clear"></div>
    </form>
    </div>
</div>

<?php
include('inc/footer.php');
