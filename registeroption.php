<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: block;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: whitesmoke;
        }
        h1 {
            margin-bottom: ;
           
        }
        .button-container {
            width: 30%;
            margin-left: 400px;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
           align-content: center;
            padding: 50px;
            border: 1px solid gray;
        }
        .b2 {
            padding: 25px 35px;
            font-size: 30px;
            font-weight: bold;
            color: white;
            background-color: gray;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        h1{
            font-family: 'Times New Roman', Times, serif;
        }
        .button-container button:hover {
            background-color: #0056b3;
        }
        .b1{
            padding: 25px 45px;
             padding-left: 1px;
            width: 80%;
            font-size: 30px;
            font-weight: bold;
            color: white;
            background-color: gray;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        @media (max-width: 500px) {
  .b1  {
     font-size: 20px;
    padding: 15px 25px;
  }
  @media (max-width: 500px) {
  .b2  {
     font-size: 20px;
    padding: 15px 25px;
     
  }
  @media (max-width: 500px) {
  .button-container  {
     gap: 10px;
     margin-left: 80px;
  }
    </style>
</head>
<body>
<h1 style="font-family: blackadder ITC;">.SparkF </h1>
    <div class="button-container">
        <button  class="b1" onclick="location.href='sellersignup.php'">I am a Seller</button><br>
        <button class="b2" onclick="location.href='customersignup.php'">I am a Customer</button>
    </div>
</body>
</html>
