
<?php


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    
    if (isset($_POST['login']))
{
    //comparing the user input with the good password
    if ($_POST['login'] == 'Nandrianina')
    {
        echo 'Login is good';
    }
    else
    {
        die("entrez le bon login");
    }
}

    if (isset($_POST['pwd']))
    {
        //comparing the user input with the good password
        if ($_POST['pwd'] == 'Nandrianina123')
        {
            echo 'Password is good';
        }
        else
        {
            die("entrez le bon mot de passe");
        }
    }



    /*print "Salut " . $name . "!, votre adresse e-mail est ". $email;*/

    foreach($_POST as $value)  {
    
        echo $value."<br/>" ;
    }


}

 ?>