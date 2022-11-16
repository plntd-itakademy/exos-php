<?php
$title = 'Utilisateurs';
require_once('includes/header.php');
require_once('includes/database.php');
require_once('classes/User.php');

$query = $database->query('SELECT id, first_name, last_name, role, thumbnail_url FROM user');
$users = $query->fetchAll(PDO::FETCH_CLASS, 'User');
?>
<h1 class="title"><?= $title ?></h1>
<div class="users-container">
    <?php for ($i = 1; $i <= count($users); $i++) : ?>
        <a href="user.php?id=<?= $users[$i - 1]->id ?>" class="card item">
            <img class="thumbnail" src="<?= $users[$i - 1]->getThumbnailPath() ?>" alt="Photo de l'utilisateur">
            <p><?= $users[$i - 1]->getFirstLastName() ?></p>
            <p><?= $users[$i - 1]->role ?></p>
        </a>
        <?php //$i % 3 === 0 ? '<br />' : ''; If we want to break a line each 3 items in PHP
        ?>
    <?php endfor ?>
</div>
<?php require_once('includes/footer.php'); ?>