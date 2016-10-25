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
$id=trim($_POST['id']);

if(!$link){
	printf("Ошибка соединения",mysqli_coonect_error());
	exit();
}


/*$res="UPDATE `abits`
SET `surname`='$surname'
`name`='$name'
WHERE ID = $id";*/

$res="UPDATE `abits`
SET 		`surname`='$surname',
			`name`='$name',
			`patronymic`='$patronymic',
			`math`='$math',
			`russian`='$russian',
			`informatics`='$informatics'
			WHERE ID = $id";
			

if (mysqli_query($link, $res)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($link);
}

?>