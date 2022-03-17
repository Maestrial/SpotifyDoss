<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./poster.css">
</head>
<body>
<header>
      <div class="headerLeft">
        <img class="logoTop" src="./Images/statistique.png" alt="logo de statistiques" />

        <p class="txtTop ">Veuillez remplir cette Publication</p>

        <img class="logoTop" src="./Images/statistique.png" alt="logo de statistiques" />
      </div>
      <div class="headerRight">
        <a href="./index.php" class="txtBoutton">Accueil</a>
        <a href="./connexion.php" class="txtBoutton ">Deconnexion</a>
      </div>
</header>
<section>
  <h1>Publication</h1>
<form method="POST" action="" align="center">
    <input type="text" name="artiste" placeholder="Artiste"autocomplete="off" class="Boutton"><br>
    <input type="text" name="musique"  placeholder="Musique"autocomplete="off" class="Boutton" ><br>
    <input type="text" name="album"  placeholder="Album"class="Boutton"><br>
    <input type="text" name="commentaire"  placeholder="Commentaire"class="bouttonCom">
    <br><br>
    <input type="submit" name="confirmer" class="bouttonConfirm">   
</form>
</section>
</body>
</html>