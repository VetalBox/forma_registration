<?php

mb_internal_encoding("UTF-8");
$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = 'root';
$db_database    = 'ajform';

$link=mysqli_connect($db_host,$db_user,$db_pass, $db_database);

  // Ругаемся, если соединение установить не удалось
 if (!$link) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
} else {
mysqli_set_charset($link, "utf8");
}
   
	
  


?>
