<?php 
    $username = "monaheist";
    $password = "Monabestm00sic!";
    $host = "170.187.197.155";
    $port = 3306;
    $database = "dbMonaHeist";
    
    $mysqli = new mysqli($host, $username, $password, $database, $port) or die (mysqli_error($mysqli)); 
?> 