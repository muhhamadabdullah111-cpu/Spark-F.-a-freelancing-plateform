

<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="sellersignup.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
    <style>
       
    </style>
</head>
<body>
    <div id="seller-registration">
        <h1 style="font-family: blackadder ITC;">.SparkF </h1>
        <h1 class="head">Seller Registration</h1>
        <form class="main-form" action="#" method="post" enctype="multipart/form-data">
    <div class="file-upload-container">
      
    </div>
 
            <label for="full-name">Full Name: <span class="required">*</span></label>
            <input type="text"   pattern="[a-z]*" title="Letters only" id="full-name" name="full_name" required>

            <label for="email">Email: <span class="required">*</span></label>
            <input type="email" id="email" name="email"  required>

            <label for="password">Password: <span class="required">*</span></label>
            <input type="password" id="password" minlength="5" maxlength="8" name="password" required>

            <label for="password">Phone: <span class="required">*</span></label>
            <input type="tel" id="phone" name="phone" maxlength="11" placeholder="03xxxxxxxxx" pattern="^[0-9]{11}$" required>

            <label for="service">Skills: <span class="required">*</span></label>
            <select id="service" name="skills" required>
                <option value="">Select a Service...</option>
                <option value="web_developer">Web Developer</option>
                <option value="graphic_designer">Graphic Designer</option>
                <option value="content_writer">Content Writer</option>
            </select>

            <label for="level">Level: <span class="required">*</span></label>
            <select id="level" name="level" required>
                <option value="">Select a Level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advance">Advance</option>
            </select>

            <label for="price">Price (PKR): <span class="required">*</span></label>
            <input type="number" id="price" name="price" min="1" required>

            <label for="description">Description : <span class="required">*</span></label>
            <input type="text" id="description" name="description" minlength="20" maxlength="150" placeholder="Write about your skill. It will show in your profile" required>

            <label for="portfolio">Portfolio Link:</label>
            <input type="url" id="portfolio" name="portfolio" >
            <label for="fileToUpload">Upload Profile Picture:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>
            <label for="fileToUpload1">Upload your work/achievement:</label>
            <input type="file" name="fileToUpload1" id="fileToUpload1">
         <?php
                // Display error or success messages related to file upload here
                if (isset($upload_success)) {
                    echo "<p class='success-message' >$upload_success</p>";
                }
            ?>
           
            <button type="submit" name="submit">Register as Seller</button>
        </form>
       
    </div>
</body>
</html>  
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    // Check if both files are set and uploaded
    if (isset($_FILES['fileToUpload']) && isset($_FILES['fileToUpload1'])) {
        $target_dir = "uploads/";

        // Handle the first file
        $target_file1 = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk1 = 1;
        $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));

        // Handle the second file
        $target_file2 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
        $uploadOk2 = 1;
        $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

        // Validate file types
        $valid_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType1, $valid_types)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed for the first file.";
            $uploadOk1 = 0;
        }
        if (!in_array($imageFileType2, $valid_types)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed for the second file.";
            $uploadOk2 = 0;
        }

        if ($uploadOk1 && $uploadOk2) {
            // Move uploaded files to the target directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file1) &&
                move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file2)) {
                // Prepare database insert query
                $fileToUpload = basename($_FILES["fileToUpload"]["name"]);
                $fileToUpload1 = basename($_FILES["fileToUpload1"]["name"]);
                
                $sql = "INSERT INTO `seller` (full_name, email, password, phone, skills, level, price, description, portfolio, fileToUpload, fileToUpload1) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $statement = $connection->prepare($sql);
                if ($statement) {
                    $statement->bind_param('sssssssssss', 
                        $_POST['full_name'], 
                        $_POST['email'], 
                        $_POST['password'], 
                        $_POST['phone'], 
                        $_POST['skills'], 
                        $_POST['level'], 
                        $_POST['price'], 
                        $_POST['description'], 
                        $_POST['portfolio'], 
                        $fileToUpload, 
                        $fileToUpload1);
                    if ($statement->execute()) {
                        header("Location: signin.php"); // Redirect to a dashboard or home page
        exit();
                    } else {
                        echo "Error inserting into database: " . $statement->error;
                    }
                } else {
                    echo "Error preparing SQL: " . $connection->error;
                }
            } else {
                echo "Sorry, there was an error uploading your files.";
            }
        } else {
            echo "Your files were not uploaded due to invalid formats.";
        }
    } else {
        echo "Please upload both files.";
    }

    // Close the database connection
    $connection->close();
}
?>
