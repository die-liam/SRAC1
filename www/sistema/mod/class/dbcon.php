<?php
ob_start();
$link = mysql_connect('192.168.0.13', 'root', 'nadanada');
mysql_select_db('srac',$link);
ob_end_flush();
?>