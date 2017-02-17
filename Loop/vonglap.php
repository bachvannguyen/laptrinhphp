<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vòng lặp</title>
	<style>
	.abc ul li{list-style: none;}
	</style>
</head>
<body>
	<div class="abc">
	<ul>
		<?php for($i=0;$i<10;$i++){
			echo "<li> abcxyz </li>";
		}

		?>
	</ul>
	</div>
</body>
</html>