<?php
$link=mysqli_connect('localhost','root','','abits');
mysqli_select_db($link,'abits');
mysqli_set_charset($link,'utf8');

$surname=trim($_POST['surname']);
$name=trim($_POST['name']);
$patronymic=trim($_POST['patronymic']);
$math=trim($_POST['math']);
$russian=trim($_POST['russian']);
$informatics=trim($_POST['informatics']);

if(!$link){
	printf("Ошибка соединения",mysqli_coonect_error());
	exit();
}



/*$ins= "INSERT INTO `abits` (surname,name,patronymic,math,russian,informatics)".
		"VALUES('{$surname}','{$name}','{$patronymic}','{$math}','{$russian}','{$informatics}');";
 $res=mysqli_query($link, $ins); */

 mysqli_query($link,"
			INSERT INTO `abits`
			SET `surname`='$surname',
			`name`='$name',
			`patronymic`='$patronymic',
			`math`='$math',
			`russian`='$russian',
			`informatics`='$informatics'

			;");
 


/*mysqli_query($db,"
			INSERT INTO `users`
			SET `login`='$login',
			`password`='$pass';");*/


?>