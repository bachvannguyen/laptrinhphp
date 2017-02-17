<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vẽ tam giác</title>
	<style>
		#content {width: 800px; margin: auto; border: 2px solid red}
		#content h1 {text-align: center}
		#content ul li {list-style: none; display: inline-block;margin-left: 20px}
		#result {text-align: center; margin: 0px 0px 20px 0px;}
	</style>
</head>
<body>
	<div id="content">
		<h1>Vẽ tam giác</h1>
		<ul>
			<li><a href="While.php?hinh=1"><img src="images/01.png" alt="Hình 1"></a></li>
			<li><a href="While.php?hinh=2"><img src="images/02.png" alt="Hình 2"></a></li>
			<li><a href="While.php?hinh=3"><img src="images/03.png" alt="Hình 3"></a></li>
		</ul>
		<div id="result">
			<?php 
				$result="";
				if(isset($_GET["hinh"])){
					$hinh= $_GET["hinh"];
					switch ($hinh) {
						case 1:
						$i=1;
						while($i<=6){
							$result .= str_repeat("*", $i)."<br />";
							$i++;
						}
							break;

						case 2:
						$i=6;
						while($i>=1){
							$result .= str_repeat("*", $i)."<br />";
							$i--;
						}
							break;

						case 3:
						$i=1;
						$n=6;
						while($i<=$n){
							$space= str_repeat(" ", $n-$i);
							$character= str_repeat("*", $i*2-1);
							$result .= $space . $character."<br />";
							$i++;
						}
							break;
						}
					} echo $result;
			?>
		</div>
	</div>
</body>
</html>