<?php

$verb = $_SERVER['REQUEST_METHOD'];

if  ($verb == "POST") {
  if (isset($_GET['name']) and isset($_GET['artikel']) and isset($_GET['catid'])) {
    $artnaam = $_GET['name'];
    $artinhoud = $_GET['artikel'];
    $catid = $_GET['catid'];

    include 'connectdb.php';

    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }
    else {
      $sql = "INSERT INTO Artikelen (Artikelnaam, Artikelinhoud, catid) VALUES ('$artnaam', '$artinhoud', $catid)";
      if ($conn->query($sql)===TRUE){
        echo "artikel succesvol geplaatst";
      }
      else {
        echo $sql;
      }
    }
  }
  else {
    http_response_code(400);
  }
}

 ?>
