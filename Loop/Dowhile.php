<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>show ALL Images</title>
	<style>
		#content {width: 312px; margin: auto; border: 2px solid red}
		#content h1 {text-align: center}
		#content img {margin: 10px 5px 0px; text-align: center }
		#content #image .show a {display: inline-block; color: blue; background: grey; text-decoration: none; padding: 3px 5px 5px 5px; margin: 5px 0px 10px 120px;}
		#content #image .show a:hover {color: red}
	</style>
</head>
<body>

	<div id="content">
		<h1>Show ALL Images</h1>
		<div id="image">
		<?php
			$i =1;
			do{
			echo '<img src="images/nature-0'.$i.'.jpg" />';
				$flagShow = 0;
				if(isset($_GET["show"])){
					$flagShow = $_GET["show"];
					$i++;
					}} while ($i<=4 && $flagShow == 1);
		?>
			<div class="show">
				<a href="Dowhile.php?show=1">Show All</a>
			</div>
		</div>
	</div>
</body>
</html>