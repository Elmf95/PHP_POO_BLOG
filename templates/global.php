<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? $headTitle ?? "Blog Voyage" ?></title>
    <link rel="stylesheet" href="<?= "/sources/css/style.css?v=" .filemtime(filename: ROOT."/sources/css/style.css") ?>">
</head>
<body>
    <header class="main-head">
       <figure class="logo-figure">
        <img src="<?= "/assets/logo/logo blod.png" ?>" alt="Logo blog voyage" class="logo-img"/>
        <figcation class="logo-text">
            <h1>Blog Voyage</h1>
        </figcation>
       </figure>
 
       <nav class="main-nav">
        <ul class="main-nav-links">
         <li><a href="/">Accueil</a></li>
         <li><a href="/articles">Nos articles</a></li>
         <li><a href="/articles/1">Article 1</a></li>
         <li><a href="/contact">Contact</a></li>
        </ul>
    <div class="burger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </nav>
    </header>
 
    <main class="main-content">
        <?= $mainContent ?? "Erreur 404" ?>
    </main>
 
    <footer class="main-foot">
        <p>© El mehdi Fikri - 2024</p>
        <!-- Liens légaux / Coordonnées / Copyright / etc...-->
    </footer>
 
    <script src="<?= "/sources/js/burger.js?v=" .filemtime(ROOT."/sources/js/burger.js") ?>"></script>
 
</body>
</html>