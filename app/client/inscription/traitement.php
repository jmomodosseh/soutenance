<?php
session_start();

include './app/commun/fonctions.php';

$_SESSION['inscription-erreurs'] = [];

$_SESSION['donnees-utilisateur'] = [];

$donnees = [];

$erreurs = [];


if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
    $donnees["nom"] = $_POST["nom"];
} else {
    $erreurs["nom"] = "Le champs nom est requis. Veuillez le renseigné.";
}

if (isset($_POST["prenoms"]) && !empty($_POST["prenoms"])) {
    $donnees["prenoms"] = $_POST["prenoms"];
} else {
    $erreurs["prenoms"] = "Le champs prénom est requis. Veuillez le renseigné.";
}


if (!isset($_POST["email"]) || empty($_POST["email"])) {
    $erreurs["email"] = "Le champs email est vide. Veuillez le renseigné.";
}

if (isset($_POST["email"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $donnees["email"] = $_POST["email"];
} else {
    $erreurs["email"] = "Le champs email est requis. Veuillez le renseigné.";
}

if (isset($_POST["username"]) && !empty($_POST["username"])) {
    $donnees["username"] = $_POST["username"];
} else {
    $erreurs["username"] = "Le champs nom-utilisateur est requis. Veuillez le renseigné.";
}

if (!isset($_POST["password"]) || empty($_POST["password"])) {
    $erreurs["password"] = "Le champs du mot de passe est vide. Veuillez le renseigné.";
}

if (isset($_POST["password"]) && !empty($_POST["password"]) && strlen(($_POST["password"])) < 8) {
    $erreurs["password"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["password"]) && !empty($_POST["password"]) && strlen(($_POST["password"])) >= 8 && empty($_POST["retapez-password"])) {
    $erreurs["retapez-password"] = "Entrez votre mot de passe à nouveau.";
}

if ((isset($_POST["retapez-password"]) && !empty($_POST["retapez-password"]) && strlen(($_POST["password"])) >= 8 && $_POST["retapez-password"] != $_POST["password"])) {
    $erreurs["retapez-password"] = "Mot de passe erroné. Entrez le mot de passe du précédent champs";
}

if ((isset($_POST["password"]) && !empty($_POST["password"]) && strlen(($_POST["password"])) >= 8 && $_POST["retapez-password"] == $_POST["password"])) {
    $donnees["password"] = $_POST['password'];
}

if (!isset($_POST["cocher"]) || empty($_POST["cocher"])) {
    $erreurs["cocher"] = "Veuillez cocher cette case svp";
}

$check_email_exist_in_db = check_email_exist_in_db($_POST["email"]);

if ($check_email_exist_in_db) {
    $erreurs["email"] = "Cette adresse mail est déja utilisé. Veuillez le changez.";
}

$check_user_name_exist_in_db = check_user_name_exist_in_db($_POST["username"]);

if ($check_user_name_exist_in_db) {
    $erreurs["username"] = "Ce nom d'utilisateur est déja utilisé. Veuillez le changez.";
}


$_SESSION['donnees-utilisateur'] = $donnees;

$_SESSION['success'] = "";

$_SESSION['validation'] = "";

$donnees["client"] = "client";


if (empty($erreurs)) {
    $db = connexion_db();

    // Ecriture de la requête
    $requette = 'INSERT INTO utilisateur (nom, prenoms, email, username, profil , password ) VALUES (:nom, :prenom, :email, :username, :client, :password);';

    // Préparation
    $inserer_utilisateur = $db->prepare($requette);

    // Exécution ! La recette est maintenant en base de données
    $resultat = $inserer_utilisateur->execute([
        'nom' => $donnees["nom"],
        'prenoms' => $donnees["prenoms"],
        'email' => $donnees["email"],
        'username' => $donnees["username"],
        'client' => $donnees["client"],
        'password' => sha1($donnees["password"])
    ]);

    if ($resultat) {
        $_token = uniqid("");
        $id_utilisateur = select_user_id($donnees['email'])[0]['id'];

        if (insertion_token($id_utilisateur, 'VALIDATION_COMPTE', $_token)){
            $_SESSION['validation_compte']=[];
            $_SESSION['validation_compte']['id_utilisateur']=$id_utilisateur;
            $_SESSION['validation_compte']['token']=recuperer_token($id_utilisateur)[0]['token'];
        }else{
            die ();
        }

        $objet = 'Validation de votre inscription';
        $message = buffer_html_file('..'. MYPROJECT.'app/client/inscription/mail.php');
        if (email($donnees["email"], $objet, $message)){
            $_SESSION['validation'] = "Veuiller bien consulter votre adresse mail pour valider votre compte ";
            header('location:'.MYPROJECT.'client/inscription/index');
        } else {
            die ("Non envoyé");
        }

        
    }
} else {
    $_SESSION['inscription-erreurs'] = $erreurs;

    header('location:'.MYPROJECT.'client/inscription/index');
}



