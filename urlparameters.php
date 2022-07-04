<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="urlparameters.php" method="get">
      Name: <input type="text" name="name"> <br>
      <input type="submit">
    </form>
    <br><br>
    <?php
      echo $_GET["name"];
     ?>
  </body>
</html>
