<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:fo="http://www.w3.org/1999/XSL/Format" version="1.0">

<xsl:template match="/univr">
<fo:root xmlns:fo="http://www.w3.org/1999/XSL/Format">

<!-- Définition des mises en page -->
<fo:layout-master-set>
    <fo:simple-page-master master-name="page" 
			     page-height="297mm" page-width="210mm" 
			     margin-top="10mm" margin-bottom="10mm" 
			     margin-left="20mm" margin-right="20mm"> 
	          <fo:region-body margin-top="15mm" margin-bottom="15mm"/> 
	           <fo:region-before extent="20mm" /> 
	           <fo:region-after extent="10mm"/> 
      </fo:simple-page-master>
</fo:layout-master-set> 
  
 

 <!-- Définition du contenu -->
<fo:page-sequence master-reference="page">
  <fo:flow flow-name="xsl-region-body">
    <fo:block>First page</fo:block>
    <xsl:apply-templates select="etudiant"/>
    
 </fo:flow>
</fo:page-sequence>
</fo:root>
</xsl:template>

<xsl:template match="etudiant">
<fo:block>
<fo:list-block>
	<fo:list-item>
		<fo:list-item-label start-indent="1cm">
			<fo:block color="green"> Nom:</fo:block>
		</fo:list-item-label>
		<fo:list-item-body start-indent="3cm">
			<fo:block color="blue"> 
			<xsl:value-of select="nom"/>			
			</fo:block>
		</fo:list-item-body>
	</fo:list-item>
</fo:list-block>
</fo:block>
</xsl:template>

<xsl:template match="etudiant">
<fo:block>
<fo:table  border="2" start-indent="1cm">
	<fo:table-column column-number="1"/>
	<fo:table-column column-number="2"/>
	<fo:table-header>
		<fo:table-row>
			<fo:table-cell border-style="solid">
				<fo:block text-align="center" color="brown">ID</fo:block>
			</fo:table-cell>
			<fo:table-cell border-style="solid">
				<fo:block text-align="center" color="brown">NOTE</fo:block>
			</fo:table-cell>
		</fo:table-row>
	</fo:table-header>
	<fo:table-body>
		<xsl:apply-templates select="cours"/>
	</fo:table-body>
</fo:table>
</fo:block>
</xsl:template>

<xsl:template match="cours">
<fo:table-row>
	<fo:table-cell border-style="solid">
	<fo:block text-align="center" > 
			<xsl:value-of select="@id"/>
	</fo:block>
	</fo:table-cell>
		<fo:table-cell border-style="solid">
	<fo:block text-align="center" > 
			<xsl:value-of select="@note"/>
	</fo:block>
	</fo:table-cell>
</fo:table-row>
</xsl:template>

</xsl:stylesheet>