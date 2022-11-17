<?php
// Redirect the user if the requested ID is invalid
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: courses.php');
    exit;
}

require_once('models/CourseModel.php');
$courseModel = new CourseModel;
$course = $courseModel->getCourseById($_GET['id']);

// Redirect the user if there is no course found
if (!$course) {
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