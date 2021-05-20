<?php 
    $title = "EdSide - Connexion";
    $css = "../css/auth.css"; 
    require_once "../pdo.php";
    include("../layout/head.php") 
?>
<body>
    <?php 
        function getPasswordUser($username) {
            $bdd = connexionPDO();
            $req = "SELECT * FROM utilisateurs
            WHERE username = :username";
            $stmt = $bdd->prepare($req);
            $stmt->bindValue(":username", $username, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            return $user;
        }

        function isConnexionValid($username, $password) {
            $user = getPasswordUser($username);
            return password_verify($password, $user['password']);
        }
        if(isset($_SESSION['access']) && !empty($_SESSION['access'])
        && $_SESSION['access'] === "user") {
            header("Location: ../tutoring/browse.php");
        }
        $alert = "";
        if(isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['password']) && !empty($_POST['password'])) {
            $username = htmlentities($_POST['username']);
            $password = htmlentities($_POST['password']);
            if (isConnexionValid($username, $password)) {
                $_SESSION['access'] = "user";
                header("Location: ../tutoring/browse.php");
            } else {
                $alert = "Mot de passe invalide";
            }
        }
    ?>
    <form class="form" action="" method="POST">
        <a class="back" href="../index.php">← Retour à l'accueil</a>
        <h1 class="form-title">Connexion</h1>
        <input class="form-input" type="text" name="username" placeholder="Nom d'utilisateur" required>
        <input class="form-input" type="password" name="password" placeholder="Mot de passe" required>
        <a class="text-right" href="password_reset.php">Mot de passe oublié ?</a>
        <input class="form-submit" type="submit" value="Se connecter">
        <a href="sign-in.php">Nouveau ? Créer un compte</a>
    </form>
    <?php if ($alert !== "") { ?>
        <div class="invalid-password"> 
            <?= $alert ?>
        </div>
    <?php } ?>
</body>
</html>