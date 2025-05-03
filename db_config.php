<?php
$host = "localhost";
$dbname = "tasks";
$username= "root";
$password = "root";
$port = 3306;




$conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port",$username,$password);





?>