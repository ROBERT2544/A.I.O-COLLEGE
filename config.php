<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'Database Engine');
define('DB_USERNAME', 'DESKTOP-5GRC2M4\DNASH ANALYST');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration_form_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>