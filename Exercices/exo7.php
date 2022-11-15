<?php
require_once('Classes/User.php');
$exerciceNumber = 7;

if (isset($_POST['username']) && isset($_POST['role'])) {
  // Check if the role is a valid one
  if (!in_array($_POST['role'], User::ROLES)) {
    $message = 'Rôle invalide.';
  } else {
    $user = new User($_POST['username'], $_POST['role']);
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
      <?php if (isset($message)) echo '<p class="error-message">' . $message . '</p>' ?>
      <form action="" method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required />
        <select name="role" required>
          <option value="administrator">Administrateur</option>
          <option value="member">Membre</option>
          <option value="manager">Gestionnaire</option>
          <option value="other">Autre</option>
        </select>
        <input class="btn" type="submit" value="Valider" />
      </form>
      <?php if (isset($user)) echo '<p>' . $user->get_welcome_message() . '</p>'; ?>
    </div>
  </div>
</body>

</html>