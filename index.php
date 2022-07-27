<?php
$json = file_get_contents('assets/data/destination.json');
$arrayDestination = json_decode($json, true);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <!-- <div class="header">
    <div class="logo">
      <img class="foto" src="assets/img/logotravel.png" alt="logo">
    </div>
    <div class="nav">

      <div><a href=""></a>Amerique</div>
      <div><a href=""></a>Europe</div>
      <div><a href=""></a>Asie</div>
      <div><a href=""></a>Océanie</div>
      <div><a href=""></a>Afrique</div>
    </div>
    <div class="caré">
      <img src="assets/img/pictoperso.svg" class="connexion" alt="connexion">
    </div>
  </div> -->

  <div class="box">
    <?php
    foreach ($arrayDestination as $key => $value) {
      if ($key == 0) { ?>
        <div class="card2">
          <img src="assets/img/<?= $value['picture'] ?>" class="cyclistes" alt="3cyclistes" />
          <p><?= $value['title'] ?></p>
          <p> <?= $value['country'] ?></p>
        </div>
      <?php } else { ?>


        <div class="card">
          <img src="assets/img/<?= $value['picture'] ?>" class="city" alt="<?= $value['title'] ?>" />

          <p><?= $value['title'] ?></p>
          <p>
            <?= $value['description'] ?>
          </p>
          <p><?= $value['country'] ?></p>
        </div>



    <?php }
    } ?>
  </div>

  <?php include 'footer.php' ?>

</body>

</html>