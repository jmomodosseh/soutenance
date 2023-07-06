<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Deconnexion_Client</title>
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
                    <h5 class="card-title text-center pb-0 fs-4">Attention!</h5>
                  </div>

                    <div class="col-12">
                      <h5 class="card-title text-center ">Etes-vous sûr de vouloir vous déconnecter?</h5>
                    </div>
                    
                    <div class= "card message text-center">
                   <span class="badge border-success border-2 text-success"><a href="../connexion">Oui</a></span>
                  </div> 
                  <div class= "card message text-center">
                    <span class="badge border-danger border-1 text-danger"><a href="">Non</a></span>
                  </div>  
                    </div>
                  </form>

                </div>
              </div>

              
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




<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>