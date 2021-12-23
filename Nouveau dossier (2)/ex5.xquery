xquery version "1.0";

<results>
{ for $p in distinct-values(doc("bib.xml")//publisher)
order by $p 
return 
<result>
<editeur>
{$p}
</editeur>
{
for $b  in doc("bib.xml")//book
where $b/publisher=$p 
order by $b/title
return
$b/title
}


</result>
}

</results>
