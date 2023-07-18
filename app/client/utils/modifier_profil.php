<?php
include_once './app/commun/fonctions.php';
$conn=connexion_db();

$fullname = $_POST["fullName"];
$prenom= $_POST["prenom"];
$username = $_POST["username"];

$email = $_POST["email"];


$request = "UPDATE user SET nom=:nom, prenoms=:prenoms, username=:username, email=:email  WHERE id=:id";

$request_prepare = $conn->prepare($request);

$request_execution = $request_prepare->execute(
    [
        'nom' => $fullname,
        'prenoms' => $prenom,
        'username' => $username,
        'email' => $email,
        'id' => $_SESSION["userID"],
    ]
);

if ($request_execution) {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["nom"] = $fullname;
    $_SESSION["prenom"] = $prenom;
    $_SESSION["email"] = $email;
    header("location: ../pages/dashboard?update=true");
}else{
    header("location: ../pages/dashboard?update=false"); 
}







?>