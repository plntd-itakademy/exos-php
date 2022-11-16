<?php
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: courses.php');
    exit;
}

require_once('includes/database.php');
require_once('classes/Course.php');

$query = $database->prepare('SELECT * FROM user INNER JOIN course ON user.id = course.user_id WHERE course.id = ?');
$query->execute([$_GET['id']]);
$course = $query->fetchAll(PDO::FETCH_CLASS, 'Course');

if (count($course) > 0) {
    $course = $course[0];
} else {
    header('Location: courses.php');
    exit;
}

$title = $course->code;
require_once('includes/header.php');
?>
<h1 class="title"><?= $title ?></h1>
<div class="card center user">
    <img class="thumbnail" src="<?= $course->getThumbnailPath() ?>" alt="Photo du cours">
    <p><?= $course->getShortenName() ?></p>
    <p>Par <strong><?= $course->getFirstLastName() ?></strong></p>
    <p><?= $course->description ?></p>
</div>
<?php require_once('includes/footer.php'); ?>