<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="postget.php" method="post">
      password: <input type="password" name="password"> <br>
    </form>
    <br><br>

    <?php echo $_POST["password"];  ?>

  </body>
</html>
