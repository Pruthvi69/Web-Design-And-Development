<?php
$dbhost = 'localhost:3036';
$dbuser = 'PHP_1';
$dbpass = '1309';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

mysql_select_db( 'test_db' );
mysql_close($conn);
