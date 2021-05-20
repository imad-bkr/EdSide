<?php 
    $title = "EdSide - Rechercher une annonce";
    $css = "/css/layout.css";
    include("../layout/head.php"); 
?>
<body>
    <?php include("../layout/header.php"); ?>
    <?php 
        $curr = "tutoring";
        include("../layout/navbar.php"); 
    ?>
    <main class="profil-main">
        <a class="back-to-posts" href="browse.php">Retour aux annonces</a>
        <section class="profil-info">
            <a href=""><span class="profil-edit">Modifier</span></a>
            <div class="block-profil-pic"><img class="profil-pic" src="../img/profil-pic.png" alt="photo de profil"></div>
            <div class="contact-info">
                <p>Téléphone: +33XXXXX</p>
                <p>Adresse e-mail: example@yahoo.fr</p>
            </div>
            <div class="user-info">
                <p>Nom</p>
                <p>Classe</p>
                <p>Description</p>
            </div>
        </section>
        <section class="my-posts">
            <h2>Mes annonces</h2>
            <div class="my-post">

            </div>
        </section>
    </main>
    <?php include("../layout/footer.php"); ?>
</body>
</html>