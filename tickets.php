<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project MyBand</title>
    <link rel="stylesheet" href="tickets.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php
    // connect to database
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'myband');
    // define how many results you want per page
    $results_per_page = 5;
    // find out the number of results stored in database
    $sql='SELECT * FROM alphabet';
    $result = mysqli_query($con, $sql);
    $number_of_results = mysqli_num_rows($result);
    // determine number of total pages available
    $number_of_pages = ceil($number_of_results/$results_per_page);
    // determine which page number visitor is currently on
    if (!isset($_GET['page'])) {
      $page = 1;
    } else {
      $page = $_GET['page'];
    }
    // determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page-1)*$results_per_page;
    // retrieve selected results from database and display them on page
    $sql='SELECT * FROM alphabet1 LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)) {
      echo $row ['id'] . ' ' . $row['alphabet']. '<br>';
    }
    // display the links to the pages
    for ($page=1;$page<=$number_of_pages;$page++) {
      echo '<a href="tickets.php?page=' . $page . '">' . $page . '</a> ';
    }
    ?>
    <div class="tvak">

    </div>
    <!-- <nav class="navigatie">
      <a href="index.php" class="sitemix"><b>Sitemix</b></a>
      <a href="index.php" class="item">home</a>
      <a href="tickets.php" class="item">tickets</a>
      <a href="foto.php" class="item">foto's</a>
      <a href="nieuws.php" class="item">nieuws</a>
      <a href="contact.php" class="item">contact</a>
    </nav> -->
    <!-- <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2>
    <h2>ticket example</h2> -->

  <?php
    include 'footer.php';
   ?>
