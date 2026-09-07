<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="sellersignup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Seller</title>
    <style>
       .head{
        padding-left: 100px;
        width: 332px;
       }
       button{
         
         width: 292px;
       }
    </style>
</head>
<body>
    
</body>
</html>  
<?php
 session_start(); 
 include 'connection.php';
 $seller_email = $_SESSION['seller_email'];
 $result=$connection->query("SELECT * FROM seller where email='$seller_email'");
while($rows=$result->fetch_assoc()){ 
    echo"<div id='seller-registration'>
    <h1>.SparkF</h1> 
    <h1 class='head'>Update Your Profile</h1>
    <form class='main-form' action='#' method='post' enctype='multipart/form-data'>
        <div class='file-upload-container'>
        </div>

        <label for='full-name'>Full Name: <span class='required'></span></label>
        <input type='text' id='full-name' name='full_name' value='{$rows['full_name']}'>

         <label for='email'>Email: <span class='required'></span></label>
        <input type='email' id='email' name='email' value='{$rows['email']}'>

         <label for='password'>Password: <span class='required'></span></label>
        <input type='password' id='password' name='password' value='{$rows['password']}'>

         <label for='phone'>Ph#: <span class='required'></span></label>
        <input type='number' id='phone' name='phone' value='{$rows['phone']}'>
        <label for='service'>Skills: <span class='required'></span></label>
        <select id='service' name='skills'>
            <option >{$rows['skills']}</option>
            <option value='web_developer'>Web Developer</option>
            <option value='graphic_designer'>Graphic Designer</option>
            <option value='content_writer'>Content Writer</option>
        </select>

        <label for='level'>Level: <span class='required'></span></label>
        <select id='level' name='level'>
            <option >{$rows['level']}</option>
            <option value='beginner'>Beginner</option>
            <option value='intermediate'>Intermediate</option>
            <option value='advance'>Advance</option>
        </select>

        <label for='price'>Price (PKR): <span class='required'></span></label>
        <input type='number' id='price' name='price' min='1' value='{$rows['price']}'>

        <label for='description'>Description : <span class='required'></span></label>
        <input type='text' id='description' name='description' maxlength='150' value='{$rows['description']}'>

        <label for='portfolio'>Portfolio Link:</label>
        <input type='url' id='portfolio' name='portfolio' value='{$rows['portfolio']}'>

        <label for='level'>Status: <span class='required'></span></label>
        <select id='status' name='status'>
            <option value=''>{$rows['status']}</option>
            <option value='Online'>Online</option>
            <option value='Offline'>Offline</option>
        </select>

        <button type='submit' name='submit'>update</button>
    </form>
</div>
";}
if (isset($_POST['submit'])) {
    // If the form is submitted, update the profile information
    
    $full_name=$_POST['full_name']; 
             
           
           $skills= $_POST['skills'];
            $level=$_POST['level'];
            $price=$_POST['price'];
            $description=$_POST['description'];
            $portfolio=$_POST['portfolio'];
            $status=$_POST['status'];
    
    // Update query
    $update_query = "UPDATE seller SET full_name='$full_name',  skills='$skills', level='$level', price='$price',description='$description',portfolio='$portfolio',status='$status' WHERE email='$seller_email'";
    if ($connection->query($update_query) === TRUE) {
        header("Location: updatesuccess.html"); // Redirect to a dashboard or home page
        exit();
    } else {
        echo "<p>Error updating profile: " . $connection->error . "</p>";
    }
}
?>
