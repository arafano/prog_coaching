  <form action="traitement.php" method="GET">
    <div>

    <?php


    ?>
    <label for="age" class="style">Age : </label>
        <select name="age">
          <!-- <option><Select></option> -->
          <option value="0-18" <?php if($_GET["age"]=='0-18') {echo "selected";}?>>0-18</option>
          <option value="19-35" <?php if($_GET["age"]=='19-35') {echo "selected";}?>>19-35</option>
          <option value="36-70" <?php if($_GET["age"]=='36-70') {echo "selected";}?>>36-70</option>
          <option value="70-100" <?php if($_GET["age"]=='70-100') {echo "selected";}?>>70-100</option>
          <option value="0-100" <?php if($_GET["age"]=='0-100') {echo "selected";}?>>0-100</option>

          
        </select>

    </div>    
    <div>

        
        <label for="sexe">Sexe : </label>

        
        <?php

        ?>
        
        <input type="radio" name="sexe" value="M" <?php if($_GET["sexe"]=='M') {echo "checked";}?>/>M
        <input type="radio" name="sexe" value="F" <?php if($_GET["sexe"]=='F') {echo "checked";}?>/>F
        <input type="radio" name="sexe" value="Les deux" <?php if($_GET["sexe"]=='Les deux') {echo "checked";}?>/>Les deux

    </div>

   
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>

</form>
  