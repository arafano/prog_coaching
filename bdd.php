<
        <?php
            
            $servername = 'localhost';
            $username = 'root';

            $dbname = 'coachingphp';
            
         

            function connexion_bd($servername, $dbname, $username)
            {
            try
                {

                    var_dump($servername);
                    var_dump($dbname);
                    var_dump($username);
                    //$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                    $bdd = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username);
                    var_dump($bdd);

                return $bdd;
                    }
                    catch (Exception $e)
                    {
                        die('Erreur : ' . $e->getMessage());
                            }
            }

            function add_person($nom,$prenom,$age,$sexe,$image)
            {
            
            try {
                
                $bdd=connexion_bd($servername, $dbname, $username);
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
                $donnees=$bdd->query('INSERT INTO listepersonne(nom ,prenom, age, sexe, image)VALUES ("'.$_GET['nom'].'","'.$_GET['prenom'].'","'.$_GET['age'].'","'.$_GET['sexe'].'","'.$_GET['image'].'")');
            
                //var_dump($donnees->fetchAll());
                //$tabs=$donnees->fetchAll();
                
            
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        function select_person($servername,$dbname,$username)
            {
           
            
                $bdd=connexion_bd($servername, $dbname, $username);

                $donnees=$bdd->query('SELECT * from listepersonne');
                //var_dump($donnees->fetchAll());
                $tabs=$donnees->fetchAll();
                return $tabs;
        }
    
    



        ?>
    