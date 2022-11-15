<?php
require_once('Classes/Bank.php');
$exerciceNumber = 4;
$bank = new Bank();
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
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Montant</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($bank->transactions as $key => $transaction) : ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><?= $bank->format_amount($transaction['amount']) ?></td>
              <td><?= $transaction['type'] === 'deposit' ? 'Dépôt' : 'Retrait' ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <p>
        <span>Le solde bancaire est de</span>
        <strong><?= $bank->format_amount($bank->get_total_amount()) ?></strong>
      </p>
      <p>
        <span>Le montant moyen des dépôts est de</span>
        <strong><?= $bank->format_amount($bank->get_transactions_average('withdrawal')) ?></strong>
      </p>
      <p>
        <span>Le montant moyen des retraits est de</span>
        <strong><?= $bank->format_amount($bank->get_transactions_average('deposit')) ?></strong>
      </p>
    </div>
  </div>
</body>

</html>