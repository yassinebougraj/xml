xquery version "1.0";

<results>
{ for $b in doc("bib.xml")//book
return 
<result>
{$b/title}
{$b/author}
</result>
 }
</results>