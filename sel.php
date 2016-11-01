<?php
$link=mysqli_connect('localhost','root','','abits');
mysqli_set_charset($link,'utf8');

if(!$link){
	printf("Ошибка соединения",mysqli_coonect_error());
	exit();
}
mysqli_select_db($link,'abits');

	

	$query = mysqli_query ($link, 'SELECT * FROM `abits` ORDER BY `surname`, `name`');

			$abits = mysqli_fetch_all ($query, MYSQLI_ASSOC);
			
			echo '<table class="table">';
			echo '<tr>';
			echo '<th>номер</th>';
			echo '<th>Фамилия</th>';
			echo '<th>Имя</th>';
			echo '<th>Отчество</th>';
			echo '<th>Математика</th>';
			echo '<th>Русский</th>';
			echo '<th>Информатика</th>';
			
			echo '<th colspan="2">Операции</th>';
			echo '</tr>';

			

 foreach ($abits as $abit){

 /*echo '<tr rel="' . $abit['id'] . '">';*/
 echo '<tr>';
 echo '<td>' . $abit['id'] . '</td>';
 echo '<td>' . $abit['surname'] . '</td>';
 echo '<td>'.$abit['name'].'</td>';
 echo '<td>' . $abit['patronymic'] . '</td>';
				echo '<td>' . $abit['math'] . '</td>';
				echo '<td>' . $abit['russian'] . '</td>';
				echo '<td>' . $abit['informatics'] . '</td>';

 
 
echo '<td><i class="fa fa-edit " data-toggle="modal" data-del="#del"
 data-target="#updateModal" title="редактировать" ></i></td>';
 echo '<td><i class="fa fa-trash-o remove" data-toggle="modal"
 data-target="#removeModal" title="Удалить"></i></td>';
 echo '</tr>';
 }
 
 
 	echo '</table>';



?>