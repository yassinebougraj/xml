xquery version "1.0";

<results>
{ for $b in doc("bib.xml")//book
let $a:=$b/author
where count($a)>2
return 
$b/title

 }
</results>