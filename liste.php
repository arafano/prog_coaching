<?php
try {
 
    include 'bdd.php';
    $tabs=select_person($servername,$dbname,$username);
    $i=0;
        foreach($tabs as $tab)  {
            
                //print_r($tab);
            
                echo '<table>'; 
                    
                echo
                '<tr>
                <td>'. 
                $tab['nom']."  "
                .'</td>
                <td>'.
                $tab['prenom']."  "
                .'</td>
                <td>'.
                $tab['sexe']."  "
                .'</td>
                <td>'.
                $tab['age']."  "
                .'</td>
                <td>'.''
                
                ///.$tabpersonne['profil']."  "



                //'<a href="profilpersonne.php?id='.$i.'">'.$tabpersonnes[0]['profil'].'</a>'

                .'</td>
                <tr/>';


                }
                echo '</table>';

    /*
    $nom='Petit';
    $prenom='beurre';
    $age=36;
    $sexe='M';
    */
    $image='http://localhost/prog_coaching/img/2.jpg';
    $donnees=add_person($nom,$prenom,$age,$sexe,$image);


} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>