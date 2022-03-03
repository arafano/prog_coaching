<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
  <form action="traitementform.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="user_prenom">
    </div>

    <div>
        <label for="mail">e-mail:</label>
        <input type="email" id="mail" name="user_mail">
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