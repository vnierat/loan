<?php
    require_once('header.php')
?>

<section class="hero hero-home with-pattern d-flex align-items-center py-5">
      <div class="container py-5 mt-5">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
          <h2 class="mt-5"><span class="text-primary">Une question sur un futur projet ?<br></span>Nous avons la réponse !</h2>
            
            

          </div>
          <div class="col-md-5 ml-auto">
            <div class="img-gradient img-gradient-right"><img class="img-fluid" src="img/Mail-sent.jpg" alt="calculator" ></div>
          </div>
        </div>
      </div>
    </section>

<div class="container">
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
<?php
    require_once('footer.php')
?>