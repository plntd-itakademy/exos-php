<?php
// Redirect the user if the requested ID is invalid
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: users.php');
    exit;
}

require_once('models/UserModel.php');
$userModel = new UserModel;
$user = $userModel->getUserById($_GET['id']);

// Redirect the user if there is no user found
if (!$user) {
    header('Location: courses.php');
    exit;
}

$title = $user->getFirstLastName();
require_once('includes/header.php');
?>
<h1 class="title"><?= $title ?></h1>
<div class="card center user">
    <img class="thumbnail" src="<?= $user->getThumbnailPath() ?>" alt="Photo de l'utilisateur">
    <p><strong>Rôle :</strong> <?= $user->role ?></p>
    <p><strong>Adresse :</strong> <?= $user->address ?></p>
    <p><strong>Téléphone :</strong> <?= $user->phone ?></p>
</div>
<?php require_once('includes/footer.php'); ?>