<?php
  include 'header.php';
 ?>

     <nav class="navigatie">
      <a href="#" class="sitemix"><b>Sitemix</b></a>
      <a href="#" class="item">home</a>
      <a href="tickets.php" class="item">tickets</a>
      <a href="foto.php" class="item">foto's</a>
      <a href="nieuws.php" class="item">nieuws</a>
      <a href="contact.php" class="item">contact</a>
</nav>

<form action="search.php" method="POST">
  <input type="text" name="search" placeholder="Search">
  <button type="submit" name="submit-search">Search</button>
</form>
<br>

<div class="article-container">
    <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn, $sql);
        $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
          while ($row = mysqli_fetch_assoc($result)){
              echo "<div class='article-box'>
                  <h3>".$row['a_title']."</h3>
                  <p>".$row['a_text']."</p>
                  <p>".$row['a_date']."</p>
                  <p>".$row['a_author']."</p>
              </div>";
          }
        }
     ?>
</div>
<?php
  include 'footer.php';
 ?>
