<?php

include 'header.php';


if (!isset($_GET['age']) ){


    $_GET['age']="0-100";
   

    
}


if (!isset($_GET['sexe']) ){


    $_GET['sexe']="Les deux";
   

    
}

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

        /*

        $tabpersonnes = array (

            "0"  => array("nom" => "Nom", "prenom" => "Prenom", "sexe" => "Sexe","age" => "Age","profil"=>"Profil"),
            "1"  => array("nom" => "Le Couriaud", "prenom" => "Mathieu", "sexe" => "M","age" => "2","profil"=>"voir profil"),
            "2"  => array("nom" => "Le Duc", "prenom" => "Philippe", "sexe" => "M","age" => "5","profil"=>"voir profil"),
            "3"  => array("nom" => "Le Tallec", "prenom" => "Sylvestre", "sexe" => "M","age" => "20","profil"=>"voir profil"),
            "4"  => array("nom" => "Rasoa", "prenom" => "Clara", "sexe" => "F","age" => "30","profil"=>"voir profil"),
        
        );
        */
        include 'variable.php';
        
        include 'filtre.php';

        //var_dump($tabpersonnes);

        echo '<table>';
        
      
        

        $i=0;
        foreach($tabpersonnes as $tabpersonne)  {
    



        if($i==0) {
            
        echo
                        '<tr>
                        <td>'. 
                        $tabpersonnes[0]['nom']
                        .'</td>
                        <td>'.
                        $tabpersonnes[0]['prenom']."  "
                        .'</td>
                        <td>'.
                        $tabpersonnes[0]['sexe']."  "
                        .'</td>
                        <td>'.
                        $tabpersonnes[0]['age']."  "
                        .'</td>
                        <td>'
                        
                        
                        .$tabpersonnes[0]['profil']."  "
                        
                        ///<a href="your link">.$tabpersonnes[0]['profil']."  "</a>
                        
                        
                        .'</td>
                        <tr/>';
        //$i++;
                    }
        
    else{
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
                            '<tr>
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
                            <td>'.
                            
                            ///.$tabpersonne['profil']."  "



                            '<a href="profilpersonne.php?id='.$i.'">'.$tabpersonnes[0]['profil'].'</a>'

                            .'</td>
                            <tr/>';

                    }
            }

        }
        $i++;
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