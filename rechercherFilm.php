<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style/vod.css" media="screen" />
	<h1>film recherché</h1>
</head>
	
<body>
<?php

$lines = file("data/vod.csv");
foreach($lines as $line){
	$films = explode(":", $lines)
	if( $films[0] == ($_POST['titreCherche'])){
		echo $films[0].", ";
		echo $films[1].", ";
	}	echo $films[2];
	else {
		echo "Film introuvable<br/>";
		break;
	}
}

?>
	<a href="http://localhost/vod/saisieTitreRecherche.html">retour à l'acceuil</a>
</body>

</html>
