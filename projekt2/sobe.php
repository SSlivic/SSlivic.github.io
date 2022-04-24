<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <!--  <link rel="stylesheet" href="style.css">-->
  </head>
  <body>



<?php
$naslov=$_POST['naslov'];
$podnaslov=$_POST['podnaslov'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["slika"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["slika"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["slika"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["slika"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


$opis=$_POST['opis'];
$cena=$_POST['cena'];

echo "<h1>".$naslov."</h1>";
echo "<h3>".$podnaslov."</h3>";

echo '<img src="uploads/'.$_FILES["slika"]["name"].'" alt="pescara" width="300">';
echo "<p>".$opis."</p>";
echo "<p>".$naslov."</p>";
 ?>
</body>
</html>
