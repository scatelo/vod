<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="vod.css" media="screen" />
	<h1>film recherché</h1>
</head>
	
<body>
<?php

$lines = fopen("data/vod.csv", "a");
fputs($lines, $_POST['newFilm']);
  fclose($lines);
?>
	<a href="http://localhost/vod/saisieFilm.html">retour à l'acceuil</a>
</body>

</html>
