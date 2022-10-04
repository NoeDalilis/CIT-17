<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	//php exercise #1
		$txt = "Twinkle, Twinkle little star";
		echo $txt;

		$blink = "Twinkle";
		$shape = "star";
		echo "<br>";
		echo $blink;
		echo $shape;

		echo "<br>";

		$blink ="turtle";
		$shape ="square";
		echo $blink;
		echo $shape;
		echo "<br>";
		echo "<br>";

	//php exercise #2	

		$x = 10;
		$y = 7;
		$add = $x + $y;
		print("10 + 7 = ". $add);
		echo "<br>";

		$x = 10;
		$y = 7;
		$sub = $x - $y;
		print("10 + 7 = ". $sub);
		echo "<br>";

		$x = 10;
		$y = 7;
		$prod = $x * $y;
		print("10 + 7 = ". $prod);
		echo "<br>";

		$x = 10;
		$y = 7;
		$div = $x / $y;
		print("10 + 7 = ". $div);
		echo "<br>";

		$x = 10;
		$y = 7;
		$per = $x % $y;
		print("10 + 7 = ". $per);
		echo "<br>";
		echo "<br>";

	//php exercise #3
		$variable = 8;
		print("Value is now " . $variable);
		echo "<br>";
		$variable = 8+2;
		print("Add 2.Value is now " . $variable);
		echo "<br>";
		$variable = 8+2-4;
		print("Subtract 4. Value is now " . $variable);
		echo "<br>";
		$variable = 6*5;
		print("Multiply by 5. Value is now " . $variable);
		echo "<br>";
		$variable = 30/3;
		print("Value is now " . $variable);
		echo "<br>";
		$variable = 10;
		print("Increment value by one. value is now "). ++$variable;
		echo "<br>";
		$variable = 11;
		print("Decrement value by one. Value is now "). --$variable;

		echo "<br>";
		echo "<br>";

		//php exercise 4

		$name = "harry";
		var_dump($name);
		echo "<br>";

		$name = "Harry";
		echo "$name";
		echo "<br>";

		$age = 28;
		var_dump($age);
		echo "<br>";

		$status = NUll;
		var_dump($status);
		echo "<br>";


	?>
</body>
</html>