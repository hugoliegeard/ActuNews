<?php

// Démarrage de la session PHP.
session_start();

/*
    Nous pourrons définir ici toutes les fonctions utiles
    à notre projet et utilisable sur toutes les pages.
*/

/**
 * Permet de rediriger un utilisateur
 * sur une nouvelle page.
 */
function redirection($page) {
    header('Location: ' . $page);
}

/**
 * Permet de vérifier si un auteur
 * est connecté en session.
 */
function isOnline() {
    return isset($_SESSION['auteur']) ? $_SESSION['auteur'] : false;
}

/**
 * Permet de générer une accroche / un résumé.
 */
function summarize($text) {
    // Suppression des balises HTML
    $string = strip_tags($text);

    // Si mon $string est supérieur à 150, je continue
    if (strlen($string) > 150) {

        // Je coupe ma chaine à 150
        $stringCut = substr($string, 0, 150);

        // Je m'assure de ne pas couper un mot.
        // En recherchant la position du dernier espace.
        $string = substr($stringCut, 0, strrpos($stringCut, ' '));

    }

    return $string . '...';

}