<!DOCTYPE html>
<html lang="fr">
	<head>
		<h1>Recherche</h1>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	</head>

	<body>
		<table border="3">
			<tr>
				<th>nom</th>
				<th>année</th>
				<th>réalisateur</th>
			</tr>
			
			<b>Liste des Films</b>
			<?php
			$lines = file("data/vod.csv");
			foreach($lines as $line){
						
				echo "<tr>" ;
						
				$film = explode( ":" , $line ) ;
				
				echo "<td>". $film[0] . "</td>\n";
				
				echo "<td>". $film[1] . "</td>\n";
				
				echo"<td>". $film[2] . "</td>\n";
				}
				?>
			</tr>
		</table>
		<a href="http://localhost/vod/vod.html">retour à l'acceuil</a>
	</body>

</html>
