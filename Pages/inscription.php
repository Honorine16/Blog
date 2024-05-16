<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <title>Inscription</title>
</head>
<body>
    <?php
        require_once '../Includes/menu.php';
    ?>
    <div class="signin">
        <form action="">
            <label for="username">Adresse Email</label>
            <input type="email" name="email" id="email" placeholder="Saisir votre adresse email" required>

            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Saisir le pseudonyme ici" minlength="8" maxlength="20" required>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Saisir votre mot de passe ici" minlength="8" maxlenght="20" required>
            <label for="confirmation">Confirmation de mot de passe</label>
            <input type="password" name="confirmation" id="confirmation"
            placeholder="Confirmer votre mot de passe ici" minlength="8" maxlength="20" required>
            <button type="Submit">S'inscrire</button>
            <p>Déja un compte? Connectez-vous en cliquant <a href="/Blog/pages/connexion.php? page=connexion"> ici</a></p>
        </form>
    </div>
</body>
</html>