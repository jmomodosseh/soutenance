<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Send mail.
 *
 * @param string $destination The destination.
 * @param string $subject The subject.
 * @param string $body The body.
 * @return bool The result.
 */
function envoi_mail(string $destination, string $subject, string $body): bool
{
    // passing true in constructor enables exceptions in PHPMailer
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    try {

        // Server settings
        // for detailed debug output
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->SMTPDebug = true;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = MAIL_ADDRESS;
        $mail->Password = MAIL_PASSWORD;

        // Sender and recipient settings
        $mail->setFrom(MAIL_ADDRESS, htmlspecialchars_decode('NOM_DU_SITE'));
        $mail->addAddress($destination, 'UTILISATEUR');
        $mail->addReplyTo(MAIL_ADDRESS, htmlspecialchars_decode('NOM_DU_SITE'));

        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = htmlspecialchars_decode($subject);
        $mail->Body = $body;

        return $mail->send();

    } catch (Exception $e) {
        echo $e;
        return false;

    }

}

function connexion_db()
{
    $connexion_db = "";

    try {
        $connexion_db = new PDO('mysql:host=localhost;dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USERNAME, DATABASE_PASSWORD);
    } catch (Exception $e) {
        $connexion_db = "Une erreur s'est produite lors de la connexion à la base de donnée.";
    }

    return $connexion_db;
}

function est_connecter()
{
}

/**
 * Cette fonction permet de verifier si un utilisateur dans la base de donnée ne possède pas cette adresse mail.
 * @param string $email L'email a vérifié.
 *
 * @return bool $check
 */
function check_email_exist_in_db(string $email)
{

    $check = false;

    $db = connexion_db();

    $requette = "SELECT count(*) as nbr_utilisateur FROM utilisateur WHERE email = :email";

    $verifier_email = $db->prepare($requette);

    $resultat = $verifier_email->execute([
        'email' => $email,
    ]);

    if ($resultat) {

        $nbr_utilisateur = $verifier_email->fetch(PDO::FETCH_ASSOC)["nbr_utilisateur"];

        $check = ($nbr_utilisateur > 0) ? true : false;
    }

    return $check;
}

function getUser($id){
    $database = connexion_db();

    $request = "SELECT * FROM user WHERE id=:id";

    $request_prepare = $database->prepare($request);

    $request_prepare->execute([
        'id' => $id,
    ]);
    $count = $request_prepare->rowCount();
    if($count > 0){
        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);
       // $_SESSION["userID"] = $data[0]["id"];
       return $data[0];
    } else {
      return [];
    }
}


/**
 * Cette fonction permet de verifier si un utilisateur dans la base de donnée ne possède pas ce nom d'utilisateur.
 * @param string $nom_utilisateur Le nom d'utilisateur a vérifié.
 *
 * @return bool $check
 */
function check_user_name_exist_in_db(string $nom_utilisateur)
{

    $check = false;

    $db = connexion_db();

    $requette = "SELECT count(*) as nbr_utilisateur FROM utilisateur WHERE nom_utilisateur = :nom_utilisateur";

    $verifier_nom_utilisateur = $db->prepare($requette);

    $resultat = $verifier_nom_utilisateur->execute([
        'nom_utilisateur' => $nom_utilisateur,
    ]);

    if ($resultat) {

        $nbr_utilisateur = $verifier_nom_utilisateur->fetch(PDO::FETCH_ASSOC)["nbr_utilisateur"];

        $check = ($nbr_utilisateur > 0) ? true : false;
    }

    return $check;
}

// Exemple de fonction pour récupérer du html dans le buffer

function buffer_html_file($filename)
{
    ob_start(); // Démarre la temporisation de sortie

    include $filename; // Inclut le fichier HTML dans le tampon

    $html = ob_get_contents(); // Récupère le contenu du tampon
    ob_end_clean(); // Arrête et vide la temporisation de sortie

    return $html; // Retourne le contenu du fichier HTML
}

//Exemple de fonction pour exécuter la requête INSERT INTO token

function insertion_token(int $user_id, string $type, string $token): bool
{

    $insertion_token = false;

    $database = connexion_db();

    $request = "INSERT INTO token (user_id, type, token) VALUES (:user_id, :type, :token)";

    $request_prepare = $database->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'user_id' => $user_id,
            'type' => $type,
            'token' => $token
        ]
    );

    if ($request_execution) {

        $insertion_token = true;
    }

    return $insertion_token;
}

// Récupérer le token

function recuperer_token(string $user_id)
{

    $token = [];

    $database = connexion_db();

    $request = "SELECT token FROM token WHERE user_id=:user_id";

    $request_prepare = $database->prepare($request);

    $request_execution = $request_prepare->execute([
        'user_id' => $user_id
    ]);

    if ($request_execution) {

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data) && !empty($data) && is_array($data)) {

            $token = $data;
        }
    }
    return $token;
}

// Récupérer l'id de l'utilisateur

