<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="hirefreelance.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <h1 class="icon" style="font-family: blackadder ITC;">.SparkF </h1>
    <div class="container">
        <div class="section-heading">Graphic Designer</div>
        <p class="tagline">"ringing your ideas to life through creative and captivating designs."</p>
        <div class="profile-container">
            
            <?php 
            include 'connection.php';
            $result = $connection->query("SELECT * FROM seller WHERE skills='graphic_designer'");
            while ($row = $result->fetch_assoc()) {
               
                echo "
                <div class='profile'>
                  <p class='image'><strong></strong><img src='uploads/" . htmlspecialchars($row['fileToUpload']) . "'  ></p>
                    <p class='name'><strong></strong> {$row['full_name']}</p>
                    <p><strong>✉️</strong> {$row['email']}</p>
                    <p><strong>📝</strong> {$row['description']}</p>
                    <p><strong>💡 </strong> {$row['skills']}</p>
                    <p><strong>🎯</strong> {$row['level']}</p>
                    <p><strong>Rs.</strong> {$row['price']}</p>
                    <p><strong>Portfolio:</strong> <a href='{$row['portfolio']}' target='_blank'>View Portfolio</a></p>
               <p><strong>Work:</strong></p>
                   <p class='image1'><img src='uploads/" . htmlspecialchars($row['fileToUpload1']) . "'  ></p>
                   <a class='hire-btn' href='hire.php'>Hire</a>
                   <button class='contact'>Contact me</button></div>";
            }
  

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect the data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
        $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
        
        // Execute the query
        if ($connection->query($sql) === TRUE) {
            // Success message
            echo "<script>alert('Feedback submitted successfully!');</script>";
            exit();
        } else {
            echo "<script>alert('Error:  ');</script>";

        }
    }  


// Close the database connection
$connection->close();
?>
       </div>  
        </div>   
         <div class="feedback-container"> 
            
    <h1>Feedback Form</h1>

    <!-- Feedback form -->
    <form action="" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <input id="text" name="message" maxlength="50" required></>

        <button type="submit" name="submit">Submit Feedback</button>
    </form>

 
    
        
    </div>
             </body>
            </html>
            