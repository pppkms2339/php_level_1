<?php
	$op1 = $_POST['operand1'];
	$op2 = $_POST['operand2'];
	if(((int)($_POST['operand2'])) == 0) {
		header("Location: form.php?error=true");
	}
	$oper = $_POST['oper'];
	$result;
	if (isset($_POST['add'])) {
		$result = $op1 + $op2;
	}else if (isset($_POST['sub'])) {
		$result = $op1 - $op2;
	}else if (isset($_POST['mul'])) {
		$result = $op1 * $op2;
	}else {
		$result = $op1 / $op2;
	}
	header("Location: form2.php?operand1=$op1&oper=$oper&operand2=$op2&result=$result");
?>