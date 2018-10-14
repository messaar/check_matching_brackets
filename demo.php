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
		require_once('check_brackets.function.php');
		
		$status = checkBrackets($data);
		
		echo $status === true ? 'Верно' : 'Не верно';
	}
	?>
</body>
</html>
