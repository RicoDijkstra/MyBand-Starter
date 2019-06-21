<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project MyBand</title>
    <link rel="stylesheet" href="contact.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  </head>
  <body>

    <nav class="navigatie">
      <a href="index.php" class="sitemix"><b>Sitemix</b></a>
      <a href="index.php" class="item">home</a>
      <a href="tickets.php" class="item">tickets</a>
      <a href="foto.php" class="item">foto's</a>
      <a href="nieuws.php" class="item">nieuws</a>
      <a href="contact.php" class="item">contact</a>
    </nav>
    <div class="tvak">
      <h2 class="fn">First Name:</h2>
      <h2 class="ln">Last Name:</h2>
      <h2 class="em">E-mail:</h2>
      <h2 class="qs">Question:</h2>
      <form class="form" action="index.html" method="post">
        <input type="text" class="first" name="First Name" placeholder="Piet">
        <input type="text" class="last" name="Last Name" placeholder="Jan">
        <input type="text" class="email" name="E-mail" placeholder="example@example.com">
        <textarea placeholder="Your question" rows="8" cols="80" class="textarea"></textarea>
      </form>
    </div>
    <?php
      include 'footer.php';
     ?>
