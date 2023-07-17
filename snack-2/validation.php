<?php
$name = $_GET['name'];
$age = $_GET['age'];
$email = $_GET['email'];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div>Il nome è: <?= $name ?></div>
  <div>L'età è: <?= $age ?></div>
  <div>La mail è: <?= $email ?></div>
</body>

</html>