xquery version "1.0";

<results>

{
for $b  in doc("bib.xml")//book
where count($b/author)>0
return
<book>
{$b/title}
{for $a in $b/author[position()<=2]
return 
<author>
{string($a/last),",",string($a/first)}
</author>

}
{
if (count($b/author)>2)
then
<author> et al.</author> else()
}
</book>
}

</results>
