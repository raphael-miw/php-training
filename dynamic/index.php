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
        if(isset($_GET["faille"])) {
            $page = $_GET["faille"];
            readfile($page);
            // grosse faille !!!
        } elseif(isset($_GET["page"])) {
            // petite faille !!!
            $page = "src/pages/".$_GET["page"].".html";
        } else {
            $page = "src/pages/homepage.html";
        }

        if(file_exists($page)) {
            include $page;
//            echo file_get_contents($_GET["page"]);
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