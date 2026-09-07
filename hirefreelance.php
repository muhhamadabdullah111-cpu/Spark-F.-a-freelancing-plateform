<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="hirefreelance.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <div class="container">
       
        <div class="section-heading">Web Developers</div>
        <p class="tagline">"Bringing your ideas to life, one line of code at a time."</p>
        <div class="profile-container">
            <?php 
            include 'connection.php';
            $result = $connection->query("SELECT * FROM seller WHERE skills='web_developer'");
            while ($row = $result->fetch_assoc()) {
                echo "
                <div class='profile'>
                  <p class='image'><strong></strong><img src='uploads/" . htmlspecialchars($row['fileToUpload']) . "'  ></p>
                    <p class='name'><strong></strong> {$row['full_name']}</p>
                    <p><strong>✉️</strong> {$row['email']}</p>
                    <p><strong>📝</strong> {$row['description']}</p>
                    <p><strong>💡 </strong> {$row['skills']}</p>
                    <p><strong>🎯</strong> {$row['level']}</p>
                    <p><strong>$</strong> {$row['price']}</p>
                    <p><strong>Portfolio:</strong> <a href='{$row['portfolio']}' target='_blank'>View Portfolio</a></p>
               <p><strong>Work:</strong></p>
                   <p class='image1'><img src='uploads/" . htmlspecialchars($row['fileToUpload1']) . "'  ></p>
                   <button class='hire-btn'>Hire</button>
                   <button class='contact'>Contact me</button></div>";
            }
            ?>
        </div>
    </div>
             </body>
            </html>
            