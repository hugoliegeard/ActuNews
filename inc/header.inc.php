<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ActuNews</title>
</head>
<body>

<div class="container">
    <div class="row mb-4">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="<?= URL_SITE ?>/index.php">ActuNews</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?= URL_SITE ?>/index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_SITE ?>/categorie.php?id_categorie=1&nom_categorie=politique">Politique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_SITE ?>/categorie.php?id_categorie=2&nom_categorie=economie">Economie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_SITE ?>/categorie.php?id_categorie=3&&nom_categorie=sport">Sport</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_SITE ?>/connexion.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_SITE ?>/inscription.php">Inscription</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div> <!-- /.col -->
    </div> <!-- /.row -->
</div> <!-- /.container -->