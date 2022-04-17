<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1309';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn ) {
    die('Could not connect: ' . mysql_error());
}

echo 'Connected successfully';

$sql = 'CREATE Database test_db';
$rename = mysql_query( $sql, $conn );

if(! $rename ) {
    die('Could not create database: ' . mysql_error());
}

echo "Database test_db created successfully\n";
mysql_close($conn);
