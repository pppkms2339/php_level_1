<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Первое задание</title>
</head>
<body>
	<?php
		if(isset($_GET['error'])) {
			die("Деление на ноль");
		}
	?>
	<form action="second.php" method="POST">
		<label for="operand1">Операнд 1</label>
		<?php
			if(isset($_GET['operand1'])) {
				$operand1 = $_GET['operand1'];
			} else {
				$operand1 = "";
			}
		?>
		<input type="text" name="operand1" value="<?=$operand1;?>"/>	
		<label for="operand2">Операнд 2</label>
		<?php
			if(isset($_GET['operand2'])) {
				$operand2 = $_GET['operand2'];
			} else {
				$operand2 = "";
			}
		?>
		<input type="text" name="operand2" value="<?=$operand2;?>"/>
		<input type="submit" value="+" name="add"/>
		<input type="submit" value="-" name="sub"/>
		<input type="submit" value="*" name="mul"/>
		<input type="submit" value="/" name="div"/>
		<label for="result">Результат</label>
		<?php
			if(isset($_GET['result'])) {
				$result = $_GET['result'];
			} else {
				$result = "";
			}
		?>
		<input type="text" name="result" value="<?=$result;?>"/>
	</form>
</body>
</html>