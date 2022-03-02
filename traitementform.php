
<?php

/*
var_dump($_GET); 
foreach($_GET as $value)  {
    
    echo $value."<br/>" ;
}
*/

/*
 echo $_GET['user_name']."<br/>" ; 
 echo $_GET['user_prenom']."<br/>" ;
 echo $_GET['user_mail']."<br/>" ;
 echo $_GET['toto']."<br/>" ; */ 

 // Vérifie qu'il provient d'un formulaire
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user_name"]; 
    $email = $_POST["user_mail"];
    
    if (isset($name)){
        die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plaît entrez votre adresse e-mail");
    }
    
    print "Salut " . $name . "!, votre adresse e-mail est ". $email;
}

 ?>