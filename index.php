<?php
if(!isset($_COOKIE['db-auth'])) {
  header('Location: '. "pinboard.php");
}

 ?>

<!doctype html>

<html lang="de">
<head>
  <meta charset="utf-8">

  <title>Becker Alarm</title>
  <meta name="description" content="Becker Alarm">
  <meta name="author" content="Denis Becker">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <link rel="stylesheet" href="css/jquery-ui.structure.css">
  <link rel="stylesheet" href="css/jquery-ui.theme.css">




  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

</head>


<body>
  <?php include_once 'include/config.php'; ?>
  <?php include_once 'include/db.php'; ?>
  
  <?php include 'include/menu.php'; ?>

  <div class="maindiv" id="maindiv">
    <?php include 'include/main.php'; ?>
    <?php include 'include/events.php'; ?>
    <?php include 'include/cams.php'; ?>
    <?php include 'include/setup.php'; ?>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.mobile-1.4.5.js"></script>
  <script src="js/myscripts.js"></script>


</body>
</html>
