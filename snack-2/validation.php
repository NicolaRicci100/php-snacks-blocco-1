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
  <?php if ((is_numeric(trim($age))) && strlen(trim($name)) > 3 && str_contains($email, '@') && str_contains($email, '.')) : ?>
    <h2 class="text-success text-center m-5">ACCESSO RIUSCITO</h2>
  <?php else : ?>
    <h2 class="text-danger text-center m-5">ACCESSO NEGATO</h2>
  <?php endif ?>
</body>

</html>