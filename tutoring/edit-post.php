<?php
$title = "EdSide - Rechercher une annonce";
$css = "/css/layout.css";
include("../layout/head.php");
?>

<body>
    <?php include("../layout/header.php"); ?>
    <?php include("../layout/navbar.php"); ?>

    <main class="edit-post-main">
        <a class="edit-post-cancel" href="profil.php">Annuler</a>
        <form action="profil.php" method="post">
            <div class="edit-post-tags">
                <div class="post-tag">
                    <input class="post-tag" type="checkbox">
                    <label for="">tag</label>
                </div>
                <div class="post-tag">
                    <input class="post-tag" type="checkbox">
                    <label for="">tag</label>
                </div>
                <div class="post-tag">
                    <input class="post-tag" type="checkbox">
                    <label for="">tag</label>
                </div>
                <div class="post-tag">
                    <input class="post-tag" type="checkbox">
                    <label for="">tag</label>
                </div>
            </div>
            <div class="edit-post-content">
                <input class="edit-post-title" type="text">
                <textarea class="edit-post-desc"></textarea>
            </div>
            <input class="edit-post-confirm" type="submit" value="Valider">
        </form>
    </main>

    <?php include("../layout/footer.php"); ?>
</body>

</html>