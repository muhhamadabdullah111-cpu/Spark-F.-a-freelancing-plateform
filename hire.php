<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire Form</title>
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
            margin-left: 395px;
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
            margin-top: 15px;
        padding: 8px 60px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: darkgreen;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-left: 95px;
            align-items: center;
            transition: transform 0.3s ease;
       }
       button:hover{
        transform:scale(1.1);
        background-color: lightgreen;
        color: black;
       }
    </style>
</head>
<body>

<div class="form-container">
<h1 style="font-family: blackadder ITC;">.SparkF </h1>
    <h1 class="head">Order </h1>
    <form id="hireForm">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" pattern="[a-z A-Z]" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="category">Select Category:</label>
        <select id="category" name="category" required>
            <option value="Web Development">Web Development</option>
            <option value="App Development">Graphic Designer</option>
            <option value="Graphic Design">Content writter</option>
         
        </select>

        <label for="message">Requirements:</label>
        <input type="text" id="message" name="message" rows="4" placeholder="Provide more details about your project">

        <!-- Hire button that will open Gmail compose with pre-filled details -->
        <button type="button" onclick="openGmail()">Order Now</button>
    </form>
</div>

<script>
    function openGmail() {
        // Get form data
        var name = encodeURIComponent(document.getElementById("name").value);
        var email = encodeURIComponent(document.getElementById("email").value);
        var category = encodeURIComponent(document.getElementById("category").value);
        var message = encodeURIComponent(document.getElementById("message").value);

        // Recipient's email address (change this to the seller's email)
        var sellerEmail = "seller@example.com";

        // Subject of the email
        var subject = "New Order: " + category;

        // Body of the email
        var body = "Name: \t" + name + "\t\nEmail: " + email + "\nCategory: " + category + "\n\nMessage:\n" + message;

        // Create mail to link with pre-filled fields
        var gmailLink = "https://mail.google.com/mail/?view=cm&fs=1&to=" + sellerEmail + "&su=" + subject + "&body=" + body;
        // Open the email client (Gmail or default email client)
        window.location.href = gmailLink;
    }
</script>

</body>
</html>
