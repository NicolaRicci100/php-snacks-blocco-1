<?php
$games = [
  [
    'location' => 'Madison Square Garden',
    'teams' => ['New York Knicks', 'Boston Celtics'],
    'points' => '115 - 121'
  ],
  [
    'location' => 'Little Caesars Arena',
    'teams' => ['Miami Heat', 'Boston Celtics'],
    'points' => '109 - 116'
  ],
  [
    'location' => 'United Center',
    'teams' => ['Chicago Bulls', 'Boston Celtics'],
    'points' => '104 - 111'
  ]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div>
    <?php for ($i = 0; $i < count($games); $i++) : ?>
      <div>
        <strong><?= $games[$i]['location'] ?> - </strong><?= $games[$i]['teams'][00] . ' vs ' . $games[$i]['teams'][01] ?> | <?= $games[$i]['points'] ?>
      </div>
    <?php endfor ?>
  </div>
</body>

</html>