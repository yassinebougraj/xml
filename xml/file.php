<?php

$univr = simplexml_load_file("etudiant.xml");

if (  isset($_POST["save"]) ){


	$etudiant = $univr->addChild("etudiant");

	$name = $etudiant->addChild('nom',$_POST["NAME"]);
	$name->addAttribute('id',$_POST["ID"]);

	$cours = $etudiant->addChild('cours');

	$cours->addAttribute("nom",$_POST['uv1Name']);
	$cours->addAttribute("duree",$_POST['uv1Duree']);
	$cours->addAttribute("note",$_POST['uv1Note']);

	$cours = $etudiant->addChild('cours');

	$cours->addAttribute("nom",$_POST['uv2Name']);
	$cours->addAttribute("duree",$_POST['uv2Duree']);
	$cours->addAttribute("note",$_POST['uv2Note']);

	
	$univr->asXML('etudiant.xml');
}


echo "<head>
	<style>
		
		table , td , tr {
			border-collapse: collapse;
			border:1px solid black;
			margin:20px;
			
		}
	</style>
</head>";

echo "
	<form action='indexx.php' method='post' >
		<button>Ajouter etudiant </button>
	</form>";


foreach ($univr->etudiant  as $etudiant  ) {
	
	echo "<table>
			<thead>
				<tr>
					<td>
						Etudiant :
						".$etudiant->nom."
					</td>
					<td>
						Identifiant :
						".$etudiant->nom->attributes()->id."
					</td>
				</tr>
			</thead>
			<tbody>";
			for ($i=0; $i < sizeof($etudiant->cours) ; $i++) { 
				echo "<tr  >
						<td> Nom de l'UV </td>
						<td>
							".$etudiant->cours[$i]->attributes()->nom."
						</td>
					</tr>
					<tr>
						<td> Duree de l'UV </td>
						<td>
							".$etudiant->cours[$i]->attributes()->duree."
						</td>
					</tr>
					<tr  >
						<td> Note de l'UV </td>
						<td  >
							Nom de l'UV :
							".$etudiant->cours[$i]->attributes()->note."
						</td>
					</tr>
		  		";
			}
			echo "</tbody></table>";					

}




?>