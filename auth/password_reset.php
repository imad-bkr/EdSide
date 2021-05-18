<?php 
    $title = "EdSide - Mot de passe oublié?";
    $css = "../css/auth.css"; 
    include("../layout/head.php") 
?>
<body>
    <form class="form" action="" method="post">
        <a class="back" href="log-in.php">← Retour à la page de connexion</a>
        <h1 class="form-title">Reinitialiser votre mot de passe</h1>
        <p>Entrez l'adresse e-mail vérifiée de votre compte utilisateur et nous vous enverrons un lien de réinitialisation du mot de passe.</p>
        <input class="form-input" type="email" name="input-mail" placeholder="Adresse e-mail">
        <input class="form-submit" type="submit" value="Envoyer">
    </form>
</body>
</html>