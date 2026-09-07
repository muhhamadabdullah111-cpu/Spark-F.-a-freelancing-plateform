<?php    

include 'connection.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "";
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // If logged in, don't ask for credentials again
        header('Location: dashboard.php');
        exit;
    }
    
    // SQL query to check email and password in both tables
    $sql = "SELECT email, password, 'seller' AS user_type FROM seller WHERE email = '$email' AND password = '$password'
        UNION
        SELECT email, password, 'customer' AS user_type FROM customer WHERE email = '$email' AND password = '$password'
    ";
    
    $result = $connection->query($sql);

    if ($result && $result->num_rows > 0) {
        
        header("Location: project.php"); // Redirect to a dashboard or home page
        exit();
    } else {
        $error = "Invalid email/password.";
    }
}
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    
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
            border-radius: 5px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        .head{
            margin-top: 1px;
            margin-left: 50px;
            font-family: 'Times New Roman', Times, serif;
            align-items: center;
            justify-content: center;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid gray;
            border-radius: 5px;
        }
       button{
        padding: 7px 80px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: darkgreen;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 85px;
            align-items: center;
       }
       button:hover{
        background-color: lightgreen;
        color: black;
       }
    </style>
</head>
<body>
    <h1 style="font-family: blackadder ITC;">.SparkF </h1>
    <form action="#" method="POST">
        <h1 class="head">Log in to .sparkF</h1>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password"  maxlength="8" name="password" required>

        <button type="submit" name="submit">Log In </button>
    </form>

    <p>Don't have an account? <a href="registeroption.php">Sign Up</a></p>
    </body>
</html>
