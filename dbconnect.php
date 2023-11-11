<?php

$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Error establishing the connection to database: ".mysqli_connect_error());
}
else{
    $database_query="CREATE DATABASE IF NOT EXISTS todoApp";
    if(mysqli_query($conn,$database_query)){
        mysqli_select_db($conn,"todoApp");
        $table_query="CREATE TABLE IF NOT EXISTS tasks(
            id int primary key not null AUTO_INCREMENT unique,
            fname VARCHAR(30) not null,
            sname VARCHAR(30) not null,
            email VARCHAR(30) not null,
            idno VARCHAR(10) not null,
            passd VARCHAR(30) not null
        );";
    
    }
}


?>