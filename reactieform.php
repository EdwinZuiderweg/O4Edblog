 <?php
             $divcomment = "divcomment" . $rijnr;
             $artcomment = "artcomment" . $row["Artnr"];
             $divartnr =  $row["Artnr"];
             echo "<div id = \"" . $divcomment . "\" class = \"clscomment\">";
             echo "<textarea id = \"" . $artcomment . "\"></textarea>";
             $echostr = "<input type = \"submit\" name = \"Plaatscomment\" value = \"geef reactie\"";
             $echostr.=  "onClick=\"JavaScript: Plaatscomment(" . $divartnr . ");\">";
             echo $echostr;
             echo "</div>";

?>
