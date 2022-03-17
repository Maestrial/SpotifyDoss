<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./inscription.css">
</head>
<body>
<header>
      <div class="headerLeft">
        <img class="logoTop" src="./Images/statistique.png" alt="logo de statistiques" />

        <p class="txtTop ">S'inscrire ci-dessous</p>

        <img class="logoTop" src="./Images/statistique.png" alt="logo de statistiques" />
      </div>
      <div class="headerRight">
        <a href="./index.php" class="txtBoutton">Accueil</a>
        <a href="./connexion.php" class="txtBoutton ">Se Connecter</a>
      </div>
</header>
<section>
  <h1>Formulaire d'inscription</h1>
<form method="POST" action="" align="center">
    <input type="text" name="identifiant" placeholder="Identifiant"autocomplete="off" class="Boutton"><br>
    <input type="text" name="mail"  placeholder="Adresse email"autocomplete="off" class="Boutton" ><br>
    <input type="password" name="mdp"  placeholder="Mot de passe"class="Boutton"><br>
    <input type="password" name="mdpConfirm"  placeholder="Confirmer le mot de passe"class="Boutton">
    <br><br>
    <input type="submit" name="confirmer" class="bouttonConfirm">   
</form>
</section>
</body>
</html>