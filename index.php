<html>
    <head> 
	<meta charset="UTF-8">	
		<title>Расчет биссектрисы по длине сторон треугольника</title>
	</head>
			<form  method="GET">
				<p>
				<img src="https://ds02.infourok.ru/uploads/ex/0559/000339a8-81024275/hello_html_75e3e789.png"><br><br>
				<img src="https://ds02.infourok.ru/uploads/ex/0559/000339a8-81024275/hello_html_m5c1beb41.png"><br><hr>
				</p>
				<p>Введите длину первой стороны треугольника (a) </p>
				Сторона a = <input type ="text" name= "a" value="<?php 
					if (isset ($_GET['a'])) {
						echo htmlspecialchars($_GET['a']);
					}
				?>">
				<p>Введите длину первой стороны треугольника (b) </p>	
				Сторона b = <input type ="text" name="b" value="<?php 
					if (isset ($_GET['b'])) {
						echo htmlspecialchars ($_GET['b']);
					}
				?>">
				<p>Введите длину первой стороны треугольника (c) </p>	
				Сторона c = <input type ="text" name="c" value="<?php 
					if (isset ($_GET['c'])) {
						echo htmlspecialchars ($_GET['c']);
					}
				?>"> 		
				<input type ="submit" value="Рассчитать" name="add">
			</form>
			<?php 
				if (isset($_GET['a']) && isset ($_GET['b']) && isset ($_GET['c'])) {
					if (is_numeric($_GET['a'])&& is_numeric($_GET['b']) && is_numeric($_GET['c'])) {
						if (($_GET['a'])>0 && ($_GET['b'])>0 && ($_GET['c'])>0) {
							$p=((sqrt($_GET['a']*$_GET['b']))*($_GET['a']+$_GET['b']+$_GET['c'])*($_GET['a']+$_GET['b']-$_GET['c']))/($_GET['a']+$_GET['b']);
							echo  "Результат: ". number_format ($p, 2, ',', ' ');
						} 	else {
								echo "Ошибка! Введено отрицательное или нулевое значение";
							}
								echo "<br>";
					} 
					else {
							echo "Ошибка! Введено не числовое значение";
							echo "<br>";
					}	
				}
			?>				
</html>
