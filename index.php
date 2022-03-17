<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./styles.css">
</head>

<body>
  <div id="all_app">
    <header>
      <div class="headerLeft">
        <img class="logoTop" src="./Images/statistique.png" alt="logo de statistiques" />

        <p class="txtTop ">Bienvenue </p>

        <img class="logoTop" src="./Images/statistique.png" alt="logo de statistiques" />
      </div>
      <div class="headerRight">
      <a href="./inscription.php" class="txtBoutton ">S'inscrire</a>
        <a href="./connexion.php" class="txtBoutton">Se Connecter</a>
     
      </div>
    </header>
    <div class="nav">
      <nav>
        <div class="navLeft">
          <ul>
            <li class="boutonHome">
            <a href="#" class="boutton txtBoutton boutonHome"><ion-icon name="home-outline" class="imgBoutton "></ion-icon>Home</a>
            </li>
            <li><a href="#" class="boutton txtBoutton"><ion-icon name="albums-outline" class="imgBoutton "></ion-icon>Top Albums</a></li>
            <li><a href="#" class="boutton txtBoutton"><ion-icon name="disc-outline" class="imgBoutton"></ion-icon>Top Musics</a></li>
            <li><a href="#" class="boutton txtBoutton boutton4"><ion-icon name="timer-outline" class="imgBoutton"></ion-icon>Temps D'écoute</a></li>
          </ul>
        </div>
        <div class="navRight">
          <img class="disque" src="./Images/CD.png" alt="Image d'un vinyle">
        </div>
      </nav>
    </div>
  
  <div class="rest_app">


  </div>
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>