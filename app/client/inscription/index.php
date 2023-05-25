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
                  <img src="<?= MYPROJECT ?>public/images/logo.png" alt="">
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
                                <input type="text" name="Prénom" id="inscription-Prénom" class="form-control" placeholder="Prénom" value="<?php if (isset($donnees["nom"]) && !empty($donnees["nom"])) {
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


                    <div class="form-group">
                                <label for="inscription-email">Email:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="email" name="email" id="inscription-email" class="form-control" placeholder=" Entrez un email valide" value="<?php if (isset($donnees["email"]) && !empty($donnees["email"])) {
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
                                <label for="inscription-nom-utilisateur">Nom d'utilisateur:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="text" name="nom-utilisateur" id="inscription-nom-utilisateur" class="form-control" placeholder=" Nom d'utilisateur" value="<?php if (isset($donnees["nom-utilisateur"]) && !empty($donnees["nom-utilisateur"])) {
                                                                                                                                                                                                    echo $donnees["nom-utilisateur"];
                                                                                                                                                                                                } else {
                                                                                                                                                                                                    echo '';
                                                                                                                                                                                                } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["nom-utilisateur"]) && !empty($erreurs["nom-utilisateur"])) {
                                        echo $erreurs["nom-utilisateur"];
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="inscription-mot-passe">Mot de passe:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="password" name="mot-passe" id="inscription-mot-passe" class="form-control" placeholder="   Mot de passe" value="<?php if (isset($donnees["mot-passe"]) && !empty($donnees["mot-passe"])) {
                                                                                                                                                                                    echo $donnees["mot-passe"];
                                                                                                                                                                                } else {
                                                                                                                                                                                    echo '';
                                                                                                                                                                                } ?>">
                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["mot-passe"]) && !empty($erreurs["mot-passe"])) {
                                        echo $erreurs["mot-passe"];
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="inscription-retapez-mot-passe">Retaper mot de passe:
                                    <span class="text-danger">(*)</span>
                                </label>
                                <input type="password" name="retapez-mot-passe" id="inscription-retapez-mot-passe" class="form-control" placeholder=" Confirmer mot de passe" value="<?php if (isset($donnees["retapez-mot-passe"]) && !empty($donnees["retapez-mot-passe"])) {
                                                                                                                                                                                                        echo $donnees["retapez-mot-passe"];
                                                                                                                                                                                                    } else {
                                                                                                                                                                                                        echo '';
                                                                                                                                                                                                    } ?>">

                                <span class="text-danger">
                                    <?php
                                    if (isset($erreurs["retapez-mot-passe"]) && !empty($erreurs["retapez-mot-passe"])) {
                                        echo $erreurs["retapez-mot-passe"];
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