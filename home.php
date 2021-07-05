<?php
//On inclut le fichier dont on a besoin (ici à la racine de notre site)
require 'Database.php';
require 'Article.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/css/home.css"/>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <title>Mon blog</title>
</head>

<body>
    <div>
        <h1>Accueil Du Blog </h1>
        <p>En construction</p>
    </div>  
    <div class="presentation">
        <div class="photo">
        <img src="public/images/profil.jpg" alt="photo de profil">
        </div> 
        <div class="nomprenom">
            <p>Patrice</p>
            <p>ESPEROU</p>
            <div class="cv">
            <a href="#">Curriculum Vitae</a>
           </div>
        </div>
</div>
<div class="phraseaccroche">
  <p>  L' expertise Du Développeur Par Exellence</p>
</div>
<div id="navbar">
<div id="connectionblog">
   <a href="#">Connection au Blog</a>
   </div>
   <div id="deux">
   <a href="#">deux</a>
   </div>
   <div id="trois">
   <a href="#">trois</a>
   </div>
   <div id="quatre">
<a href="#">quatre</a>
</div>
<div id="cinq">
<a href="#">cinq</a>
</div>
<div id="six">
<a href="#">six</a>
</div>
</div>       
        <?php

        $article=new Article();

        $articles=$article->getArticles();

        while($article=$articles->fetch())
    {
        ?>
                                
        <div>  
        <h2><a href="single.php?articleId=<?= htmlspecialchars($article['id']);?>"><?= htmlspecialchars($article['title']);?></a></h2>
            <p><?= htmlspecialchars($article['content']);?></p>
            <p><?= htmlspecialchars($article['author']);?></p>
            <p>Créé le : <?= htmlspecialchars($article['createdAt']);?></p>
        </div>
        <br>
        <?php
    }
    $articles->closeCursor();
    ?>
</body>
</html>