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
    $id_categorie = $_GET['id_categorie'];
    $nom_categorie = $_GET['nom_categorie'];

?>

<!-- ----------------------------- | AFFICHAGE | ------------------------------ -->

<?php require_once('inc/header.inc.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>PAGE CATEGORIE</h1>
            <h3><?= $id_categorie ?> - <?= $nom_categorie ?></h3>
        </div>
    </div>
</div>

<?php require_once('inc/footer.inc.php'); ?>