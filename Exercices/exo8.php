<?php
require_once('Classes/Professor.php');
$exerciceNumber = 8;

if (isset($_POST['name']) && isset($_POST['courseName'])) {
  $professor = new Professor($_POST['name'], $_POST['courseName']);
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
      <form action="" method="POST">
        <input type="text" name="name" placeholder="Nom du professeur" required />
        <input type="text" name="courseName" placeholder="Nom du cours" required />
        <input class="btn" type="submit" value="Valider" />
        <?= isset($professor) ? '<p>Bonjour, <strong>' . $professor->name . '</strong>. Votre cours est <strong>' . $professor->courseName . '</strong>.</p>' : ''; ?>
      </form>
    </div>
  </div>
</body>

</html>