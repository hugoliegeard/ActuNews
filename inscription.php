<?php require_once('inc/init.inc.php'); ?>

<!-- ----------------------------- | TRAITEMENT | ------------------------------ -->

<?php
if ($_POST) {

    // -- 1a. Récupération des données POST
    var_dump($_POST);

    // -- 1b. Recupération des saisies en PHP via une boucle :
    foreach ($_POST as $indice => $saisie) {
        echo $indice . " : " . $saisie . "<br />";
    }

    // -- 2a. Vérification des champs
    $erreur = '';
    if (empty($_POST['prenom'])
        || empty($_POST['nom'])
        || empty($_POST['email'])
        || empty($_POST['password'])) {
        $erreur .= '<div class="alert alert-danger" role="alert">
                        Vous devez remplir tous les champs. Vérifiez vos informations.
                    </div>';
    }

    // -- 2b. Vérification si le membre existe déjà.
    $request = $pdo_connexion->query("SELECT * FROM auteur WHERE EMAILAUTEUR = '$_POST[email]'");
    if ($request->rowCount() >= 1) {
        $erreur .= '<div class="alert alert-danger" role="alert">Oops, ce membre est déjà inscrit.</div>';
    }

    // -- 3. S'il n'y a pas d'erreur, on procède à l'inscription.
    if (empty($erreur)) {

        // -- Affichage d'une alerte
        $page_content .= '<div class="alert alert-success" role="alert">
                                Félicitation, vous êtes inscrit ! <br>
                                <a href="connexion.php">Vous pouvez vous connecter.</a>
                            </div>';

        /*
         * Inscription dans un fichier texte créé dynamiquement.
         * ------------------------------------------------------
         * Si l'on souhaite enregistrer des membres et
         * que l'on ne possède pas de BDD, nous pouvons
         * le faire dans un fichier texte par exemple.
         */

        // -- "fopen()" en mode "a" permet de créer le fichier s'il n'est pas trouvé, sinon de l'ouvrir.
        // -- "fwrite()" permet d'écrire dans le fichier représenter par la variable $fichier.
        // -- "\n" entre guillemets permet de sauter une ligne dans un fichier.
        // -- "fclose()" n'est pas indispensable mais permet de fermer le fichier et ainsi libérer la ressource.

        $fichier = fopen("inscription.txt", "a");
        fwrite($fichier, $_POST['prenom'] . " " . $_POST['nom'] . " - ");
        fwrite($fichier, $_POST['email'] . "\n");
        $fichier = fclose($fichier);

        /*
         * Inscription dans la BDD
         */
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $pdo_connexion->query("INSERT INTO auteur (PRENOMAUTEUR, NOMAUTEUR, EMAILAUTEUR, PASSWORDAUTEUR, ROLE) 
            VALUES ('$_POST[prenom]', '$_POST[nom]', '$_POST[email]', '$_POST[password]', 'ROLE_MEMBRE')");
    }

    // -- 4. Sinon on affiche l'erreur
    $page_content .= $erreur;
}
?>

<!-- ----------------------------- | AFFICHAGE | ------------------------------ -->

<?php require_once('inc/header.inc.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Devenir Membre</h1>
            <h3 class="text-center">Inscription</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?= $page_content; ?>
            <form novalidate method="post">
                <div class="form-group">
                    <input type="text" name="prenom"
                           required="required" class="form-control form-control"
                           placeholder="Saisissez votre Prénom"/>
                </div>
                <div class="form-group">
                    <input type="text" name="nom"
                           required="required" class="form-control form-control"
                           placeholder="Saisissez votre Nom"/>
                </div>
                <div class="form-group">
                    <input type="email" name="email"
                           required="required" class="form-control form-control"
                           placeholder="Saisissez votre Email"/>
                </div>
                <div class="form-group">
                    <input type="password" name="password"
                           required="required" class="form-control form-control"
                           placeholder="*******"/>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit"
                            class="btn btn-primary btn">M'inscrire !
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('inc/footer.inc.php'); ?>

