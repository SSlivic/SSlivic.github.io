
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>vpis</title>
    <style media="screen">
    .f1{border:3px;
    padding: 30px;}
      #opis{width: 100px; height: 50px;}
    </style>
  </head>
  <body>
  <?php  echo "Pozdravljeni ".$_POST ["username"]; ?>

  <form class="f1" action="sobe.php" method="post" enctype="multipart/form-data"><br>
  <br>  <input type="text" name="naslov" value="" placeholder="naslov"><br>
<br><input type="text" name="podnaslov" value=""  placeholder="podnaslov"><br>
<br><input type="file" name="slika" value=""><br>
  <br>  <input id="opis" type="textarea" name="opis" value="" ><br>
  <br>  <input type="text" name="cena" value="" placeholder="cena"><br>
    <br><input type="submit" name="submmit" value="pošalji"><br>
  </form>


  </body>
</html>

