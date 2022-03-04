<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
  <form action="traitement.php" method="GET">
    <div>

    <label for="age">Age : </label>
        <select name="age">
          <!-- <option><Select></option> -->
          <option value="0-18">0-18</option>
          <option value="19-35">19-35</option>
          <option value="36-70">36-70</option>
          <option value="70-100">70-100</option>
          
        </select>

    </div>    
    <div>
        <label for="sexe">Sexe : </label>
        <input type="radio" name="sexe" value="M">M
        <input type="radio" name="sexe" value="F">F
        <input type="radio" name="sexe" value="Les deux">Les deux

    </div>

    
    <?php
    /*
    if($_GET['msg'] == 1) {
            echo "erreur 1 car blabla";
            }
   */
            ?>
   
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>

</form>
  </body>
</html>