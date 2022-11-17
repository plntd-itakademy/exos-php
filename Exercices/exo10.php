<?php
$exerciceNumber = 10;
require_once('./Classes/BookExo10.php');

try {
  $database = new PDO('mysql:host=localhost;dbname=exo10', 'root', 'root', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]);
} catch (Exception $e) {
  die('Erreur lors de la connexion à la base de données.');
}

$query = $database->query('SELECT * FROM book');
$books = $query->fetchAll(PDO::FETCH_CLASS, 'Book');

if (count($books) === 0) {
  for ($i = 1; $i <= 10; $i++) {
    $query = $database->prepare('INSERT INTO book (title, author) VALUES (?, ?)');
    $query->execute(['Titre ' . $i, 'Auteur ' . $i]);
  }
}
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
      <table>
        <thead>
          <th>ID</th>
          <th>Titre</th>
          <th>Auteur</th>
        </thead>
        <tbody>
          <?php foreach ($books as $book) : ?>
            <tr>
              <td><?= $book->getId() ?></td>
              <td><?= $book->getTitle() ?></td>
              <td><?= $book->getAuthor() ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>