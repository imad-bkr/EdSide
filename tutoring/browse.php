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
    <main class="browse-main">
        <aside class="sidebar">
            <div class="switch mentor-mentee">
                <input id="" class="" type="checkbox" name="">
                <label for="">parrain/fillot</label>
            </div>
            <div class="tags">
                <span class="post-tag tag-filter">Tag1</span> <span class="post-tag tag-filter">Tag2</span> <span class="post-tag tag-filter">Tag3</span>
            </div>
        </aside>
        <section class="posts">
            <a class="post" href="view-post.php">
                <div class="preview-profil">
                    <img class="preview-profil-pic" src="https://placehold.co/100x100" alt="photo de profil">
                    <p class="preview-profil-info">lorem</p>
                </div>
                <div class="post-body">
                    <h3 class="post-title">annonce</h3>
                    <span class="post-tag">Tag1</span> <span class="post-tag">Tag2</span> <span class="post-tag">Tag3</span>
                </div>
            </a>
            <a class="post">
                <div class="preview-profil">
                    <img class="preview-profil-pic" src="https://placehold.co/100x100" alt="photo de profil">
                    <p class="preview-profil-info">lorem</p>
                </div>
                <div class="post-body">
                    <h3 class="post-title">annonce</h3>
                    <span class="post-tag">Tag1</span> <span class="post-tag">Tag2</span> <span class="post-tag">Tag3</span>
                </div>
            </a>
            <a class="post">
                <div class="preview-profil">
                    <img class="preview-profil-pic" src="https://placehold.co/100x100" alt="photo de profil">
                    <p class="preview-profil-info">lorem</p>
                </div>
                <div class="post-body">
                    <h3 class="post-title">annonce</h3>
                    <span class="post-tag">Tag1</span> <span class="post-tag">Tag2</span> <span class="post-tag">Tag3</span>
                </div>
            </a>
        </section>
        <a class="browse-link-profil" href="profil.php">Mon profil</a>
    </main>
    <?php include("../layout/footer.php"); ?>
</body>

</html>