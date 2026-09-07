<?php
include 'connection.php';
if (isset($_POST['submit'])) {
        $email = $_POST['email'];
       
  $sql = "INSERT INTO `subcription` (email) VALUES ('$email')";
  $data=mysqli_query($connection,$sql);
    if($data){
            header("Location: subcribesuccesss.html");
            exit();
        }
        else {
            echo "<p>Error: " . $connection->error . "</p>";
            } 
      
 }
 $connection->close();
?>