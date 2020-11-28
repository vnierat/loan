<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo($content); ?></title>
    <meta name="description" content="Courtier spécialisé en Crédit immobilier, Rachat de crédit, Assurance de prêts, Assurance de personnes, Epargne, Prévoyance, Retraite">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Owl carousel 2 -->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.min.css">
    <!-- Modal video-->
    <link rel="stylesheet" href="vendor/modal-video/css/modal-video.min.css">
    <!-- Leaflet-->
    <link rel="stylesheet" href="vendor/leaflet/leaflet.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;font-display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.sea.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- NAVBAR-->
    <header class="header fixed-top header-animated">
      <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="img/logo-lpi.png" alt="..." width="80"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <!-- Link--><a class="nav-link <?php if($page == 1) { echo('active');}?>" href="index.php">Accueil</a>
              </li>
              
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle <?php if($page == 2) { echo('active');}?>" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos Crédits</a>
                <div class="dropdown-menu mt-3" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="credit.php">Crédit Immobilier</a>
                    <a class="dropdown-item" href="credit.php">Rachat de Crédit Immobilier</a>
              </li>
              <li class="nav-item">
                <!-- Link--><a class="nav-link <?php if($page == 3) { echo('active');}?>"" href="simulator.php"><i class="fas fa-calculator"></i> Simulez votre prêt</a>
              </li>
              
              <li class="nav-item">             
                <button class="btn btn-primary" type="button" data-target="#quoteForm" data-toggle="modal">Contactez-nous</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- GET a QUOTE MODAL -->
    <div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
          <div class="modal-header">
            <h4 class="modal-title">Une question sur un futur projet ? Nous avons la <span class="text-primary">réponse !</span></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="firstname">Pénom<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="firstname" type="text" placeholder="Votre prénom" required>
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="lastname">Nom<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="lastname" type="text" placeholder="Votre nom" required>
                </div>
                <div class="form-group col-lg-12">
                  <label class="font-weight-bold text-small" for="email">Email address<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="email" type="email" placeholder="Votre adresse mail" required>
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="phone">Numéro de téléphone <small class="small text-gray">optionnel</small></label>
                  <input class="form-control" id="phone" type="tel" placeholder="Numéro de téléphone portable ou fixe">
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="projecttype">Votre projet<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="projecttype" type="text" placeholder="Votre projet" required>
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="budget">Budget<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="budget" type="text" placeholder="Budget" required><small class="form-text text-muted">Project budget will be on <span class="text-dark">$</span></small>
                </div>
                
                <div class="form-group col-lg-12">
                  <label class="font-weight-bold text-small" for="projectdetail">Votre projet en détails<span class="text-primary ml-1">&#42;</span></label>
                  <textarea class="form-control" id="projectdetail" rows="5" placeholder="Votre projet en quelques mots" required></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <button class="btn btn-primary" type="submit"><i class="far fa-paper-plane pl-3 pr-3"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>