function select_user_id(string $email)
{

    $user_id = [];

    $database = connexion_db();

    $request = "SELECT id FROM user WHERE email=:email";

    $request_prepare = $database->prepare($request);

    $request_execution = $request_prepare->execute([
        'email' => $email
    ]);

    if ($request_execution) {

        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data) && !empty($data) && is_array($data)) {

            $user_id = $data;
        }
    }
    return $user_id;
}


/**
 * Cette fonction permet de verifier si le id_utilisateur existe dans la base de donnée .
 * @param string $nom_utilisateur Le nom d'utilisateur a vérifié.
 *
 * @return bool $check
 */
function check_id_utilisateur_exist_in_db(int $user_id, string $token, string $type, int $est_actif, int $est_supprimer): bool
{

    $check = false;

    $db = connexion_db();

    $requette = "SELECT * FROM token WHERE user_id = :user_id and token= :token and type= :type and est_actif= :est_actif and $est_supprimer= :est_supprimer";

    $verifier_id_utilisateur = $db->prepare($requette);

    $resultat = $verifier_id_utilisateur->execute([
        'user_id' => $user_id,
        'token' => $token,
        'type' => $type,
        'est_actif' => $est_actif,
        'est_supprimer' => $est_supprimer
    ]);

    if ($resultat) {

        $data = $verifier_id_utilisateur->fetchAll(PDO::FETCH_ASSOC);

        if (isset($data) && !empty($data) && is_array($data)) {

            $check = true;
        }
    }

    return $check;
}


// Exemple de fonction pour exécuter la requête UPDATE TOKEN

function maj(int $id_utilisateur): bool
{

    $maj = false;

    $date=date("Y-m-d H:i:s");

    $db = connexion_db();

    $request = "UPDATE token SET est_actif = :est_actif, est_supprimer = :est_supprimer, maj_le = :maj_le WHERE user_id= :id_utilisateur";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'id_utilisateur' => $id_utilisateur,
            'est_actif' => 0,
            'est_supprimer' =>1 ,
            'maj_le' => $date
        ]
    );

    if ($request_execution) {

        $maj = true;
    }

    return $maj;
}


// Exemple de fonction pour exécuter la requête UPDATE UTILISATEUR

function maj1(int $id_utilisateur): bool
{

    $maj1 = false;

    $date=date("Y-m-d H:i:s");

    $db = connexion_db();

    $request = "UPDATE utilisateur SET est_actif = :est_actif, maj_le = :maj_le WHERE id= :id_utilisateur";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'id_utilisateur' => $id_utilisateur,
            'est_actif' => 1,
            'maj_le' => $date
        ]
    );

    if ($request_execution) {

        $maj1 = true;
    }

    return $maj1;
}


/**
 * Cette fonction permet de verifier si un utilisateur (email + mot de passe) existe dans la base de donnée.
 * Si oui elle retourne un tableau contenant les informations de l'utilisateur.
 * Sinon elle retourne un tableau vide.
 *
 * @param string $email L'email.
 * @param string $password Le mot de passe.
 *
 * @return array $user Les informations de l'utilisateur.
 */
function check_if_user_exist(string $email_user_name, string $mot_passe, string $profile, int $est_actif = 1, int $est_supprimer = 0): bool
{
    $user = false;

    $db = connexion_db();

    $requette = "SELECT id, nom, prenom, email, nom_utilisateur, avatar, profile FROM utilisateur WHERE (email =:email_user_name OR nom_utilisateur =:email_user_name) and profile = :profile and mot_passe = :mot_passe and est_actif= :est_actif and est_supprimer= :est_supprimer" ;

    $verifier_nom_utilisateur = $db->prepare($requette);

    $resultat = $verifier_nom_utilisateur->execute([
        'email_user_name' => $email_user_name,
        'nom_utilisateur' => $email_user_name,
        'mot_passe' => sha1($mot_passe),
        'profile' => $profile,
        'est_actif' => $est_actif,
        'est_supprimer' => $est_supprimer,
    ]);

    if ($resultat) {

        $utilisateur = $verifier_nom_utilisateur->fetchAll(PDO::FETCH_ASSOC);

        $_SESSION['utilisateur_connecter'] = $utilisateur;

        $user = (isset($utilisateur) && !empty($utilisateur) && is_array($utilisateur)) ? true : false;
    }

    return $user;

}

// Exemple de fonction pour un utilisateur déjà connecté sur le dashboard

function check_if_user_conneted()
{

    $check = false;


    if (isset($_SESSION['utilisateur_connecter']) && !empty($_SESSION['utilisateur_connecter'])) {

        $check = true;

    }

    return $check;

}

// Exemple de fonction pour exécuter la requête UPDATE mot de passe UTILISATEUR

function maj3(string $email, string $password): bool
{

    $maj3 = false;

    $date=date("Y-m-d H:i:s");

    $db = connexion_db();

    $request = "UPDATE utilisateur SET mot_passe = :mot_passe, maj_le = :maj_le  WHERE email= :email";

    $request_prepare = $db->prepare($request);

    $request_execution = $request_prepare->execute(
        [
            'email' => $email,
            'mot_passe' => sha1($password),
            'maj_le' => $date,
        ]
    );

    if ($request_execution) {

        $maj3 = true;
    }

    return $maj3;
}
