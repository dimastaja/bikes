<?php
error_reporting(E_ALL^E_NOTICE);
$db = new mysqli("localhost", "bikes", "bikesusr", "bikes");
if (mysqli_connect_errno())
{
    die("Подключение к серверу MySQL невозможно. Код ошибки: %s\n". mysqli_connect_error());
}

?>
