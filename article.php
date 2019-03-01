<?php require_once('inc/init.inc.php'); ?>

<!-- ----------------------------- | TRAITEMENT | ------------------------------ -->

<?php

if (isset($_GET['id_article'])) {
    $request = $pdo_connexion->query("SELECT * FROM article WHERE IDARTICLE = '$_GET[id_article]'");
}

// -- Si l'article n'existe pas, on redirige sur la page d'accueil.
if ($request->rowCount() <= 0) {
    header('location:index.php');
    exit();
}

$article = $request->fetch(PDO::FETCH_ASSOC);

$page_content .= '<div class="jumbotron">
                    <h1 class="display-4">' . $article['TITREARTICLE'] . '</h1>
                    <p class="lead">
                        ' . $article['CONTENUARTICLE'] . '
                    </p>
                  </div>';
?>

<!-- ----------------------------- | AFFICHAGE | ------------------------------ -->

<?php require_once('inc/header.inc.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?= $page_content ?>
        </div>
    </div>
</div>

<?php require_once('inc/footer.inc.php'); ?>

