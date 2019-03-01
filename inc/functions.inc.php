<?php

function utilisateurEstConnecte()
{
    return isset($_SESSION['membre']);
}
