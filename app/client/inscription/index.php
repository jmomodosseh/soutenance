<?php
session_start();

include './app/commun/fonctions.php';

if (isset($_SESSION['inscription_erreurs'])&& !empty($_SESSION['inscription_erreurs'])) {
  $erreurs = $_SESSION['inscription_erreurs'];
}

if (isset($_SESSION['donnees_utilisateur']) && !empty($_SESSION['donnees_utilisateur'])) {
 $donnees = $_SESSION['donnees_utlilisateur'];
}
?>




<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Client_inscription</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= MYPROJECT ?>public/images/logo2.png" rel="icon">
  <link href="<?= MYPROJECT ?>public/images/logo2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= MYPROJECT ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= MYPROJECT ?>public/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= MYPROJECT ?>public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= MYPROJECT ?>public/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= MYPROJECT ?>public/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= MYPROJECT ?>public/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= MYPROJECT ?>public/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= MYPROJECT ?>public/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="<?= MYPROJECT ?>public/images/.png" alt="">
                  <span class="d-none d-lg-block">Spect+</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                    <p class="text-center small">Entrez vos informations  pour créer votre compte</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="<?= MYPROJECT ?>client/inscription/traitement">
                    <div class="col-12">
                    <label for="inscription-nom">Nom:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="text" name="nom" id="inscription-nom" class="form-control" placeholder="Nom" value="<?php if (isset($donnees["nom"]) && !empty($donnees["nom"])) {
                                                                                                                                                            echo $donnees["nom"];
                                                                                                                                                        } else {
                                                                                                                                                            echo '';
                                                                                                                                                        } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["nom"]) && !empty($erreurs["nom"])) {
                                        echo $erreurs["nom"];
                                    }
                                    ?>
                                </span>
                    </div>

                    <form class="row g-3 needs-validation" method="post" action="backend/register.php">
                    <div class="col-12">
                    <label for="inscription-nom">Prénom:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="text" name="prenoms" id="inscription-prenoms" class="form-control" placeholder="Prénoms" value="<?php if (isset($donnees["prenoms"]) && !empty($donnees["nom"])) {
                                                                                                                                                            echo $donnees["prenoms"];
                                                                                                                                                        } else {
                                                                                                                                                            echo '';
                                                                                                                                                        } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["prenoms"]) && !empty($erreurs["prenoms"])) {
                                        echo $erreurs["prenoms"];
                                    }
                                    ?>
                                </span>
                    </div>


                    <div class="form-group">
                                <label for="inscription-email">Email:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="email" name="email" id="inscription-email" class="form-control" placeholder=" Email valide" value="<?php if (isset($donnees["email"]) && !empty($donnees["email"])) {
                                                                                                                                                                            echo $donnees["email"];
                                                                                                                                                                        } else {
                                                                                                                                                                            echo '';
                                                                                                                                                                        } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["email"]) && !empty($erreurs["email"])) {
                                        echo $erreurs["email"];
                                    }
                                    ?>
                                </span>



                    </div>

                   <div class="form-group">
                                <label for="inscription-username">Nom d'utilisateur:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="text" name="username" id="inscription-username" class="form-control" placeholder="Nom utilisateur" value="<?php if (isset($donnees["username"]) && !empty($donnees["username"])) {
                                                                                                                                                                                                    echo $donnees["username"];
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    echo '';
                                                                                                                                                                                                } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["username"]) && !empty($erreurs["username"])) {
                                        echo $erreurs["username"];
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="inscription-password">Mot de passe:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="password" name="password" id="inscription-password" class="form-control" placeholder="  Mot de passe" value="<?php if (isset($donnees["password"]) && !empty($donnees["password"])) {
                                                                                                                                                                                    echo $donnees["password"];
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo '';
                                                                                                                                                                                } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["password"]) && !empty($erreurs["password"])) {
                                        echo $erreurs["password"];
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="inscription-retapez-password">Retaper mot de passe:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="password" name="retapez-password" id="inscription-retapez-password" class="form-control" placeholder=" Confirmer mot de passe" value="<?php if (isset($donnees["retapez-password"]) && !empty($donnees["retapez-password"])) {
                                                                                                                                                                                                        echo $donnees["retapez-password"];
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo '';
                                                                                                                                                                                                    } ?>">

                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["retapez-password"]) && !empty($erreurs["retapez-password"])) {
                                        echo $erreurs["retapez-password"];
                                    }
                                    ?>
                                </span>
                            </div>


                           

                           

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">J'accepte <a href="#">les termes et conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Créer un compte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez déja un compte? <a href="localhost/soutenance/client/connexion">Se connecter</a></p>
                    </div>
                  </form>

                </div>
              </div>

            
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= MYPROJECT ?>public/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/echarts/echarts.min.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/quill/quill.min.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= MYPROJECT ?>public/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= MYPROJECT ?>public/js/main.js"></script>

</body>

</html>