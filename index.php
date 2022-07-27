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

  <div class="header">
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


  </div>
  <div class="container">
    <?php
    foreach ($arrayDestination as $key => $value) {
      if ($key == 0) { ?>
        <div class="test kebumen">
          <img class="boucle" src="assets/img/<?= $value['picture'] ?>">

          <div class="card-title">
            <?= $value['title']  ?>
          </div>
          <div class="card-body">
            <?= $value['description'] ?>
          </div>
          <p>
            <?= $value['country']  ?>
          </p>
        </div>
      <?php } else { ?>


        <div class="test">
          <img class="Gboucle" src="assets/img/<?= $value['picture'] ?>">

          <div class="card-title">
            <?= $value['title']  ?>
          </div>
          <div class="card-body">
            <?= $value['description'] ?>
          </div>
          <p>
            <?= $value['country']  ?>
          </p>
        </div>



    <?php }
    } ?>
  </div>
</body>

</html>