			
<?php
	$day = $mon = $image = $name = $time = $result= "";
		$flagShow= true;
	if(isset($_POST["day"]) && isset($_POST["month"])){
		$day = $_POST["day"];
		$mon = $_POST["month"];
		if(is_numeric($day) && is_numeric($mon)){
			switch ($mon) {
				case 1: if( $day <=19){ $image = "capricorn"; $name= "Ma kết"; $time= "23/12 - 19/01";}
						if( $day >=20){ $image = "aquarius"; $name= "Bảo Bình"; $time= "20/01 - 19/02";}
						if( $day <1 || $day >31) {$flagShow = false;}
						break;
				case 2: if( $day <=19){ $image = "aquarius"; $name= "Bảo Bình"; $time= "23/12 - 19/01";}
						if( $day >=20){ $image = "pisces"; $name= "Song Ngư"; $time= "20/02 - 21/03";}
						if( $day <1 || $day >29) {$flagShow = false;}
						break;
				default:
						$flagShow=false;
						break;
			}
			if($flagShow==true)
			{
			$result= '<div class="result">
				<img src="images/'. $image .'.jpg" alt="'. $image .'">
				<p>'. $name .' <span> ('. $image .': '. $time .')</span></p>
			</div>';
			} else {
				$result= "Dữ liệu không phù hợp";
			}
			} else { 
				$flagShow = false;
				$result= "Dữ liệu không phù hợp";
			}
		}
		/*
			 * Capricorn 	23/12 - 19/01	Ma kết
			 * Aquarius		20/01 - 19/02	Bảo Bình
			 * Pisces		20/02 - 21/03	Song Ngư
			 * Aries 		22/03 - 20/04	Bạch Dương
			 * Taurus 		21/04 - 21/05	Kim Ngưu
			 * Gemini		22/05 - 22/06	Song Tử
			 * Cancer		23/06 - 23/07	Cự Giải
			 * Leo			24/07 - 23/08	Sư Tử
			 * Virgo		24/08 - 23/09	Xử Nữ
			 * Libra		24/09 - 23/10	Thiên Xứng
			 * Scorpio 		24/10 - 22/11	Hổ Cáp
			 * Sagittarius	23/11 - 22/12	Nhân Mã
			 */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lấy chòm sao</title>

<style>
	*{margin: 0px; padding: opx; }
	h1 {color: red; text-align: center;}
	#content{width: 600px; min-height: 100px; border: solid 2px red; text-align: center; padding: 10px; margin: auto}
	#content .row {margin-top: 20px;}
	#content .row span {display: inline-block; width: 255px; text-align: right;}
	#content .row input[type=text] {padding: 3px 5px;}
	#content .row input[type=submit] {padding: 3px 5px; display: block; margin: 0px auto 20px auto;}
	#content .row p {font-weight: bold; font-size: 20px; text-align: center;}
	#content .result {margin-left: 50px}
	#content .result img{width: 100px; height: 100px; overflow: hidden; float: left;}
	#content .result p{height: 100px; text-align: justify; line-height: 100px; font-size: 22px;}
	#content .result p span{font-style: italic;}
</style>

</head>
<body>
	<div id="content">
		<h1>Lấy chòm sao</h1>
		<form action="" method="post" name="main-form">

			<div class="row">
				<span>Ngày sinh</span>
				<input type="text" name="day" <?php echo $day?> />
			</div>

			<div class="row">
				<span>Tháng sinh</span>
				<input type="text" name="month" <?php echo $mon?> />
			</div>

			<div class="row">
				<input type="submit" value="Lấy chòm sao" name="ketqua" />
			</div>

		</form>
		
		<?php 
		echo $result;
		?>
	</div>

</body>
</html>