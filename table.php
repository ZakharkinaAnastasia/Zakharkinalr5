<?php
include "dataBase.php";
// Выводим результат из БД
$sql = mysqli_query($conn, 'SELECT * FROM `Термины`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td>' .$result['Термин'].'</td>'.'<td>'. $result['Определение'].'</td>'.'</tr>';
  }
?>
