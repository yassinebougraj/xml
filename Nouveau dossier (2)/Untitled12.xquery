xquery version "1.0";

declare variable $bib:= doc("bib.xml")//book;
declare function local:published-after($b,$y) { $b/@year > $y };
<bib
>
{
for $b in $bib
where local:published-after($b, 2000)
return
<book year="{$b/@year}">
{$b/title}
</book
>
}
</bib
>