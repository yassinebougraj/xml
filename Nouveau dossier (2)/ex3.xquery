xquery version "1.0";

<results>
{ for $b in doc("bib.xml")//book
let $a:=$b/author

return 
<book>
{$b/title}
<nombre>
{$b/count(author)}
</nombre>

</book>
 }
</results>