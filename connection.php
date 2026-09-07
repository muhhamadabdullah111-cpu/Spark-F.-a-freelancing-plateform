
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "sparkf";

$connection = mysqli_connect($server, $user, $password, $db);
if ($connection) 
     echo"" ;

else {
    echo "Connection failed: " . mysqli_connect_error(); // More informative error message
}
