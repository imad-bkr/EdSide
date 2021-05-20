<?php 
    $title = "EdSide - Inscription";
    $css = "../css/auth.css"; 
    require_once "../pdo.php";
    include("../layout/head.php") 
?>
<body>
    <?php 
        
        if(isset($_POST['username']) && !empty($_POST['username'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])
        && isset($_POST['c_password']) && !empty($_POST['c_password'])
        && ($_POST['c_password'] == $_POST['password'])
        && isset($_POST['promo']) && !empty($_POST['promo']) 
        && isset($_POST['groupe']) && !empty($_POST['groupe'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $promo = $_POST['promo'];
            $groupe = $_POST['groupe'];
            /* ajout de l'utilisateur dans la bdd */
            $bdd = connexionPDO();
            $req = "INSERT INTO utilisateurs
            (username, email, password, promo, groupe) VALUES
            (:username, :email, :password, :promo, :groupe)";
            $stmt = $bdd->prepare($req);
            $stmt->bindValue(":username", $username, PDO::PARAM_STR);
            $stmt->bindValue(":email", $email, PDO::PARAM_STR);
            $stmt->bindValue(":password", $password, PDO::PARAM_STR);
            $stmt->bindValue(":promo", $promo, PDO::PARAM_STR);
            $stmt->bindValue(":groupe", $groupe, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->closeCursor();

            echo "Votre compte a bien été crée";
        } else if (isset($_POST['password']) && !empty($_POST['password'])
        && isset($_POST['c_password']) && !empty($_POST['c_password'])
        && $_POST['c_password'] != $_POST['password']) {
            echo "Votre mot de passe n'a pas été correctement resaisi";
        }
    ?>
    <form class="form" action="" method="POST">
        <a class="back" href="../index.php">← Retour à l'accueil</a>
        <h1 class="form-title">Inscription</h1>
        <input class="form-input" type="text" name="username" placeholder="Nom d'utilisateur">
        <input class="form-input" type="email" name="email" placeholder="Adresse e-mail">
        <input class="form-input" type="password" name="password" placeholder="Mot de passe">
        <input class="form-input" type="password" name="c_password" placeholder="Confirmer mot de passe">
        <select class="form-select" name="promo">
            <option value="" disabled selected>Promo</option>
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
        </select>
        <select class="form-select" name="groupe">
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