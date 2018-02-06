<!DOCTYPE = html>
<html>
<head>

<title>GorillaBlog</title>

<meta charset = utf-8>

<meta name = description  content="gorillablog">
<meta name = keywords content = "gorillablog">
<link rel="stylesheet" href="blogstyle.css">
<script>
  function Selectartcat(catnr) { //haal de artikelen per geselecteerde categorie
    if (catnr!= "") {
        var xhttp = new XMLHttpRequest();
        var myURL = "haalcatartikelen.php?catid=" + catnr;
        xhttp.open("GET", myURL, false);
        xhttp.send();
        var artikeldiv = document.getElementById("divartikelen");
        artikeldiv.innerHTML = xhttp.responseText;
    }
  }
</script>
</head>
<body>
  <div id = "divheader" class = "clsheader">
    <center>GorillaBlog</center>
  </div>
  <div id = "divcontainer">
  <div id = "divmenu" class = "clsmenu">
    <center><b>Filter categorie:</b></center><br>
      <!--<select id = "categorie" name = "selcat" onChange= "Selectartcat(this.value)">-->
      <?php
        include 'haalcatsblog.php';
      ?>

      <input type="radio" name="categorie" value="allecats" onClick = "Selectartcat(this.value)">Alles

      <!--</select>-->

  </div>
  <div id = "divartikelen" class = "clsvartikelen">
  <?php
    include 'haalalleartikelen.php';
  ?>
  </div>
  </div>
</body>
</html>
