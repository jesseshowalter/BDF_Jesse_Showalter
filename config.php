<?php

//Connection to the mysql Server by - tutbuzz.com

define('DB_SERVER', 'localhost'); // mysql hostname, usually localhost
define('DB_USERNAME', 'root'); // mysql username
define('DB_PASSWORD', 'root'); // mysql password
define('DB_DATABASE', 'bdf_1310'); // mysql database name


$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>