<!DOCTYPE html>
<html>
  <head>
    <title>PHP Calculator</title>
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label>Enter first number:</label>
      <input type="number" name="num1" /><br /><br />
      <label>Enter second number:</label>
      <input type="number" name="num2" /><br /><br />
      <label>Select an operator:</label>
      <select name="operator">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option></select
      ><br /><br />
      <input type="submit" name="submit" value="Calculate" />
    </form>

    <?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];
		$result = '';

		switch($operator){
			case '+':
				$result = $num1 + $num2;
				break;
			case '-':
				$result = $num1 - $num2;
				break;
			case '*':
				$result = $num1 * $num2;
				break;
			case '/':
				$result = $num1 / $num2;
				break;
			default:
				$result = "Invalid operator";
		}

		echo "<br>Result: " . $result; } ?>
  </body>
</html>
