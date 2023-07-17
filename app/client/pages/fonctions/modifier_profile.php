<?php
include("../../commun/fonctions.php");
$conn=connexion_db();

$fullname = $_POST["fullName"];
$prenom= $_POST["prenom"];
$username = $_POST["username"];

$email = $_POST["email"];


$request = "UPDATE user SET nom = :nom, prenoms = :prenoms,  email= :email  WHERE ";

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







?>