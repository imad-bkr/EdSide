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
            <div class="profil-pic-box">
                <img class="profil-pic" src="/img/profil-pic.png" alt="photo de profil">
                <input class="profil-pic-upload hidden" type="file">
            </div>
            <div class="contact-info-box">
                <div class="contact-info-edit"><?php echo file_get_contents("../icons/edit.svg"); ?></div>
                <textarea class="contact-info" readonly="readonly">
                    Téléphone: +33XXXXX
                    Adresse e-mail: example@yahoo.fr
                </textarea>
                <div class="contact-info-cancel"><?php echo file_get_contents("../icons/cross.svg"); ?></div>
                <div class="contact-info-validate"><?php echo file_get_contents("../icons/check.svg"); ?></div>
            </div>
            <div class="user-info-box">
                <div class="user-info-edit"><?php echo file_get_contents("../icons/edit.svg"); ?></div>
                <textarea class="user-info" readonly="readonly">
                    Nom
                    Classe
                    Description
                </textarea>
                <div class="user-info-cancel hidden"><?php echo file_get_contents("../icons/cross.svg"); ?></div>
                <div class="user-info-validate hidden"><?php echo file_get_contents("../icons/check.svg"); ?></div>
            </div>
        </section>
        <section class="my-posts">
            <h2>Mes annonces</h2>
            <div class="my-post">
                <p>Je cherche un parrain pour m'accompagner cette année</p>
                <a class="post-edit" href="/tutoring/edit-post.php"><?php echo file_get_contents("../icons/edit.svg"); ?></a>
                <span class="post-tag">Tag1</span> <span class="post-tag">Tag2</span> <span class="post-tag">Tag3</span>
            </div>
            <div class="my-post">
                <p>Je cherche un parrain pour m'accompagner cette année</p>
                <a class="post-edit" href="/tutoring/edit-post.php"><?php echo file_get_contents("../icons/edit.svg"); ?></a>
                <span class="post-tag">Tag1</span> <span class="post-tag">Tag2</span> <span class="post-tag">Tag3</span>
            </div>
        </section>
    </main>
    <script src="/js/tutoring/profil.js"></script>
    <?php include("../layout/footer.php"); ?>
</body>

</html>