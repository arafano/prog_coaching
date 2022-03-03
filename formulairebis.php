<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
  <form action="traitementformbis.php" method="post">
    <div>
        <label for="login">Connexion :</label>
        <input type="text" name="login">
    </div>
    
    <div>
        <label for="pwd">Mot de passe</label>
        <input type="password" name="pwd" placeholder="Password" required />

    </div>


    <div class="button">
        <button type="submit">Envoyer</button>
    </div>

</form>
  </body>
</html>