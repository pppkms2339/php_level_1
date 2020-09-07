<?php
	$op1 = $_POST['operand1'];
	$op2 = $_POST['operand2'];
	if(((int)($_POST['operand2'])) == 0) {
		header("Location: form.php?error=true");
	}
	$oper = $_POST['oper'];
	$result;
	switch($oper) {
		case '+':
			$result = $op1 + $op2;
			break;
		case '-':
			$result = $op1 - $op2;
			break;
		case '*':
			$result = $op1 * $op2;
			break;
		default:
			$result = $op1 / $op2;
	}
	header("Location: form.php?operand1=$op1&oper=$oper&operand2=$op2&result=$result");
?>