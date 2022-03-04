<html>
<head>
  <title>...</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php


 if (isset($_POST) || isset($_GET))  {
    //$name = $_POST["user_name"]; 
    //$email = $_POST["user_mail"];


    /*
    if (!isset($name)){
        die("S'il vous plaît entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plaît entrez votre adresse e-mail");
    }
    */


    $_POST['pwd'] = 'Nandrianina';
    if (isset($_POST['pwd']))

{
   
    if ($_POST['pwd'] == 'Nandrianina')
    
    {


        $tabpersonnes = array (

            "0"  => array("nom" => "Nom", "prenom" => "Prenom", "sexe" => "Sexe","age" => "Age"),
            "1"  => array("nom" => "Le Couriaud", "prenom" => "Mathieu", "sexe" => "M","age" => "2"),
            "2"  => array("nom" => "Le Duc", "prenom" => "Philippe", "sexe" => "M","age" => "5"),
            "3"  => array("nom" => "Le Tallec", "prenom" => "Sylvestre", "sexe" => "M","age" => "20"),
            "4"  => array("nom" => "Rasoa", "prenom" => "Clara", "sexe" => "F","age" => "30"),
        
        );
        
        include 'filtre.php';

        //var_dump($tabpersonnes);

        echo '<table>';
        foreach($tabpersonnes as $tabpersonne)  {
    
   
            //var_dump($_GET);
            //echo $tabpersonne['sexe'];
            if(  $_GET['sexe'] == "Les deux" ||
                 $_GET['sexe'] == $tabpersonne['sexe']) 
            {

                //echo $_GET['age'];

                $trancheAge=explode('-', $_GET['age']);

                echo $_GET['age'];
                echo $trancheAge[0];
                echo $trancheAge[1];
                if(  $tabpersonne['age'] >= $trancheAge[0] &&
                $tabpersonne['age'] <= $trancheAge[1]) 
                    {

                            /*
                            if(  $_GET['age'] == $tabpersonne['age'] ||
                            $_GET['age'] == $tabpersonne['sexe']) 
                        */
                            echo
                            '<tr class="tableau">
                            <td>'. 
                            $tabpersonne['nom']."  "
                            .'</td>
                            <td>'.
                            $tabpersonne['prenom']."  "
                            .'</td>
                            <td>'.
                            $tabpersonne['sexe']."  "
                            .'</td>
                            <td>'.
                            $tabpersonne['age']."  "
                            .'</td>
                            <tr/>';

                    }
            }

        }

        echo '</table>';

  
        if(isset($_POST['submit'])){


        }

    }
    else
    {
       
        $message="password do not match";
        header('Location: http://localhost/prog_coaching/index.php?msg=1');
        
   
    }
}




  

}


 ?>
 
</body>
</html>