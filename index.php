<?php
  include_once('functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson-16</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Галлерея поздравительных открыток</h1>
  <div class="container">
  <div class="row align-items-center">
  <?php
    showPicture();
  ?>
  </div>
  </div>
</body>
</html>


