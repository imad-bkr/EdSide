<?php 
    $title = "EdSide - Connexion";
    $css = "../css/auth.css"; 
    include("../layout/head.php") 
?>
<body>
    <form class="form" action="" method="post">
        <a class="back" href="../index.php">← Retour à l'accueil</a>
        <h1 class="form-title">Connexion</h1>
        <input class="form-input" type="email" name="input-mail" placeholder="Adresse e-mail">
        <input class="form-input" type="password" name="input-password" placeholder="Mot de passe">
        <a class="text-right" href="password_reset.php">Mot de passe oublié ?</a>
        <input class="form-submit" type="submit" value="Se connecter">
        <a href="sign-in.php">Nouveau ? Créer un compte</a>
    </form>
</body>
</html>