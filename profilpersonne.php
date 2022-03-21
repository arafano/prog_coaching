
    <?php
include 'variable.php'; 

include 'header.php';


?>

<?php
    var_dump($_GET);
	$id = $_GET['id'];
        echo 
        $tabpersonnes[$id]["nom"].'<br>'
        .$tabpersonnes[$id]["prenom"].'<br>'
        .$tabpersonnes[$id]["age"].'<br>'
        .$tabpersonnes[$id]["sexe"].'<br>'
        //.$tabpersonnes[$id]["image"].'<br>'
        .'<img src="'.$tabpersonnes[$id]['image'].'">';
        ?>

