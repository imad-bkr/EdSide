<?php 
    $title = "EdSide - Rechercher une annonce";
    $css = "../css/layout.css";
    include("../layout/head.php"); 
?>
<body>
    <?php include("../layout/header.php"); ?>
    <?php 
        $curr = "tutoring";
        include("../layout/navbar.php"); 
    ?>
    <main class="browse-main">
        <aside class="sidebar">

        </aside>
        <section class="posts">
            <div class="post">
            </div>
            <div class="post">
            </div>
        </section>
        <a class="browse-link-profil" href="profil.php">Mon profil</a>
    </main>
    <?php include("../layout/footer.php"); ?>
</body>
</html>