<?php require_once('inc/init.inc.php'); ?>

    <!--
    Grâce à PHP, nous allons utiliser le même fichier
    pour plusieurs catégories.

    Avec un site statique nous aurions été obligé
    de créer un fichier par catégorie : politique.html economie.html sports.html ...
    -->

    <!-- ----------------------------- | TRAITEMENT | ------------------------------ -->

<?php

// -- Récupération de l'id de la catégorie
$id_categorie = (isset($_GET['id_categorie'])) ? $_GET['id_categorie'] : '';
$nom_categorie = (isset($_GET['nom_categorie'])) ? $_GET['nom_categorie'] : '';

// -- Récupération en BDD
if (isset($_GET['id_categorie'])) {
    $request = $pdo_connexion->query("SELECT * FROM article WHERE IDCATEGORIE = '$_GET[id_categorie]'");
}

// -- Si aucun résultat
if ($request->rowCount() <= 0) {
    $page_content .= '<div class="alert alert-warning">
                            Aucune publication pour le moment.   
                         </div>';
} else {
    $page_content .= '<div class="row">';
    while ($article = $request->fetch(PDO::FETCH_ASSOC)) {
        $page_content .= '<div class="col-sm-4 mb-4">
                              <div class="card">
                                  <div class="card-body">
                                    <img class="card-img-top" src="./assets/images/'. $article['FEATUREDIMAGEARTICLE'] .'" alt="Card image cap">
                                    <h5 class="card-title">' . $article['TITREARTICLE'] . '</h5>
                                    <a href="article.php?id_article='.$article['IDARTICLE'].'" class="btn btn-primary">Consulter</a>
                                  </div>
                              </div>     		
                          </div>';
    }
    $page_content .= '</div>';
}

?>

    <!-- ----------------------------- | AFFICHAGE | ------------------------------ -->

<?php require_once('inc/header.inc.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-4"><?= ucfirst($nom_categorie) ?></h1>
                <?= $page_content ?>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.inc.php'); ?>

