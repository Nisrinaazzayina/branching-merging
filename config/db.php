<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemwebdb';
$PORT = '3307';

$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME, $PORT);

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

