<?php

function utilisateurEstConnecte()
{
    return isset($_SESSION['membre']);
}

function utilisateurEstConnecteEtEstAdmin()
{
    return utilisateurEstConnecte() && $_SESSION['membre']['role'] == 'ROLE_ADMIN';
}