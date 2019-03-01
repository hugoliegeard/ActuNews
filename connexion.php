<?php require_once('inc/init.inc.php'); ?>

<!-- ----------------------------- | TRAITEMENT | ------------------------------ -->

<?php

if (utilisateurEstConnecte()) {
    header('location:index.php');
    exit();
}

if ($_POST) {
    var_dump($_POST);

    echo "Email : " . $_POST["email"] . "<br />";
    echo "Mot de Passe : " . $_POST["password"] . "<br />";

    $request = $pdo_connexion->query("SELECT * FROM auteur WHERE EMAILAUTEUR = '$_POST[email]'");
    if ($request->rowCount() >= 1) {
        $membre = $request->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['password'], $membre['PASSWORDAUTEUR'])) {
            $_SESSION['membre']['id'] = $membre['IDAUTEUR'];
            $_SESSION['membre']['nom'] = $membre['NOMAUTEUR'];
            $_SESSION['membre']['prenom'] = $membre['PRENOMAUTEUR'];
            $_SESSION['membre']['email'] = $membre['EMAILAUTEUR'];

            header('location:index.php');
        } else {
            $page_content .= '<div class="alert alert-danger" role="alert">
                    Connexion Impossible. Vérifiez vos identifiants.</div>';
        }
    } else {
        $page_content .= '<div class="alert alert-danger" role="alert">
                Connexion Impossible. Vérifiez vos identifiants.</div>';
    }

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
            <?= $page_content ?>
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

