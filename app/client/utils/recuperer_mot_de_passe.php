<?php
include_once './app/commun/fonctions.php';
$conn=connexion_db();

$password = $_POST["password"];
$newpassword= $_POST["newpassword"];
$renewpassword = $_POST["renewpassword"];

$user=getUser($_SESSION["userID"]);
print($user["password"]);

if(md5($password) != $user["password"] ){
    header("location: ../pages/profile?password=incorect");
    die();
}
if($newpassword != $renewpassword){
    header("location: ../pages/profile?newpassword=incorect");
    die();
} 

$request = "UPDATE user SET password=:password WHERE id=:id";

$request_prepare = $conn->prepare($request);

$request_execution = $request_prepare->execute(
    [
        'password' => md5($newpassword),
        'id' => $_SESSION["userID"],
    ]
);

if ($request_execution) {
    header("location: ../pages/profile?update_password=true");
}else{
    header("location: ../pages/profile?update_password=false"); 
}


?>