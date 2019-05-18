<?php 
function nama($subs){
	return substr_count("bootcamp", $subs);
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Substr</title>
 </head>
 <body>
 	<h1>Bootcamp</h1>
 	<h1>Ini Hasilnya Huruf 'o' ada <?= nama("o"); ?></h1>
 </body>
 </html>
