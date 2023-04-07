<html>
  <head>
    <title>inscription</title>
        <link href="index.css" rel="stylesheet">
  </head>
  <body>
   

    <form action="action_page.php" method = "POST">
         <div class="container">
    <h1>Inscription</h1>
    
    <hr>
     <label for="prenom"><b>Prenom</b></label>
    <input type="text" placeholder="Enter Prenom" name="prenom" id="prenom" required>

        <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="Enter Entrer Nom" name="nom" id="nom" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    
    <button type="submit" class="registerbtn">Créer Compte</button>
  </div>

  <div class="container signin">
    <p>Avez vous un compte ? <a href="login.php">Compte</a>.</p>
  </div>
</form>
  </body>
</html>
