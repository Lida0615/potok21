<?php
$to = 'igsinter.net06@gmail.com';
$tema = '21 potok';
$mess = 'имя:' . $_POST['fio'];
$mess .= 'тел:' .  $_POST['tel'];
$headers = "MIME-Version: 1.0";
$headers .= "Content-type: text/html; charset=utf-8";


mail($to, $tema, $mess, $headers)


?>