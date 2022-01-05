
<!DOCTYPE html>
<html>
<head>
	<title>tp07</title>
	<style type="text/css">
		.divs > * {
			display: inline-block;
		}
		form {
			border:1px solid black;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="file.php" method="post" > 
		<div>
			<h3>Etudiant</h3>
			<div  class="divs" >
				<p>Identifiant : </p>
				<input type="text" name="ID">
			</div>
			<div  class="divs" >
				<p>Nom de l"etudiant : </p>
				<input type="text" name="NAME">
			</div>
		</div>
		<div>
			<h3>UV1</h3>
			<div class="divs" >
				<p>Nom de l'UV 1 : </p>
				<input type="text" name="uv1Name">
			</div>
			<div class="divs" >
				<p>Duree de l'UV 1  :  </p>
				<input type="text" name="uv1Duree">
			</div>
			<div class="divs" >
				<p>Note de l'UV 1 : </p>
				<input type="text" name="uv1Note">
			</div>	
		</div>
		<div>
			<h3>UV2</h3>
			<div class="divs" >
				<p>Nom de l'UV 2 </p>
				<input type="text" name="uv2Name">
			</div>
			<div class="divs" >
				<p>Duree de l'UV 2 : </p>
				<input type="text" name="uv2Duree">
			</div>
			<div class="divs" >
				<p>Note de l'UV 2 : </p>
				<input type="text" name="uv2Note">
			</div>
		</div>
		
		<button name="save" >Enregister</button>
		<button name="voir">Voir</button>
	</form>

</body>
</html>