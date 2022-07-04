<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="madlibsgame.php" method="get">
      Color: <input type="text" name="color"> <br>
      Plural Noun: <input type="text" name="pluralNoun"> <br>
      Anime character: <inpt type="text" name="animeCharacter"> <br>
      <input type="submit">
    </form>
    <br><br>
    <<?php
      $color= $_GET["color"];
      $pluralNoun= $_GET["pluralNoun"];
      $animeCharacter= $_GET["animeCharacter"];
      echo " roses are $color  <br>";
      echo "$pluralNoun are blue <br>";
      echo "I admire $animeCharacter <br>";
     ?>
  </body>
</html>
