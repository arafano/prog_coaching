<html>
<head>
  <title>...</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/*
//var_dump($_GET); 
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
    
    if (!isset($name)){
        die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plaît entrez votre adresse e-mail");
    }
    
    if (isset($_POST['pwd']))
{
    $_POST['pwd'] = 'Nandrianina';
    //comparing the user input with the good password
    if ($_POST['pwd'] == 'Nandrianina')
    
    {


        /*
        foreach($_POST as $value)  {
    
            echo $value."<br/>" ;
        }
        */
    
        $tabpersonnes = array (
            "0"  => array("Nom" => "Le Couriaud", "Prenom" => "Mathieu", "sexe" => "M","Age" => "2"),
            "1"  => array("Nom" => "Le Duc", "Prenom" => "Philippe", "sexe" => "M","Age" => "5"),
            "2"  => array("Nom" => "Le Tallec", "Prenom" => "Sylvestre", "sexe" => "M","Age" => "20"),
            "3"  => array("Nom" => "Rasoa", "Prenom" => "Clara", "sexe" => "F","Age" => "30"),
        
        );
        
        //echo '<pre>';

        echo '<table>';
        foreach($tabpersonnes as $tabpersonne)  {
    
            //echo $value."<br/>" ;
   
                
                echo
                '<tr class="tableau">
                <td>'. 
                $tabpersonne['Nom']."  "
                .'</td>
                <td>'.
                $tabpersonne['Prenom']."  "
                .'</td>
                <td>'.
                $tabpersonne['sexe']."  "
                .'</td>
                <td>'.
                $tabpersonne['Age']."  "
                .'</td>
                <tr/>';


        }

        echo '</table>';

        //echo '</pre> <br/>';
        
        //print_r($tabpersonnes[0]);


        //echo 'Password is good <br/>';
    }
    else
    {
        /*echo "dfdsjfkdsjfklsd";*/
        $message="password do not match";
        header('Location: http://localhost/prog_coaching/index.php?msg=1');
        
        /*
        exit();
        echo "entrez le bon mot de passe";
    */
    }
}



    /*print "Salut " . $name . "!, votre adresse e-mail est ". $email;*/

  

}


 ?>
 
</body>
</html>