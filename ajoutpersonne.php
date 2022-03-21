<?php
try {
    $dbname = 'coachingphp';
    
    $dbh = new PDO('mysql:host=localhost;dbname='.$dbname, 'root', '');
    /*
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    */
    //$nom="dfsdfdsfds";
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $age = $_GET['age'];
    $sexe = $_GET['sexe'];
    $image = $_GET['image'];

    /*
    $prenom="hghfjhfjht";
    $age="rerzerzet";
    $sexe="fdfsdgsfsds";
    $image="http://localhost/prog_coaching/img/2.jpg";
    */
    //$donnees=$dbh->query('INSERT INTO listepersonne(nom ,prenom, age, sexe, image)VALUES ("'.$nom.'","'.$prenom.'","'.$age.'","'.$sexe.'","'.$image.'")');
    $donnees=$dbh->query('INSERT INTO listepersonne(nom ,prenom, age, sexe, image)VALUES ("'.$_GET['nom'].'","'.$_GET['prenom'].'","'.$_GET['age'].'","'.$_GET['sexe'].'","'.$_GET['image'].'")');

    //var_dump($donnees->fetchAll());
    //$tabs=$donnees->fetchAll();
    

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>