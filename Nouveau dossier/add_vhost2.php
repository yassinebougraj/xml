
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


<br><br><hr><br><br>
<?php
$biblio=simplexml_load_file("biblio.xml");                 
foreach($biblio->children() as $element=>$val){
echo "<h3>", ucfirst($element) ,": $val</h3>";
foreach($val->children() as $element=>$val){
echo " $element : <b>$val</b><br/>";
}
}
?>
<br><br><hr><br><br>

<?php
$biblio=simplexml_load_file("biblio.xml");
echo $biblio->getName() , ": ";
foreach($biblio->livre->attributes() as $Attr) {
echo $Attr->getName() ,"=" , $Attr , " ";
}
?>

<br><br><hr><br><br>

<?php
$biblio=simplexml_load_file("biblio.xml");
$biblio->livre[0]->titre
= 'lala land';
echo $biblio->asXML();
?>
<br><br><hr><br><br>


<?php
 $biblio=simplexml_load_file("biblio.xml");
// Add a child element to the livre element
$biblio->livre->addChild("Number","50");
// Add a child element after the last element inside note
$livre=$biblio->addChild("livre");
$livre->addChild("titre","life :");
$livre->addChild("auteur"," yassine");
$livre->addChild("date"," 2015");
$editeur = $biblio->livre[3]->addAttribute("editeur",
" bouga");
foreach ($biblio->livre[3]->attributes() as $att => $valatt) {
echo "<b> $att : $valatt </b> <br/>";
}
echo $biblio-> asXML();
?>

<br><br><hr><br><br>
<?php
  $biblio=simplexml_load_file("biblio.xml");
// Add a child element to the livre element
$biblio->livre->addChild("Number","50");
// Add a child element after the last element inside note
$livre=$biblio->addChild("livre");
$livre->addChild("titre","Nvtitre");
$livre->addChild("auteur","Nvauteur");
$livre->addChild("date","date1");
$editeur = $biblio->livre[3]->addAttribute("editeur", "Nvediteur");
foreach ($biblio->livre[3]->attributes() as $att => $valatt) {
echo "<b> $att : $valatt </b> <br/>";
}
echo $biblio-> asXML('Nvbiblio.xml');
?>