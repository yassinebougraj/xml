<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:fn="http://www.w3.org/2005/xpath-functions">
<xsl:template match="/">
<h2>detail etudiant</h2>
<table border="1">
	<tbody>
		<tr bgcolor="lightgreen">
			<th>nom de l'etudiant <xsl:value-of select="nom"/></th>
			<th>nom de l'etudiant <xsl:value-of select="@id"/></th>
		</tr>
	
	</tbody>
</table>
</xsl:template>
	
</xsl:stylesheet>
