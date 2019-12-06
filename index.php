<!DOCTYPE html>
<html lang="en">
<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a "Boolean", altrimenti stampare
una stringa rossa. -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <?php
  $psw = $_GET['password'];
  $pswMatch = false;
  if ($psw === "Boolean") {
    $pswMatch = true;
  }

  ?>


</head>

<body>
  <?php

  if ($pswMatch) {
    ?>
    <h1 style="color:green">Password
      <?php
        echo $psw;
        ?>
      Verificata</h1>
  <?php

  } else {
    ?>
    <h1 style="color:red">Password Non Verificata</h1>
  <?php
  }

  ?>


</body>

</html>