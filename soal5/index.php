<?php 
function angka($ar){
	echo max($ar);
	echo "<br>";	
	echo min($ar);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?= angka(['a','b','c','d']); ?></h1>
</body>
</html>