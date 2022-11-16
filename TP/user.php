<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: users.php');
    exit;
}

require_once('includes/database.php');
require_once('classes/User.php');

$query = $database->prepare('SELECT * FROM user WHERE id = ?');
$query->execute([$_GET['id']]);
$user = $query->fetchAll(PDO::FETCH_CLASS, 'User');

if (count($user) > 0) {
    $user = $user[0];
} else {
    header('Location: users.php');
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