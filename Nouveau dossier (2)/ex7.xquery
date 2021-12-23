xquery version "1.0";

<results>

{
for $b  in doc("bib.xml")//book
where some $a in $b/author
satisfies ($a/last="Stevens" and $a/first="W.")
return 
$b/title

}

</results>
