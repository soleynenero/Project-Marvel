<!DOCTYPE html>
<html>
    <head>
    <?php require_once __DIR__."/../include/head.php" // on recupère le chemin du dossier pour accéder au fichier header ?>  
    </head>
    <body>
        <div class="page login-page">
            <div class="container d-flex align-items-center">
                <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                    <div class="info d-flex align-items-center">
                        <div class="content">
                        <div class="logo">
                            <h1>Dashboard</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form id="register-form" method="post" action ="<?php echo HOSTURL ?>">
                                <!-- l'input va me permettre de connaitre l'origine du formulaire -->
                                <input type="hidden" name="page" value="register">
                                <div class="form-group">
                                    <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                    <label for="register-username" class="label-material">User Name</label>
                                </div>
                                <div class="form-group">
                                    <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                    <label for="register-email" class="label-material">Email Address</label>
                                </div>
                                <div class="form-group">
                                    <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                                    <label for="register-passowrd" class="label-material">password</label>
                                </div>
                                <div class="form-group terms-conditions">
                                    <input id="license" type="checkbox" class="checkbox-template">
                                    <label for="license">Agree the terms and policy</label>
                                </div>
                                <input id="register" type="submit" value="Register" class="btn btn-primary">
                                <!-- on a pas besoin d'appeler la page config.php car on l'a deja appeler dans notre index.php et sachant qe tout passe par la et qu'on a appelé config.php alors on a pas d'erreur -->
                            </form><small>Already have an account? </small><a href="<?php echo HOSTURL ?>?page=login" class="signup">Login</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="copyrights text-center">
                <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
        </div>
        
        <?php require_once __DIR__."/../include/footer.php" // on recupère le chemin du dossier pour accéder au fichier header ?>
    </body>
</html>