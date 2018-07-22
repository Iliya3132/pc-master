<?php

if ((isset($_POST['id'])) && (strlen(trim($_POST['id'])) > 0)) {
	$id = stripslashes(strip_tags($_POST['id']));
	echo($id);	
} else {$id = 'No name entered';}
if ((isset($_POST['table'])) && (strlen(trim($_POST['table'])) > 0)) {
	$table = stripslashes(strip_tags($_POST['table']));
	echo $table;
} else {$table = 'No name entered';}
ob_start();

$conn= mysql_connect("localhost","skorp3132_master","beneficence");
	mysql_select_db("skorp3132_master",$conn);
	mysql_query('SET NAMES utf8'); 
	$str = "DELETE FROM ".$table." WHERE id=".$id."";	
	$resultat = mysql_query($str);

?>