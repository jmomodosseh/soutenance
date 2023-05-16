<?php
session_start();

include '../soutenance/app/commun/fonction.php';

$_SESSION['inscription-erreurs'] = [];

$_SESSION['donnees-utilisateur'] = [];

$donnees = [];

$erreurs = [];


if (isset($_POST["nom"]) && !empty($_POST["nom"])) {
    $donnees["nom"] = $_POST["nom"];
} else {
    $erreurs["nom"] = "Le champs nom est requis. Veuillez le renseigné.";
}

if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
    $donnees["prenom"] = $_POST["prenom"];
} else {
    $erreurs["prenom"] = "Le champs prénom est requis. Veuillez le renseigné.";
}


if (!isset($_POST["email"]) || empty($_POST["email"])) {
    $erreurs["email"] = "Le champs email est vide. Veuillez le renseigné.";
}

if (isset($_POST["email"]) && !empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $donnees["email"] = $_POST["email"];
} else {
    $erreurs["email"] = "Le champs email est requis. Veuillez le renseigné.";
}

if (isset($_POST["nom-utilisateur"]) && !empty($_POST["nom-utilisateur"])) {
    $donnees["nom-utilisateur"] = $_POST["nom-utilisateur"];
} else {
    $erreurs["nom-utilisateur"] = "Le champs nom-utilisateur est requis. Veuillez le renseigné.";
}

if (!isset($_POST["mot-passe"]) || empty($_POST["mot-passe"])) {
    $erreurs["mot-passe"] = "Le champs du mot de passe est vide. Veuillez le renseigné.";
}

if (isset($_POST["mot-passe"]) && !empty($_POST["mot-passe"]) && strlen(($_POST["mot-passe"])) < 8) {
    $erreurs["mot-passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot-passe"]) && !empty($_POST["mot-passe"]) && strlen(($_POST["mot-passe"])) >= 8 && empty($_POST["retapez-mot-passe"])) {
    $erreurs["retapez-mot-passe"] = "Entrez votre mot de passe à nouveau.";
}

if ((isset($_POST["retapez-mot-passe"]) && !empty($_POST["retapez-mot-passe"]) && strlen(($_POST["mot-passe"])) >= 8 && $_POST["retapez-mot-passe"] != $_POST["mot-passe"])) {
    $erreurs["retapez-mot-passe"] = "Mot de passe erroné. Entrez le mot de passe du précédent champs";
}

if ((isset($_POST["mot-passe"]) && !empty($_POST["mot-passe"]) && strlen(($_POST["mot-passe"])) >= 8 && $_POST["retapez-mot-passe"] == $_POST["mot-passe"])) {
    $donnees["mot-passe"] = $_POST['mot-passe'];
}

if (!isset($_POST["cocher"]) || empty($_POST["cocher"])) {
    $erreurs["cocher"] = "Veuillez cocher cette case svp";
}

$check_email_exist_in_db = check_email_exist_in_db($_POST["email"]);

if ($check_email_exist_in_db) {
    $erreurs["email"] = "Cette adresse mail est déja utilisé. Veuillez le changez.";
}

$check_user_name_exist_in_db = check_user_name_exist_in_db($_POST["nom-utilisateur"]);

if ($check_user_name_exist_in_db) {
    $erreurs["nom-utilisateur"] = "Ce nom d'utilisateur est déja utilisé. Veuillez le changez.";
}


$_SESSION['donnees-utilisateur'] = $donnees;

$_SESSION['success'] = "";

$_SESSION['validation'] = "";

$donnees["dg"] = "dg";


if (empty($erreurs)) {
    $db = connect_db();

    // Ecriture de la requête
    $requette = 'INSERT INTO utilisateur (nom, prenom, email, nom_utilisateur, profile, mot_passe) VALUES (:nom, :prenom, :email, :nom_utilisateur, :dg, :mot_passe);';

    // Préparation
    $inserer_utilisateur = $db->prepare($requette);

    // Exécution ! La recette est maintenant en base de données
    $resultat = $inserer_utilisateur->execute([
        'nom' => $donnees["nom"],
        'prenom' => $donnees["prenom"],
        'email' => $donnees["email"],
        'nom_utilisateur' => $donnees["nom-utilisateur"],
        'dg' => $donnees["dg"],
        'mot_passe' => sha1($donnees["mot-passe"])
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
        $message = buffer_html_file("../soutenance/app/dg/inscription/message_mail.php");
        if (email($donnees["email"], $objet, $message)){
            $_SESSION['validation'] = "Veuiller bien consulter votre adresse mail pour valider votre compte ";
            header('location: /soutenance/dg/inscription');
        } else {
            die ("Non envoyé");
        }

        
    }
} else {
    $_SESSION['inscription-erreurs'] = $erreurs;

    header('location: /soutenance/dg/inscription/');
}



