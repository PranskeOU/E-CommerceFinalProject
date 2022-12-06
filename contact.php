<?php require_once("header.php"); ?>
  <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: white;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition-duration: 0.4s;
  margin: 4px 2px;
  text-align: center;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="custname">Name (First and Last name)</label>
    <input type="text" id="custname" name="custname" placeholder="Complete name..">
    
     <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">
    
    <label for="address">Address</label>
    <input type="text" id="Address" name="address" placeholder="Your address..">

  
    <label for="phonenumber">Phone number</label>
    <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number..">

    <input class="teal" type="submit" value="Submit">
  </form>
</div>

</body>
</html>
