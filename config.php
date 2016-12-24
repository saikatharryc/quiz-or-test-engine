<?php
/*
 * Site : www.saikat.cf
 * Author :saikat chakrabortty
 * 
 */
 
define('BASE_PATH','http://localhost/lol/nquiz/new_quiz/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'quiz');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>