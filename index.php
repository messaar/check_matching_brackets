<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
</head>
<body>
	<form method="post">
		<input type="test" name="data" placeholder="Введите арифметическое выражение" style="width:250px">
		<input type="submit" value="Проверить">
	</form>
	
	<?php	
	if (!empty($_POST['data']))
	{
		$data = $_POST['data'];
		$data = preg_replace('/[^\(\)\[\]\{\}]/', '', $data); //deldete symbols but not ()[]{}
	
		$count_couple = strlen($data) / 2; // count couple
		
		if ( strlen($data) % 2 === 0 ? true : false) // parity check
		{
			// clean all couple
			for ($i=0;$i <= $count_couple;$i++)
			{
				$data = str_replace( ['()', '[]', '{}'], '', $data);
			}
			
			//check if !empty -> bad
			if (!empty($data))
			{
				$status = 'Не верно';
			} 
			else {$status = 'Верно';}
		}
		else $status = 'Не верно';
		
		echo $status."<br>\r\n"; // result
		
	}
	?>
</body>
</html>
