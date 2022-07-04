<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $isMale=true;
      $isTall=false;
      if ($isMale && $isTall){
        echo "you are tall male";
      } elseif($isMale && !$isTall){
        echo "you are a short male ";
      } elseif (!$isMale && $isTall) {
        echo "you are not male but are tall";
      } else {
        echo "you are not male and not tall";
      }

     ?>
  </body>
</html>
