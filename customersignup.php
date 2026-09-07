<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid gray;
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .head{
            margin-top: 1px;
            margin-bottom: -1px;
            padding-left: 40px;
            padding-right: 40px;
            width: 362px;
            margin-left: 394.5px;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
            font-family: 'Times New Roman', Times, serif;
            align-items: center;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            background-color: black;
            color: white;
          
        }
        @media (max-width: 768px) {
  .head {
    margin-left: 5px;
  }
}
     h1{
            border: 1px black;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        label .required {
            color:  red;
            margin-left: -2px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid gray;
            border-radius: 5px;
        }
        button{
        padding: 7px 50px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: darkgreen;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 65px;
            align-items: center;
       }
       button:hover{
        background-color: lightgreen;
        color: black;
       }
       
      
    </style>
</head>
<body>
    <div id="customer-registration">
        <h1 style="font-family: blackadder ITC;">.SparkF </h1>
        <h1 class="head">Customer Registration</h1>
        <form action="#" method="POST">
           
            <label for="full-name">Full Name:<span class="required">*</span></label>
            <input type="text" id="full-name" name="full_name" maxlength="15" required>

            <label for="email">Email:<span class="required">*</span></label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:<span class="required">*</span></label>
            <input type="password" id="password" name="password" minlength="5" maxlength="15" required>
            <label for="phone">Phone<span class="required">*</span></label>
            <input type="tel" id="phone" name="phone" maxlength="11" placeholder="03XXXXXXXXX" required>
           

            <button type="submit" name="submit">Register as Customer</button>
        </form>
    </div>

</body>
</html>
<?php
// Include the database connection file
include 'connection.php';

// Check if the form is submitted
if(isset($_POST['submit']))
{
    
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    // Hash the password for security
    //$hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare the SQL query to insert data into the 'customers' table
    $sql = "INSERT INTO `customer` (full_name, email, password, phone) VALUES ('$full_name','$email', '$password','$phone')";
     $data=mysqli_query($connection,$sql);
   

    // Execute the query
    if ($data) {
        header("Location: signin.php"); // Redirect to a dashboard or home page
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Error:" . $connection->error . "</p> ";
    }

    // Close the statement and connection
    $connection->close();
}
?>
