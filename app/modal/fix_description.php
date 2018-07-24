<?php
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
	$name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) {
	$phone = stripslashes(strip_tags($_POST['phone']));
} else {$phone = 'No phone entered';}
if ((isset($_POST['description'])) && (strlen(trim($_POST['description'])) > 0)) {
	$description = stripslashes(strip_tags($_POST['description']));
} else {$description = 'No phone entered';}	
ob_start();
	$conn= mysql_connect("localhost","skorp3132_master","beneficence");
	mysql_select_db("skorp3132_master",$conn);
	mysql_query('SET NAMES utf8'); 
	$str = "INSERT INTO description_problem(name,phone,description) VALUES ('$name','$phone','$description')";
	$resultat = mysql_query($str);
	if ($resultat == 'true'){
    echo("Все даные добавлены");
}else{
		echo("Ошибка");
	}
?> 