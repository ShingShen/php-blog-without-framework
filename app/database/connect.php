<!-- To Connect Database -->

<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog'; //the name do be same as database

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

id: Type- INT Length/Valuses- 11 Index- PRIMARY A_I YES
admin: Type- TINYINT
username: Type- VARCHAR Length/Valuses- 255
email: Type- VARCHAR Length/Valuses- 255 Index- UNIQUE
password: Type- VARCHAR Length/Valuses- 255
create_at: Type- TIMESTAMP Default- CURRENT_TIMESTAMP

*/