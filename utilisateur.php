<?php

include "./utils.php";
include "./utilisateur_controller.php";


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./_dependencies.php" ?>
    <title>Utilisateurs</title>
</head>

<body>
    <h1>Inscription</h1>
    <form method="POST">
        <form>
            <div class="mb-3">
                <label for="add_usr" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="add_username">
            </div>
            <div class="mb-3">
                <label for="add_pwd" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="add_pwd">
            </div>
            <div class="mb-3">
                <label for="add_name" class="form-label">Nom et prénom</label>
                <input type="text" class="form-control" name="add_name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
    <h2>Liste des utilisateurs</h2>
    <?= show_users(); ?>
</body>

</html>