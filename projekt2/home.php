<!--include("index.php");
?>-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
<br>  <textarea  name="opis" rows="5" cols="55"></textarea><br><hr><br>
Broj osoba:<br>
jedna osoba <input type="checkbox" name="osoba" value="1 osoba">
<br>dve osobe <input type="checkbox" name="osoba" value="2 osobe">
 <br> tri osobe <input type="checkbox" name="osoba" value="3 osobe">
 <br>četri osobe <input type="checkbox" name="osoba" value="4 osobe">
<br>pet osoba  <input type="checkbox" name="osoba" value="5 osoba">
<br>šest osoba  <input type="checkbox" name="osoba" value="6 osoba"><br><hr><br>
Kupatilo:
<br> privatno kupatilo <input type="checkbox" name="kupatilo" value="privatno kupatilo">
<br> skupno kupatilo <input type="checkbox" name="kupatilo" value="skupno kupatilo"><br><hr><br>
Wi-Fi: <br>
ima Wi-Fi <input type="radio" name="wifi" value="ima Wi-Fi"><br>
nema Wi-Fi <input type="radio" name="wifi" value="nema Wi-Fi"><br><hr><br>
Bed and Breakfast:
<br> da <input type="radio" name="bandb" value="Bed and Breakfast">
<br> ne <input type="radio" name="bandb" value="No Bed and Breakfast"><br><hr><br>
Smart TV:
<br>da<input type="radio" name="tv" value="smart TV">
<br>ne<input type="radio" name="tv" value="no smart TV"><br><hr><br>
Klima: <br>
ima klime <input type="radio" name="klima" value="Ima klime">
<br>nema klime <input type="radio" name="klima" value="nema klime"><br><hr><br>

Mapa: <br>
//to DO maps and rename pictures


  <!--<input id="opis" type="textarea" name="opis" value="" ><br>-->
  <br>  <input type="text" name="cena" value="" placeholder="cena"><br>
    <br><input type="submit" name="submmit" value="pošalji"><br>
  </form>



  </body>
</html>
