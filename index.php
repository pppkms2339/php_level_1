<?php
	//Задание 1
	$a = rand(-100, 100);
    $b = rand(-100, 100);
	echo "a = $a, b = $b<br/>";
	if($a >= 0 && $b >= 0) {
		echo "Разность $a и $b = ".($a - $b);
	}
	if($a < 0 && $b < 0) {
		echo "Произведение $a и $b = ".($a * $b);
	}
	if($a * $b < 0) {
		echo "Сумма $a и $b = ".($a + $b);
	}
	
	//Задание 2
	echo "<hr/>";
	$a = rand(0, 15);
	echo "Число a = $a<br/>";
	switch($a) {
		case 0:
			echo "0,";
		case 1:
			echo "1,";
		case 2:
			echo "2,";
		case 3:
			echo "3,";
		case 4:
			echo "4,";
		case 5:
			echo "5,";
		case 6:
			echo "6,";
		case 7:
			echo "7,";
		case 8:
			echo "8,";
		case 9:
			echo "9,";
		case 10:
			echo "10,";
		case 11:
			echo "11,";
		case 12:
			echo "12,";
		case 13:
			echo "13,";
		case 14:
			echo "14,";
		default:
			echo "15";
	}
	
	//Задания 3 и 4
	echo "<hr/>";
	
	function add($a, $b) {
		return $a + $b;
	}
	
	function sub($a, $b) {
		return $a - $b;
	}
	
	function mul($a, $b) {
		return $a * $b;
	}
	
	function div($a, $b) {
		return $a / $b;
	}
	
	function mathOperation($arg1, $arg2, $operation) {
		switch($operation) {
			case "add":
				echo "Сумма: ".add($arg1, $arg2)."</br>";
				break;
			case "sub":
				echo "Разность: ".sub($arg1, $arg2)."</br>";
				break;
			case "mul":
				echo "Произведение: ".mul($arg1, $arg2)."</br>";
				break;
			case "div":
				echo "Частное: ".div($arg1, $arg2)."</br>";
				break;
			default:
				echo "Error";
		}
	}
	$operand1 = rand(-100, 100);
	$operand2 = rand(-100, 100);
	echo "Операнды: $operand1 и $operand2</br>";
	mathOperation($operand1, $operand2, "add");
	mathOperation($operand1, $operand2, "sub");
	mathOperation($operand1, $operand2, "mul");
	mathOperation($operand1, $operand2, "div");
	mathOperation($operand1, $operand2, "adds");
	
	//Задание 6
	echo "<hr/>";
	
	function power($val, $pow) {
		$t;
		if($pow % 2 == 0) {
			$t = 1;
		} else {
			$t = $val;
		}
		if($pow == 1) {
			return $val;
		} else {
			return $t * pow(power($val, (int)($pow / 2)), 2); 
		}
	}
	
	echo "2 ^ 5 = ".power(2, 5);
	
	//Задание 7
	echo "<hr/>";
	$hour = date('H');
	$minute = date('i');
	echo "$hour : $minute<br/>";
	$str = "$hour час";
	if($hour >= 11 && $hour <= 14) {
		$str = $str."ов";
	} else {
		$t = $hour % 10;
		if($t == 0 || $t >= 5 && $t <= 9) {
			$str = $str."ов";
		} else if($t >= 2 && $t <= 4) {
			$str = $str."а";
		}
	}
	$str = $str." $minute минут";
	if($minute < 11 || $minute > 14) {
		$t = $minute % 10;
		if($t >= 2 && $t <= 4) {
			$str = $str."ы";
		} else if($t == 1) {
			$str = $str."а";
		}
	}
	echo $str;
?>