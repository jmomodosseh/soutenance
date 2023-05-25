<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Connexion_Client</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= MYPROJECT ?>public/images/logo2.png" rel="icon">
  <link href="<?=MYPROJECT?>public/images/apple-touch-icon.png" rel="apple-touch-icon">

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
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="<?= MYPROJECT ?>public/images/.png" alt="">
                  <span class="d-none d-lg-block">Spect+</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Se connecter</h5>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="backend/connexion.php">


                  
                    
                    

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nom d'utilisateur</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Entrez votre nom d'utilisateur .</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">entrez votre mot de passe!</div>
                    </div>

                    <div class="row">
                      
                      <div class="col-6">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                          <label class="form-check-label" for="rememberMe" style="font-size: 14px;">Se souvenir de moi</label>
                        </div>
                      </div>
                      
                      <div class="col-6">
                        <p class="samll mb-0"><a href="recuperer_password.html" style="font-size: 14px;">Mot de passe oublier?</a></p>

                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Connexion</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Pas de compte? <a href="pages-register.php"> Créer un compte</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=MYPROJECT?>public/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/chart.js/chart.umd.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/echarts/echarts.min.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/quill/quill.min.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=MYPROJECT?>public/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=MYPROJECT?>public/js/main.js"></script>

</body>

</html>