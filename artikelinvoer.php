<!DOCTYPE = html>
<html>
<head>
<title>GorillaBlog</title>

<meta charset = utf-8>

<meta name = description  content="gorillablog"

<meta name = keywords content = "gorillablog">
</head>
<style>
  body {
  font-family   : Arial, Helvetica, sans-serif;
  background: #FFFFEEBB;
}

#divheader {
  background: #EECC99;
  color     : #000088;
  border-radius: 20px;
  width   : 70%;
  padding : 25px;
  margin  : 5px auto;
  font-family : arial, sans-serif;
  font-weight : bold;
  font-size: 40px;
}

#divinhoud {
  background: #FFEECC;
  color     : #000000;
  position : absolute;
  border-radius: 20px;
  left      : 15%;
  right     : 15%;
  top       : 15%;
  //float   : center;
  padding : 25px;
  //margin  : 5px auto;
  border-width  : 1px;
  border-style : solid;
}

.textarea {
  //width :100%;
  max-width: 100%;
}
</style>

<script language= JavaScript" type="text/javascript">

var shortcuts = {
    "gr" : "Groningen",
    "cg" : "Code Gorilla",
    "os" : "Olympische Spelen"
}

window.onload = function() {
    var ta = document.getElementById("artContent");
    var timer = 0;
    var re = new RegExp("\\b(" + Object.keys(shortcuts).join("|") + ")\\b", "g");

    update = function() {
      ta.value = ta.value.replace(re, function($0, $1) {
         return shortcuts[$1.toLowerCase()];
      });
    }

    ta.onkeydown = function() {
      clearTimeout(timer);
      timer = setTimeout(update, 200);
    }
}


//******************************************************************************************
function PlaatsArtikel() {
  var Artnaam = document.getElementById("artikelNaam");
  var Inhoud = document.getElementById("artContent");
  var Catid = document.getElementById("categorie");
  var MagReageren =  document.getElementById("reactiestoestaan");
  //MagReageren.checked;
  if ((Artnaam.value != "") && (Inhoud.value != "") && (Catid.value != "")) {
    var xhttp = new XMLHttpRequest();
    var myURL = "blogapi.php?name=";

    myURL += Artnaam.value + "&artikel=" + Inhoud.value + "&catid=" + Catid.value + "&allowreacties=" + MagReageren.checked;
    alert(myURL);
    xhttp.open("POST", myURL, false);
    xhttp.send();
    alert(xhttp.responseText);
    Artnaam.value = "";
    Inhoud.value = "";
  }
}

//******************************************************************************************
function MaakCategorie() {
  var Catnaam = document.getElementById("txtNewCategorie");
  if (Catnaam.value != "") {
    //bepaal catnr
    var selcat = document.getElementById("categorie");
    var newcatnr = selcat.childNodes.length +1;
    var xhttp = new XMLHttpRequest();
    var myURL = "addcats.php?catnaam=";
    myURL +=  Catnaam.value + "&catid=" + newcatnr;
    xhttp.open("POST", myURL, false);
    xhttp.send();
    //alert(xhttp.responseText);
    if (xhttp.responseText == "insertOK") { //voeg hem ook toe aan selectielijst
      var node = document.createElement('option');
      node.value = "\"" + newcatnr + "\"";
      node.innerHTML = Catnaam.value;
      selcat.appendChild(node);
    }
  }
}

</script>

<body>
  <div id = "divheader" class = "clsheader">
    <center>Mijn schaakblog</center>
  </div>
  <div id = "divinhoud" class = "clsinhoud">
    <div id = "divbloginvoer" class = "clsbloginvoer">

        Schrijf artikel:
        <center><fieldset><br>
        <table>
        <tr>
          <td>
            Voeg categorie toe:
          </td>
          <td>
            <input type = "text" id = "txtNewCategorie" name = "Newcategorie">
          </td>
          <td>
            <button onClick="JavaScript: MaakCategorie();">OK</button><br>
          </td>
        </tr>
        <tr>
          <td><input type="checkbox" id= "reactiestoestaan" value="1">Reacties toegestaan</td>
        </tr>
        </table>
        <table>
        <tr>
          <td>Naam artikel</td><td>categorie</td>
        </tr>
        <tr>
          <td><input type = "text" id = "artikelNaam" name = "artikelNaam" size= "100%" ></td>
          <td><select id = "categorie" name = "selcat">
            <?php
              include 'haalcatogorieen.php';
            ?>
            </select>
          </td>
        </tr>
        <table>
        <br>
        artikel:<br>
        <textarea id = "artContent" rows = "10" cols = "140"></textarea><br>
        <input type = "submit" name = "Plaatsartikel" value = "plaats artikel" onClick="JavaScript: PlaatsArtikel();">
        </fieldset></center>
    </div>
  </div>

</body>
</html>
