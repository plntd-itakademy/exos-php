<?php
require_once('Classes/Book.php');
$exerciceNumber = 9;

$book = new Book(1, 'Titre du livre');
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
      <span>Retour au sommaire</span>
    </a>
    <h1 class="title">Exercice <?= $exerciceNumber ?></h1>
    <div class="card center">
      <p><strong>ID :</strong> <?= $book->getId() ?></p>
      <p><strong>Titre :</strong> <?= $book->getTitle() ?></p>
    </div>
  </div>
</body>

</html>