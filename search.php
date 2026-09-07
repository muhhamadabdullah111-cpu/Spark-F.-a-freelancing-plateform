<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    
    $search = $_POST['search'] ;  // Search query

       

    // Validate the selected category and prepare the redirection URL
    if ($search == 'webdeveloper'||$search == 'webdeveloper'||$search == 'web'||$search == 'developer'||$search == 'webdev'||$search == 'webdesighn') {
        // Redirect to web developer page
        header("Location: webdeveloper.php");
        exit();
    } elseif ($search == 'graphicdesigner'||$search == 'graphic'||$search == 'designer'||$search == 'designer'||$search == 'logo') {
        // Redirect to graphic designer page
        header("Location: graphicdesigner.php");
        exit();
    } elseif ($search == 'contentwriter'||$search == 'content'||$search == 'writer'||$search == 'blog'||$search == 'article'||$search == 'poems'||$search == 'Stroies'||$search == 'blogs'||$search == 'stories') {
        // Redirect to content writer page
        header("Location: contentwritter.php");
        exit();
    }
    $connection->close();
}
?>