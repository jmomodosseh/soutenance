<!DOCTYPE html>
<html>
    <head>
       <title>formulaire de payement de ticket</title> 
</head>    
<body>
    <h1>Payer votre ticket</h1>
<form action = 'traitement_paiment.php' method = "post">
    <label for = "Nom"> : </label>
    <input type = "text" id='Nom' name="nom" required><br><br>

    <label for = "email">Email : </label>
    <input type = "email" id = "email" name ="email" required><br><br>

    <label for ='numero_carte'>Numero de carte de crédit :</label>
    <input type ='text' id='numero_carte' name='numero_carte' required><br><br>
    
    <label for = "expiration_carte">Date d'expiration :</label>
    <input type ="text" id ="expiration_carte" name ="expiration_carte" required><br><br>

    <label for = "cvv"> CVV :</label>
    <input type ="text" id="cvv" name="cvv" required><br><br>

    <input type="submit" value= "payer">
</form> 
</body>
</html>