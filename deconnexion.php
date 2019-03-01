<?php require_once('inc/init.inc.php'); ?>

<?php
    // -- Suppression de la session
    unset($_SESSION['membre']);
?>

<?php require_once('inc/header.inc.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="alert alert-success">
                    Vous êtes maintenant déconnecté. <br>
                    Redirection dans quelques secondes.
                    <script>
                        window.setTimeout(function(){
                            window.location.href = "<?= URL_SITE ?>";
                        }, 5000);
                    </script>
                </div>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.inc.php'); ?>