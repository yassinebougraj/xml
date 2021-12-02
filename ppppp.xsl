<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="document">
	<h1><u>Sommaire:</u></h1>
	<xsl:for-each select="chapitre">
		<h2>chapitre : <xsl:value-of select="@num"/></h2>
		<p><b><a href="#(@num)"> <xsl:value-of select="titre"/></a></b></p>
	</xsl:for-each>
	<hr></hr>
	<xsl:for-each select="chapitre">
		<h1>chapitre : <xsl:value-of select="@num"/></h1>
		<p><b><a name="#(@num)"> <xsl:value-of select="titre"/></a></b></p>
		<xsl:for-each select="para">
		<p style="height 50%"> <xsl:value-of select="."/> </p>
	</xsl:for-each>
	</xsl:for-each>
</xsl:template>
</xsl:stylesheet>

