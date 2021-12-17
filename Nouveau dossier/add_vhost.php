
<?php
$xml = simplexml_load_file( "biblio.xml");
echo $xml->livre[0]->titre , "<br>";
echo $xml->livre[0]->auteur , "<br>";
echo $xml->livre[0]->date , "<br>";
?>
<br><br><br><br><hr><br><br><br><br>
<?php

$biblio=simplexml_load_file("biblio.xml");
 
//Lecture du contenu des éléments
$i=1;
foreach ($biblio->livre as $livre){
echo "livre $i ";
echo $livre->titre, ' de ' , $livre->auteur, ' paru en ' , $livre->date , '<hr/>';
$i++;
}
?>
<br><br><br><br><hr><br><br><br><br>
<?php
$biblio=simplexml_load_file("biblio.xml");
foreach ($biblio->livre as $val){
echo '<h3>', $val->titre, ' de ' , $val->auteur, '</h3>', ' <b>
paru en ' , $val->date , ' </b>';
foreach ($val->attributes() as $att => $valatt) {
echo "<b> $att : $valatt </b>";
}
echo "<hr/>";
} ?>