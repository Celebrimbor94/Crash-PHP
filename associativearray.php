<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="assosiativearray.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>

    <<?php
      $grades=array(" Jim"=>"A+"," pam"=>"B-"," Oscar"=>"C+");
      echo $grades[$_POST["student"]];

     ?>
  </body>
</html>
