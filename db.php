<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $server='localhost';
    $name='root';
    $password='';
    $database='jobs';

    $conn = mysqli_connect( "$server","$name","$password","$database");
    // if (mysqli_connect_errno()){
    //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
    // }
?>