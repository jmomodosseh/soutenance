<?php
include_once './app/commun/fonctions.php';

$erreurs = [];


if (empty($erreurs)) { 

    $user_id = [];

    $database = connexion_db();

    $request = "SELECT * FROM user WHERE username=:username AND password=:password";

    $request_prepare = $database->prepare($request);

    $request_prepare->execute([
        'username' => $_POST["username"],
        'password'=> md5($_POST["password"]),
    ]);
    $count = $request_prepare->rowCount();
    if($count > 0){
        $data = $request_prepare->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["userID"] = $data[0]["id"];
        $_SESSION["nom"] = $data[0]["nom"];
        $_SESSION["prenom"] = $data[0]["prenoms"];
        $_SESSION["email"] = $data[0]["email"];
        header("location: ../pages/dashboard");
    } else {
        header("location: client/connexion/?error=true");
    }

} else {
    $_SESSION['inscription-erreurs'] =$erreurs;

   // header('location:'.MYPROJECT.'client/inscription/index');
   print_r($erreurs); 
}
?>