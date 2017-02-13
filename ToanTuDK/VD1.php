<?php
	$result= $n1 = $n2 = $pheptinh = "";// gán giá trị mặc định cho các biến
	$flag= true;
	if(isset($_POST["number1"]) && isset($_POST["calculator"]) && isset($_POST["number2"])){  // kiểm tra tồn các số có tồn tại hay không
			$n1= $_POST["number1"];
			$pheptinh= $_POST["calculator"];
			$n2= $_POST["number2"];
	
	if (is_numeric($n1) && is_numeric($n2)) {
		switch ($pheptinh) {
		case '+': $result = $n1 + $n2; break;
		case '-': $result = $n1 - $n2; break;
		case '*': 
		case 'x':
		$result = $n1 * $n2; break;
		case '/':
		case ':':
		$result = $n1 / $n2; break;

		default: $result = $n1 + $n2; 
		$pheptinh= '+';
		break;
	}
		}else {
			$result= "Không thực hiện được";
			$flag= false;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mô phỏng máy tính điện tử</title>

<style>
	*{margin: 0px; padding: opx; }
	h1 {color: red; text-align: center;}
	#content{width: 600px; border: solid 2px red; text-align: center; padding: 10px; margin: auto}
	#content .row {margin-top: 20px;}
	#content .row span {display: inline-block; width: 255px; text-align: right;}
	#content .row input[type=text] {padding: 3px 5px;}
	#content .row input[type=submit] {padding: 3px 5px; display: block; margin: 0px auto 20px auto;}
	#content .row p {font-weight: bold; font-size: 20px; text-align: center;}
</style>

</head>
<body>
	<div id="content">
		<h1>Mô phỏng máy tính điện tử</h1>
		<form action="" method="post" name="main-form">
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="number1" value="<?php echo $n1 ?>" />
			</div>
			
			<div class="row">
				<span>Phép toán</span>
				<input type="text" name="calculator" value="<?php echo $pheptinh ?>" />
			</div>

			<div class="row">
				<span>Số thứ hai</span>
				<input type="text" name="number2" value="<?php echo $n2 ?>"/>
			</div>

			<div class="row">
				<input type="submit" value="Xem kết quả" name="ketqua" />
			</div>

			<div class="row">
				<p> <?php 
					if($flag==true){
						echo "Kết quả"." ". $n1 ." ". $pheptinh . " ". $n2." ". "="." ". $result;
					}else{ echo $result;}
				?></p>
			</div>
		</form>
	</div>

</body>
</html>