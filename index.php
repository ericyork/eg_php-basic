<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>eg_php-basic</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div>
      <h2>Have we DB?</h2>
      <?php include "config.php" ?>
    </div>
    <div>
      <h2>Display some data</h2>
      <?php
        $query = "SELECT make, model, year FROM cars";
        $result = $mysqli->query($query);
        /* associative array */
        $row = $result->fetch_array(MYSQLI_ASSOC);
        printf ("%d %s %s\n", $row["year"], $row["make"], $row["model"]);
        echo "<p>My first car is a " . $row["year"] . " " . $row["make"] . " " . $row["model"] . ". </p>";
      ?>
    </div>
  </body>
</html>
