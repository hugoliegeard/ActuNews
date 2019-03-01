<?php require_once('inc/init.inc.php'); ?>

    <!-- ----------------------------- | TRAITEMENT | ------------------------------ -->

<?php

/*
 * On affiche sur la page d'accueil
 * les 5 derniers articles de la BDD.
 */

$request = $pdo_connexion->query('SELECT * FROM article ORDER BY IDARTICLE DESC LIMIT 5');

$page_content .= '<div class="row">';

while ($article = $request->fetch(PDO::FETCH_ASSOC)) {
    $page_content .= '<div class="col-sm-4 mt-4">
                          <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">' . $article['TITREARTICLE'] . '</h5>
                                <a href="article.php?id_article='.$article['IDARTICLE'].'" class="btn btn-primary">Consulter</a>
                              </div>
                          </div>     		
					  </div>';
}
$page_content .= '</div>';

?>

    <!-- ----------------------------- | AFFICHAGE | ------------------------------ -->

<?php require_once('inc/header.inc.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>PAGE ACCUEIL</h1>
                <?= $page_content ?>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.inc.php'); ?>