<!--
    Le fichier init sera le tout premier fichier
    à être chargé dans chacune de nos pages.

    Il contiendra toutes nos données d'initialisation.
-->

<?php

// -- -------------------- | CONSTANTES DE NOTRE PROJET | --------------------- -- //
define("URL_SITE", "http://localhost/php2019/technews");
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/php2019/technews');

//echo 'url : ' . URL_SITE . '<br>';
//echo 'racine : ' . RACINE_SITE . '<br>';

// -- -------------------- | CONNEXION A LA BASE DE DONNEES | --------------------- -- //
$pdo_connexion = new PDO('mysql:host=localhost;dbname=technews',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

// -- -------------------- | VARIABLES | --------------------- -- //
$page_content = '';
