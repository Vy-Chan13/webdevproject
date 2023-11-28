<?php
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'dbschedule');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
    or die('Could not connect to MySQL: ' . mysqli_connect_error());
?>
