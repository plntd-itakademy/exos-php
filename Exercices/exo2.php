<?php
$exerciceNumber = 2;
$title = "Hello World!";
$imageAlt = "Ville de nuit avec les fenêtres des bâtiments éclairées";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ceci est le page de l'exercice <?= $exerciceNumber ?>." />
  <link rel="stylesheet" href="assets/stylesheets/style.css" />
  <script src="https://kit.fontawesome.com/12eb18f8d8.js" crossorigin="anonymous"></script>
  <title>Exercice <?= $exerciceNumber ?></title>
</head>

<body>
  <div class="container">
    <a href="../Exercices" class="btn icon">
      <i class="fa-solid fa-arrow-left"></i>
      Retour au sommaire
    </a>
    <h1 class="title"><?= $title ?></h1>
    <div class="image-container center">
      <img src="assets/images/night_city.jpeg" alt="<?= $imageAlt ?>" />
    </div>
  </div>
</body>

</html>