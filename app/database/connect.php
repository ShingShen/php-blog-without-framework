<!-- To Connect Database -->

<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog'; // the name do be same as database

//Create connection
$conn = new MySQLi($host, $user, $pass, $db_name);

//Check connection
if ($conn->connect_error){
    die('Database connection error: ' . $conn->connect_error);
} /* else {
    echo "Database connection is successful!";
} 
*/

/*
create the database called blog in phpmyadmin,
and table called users in the database.

The table has to contain following contents:

Name       Type        Length/Valuses   Default             Index
id         INT         11               None                PRIMARY A_I YES
admin      TINYINT                      None                ---
username   VARCHAR     255              None                ---
email      VARCHAR     255              None                UNIQUE
password   VARCHAR     255              None                ---
create_at  TIMESTAMP                    CURRENT_TIMESTAMP   ---

*/