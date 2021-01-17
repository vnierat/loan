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
    <link rel="stylesheet" href="css/style.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SWAL -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Accordion -->
    <?php
      if($page === 2) {
        echo('<link rel="stylesheet" href="css/accordion.css">');
      }

      if($page === 4) {
        echo('<link rel="stylesheet" href="css/team.css">');
      }

    ?>
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
              
              
              <li class="nav-item dropdown mr-4"><a class="nav-link dropdown-toggle <?php if($page === 2) { echo('active');}?>" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos Crédits</a>
                <div class="dropdown-menu mt-3" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="credit-immo.php">Les Crédits Immobiliers</a>
                    <a class="dropdown-item" href="credit.php">Rachat de Crédit Immobilier</a>
              </li>
              <li class="nav-item mr-4">
                <!-- Link--><a class="nav-link <?php if($page === 3) { echo('active');}?>"" href="simulator2.php"><i class="fas fa-calculator mr-2"></i> Simulez votre prêt</a>
              </li>

              <li class="nav-item mr-4">
                <!-- Link--><a class="nav-link <?php if($page === 4) { echo('active');}?>"" href="team.php">Notre Équipe</a>
              </li>

              <li class="nav-item mr-4">
                <!-- Link--><a class="nav-link <?php if($page === 5) { echo('active');}?>"" href="agences.php">Nos Agences</a>
              </li>
              
              <li class="nav-item mr-4">             
                <button class="btn btn-primary" type="button" data-target="#quoteForm" data-toggle="modal">Contactez-nous</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div id="sux" class="alert alert-success col-md-12 text-center" style="display:none">Votre message a bien été envoyé !</div>
    </header>

    

    <!-- GET a QUOTE MODAL -->
    <div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content p-md-3">
          <div class="modal-header">
            <h4 class="modal-title">Une question sur un futur projet ? 
              <br>
              <span class="text-primary">Nous avons la réponse !</span></h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form method="post" action="#">
              <div class="row">
                <input type="hidden" name="objet" value="Demande d'informations le Pret Immo">
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="firstname">Prénom<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="firstname" name="firstname" type="text" placeholder="Votre prénom" required>
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="lastname">Nom<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="lastname" name="lastname" type="text" placeholder="Votre nom" required>
                </div>
                <div class="form-group col-lg-12">
                  <label class="font-weight-bold text-small" for="email">Adresse Mail<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="email" name="email" type="email" placeholder="Votre adresse mail" required>
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="phone">Numéro de téléphone <small class="small text-gray">optionnel</small></label>
                  <input class="form-control" id="phone" name="phone" type="tel" placeholder="Numéro de téléphone portable ou fixe">
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="projecttype">Votre projet<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="projecttype" name="projecttype" type="text" placeholder="Votre projet" required>
                </div>
                <div class="form-group col-lg-6">
                  <label class="font-weight-bold text-small" for="budget">Budget<span class="text-primary ml-1">&#42;</span></label>
                  <input class="form-control" id="budget" name="budget" type="text" placeholder="Budget" required>
                </div>
                
                <div class="form-group col-lg-12">
                  <label class="font-weight-bold text-small" for="projectdetail">Votre projet en détails<span class="text-primary ml-1">&#42;</span></label>
                  <textarea class="form-control" id="projectdetail" name="projectdetail" rows="5" placeholder="Votre projet en quelques mots" required></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <button class="btn btn-primary" type="submit"><i class="far fa-paper-plane pl-3 pr-3"></i></button>
                  
                  <?php

// S'il y des données de postées

if ($_SERVER['REQUEST_METHOD']=='POST') {
  
// (1) Code PHP pour traiter l'envoi de l'email

// Récupération des variables et sécurisation des données
$objet = htmlentities($_POST['objet']);// htmlentities() convertit des caractères "spéciaux" en équivalent HTML
$firstname = htmlentities($_POST['firstname']);
$lastname = htmlentities($_POST['lastname']); 
$email = htmlentities($_POST['email']);
$phone = htmlentities($_POST['phone']);
$projet = htmlentities($_POST['projecttype']);
$budget = htmlentities($_POST['budget']);

$message = htmlentities($_POST['projectdetail']);

// Variables concernant l'email

$destinataire = 'vnierat@hotmail.fr'; // Adresse email du webmaster (à personnaliser)
$contenu = '<html><head><title> '.$objet.' </title></head><body>';
$contenu .= '<p><strong>Prénom</strong>: '.$firstname.'</p>';
$contenu .= '<p><strong>Nom</strong>: '.$lastname.'</p>';
$contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
$contenu .= '<p><strong>Téléphone</strong>: '.$phone.'</p>';
$contenu .= '<p><strong>Type de projet</strong>: '.$projet.'</p>';
$contenu .= '<p><strong>Budget</strong>: '.$budget.'</p>';
$contenu .= '<p><strong>Projet en détails</strong>: '.$message.'</p>';
$contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

// Pour envoyer un email HTML, l'en-tête Content-type doit être défini
$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

// Envoyer l'email
mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
header("location:index.php"); // Afficher un message pour indiquer que le message a été envoyé
// (2) Fin du code pour traiter l'envoi de l'email
}

if(!empty($_POST['objet']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['projecttype'])  && !empty($_POST['budget']) && !empty($_POST['projectdetail']))
          {
            ?>

                <script>
                swal({
                  title: "Bien envoyé !",
                  text: "Votre message a bien été envoyé !",
                  icon: "success",
                });
                </script>

              <?php
          }
 
        header('Location: mail.php');

?>
                </div>
              </div>
            </form>
 
          </div>
        </div>
      </div>
    </div>

