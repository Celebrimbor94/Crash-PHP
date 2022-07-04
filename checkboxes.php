<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="checkboxes.php" method="post">
       apples: <input type="checkbox" name="fruites[]" value="apple"><br>
       oranges: <input type="checkbox" name="fruites[]" value="oranges"><br>
       pears: <input type="checkbox" name="fruites[]" value="pears"><br>
        <input type="submit">
    </form>
    <?php
      $fruites=$_POST["fruites"];
      echo $fruites[1];

     ?>
  </body>
</html>
