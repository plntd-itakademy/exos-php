<?php
$title = 'Cours';
require_once('includes/header.php');
require_once('models/CourseModel.php');

// Get all courses to loop
$courseModel = new CourseModel;
$courses = $courseModel->getCourses();
?>
<h1 class="title"><?= $title ?></h1>
<div class="items-container">
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