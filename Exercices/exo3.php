<?php
$exerciceNumber = 3;
$numberImages = [3, 8, 144, 152];
define('IMAGES_PER_LINE', 3);

/**
 * Returns the number of images per images per lines
 *
 * @param int $numberOfImages
 * @return int
 */
function getTotalLines(int $numberOfImages): int
{
  return round($numberOfImages / IMAGES_PER_LINE);
}

/**
 * Returns the remainder of the number of images per the number of lines
 *
 * @param  mixed $numberOfImages
 * @return int
 */
function getNumberLastLineItems(int $numberOfImages): int
{
  // If there is 0 images on the last line, it's because there are only 1 line
  return $numberOfImages % IMAGES_PER_LINE === 0 ? IMAGES_PER_LINE : $numberOfImages % IMAGES_PER_LINE;
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
      <ul>
        <?php foreach ($numberImages as $number) : ?>
          <li>
            Pour <strong><?= $number ?> images</strong>, nous obtenons <strong><?= getTotalLines($number) ?> lignes</strong>.<br />La dernière ligne contient <strong><?= getNumberLastLineItems($number) ?> images</strong>.
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</body>

</html>