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
foreach($lines as $line){
	if($_POST['filmSup'] == $line){
		$line = "" ;}
	}
?>
	<a href="http://localhost/vod/saisieTitreSuppression.html">retour à l'acceuil</a>
</body>

</html>
