<?php require_once('inc/init.inc.php'); ?>

<!-- ----------------------------- | TRAITEMENT | ------------------------------ -->

<?php
    if ($_POST) {
        var_dump($_POST);

        echo "Email : " . $_POST["email"] . "<br />";
        echo "Mot de Passe : " . $_POST["password"] . "<br />";

    }
?>

<!-- ----------------------------- | AFFICHAGE | ------------------------------ -->

<?php require_once('inc/header.inc.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Espace Membres</h1>
                <h3 class="text-center">Connexion</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" class="form-horizontal">
                    <div class="form-group">
                            <input name="email"
                                   class="form-control" required type="email"
                                   placeholder="Saisissez votre Email">
                    </div>
                        <div class="form-group">
                            <input name="password"
                                   class="form-control" required type="password"
                                   placeholder="Saisissez votre Mot de Passe">
                        </div>
                    <input type="submit" class="btn btn-block btn-primary" value="Connexion">
                </form>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.inc.php'); ?>

