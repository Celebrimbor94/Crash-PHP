<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="getuserinput.php" method="get">
      name :<input type="text" name="UserName">
      <br>
      age :<input type="number" name="age">
      <br>
      <input type="submit">
    </form>
    <br>
    Welcome Lord: <?php echo $_GET["UserName"]  ?>
    <br>
    ,my god you've gotten so much older <?php echo $_GET["age"] ?>
  </body>
</html>
