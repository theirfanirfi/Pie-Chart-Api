<?php

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'graph';

$link = mysql_connect($db_server, $db_user, $db_pass);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db($db_database,$link);


?>
