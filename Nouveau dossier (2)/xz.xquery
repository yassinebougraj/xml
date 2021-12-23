xquery version "1.0";

<bib>
{ for $b in doc("bib.xml")//book
where $b/publisher="Addison-Wesley"
and $b/@year>1991
return 
<book year="{$b/@year}">
{$b/title}
</book>
 }
</bib>