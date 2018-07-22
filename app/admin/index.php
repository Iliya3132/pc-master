<?php 
	include("blocks/baza.php");  
?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Skorp" />
        
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/selecrOrders.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/java.js" ></script>
       
	<title>Компьюткрный Сервис</title>
</head>

<body>



<?php 
	$mylogin = 'pc-master';
	$mypass = 'remtex';
	if(isset($_POST['btn_auth']))
	{
	if (($_POST['login'] == $mylogin) && ($_POST['password'] == $mypass))
	{
		include("blocks/main.php"); 	
	}
	else
	{
	echo("
	<form method='post'>
	Логин: <input type='text' name='login' />
	Пароль: <input type='password' name='password' />
	<input type='submit' value='Войти' name='btn_auth' />
	</form>
	");
	}
	}
	else 
	{
	echo("
	<form method='post'>
	Логин: <input type='text' name='login' />
	Пароль: <input type='password' name='password' />
	<input type='submit' value='Войти' name='btn_auth' />
	</form>
	");
	}
?>


</body>
</html>