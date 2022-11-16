<?php
$title = 'Cours';
require_once('includes/header.php');
require_once('includes/database.php');
require_once('classes/Course.php');

$query = $database->query('SELECT * FROM course');
$courses = $query->fetchAll(PDO::FETCH_CLASS, 'Course');
?>
<h1 class="title"><?= $title ?></h1>
<div class="users-container">
    <?php foreach ($courses as $course) : ?>
        <a href="course.php?id=<?= $course->id ?>" class="card item">
            <img class="thumbnail" src="<?= $course->getThumbnailPath() ?>" alt="Photo du cours">
            <h2><?= $course->code ?></h2>
            <p><?= $course->getShortenName() ?></p>
            <p>Par <strong><?= $course->trigram ?></strong></p>
        </a>
    <?php endforeach ?>
</div>
<?php require_once('includes/footer.php'); ?>