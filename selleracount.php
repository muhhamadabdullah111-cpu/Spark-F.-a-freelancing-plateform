<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="selleracount.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <a class="icon" href="project.php"><h1>.SparkF</h1></a>
    <div class="container">
       
    <div class="section-heading">Seller Profile</div>

       
        <div class="profile-container">
            <?php 
            session_start(); 
            include 'connection.php';
            
             
            // Get the seller's email from session
            $seller_email = $_SESSION['seller_email'];
             
            $result = $connection->query("SELECT * FROM seller WHERE email='$seller_email'");
            
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='profile'>
                 <p class='name'><strong>Welcome</strong> {$row['full_name']}</p>
                  <p style='color:green;'><strong>Status:</strong> {$row['status']}</p>
                  <p class='image'><strong></strong><img src='uploads/" . htmlspecialchars($row['fileToUpload']) . "'  ></p>
                    
                    <p><strong>✉️</strong> {$row['email']}</p>
                    <p><strong>📝</strong> {$row['description']}</p>
                    <p><strong>💡 </strong> {$row['skills']}</p>
                    <p><strong>🎯</strong> {$row['level']}</p>
                    <p><strong>$</strong> {$row['price']}</p>
                    <p><strong>Portfolio:</strong> <a href='{$row['portfolio']}' target='_blank'>View Portfolio</a></p>
               <p><strong>Work:</strong></p>
                   <p class='image1'><img src='uploads/" . htmlspecialchars($row['fileToUpload1']) . "'  ></p>
                   <a class='hire-btn' href='updateseller.php'>Update</a>";
            }
          
            ?>
            
        </div>
        
    </div>
    <div class="steps-container">
    <h1>Steps to Become a Top Seller on SparkF</h1>

    <div class="step">
        <h2>1. Get Noticed</h2>
        <p>Tap into the power of social media by sharing your Gig, and get expert help to grow your impact.</p>
    </div>

    <div class="step">
        <h2>2. Get More Skills & Exposure</h2>
        <p>Hone your skills and expand your knowledge with online courses. You’ll be able to offer more services and gain more exposure with every course completed.</p>
    </div>

    <div class="step">
        <h2>3. Become a Successful Seller!</h2>
        <p>Watch this free online course to learn how to create an outstanding service experience for your buyer and grow your career as an online freelancer.</p>
    </div>
     



</div>

             </body>
            </html>
            
 