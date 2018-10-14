<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
</head>
<body>
	<form method="post">
		<input type="test" name="data" placeholder="Введите арефмитическое выражение" style="width:250px">
		<input type="submit" value="Проверить">
	</form>
	
	<?php	
	if (!empty($_POST['data']))
	{
		$data = $_POST['data'];
		$data = preg_replace('/[^\(\)\[\]\{\}]/', '', $data); //deldete symbols but not ()[]{}
	
		$count_pars = strlen($data) / 2; // count pars
		
		// clean all pars
		$i = 1;
		while ($i <= $count_pars)
		{
			$data = str_replace( ['()', '[]', '{}'], '', $data);
			$i++;
		}
		
		
		//check if !empty -> bad
		if (!empty($data))
		{
			$status = 'Не верно';
		} 
		else {$status = 'Верно';}
	
		echo $status."<br>\r\n"; // result
	}
	?>
</body>
</html>
