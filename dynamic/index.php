<!DOCTYPE HTML>
<html>

<head>
    <title>Titre principal de la page</title>
    <meta charset="utf-8">
    <meta name="description" content="165c. uniques">
    <link href="global.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<div id="page">
    <!-- DIV : Aucun sens sémantique - zone géographique -->

    <header>
        <?php include "src/header.html" ?>
    </header>
    <nav>
        <?php include "src/nav.html" ?>
    </nav>
    <aside><!-- Les à-cotés de la page --></aside>
    <article><!-- Contenu textuel de la page -->
        <?php
        if(isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = "homepage";
        }

        if(file_exists("src/pages/".$page.".html")) {
            include "src/pages/".$page.".html";
        } else {
            // on ne peut pas gérer les headers ici, car la page a déjà commencé le rendu
            // header("HTTP/1.0 404 Not Found");
            include "src/pages/404.html";
        }
        ?>
    </article>
    <footer><!-- Pied-de-page de la page -> site -->
        <?php include "src/footer.html" ?>
    </footer>

</div>
</body>
</html>