<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth.css">
    <title>EdSide - Inscription</title>
</head>
<body>
    <form class="form" action="" method="post">
        <a class="back" href="index.php">← Retour à l'accueil</a>
        <h1 class="form-title">Inscription</h1>
        <input class="form-input" type="text" name="" placeholder="Nom d'utilisateur">
        <input class="form-input" type="email" name="" placeholder="Adresse e-mail">
        <input class="form-input" type="password" name="" placeholder="Mot de passe">
        <input class="form-input" type="password" name="" placeholder="Confirmer mot de passe">
        <select class="form-select" name="promo">
            <option value="" disabled selected>Promo</option>
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
        </select>
        <select class="form-select" name="promo">
            <option value="" disabled selected>Groupe</option>
            <option value="Classique">Classique</option>
            <option value="R">R</option>
            <option value="INT">INT</option>
            <option value="BN">BN</option>
        </select>
        <input class="form-submit" type="submit" value="S'inscrire">
        <a href="log-in.php">Déjà inscrit ? Se connecter</a>
    </form>
</body>
</html>