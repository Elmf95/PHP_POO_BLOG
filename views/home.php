<?php

$headTitle = "Accueil";

ob_start();
?>
<section class="main-sections">
<article class="main-articles">
    <h1 class="main-articles-title">
        Bienvenue sur notre Blog au thème "Voyage"
    </h1>
    <p>Ceci est un test en prod</p>
</article>

</section>
<?php
$mainContent = ob_get_clean();
