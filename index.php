<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>e-commerce</title>
    <!--Lien vers le fichier css-->
    <link href="style.css" rel="stylesheet" type="text/css" />
    <!--Lien Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Lien Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  </head>
  <body>

    <!--Haut de page-->
    <header>
      <div></div>
      <div id="logo">
        <a href="/">Logo du site</a>
        
      </div>
      <div id="client">
        <a href="pages/client.html"><i class="fas fa-user"></i></a>
        <a href="pages/panier.html"><i class="fas fa-shopping-bag"></i></a>
        
      </div>
    </header>

    <?php
      include ("pages/accueil.html");
    ?>
    
    <!--Pied de page-->
    <footer>
      <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
       - CGV
    </footer>
    
    <!--Lien vers le fichier javascript-->
    <script src="script.js"></script>
  </body>
</html>