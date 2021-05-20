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
            <div class="profil">
                <div class="block-profil-pic"><img class="profil-pic" src="../img/profil-pic.png" alt="photo de profil"></div>
                <div class="contact-info">
                    <p>Téléphone: +33XXXXX</p>
                    <p>Adresse e-mail: example@yahoo.fr</p>
                </div>
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
                <p>Je cherche un parrain pour m'accompagner cette année</p>
                <img class="post-edit" src="/icons/icon-edit.svg" alt="Edit profile">
                <!-- <a class="post-edit" href="">Modifier</a> -->
                <span>Tag1</span> <span>Tag2</span> <span>Tag3</span>
            </div>
        </section>
    </main>
    <?php include("../layout/footer.php"); ?>
</body>
</html>